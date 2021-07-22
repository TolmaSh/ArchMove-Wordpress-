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
// Новое поле в меню для Features

add_action( 'init', 'register_post_types' );
function register_post_types(){
	add_theme_support( 'post-thumbnails' );

	
	register_post_type( 'features', [
		'labels' => [

			'name'                     => 'Features', // основное название для типа записи, обычно во множественном числе.
			'singular_name'            => 'Feature', // название для одной записи этого типа.
			'add_new'                  => 'добавить feature', // текст для добавления новой записи, как "добавить новый" у постов в админ-панели.
												// Если нужно использовать перевод названия, вписывайте подобным образом: _x('Add New', 'product');
			'add_new_item'             => 'Добавление feature', // текст заголовка у вновь создаваемой записи в админ-панели. Как "Добавить новый пост" у постов.
			'edit_item'                => 'Редактировать feature', // текст для редактирования типа записи. По умолчанию: редактировать пост/редактировать страницу.
			'new_item'                 => 'Новый feature', // текст новой записи. По умолчанию: "Новый пост"
			'view_item'                => 'Смотреть feature', // текст для просмотра записи этого типа. По умолчанию: "Посмотреть пост"/"Посмотреть страницу".
			'search_items'             => 'Искать feature', // текст для поиска по этим типам записи. По умолчанию "Найти пост"/"найти страницу".
			'not_found'                => 'Не найдено', // текст, если в результате поиска ничего не было найдено.
												// По умолчанию: "Постов не было найдено"/"Страниц не было найдено".
			'not_found_in_trash'       => 'Не найдено в корзине', // текст, если не было найдено в корзине. По умолчанию "Постов не было найдено в корзине"/"Страниц
											// не было найдено в корзине".
			'menu_name'                => 'Features', // Название меню. По умолчанию равен name.
		],
		'public'             => false,
		'show_ui'            => true,
		'menu_icon'            => 'dashicons-format-chat',
		'supports'           => ['title','editor' , 'thumbnail'],


	] );
}

function getFeatures() {
	$args = array(
		'orderby'     => 'date',
		'order'       => 'DESC',
		'post_type'   => 'features',
	);



	 $features = [];

	foreach(get_posts($args) as $post) {

	$feature =  get_fields($post->ID);

     $feature['img'] = get_the_post_thumbnail_url( $post->ID, 'thumbnail' );
     $feature['title'] = $post->post_title;
     $feature['text'] = $post->post_content;

     $features[] = $feature;

	 
 }
 return $features;
}

