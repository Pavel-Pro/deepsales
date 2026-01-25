<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <link rel="manifest" href="/site.webmanifest" />
    <?php wp_head(); ?>
    <title>Deepsales</title>
</head>
<body class="body">
    <header class="header">
        <div class="wrapper">
            <div class="header-wrap">
                <?php echo get_custom_logo(); ?>
                <nav class="nav">
                    <ul class="menu">
                        <?php if ( $menu_items = wp_get_nav_menu_items('Main Menu ua') ) {
                            foreach ( $menu_items as $key => $menu_item ) { ?>
                                <li class="menu__item">
                                    <a href="<?php echo $menu_item->url; ?>" class="menu__link"
                                    <?php echo $menu_item->xfn ? 'rel=" ' . $menu_item->xfn . '"' : ''; ?>>
                                        <?php echo $menu_item->title; ?>
                                    </a>
                                </li>
                            <?php }
                        } ?>
                    </ul>
                    <burger class="burger">
                        <span class="burger__item"></span>
                        <span class="burger__item"></span>
                        <span class="burger__item"></span>
                    </burger>
                </nav>
                <div class="header-lan">
                    <?php pll_the_languages(array('
                        "dropdown" => "0",
                        "show_names" => "1",
                        "show_flags" => "0",
                        "hide_if_no_translation" => "1"
                    ')); ?>
                </div>
                <div class="phone-wrap">
                    <?= file_get_contents(get_attached_file(tof('social_icon'))); ?>
                        <path d="M2.18182 0H6.54545L8.72727 5.45455L6 7.09091C7.16832 9.45985 9.0856 11.3771 11.4545 12.5455L13.0909 9.81818L18.5455 12V16.3636C18.5455 16.9423 18.3156 17.4972 17.9064 17.9064C17.4972 18.3156 16.9423 18.5455 16.3636 18.5455C12.1083 18.2869 8.09471 16.4798 5.08018 13.4653C2.06564 10.4507 0.258599 6.43717 0 2.18182C0 1.60316 0.229869 1.04821 0.63904 0.63904C1.04821 0.229869 1.60316 0 2.18182 0Z" fill="white"/>
                    </svg>
                    <a href="tel:<?= tof('phone_link'); ?>" class="header-phone__link"><?= tof('phone_text'); ?></a>
                </div>
                <button class="header__button"><?= tof('header_btn'); ?></button>
            </div>
        </div>
    </header>
    <main class="main">