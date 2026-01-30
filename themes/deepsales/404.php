<?php get_header(); ?>

<section class="error-page">
    <div class="wrapper">
        <h1 class="title__error title"><?= tof('title'); ?></h1>
        <span class="title__error-page"><?= tof('number'); ?></span>
        <span class="text__error"><?= tof('mistake_text'); ?></span>
        <a href="/" class="btn__error button"><?= tof('mistake_btn'); ?></a>
    </div>
</section>

<?php get_footer(); ?>