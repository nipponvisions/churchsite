<?php
if ( function_exists('register_sidebar') ) {
    register_sidebar();
}

add_theme_support( 'post-thumbnails' );

function add_menuclass($ulclass) {
	return preg_replace('/<ul id="menu-custom_menu"/', '<ul id="nav"', $ulclass, 1);
}

add_filter('wp_nav_menu','add_menuclass'); 

function add_submenu_class($liclass) {
	return preg_replace('/<li class="page_item page-item-2">/', '<li id="selected">', $liclass, 1);
}

add_filter('wp_page_menu','add_submenu_class');

add_action('init', 'register_custom_menu');
 
function register_custom_menu() {
register_nav_menu('custom_menu', __('Custom Menu'));
}

add_action('init', 'register_top_menu');
 
function register_top_menu() {
register_nav_menu('top_menu', __('Top Menu'));
}



?>