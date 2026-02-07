<?php
/*
Template Name: Constructor Page
*/
    get_header();

    foreach( f('sections') as $s ) {
        if( $s['_type'] === 'hero' ) {
            require __DIR__ . '/parts/hero.php';
        }
        if( $s['_type'] === 'kursfor' ) {
            require __DIR__ . '/parts/kursfor.php';
        }
        if( $s['_type'] === 'problem' ) {
            require __DIR__ . '/parts/problems.php';
        }
        if( $s['_type'] === 'lessons' ) {
            require __DIR__ . '/parts/lessons.php';
        }
        if( $s['_type'] === 'package' ) {
            require __DIR__ . '/parts/package.php';
        }
        if( $s['_type'] === 'solution' ) {
            require __DIR__ . '/parts/solution.php';
        }
        if( $s['_type'] === 'effect' ) {
            require __DIR__ . '/parts/effect.php';
        }
        if( $s['_type'] === 'about' ) {
            require __DIR__ . '/parts/about.php';
        }
        if( $s['_type'] === 'testimonials' ) {
            require __DIR__ . '/parts/testimonials.php';
        }
        if( $s['_type'] === 'form' ) {
            require __DIR__ . '/parts/form.php';
        }
        if( $s['_type'] === 'faq' ) {
            require __DIR__ . '/parts/faq.php';
        }
        if( $s['_type'] === 'important' ) {
            require __DIR__ . '/parts/important.php';
        }
    }

    get_footer();
?>