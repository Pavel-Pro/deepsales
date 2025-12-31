        <footer class="footer">
            <div class="wrapper">
                <div class="footer-top">
                    <a href="/" class="footer-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-logo.svg" alt="Logo Deepsales" class="header-logo">
                    </a>
                    <nav class="nav footer-nav">
                        <ul class="footer-menu">
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
                    </nav>
                    <div class="footer-phone-wrap">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.18182 0H6.54545L8.72727 5.45455L6 7.09091C7.16832 9.45985 9.0856 11.3771 11.4545 12.5455L13.0909 9.81818L18.5455 12V16.3636C18.5455 16.9423 18.3156 17.4972 17.9064 17.9064C17.4972 18.3156 16.9423 18.5455 16.3636 18.5455C12.1083 18.2869 8.09471 16.4798 5.08018 13.4653C2.06564 10.4507 0.258599 6.43717 0 2.18182C0 1.60316 0.229869 1.04821 0.63904 0.63904C1.04821 0.229869 1.60316 0 2.18182 0Z" fill="white"/>
                        </svg>
                        <a href="tel:380932855827" class="header-phone__link">+38 (093) 285-58-27</a>
                    </div>
                    <button class="header__button footer__button">Замовити дзвінок</button>
                </div>
                <div class="footer__bottom">
                    <span class="copy">Deepsales © 2025. Усі права захищені.</span>
                    <a href="/public-offer" class="policy__link">Публічна оферта</a>
                    <a href="/privacy-policy" class="policy__link">Політика конфіденційності</a>
                </div>
            </div>
        </footer>    
    </main>
    <?php wp_footer(); ?>
</body>
</html>