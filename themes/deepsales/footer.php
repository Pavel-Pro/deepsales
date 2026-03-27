        </main>
        <footer class="footer">
            <div class="wrapper">
                <div class="footer-top">
                    <?php pll_home_url(the_custom_logo()); ?>
                    <nav class="nav footer-nav">
                        <ul class="footer-menu">
                            <?php if ( $menu_items = wp_get_nav_menu_items('Main Menu ' . pll_current_language()) ) {
                                foreach ( (array) $menu_items as $key => $menu_item ) { ?>
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
                        <?= file_get_contents(get_attached_file(tof('social_icon'))); ?>
                        <a href="tel:<?= tof('phone_link'); ?>" class="header-phone__link"><?= tof('phone_text'); ?></a>
                    </div>
                    <button class="header__button footer__button callform"><?= pll__('footer_btn'); ?></button>
                </div>
                <div class="footer__bottom">
                    <span class="copy"><?= str_replace('####', date('Y'), pll__('copy_text')) ?></span>
                    <nav class="menu_policy">
                        <?php if ($policyItems = wp_get_nav_menu_items('Policy ' . pll_current_language())) {
                            $policyCount = count($policyItems);
                            foreach ($policyItems as $key => $item) { ?>
                                <a href="<?= $item->url ?>" class="rules__item"><?= $item->title ?></a>
                            <?php }
                        } ?>
                    </nav>
                </div>
            </div>
            <?php if( !array_key_exists('cookieAgree', $_COOKIE) ) { ?>
                <div class="cookie">
                    <div class="wrapper">
                        <div class="cookie__items">
                            <div class="cookie__item">
                                <h5 class="title title__cookie">
                                    <?= pll__('title_cookie'); ?>
                                </h5>
                                <p class="cookie__text"><?= pll__('text_cookie'); ?></p>
                            </div>
                            <div class="cookie__item">
                                <button class="button button__cookie">
                                    <?= pll__('agree_btn'); ?>
                                </button>
                                <button class="button button__cookie">
                                    <?= pll__('error_btn'); ?>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="callback-form">
                <div class="form__background"></div>
                    <?php echo do_shortcode('[contact-form-7 id="631e4ab" title="Callback"]'); ?>
            </div>
            <?php if( array_key_exists('chosenRu', $_COOKIE) ) { ?>
                <div class="test">
                    test
                </div>
            <?php } ?>
            <?php if( pll_current_language() == 'ru' ) { ?>
                <div class="change-lang">
                    <div class="form__background"></div>
                    <div class="change-lang__items">
                        <h5 class="title title__change-lang"><?= tof('pop-up_lang_title'); ?></h5>
                        <div class="button-wrapper">
                            <button class="button switch-lang__btn switch-lang__btn_no"><?= tof('pop-up_lang_no'); ?></button>
                            <a href="" class="button switch-lang__btn switch-lang__btn_yes"><?= tof('pop-up_lang_yes'); ?></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if(is_page([145, 406])); { ?>
                <div class="order-form">
                    <div class="form__background"></div>
                    <?php echo do_shortcode('[contact-form-7 id="4bce052" title="Packages form"]'); ?>
                </div>
            <?php }?>
            <button class="totop">
                <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.883789 10.4949L9.61106 1.76758L18.3383 10.4949" stroke="white" stroke-width="2.5"/>
                </svg>
            </button>
        </footer>    
    <?php wp_footer(); ?>
</body>
</html>