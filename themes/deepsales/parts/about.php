    <section class="about">
        <div class="wrapper">
            <div class="about__top">
                <h2 class="title title__about"><?= $s['about__title'] ?></h2>
                <p class="about__top__text"><?= $s['about__text'] ?></p>
            </div>
            <div class="about__items">
                <div class="about__item">
                    <h4 class="about__item_title"><?= $s['about_block_title1'] ?></h4>
                    <ul class="about-list">
                        <?php $approach = $s['approach'] ?>
                        <?php if($approach) { ?>
                            <?php foreach($approach as $item) { ?>
                                <li class="about-list__item">
                                    <?= $item['approach_item'] ?>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
                <div class="about__item">
                    <h4 class="about__item_title"><?= $s['about_block_title2'] ?></h4>
                    <ul class="about-list">
                        <?php $expertise = $s['expertise'] ?>
                        <?php if($expertise) { ?>
                            <?php foreach($expertise as $item) { ?>
                                <li class="about-list__item">
                                    <?= $item['expertise_item'] ?>
                                </li>
                            <?php } ?>
                        <?php } ?>
                    </ul>
                </div>
                <picture>
                    <source srcset="<?= wp_get_attachment_image_url($s['about_imag-mob']) ?>" media="(max-width: 1024px)">
                    <source srcset="<?= wp_get_attachment_image_url($s['about_imag-tab']) ?>" media="(max-width: 1300px)">
                    <img src="<?= wp_get_attachment_image_url($s['about_image']) ?>" alt="Євгеній Попсуй" class="about__img" fetchpriority="low" loading="lazy">
                </picture>
            </div>
        </div>
    </section>