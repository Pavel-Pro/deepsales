    <section class="testimonials" id="testimonials">
        <div class="wrapper">
            <h2 class="title title__testimonials"><?= $s['testimonials__title'] ?></h2>
            <div class="testimonials__slider swiper">
                <div class="swiper-wrapper">
                    <?php $testimonials = $s['testimonials'] ?>
                    <?php if($testimonials) { ?>
                        <?php foreach($testimonials as $item) { ?>
                            <div class="testimonials__slide swiper-slide">
                                <div class="testimonials-how">
                                    <img src="<?= wp_get_attachment_image_url($item['photo']) ?>" alt="<?= get_post_meta( $item['photo'], '_wp_attachment_image_alt', true ); ?>" class="testimonials__img">
                                    <div class="testimonials__person">
                                        <h5 class="testimonials__name">
                                            <?= $item['name'] ?>
                                        </h5>
                                        <spna class="testimonials__position">
                                            <?= $item['position'] ?>
                                        </spna>
                                    </div>
                                </div>
                                <p class="testimonials__text"><?= $item['text'] ?></p>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>