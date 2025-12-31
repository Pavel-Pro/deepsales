<?php
/*
Template Name: Policy
*/
?>

<?php get_header(); ?>

<section class="privacy">
    <div class="wrapper">
        <h1 class="title title__privacy"><?php the_title(); ?></h1>
        <span class="date-update"><?= pll__('date_update') ?>: <?= get_the_modified_time('d.m.Y') ?></span>
        <div class="privacy-container">
            <div class="content"><?php the_content(); ?></div>
        </div>
    </div>
</section>


<?php get_footer(); ?>