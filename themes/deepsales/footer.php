        </main>
        <footer class="footer">
            <div class="wrapper">
                <div class="footer-top">
                    <?php echo get_custom_logo(); ?>
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
                        <?= file_get_contents(get_attached_file(tof('social_icon'))); ?>
                        <a href="tel:<?= tof('phone_link'); ?>" class="header-phone__link"><?= tof('phone_text'); ?></a>
                    </div>
                    <button class="header__button footer__button"><?= tof('footer_btn'); ?></button>
                </div>
                <div class="footer__bottom">
                    <span class="copy"><?= str_replace('####', date('Y'), tof('copy')) ?></span>
                    <a href="/public-offer" class="policy__link"><?= tof('offer_text'); ?></a>
                    <a href="/privacy-policy" class="policy__link"><?= tof('policy_text')?></a>
                </div>
            </div>
            <?php if ( !array_key_exists('cookieAgree', $_COOKIE) ) { ?>
                <div class="cookie">
                    <div class="wrapper">
                        <div class="cookie__items">
                            <div class="cookie__item">
                                <h5 class="title title__cookie">
                                    <?= tof('cookie_title'); ?>
                                </h5>
                                <p class="cookie__text"><?= tof('cookie_text'); ?></p>
                            </div>
                            <div class="cookie__item">
                                <button class="button button__cookie">
                                    <?= tof('cookie_btn1'); ?>
                                </button>
                                <button class="button button__cookie">
                                    <?= tof('cookie_btn2') ?>
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
            <button class="totop">
                <svg width="20" height="12" viewBox="0 0 20 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.883789 10.4949L9.61106 1.76758L18.3383 10.4949" stroke="white" stroke-width="2.5"/>
                </svg>
            </button>
        </footer>    
    <?php wp_footer(); ?>
</body>
</html>