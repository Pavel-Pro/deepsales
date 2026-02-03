<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>
<section class="contact-page">
    <div class="wrapper">
        <h1 class="title title__contact-page"><?php echo the_title(); ?></h1>
        <div class="contact__items">
            <div class="contact__item">
                <div class="contact__wrap">
                    <div class="icon-wrap">
                        <?= file_get_contents(get_attached_file(tof('social_icon'))); ?>
                    </div>
                    <a href="tel:<?= tof('phone_link'); ?>" class="contact__phone"><?= tof('phone_text'); ?></a>
                </div>
                <?php $phone_numbers = tof('phone_numbers'); ?>
                <?php if($phone_numbers) { ?>
                    <?php foreach($phone_numbers as $item) { ?>
                        <div class="contact__wrap">
                            <div class="icon-wrap">
                                <?= file_get_contents(get_attached_file($item['phone_icon'])); ?>
                            </div>
                            <a href="tel:<?= $item['phone_link'] ?>" class="contact__phone"><?= $item['phone_number'] ?></a>
                        </div>
                    <?php } ?>
                <?php } ?>
                <?php $emails = tof('emails'); ?>
                <?php if($emails) { ?>
                    <?php foreach($emails as $item) { ?>
                        <div class="contact__wrap">
                            <div class="icon-wrap">
                                <?= file_get_contents(get_attached_file($item['email_icon'])); ?>
                            </div>
                            <a href="tel:<?= $item['email_link'] ?>" class="contact__email"><?= $item['email'] ?></a>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="contact__item">
                <div class="image-wrap">
                    <?php $imageId = attachment_url_to_postid(f('photo'))?>
                    <img src="<?= f('photo'); ?>" alt="<?= get_post_meta( $imageId, '_wp_attachment_image_alt', true ); ?>" class="contact__img">
                </div>
                <div class="contact__name"><?= f('name'); ?></div>
                <span class="contact__skills"><?= f('position'); ?></span>
            </div>
            <div class="contact__item">
                <?php $social_data = tof('social_data'); ?>
                <?php if($social_data) { ?>
                        <?php foreach($social_data as $item) { ?>
                            <div class="contact__wrap">
                                <div class="icon-wrap">
                                    <?= file_get_contents(get_attached_file($item['social_icon'])); ?>
                                </div>
                                <a href="<?= $item['social_link'] ?>" class="social">
                                    <span class="social__name"><?= $item['social_text'] ?></span>
                                    <span class="social__link"><?= $item['social_text_link'] ?></span>
                                </a>
                            </div>
                        <?php } ?>
                    <?php } ?>
                
            </div>
        </div>
        <div class="contact-form">
            <?php echo do_shortcode('[contact-form-7 id="a71b06d" title="Consultation form"]')?>
        </div>
    </div>
</section>
<?php get_footer(); ?>