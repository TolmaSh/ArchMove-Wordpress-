<?php

// Переменные  для путей
define('THEME_ROOT', get_template_directory_uri());
define('CSS_DIR', THEME_ROOT . '/assets/css');
define('JS_DIR', THEME_ROOT . '/assets/js');
define('IMG_DIR', THEME_ROOT . '/assets/images');
// Регистрация хуков
add_action( 'wp_enqueue_scripts', 'archmove_style' );
add_action( 'wp_enqueue_scripts', 'archmove_scripts' );
add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'top_menu', 'Меню в шапке' );
	register_nav_menu( 'footer_menu', 'Меню в подвале' );
}
function archmove_style() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	
    
}

function archmove_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );
    wp_register_script( 'swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', false, null, true );
	wp_enqueue_script( 'swiper' );
    wp_enqueue_script( 'magnific-popup', JS_DIR . '/jquery.magnific-popup.js', array(jquery), 'null', true );
    wp_enqueue_script( 'main-scripts', JS_DIR . '/script.js', array(jquery), 'null', true );
}    