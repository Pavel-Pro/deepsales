<?php 

add_theme_support( 'title-tag' );

add_theme_support( 'custom-logo' );

function add_custom_logo_classes( $html ) {
    // Удаляем существующие классы, если нужно, или добавляем новые
    $html = str_replace( 'class="custom-logo-link"', 'class="logo-link"', $html );
    $html = str_replace( 'class="custom-logo header-logo"', 'class="header-logo"', $html );
    return $html;
}
add_filter( 'get_custom_logo', 'add_custom_logo_classes' );


add_theme_support('menus');

add_theme_support( 'html5', array( 'search-form' ) );

add_theme_support( 'post-thumbnails' );

add_filter('wpcf7_autop_or_not', '__return_false');


function remove_image_sizes( $sizes, $metadata ) {
    return [];
}

add_filter( 'intermediate_image_sizes_advanced', 'remove_image_sizes', 10, 2 );


function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( $scripts ) {

	if ( empty( $scripts->registered['jquery'] ) || is_admin() ) {
		return;
	}

	$deps = & $scripts->registered['jquery']->deps;

	$deps = array_diff( $deps, [ 'jquery-migrate' ] );
}

add_action('wp_enqueue_scripts', 'deepsales_scripts');

function deepsales_scripts() {
    wp_enqueue_style('reset', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_style('global-style', get_template_directory_uri() . '/assets/css/global.css', array(), filemtime(get_theme_file_path('/assets/css/global.css')));
    wp_enqueue_style('main-page-style', get_template_directory_uri() . '/assets/css/main-page.css', array(), filemtime(get_theme_file_path('/assets/css/main-page.css')));
    wp_enqueue_style('kurs-page-style', get_template_directory_uri() . '/assets/css/kurs-page.css', array(), filemtime(get_theme_file_path('/assets/css/kurs-page.css')));
    wp_enqueue_style('profile-page-style', get_template_directory_uri() . '/assets/css/profile-page.css', array(), filemtime(get_theme_file_path('/assets/css/profile-page.css')));

    if ( is_page([3, 408, 409, 22]) ) {
        wp_enqueue_style('policy-page-style', get_template_directory_uri() . '/assets/css/policy.css', array(), filemtime(get_theme_file_path('/assets/css/policy.css')));
    }

    wp_enqueue_script('jquery', array(), false, ['in_footer' => true]);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), false, ['in_footer' => true]);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, ['in_footer' => true]);
}


add_action('init', function() {
    add_rewrite_rule('^wayforpay/?$', 'index.php?wayforpay=1', 'top');
});

add_filter('query_vars', function($vars) {
    $vars[] = 'wayforpay';
    return $vars;
});


add_action('wpcf7_before_send_mail', 'cf7_to_wayforpay_stable');
function cf7_to_wayforpay_stable($contact_form) {
    if ($contact_form->id() != 518) return;

    $submission = WPCF7_Submission::get_instance();
    if (!$submission) return;

    $posted_data = $submission->get_posted_data();

    // Чистим данные и считаем сумму БЕЗ ошибок во floatval
    $amount = isset($posted_data['amount']) ? round(floatval($posted_data['amount']), 2) : 0;
    
    $wfp_data = [
        'name'   => sanitize_text_field($posted_data['your-name'] ?? ''),
        'phone'  => sanitize_text_field($posted_data['tel'] ?? ''),
        'email'  => sanitize_email($posted_data['your-email'] ?? ''),
        'amount' => (string)$amount
    ];

    // Генерируем уникальный ключ для текущего пользователя (на основе IP)
    $user_key = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
    
    // Сохраняем в базу данных на 10 минут
    set_transient('wfp_order_' . $user_key, $wfp_data, 600);
}

// 3. Страница оплаты (Redirect)
add_action('template_redirect', function() {
    if (get_query_var('wayforpay')) {
        
        $user_key = md5($_SERVER['REMOTE_ADDR'] . $_SERVER['HTTP_USER_AGENT']);
        $data = get_transient('wfp_order_' . $user_key);

        if (!$data) {
            wp_die('Данные оплаты не найдены. Пожалуйста, вернитесь на форму и попробуйте еще раз.');
        }

        $merchantAccount = 'test_merch_n1';
        $merchantSecretKey = 'flk3409refn54t54t*FNJRET';
        $merchantDomainName = $_SERVER['HTTP_HOST'];
        
        $orderReference = 'ORDER_' . time();
        $orderDate = time();
        $currency = 'UAH';
        $amount = $data['amount'];

        $productName = 'Оплата услуги';
        $productCount = 1;
        $productPrice = $amount;

        $sign_data = [
            $merchantAccount, $merchantDomainName, $orderReference, 
            $orderDate, $amount, $currency, $productName, $productCount, $productPrice
        ];

        $signature = hash_hmac('md5', implode(';', $sign_data), $merchantSecretKey);

        $fields = [
            'merchantAccount'    => $merchantAccount,
            'merchantAuthType'   => 'SimpleSignature',
            'merchantDomainName' => $merchantDomainName,
            'orderReference'     => $orderReference,
            'orderDate'          => $orderDate,
            'amount'             => $amount,
            'currency'           => $currency,
            'productName[]'      => $productName,
            'productCount[]'     => $productCount,
            'productPrice[]'     => $productPrice,
            'merchantSignature'  => $signature,
            'clientFirstName'    => $data['name'],
            'clientEmail'        => $data['email'],
            'clientPhone'        => $data['phone'],
        ];

        echo '<html><head><meta charset="utf-8"></head><body>';
        echo '<form id="wf" method="POST" action="https://secure.wayforpay.com/pay">';
        foreach ($fields as $k => $v) {
            echo '<input type="hidden" name="'.$k.'" value="'.htmlspecialchars($v, ENT_QUOTES).'">';
        }
        echo '</form><script>document.getElementById("wf").submit();</script></body></html>';
        exit;
    }
});


require_once __DIR__ . '/inc/carbon-fields/index.php';
require_once __DIR__ . '/inc/polylang/index.php';
