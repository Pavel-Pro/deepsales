    <div class="hero">
        <div class="wrapper">
            <div class="hero__items">
                <div class="hero-left">
                    <h1 class="title-hero"><?= $s['hero_title'] ?></h1>
                    <p class="text-hero"><?= $s['hero_text'] ?></p>
                    <button class="button-hero callform"><?= $s['hero_text_btn'] ?></button>
                </div>
                <div class="hero-right">
                    <picture>
                        <source srcset="<?= wp_get_attachment_image_url($s['hero_imag-mob']); ?>" media="(max-width: 768px)">
                        <source srcset="<?= wp_get_attachment_image_url($s['hero_imag-tab']); ?>" media="(max-width: 1024px)">
                        <img src="<?= wp_get_attachment_image_url($s['hero_image']); ?>" alt="Євгеній Попсуй" class="hero-img" fetchpriority="high">
                    </picture>
                    <div class="hero-elips hero-elips__big"></div>
                    <div class="hero-elips hero-elips__small"></div>
                </div>
            </div>
        </div>
    </div>