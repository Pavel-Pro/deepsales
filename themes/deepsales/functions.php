<?php 

add_theme_support( 'title-tag' );

add_theme_support( 'custom-logo' );

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

    if ( is_page(['privacy-policy', 'public-offer']) ) {
        wp_enqueue_style('policy-page-style', get_template_directory_uri() . '/assets/css/policy.css', array(), filemtime(get_theme_file_path('/assets/css/policy.css')));
    }

    wp_enqueue_script('jquery', array(), false, ['in_footer' => true]);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), false, ['in_footer' => true]);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), false, ['in_footer' => true]);
}
