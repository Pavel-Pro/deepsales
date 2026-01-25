<?php

require_once __DIR__ . '/theme-options.php';
require_once __DIR__ . '/flexible-content.php';
require_once __DIR__ . '/contact.php';

function f($field) {
	return carbon_get_the_post_meta($field);
}

function tof($field) {
	return carbon_get_theme_option($field);
}
