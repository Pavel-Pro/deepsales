<?php
/*
Template Name: Constructor Page
*/
    get_header();

    foreach( f('sections') as $s ) {
        if( $s['_type'] === 'hero' ) {
            require __DIR__ . '/parts/hero.php';
        }
        if( $s['_type'] === 'hero' ) {
            require __DIR__ . '/parts/problems.php';
        }
    }
    get_footer();
?>