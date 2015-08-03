<?php

//разрешаем менюжки и картинки постов
	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	
// подключаем javascript и css
function thistheme_enqueue_style() {
	wp_enqueue_style( 'bs', get_bloginfo('template_url').'/css/bootstrap.min.css', false ); 
	wp_enqueue_style( 'owl', get_bloginfo('template_url').'/js/assets/owl.carousel.css', false ); 
	wp_enqueue_style( 'opensansfont', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,800&subset=latin,cyrillic-ext', false );		
	wp_enqueue_style( 'core', get_bloginfo('template_url').'/style.css', false ); 
}

function thistheme_enqueue_script() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bs', get_bloginfo('template_url').'/js/bootstrap.min.js', array('jquery'), false ); 
	wp_enqueue_script( 'owl', get_bloginfo('template_url').'/js/owl.carousel.js', array('jquery'), false ); 
	wp_enqueue_script( 'core', get_bloginfo('template_url').'/js/script.js', array('jquery', 'owl', 'bs'), false ); 
	
}

add_action( 'wp_enqueue_scripts', 'thistheme_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'thistheme_enqueue_script' );	

// дополнительные типы

function portfolio_post_type() {

	$labels = array(
		'name'                => 'Портфолио',
		'singular_name'       => 'Клиент',
		'menu_name'           => 'Портфолио',
		'name_admin_bar'      => 'Клиента',
		'parent_item_colon'   => 'Parent Item:',
		'all_items'           => 'Все клиенты',
		'add_new_item'        => 'Добавить клиента',
		'add_new'             => 'Добавить нового клиента',
		'new_item'            => 'Новый клиент',
		'edit_item'           => 'Изменить',
		'update_item'         => 'Обновить',
		'view_item'           => 'Просмотреть',
		'search_items'        => 'Найти',
		'not_found'           => 'Не найдено',
		'not_found_in_trash'  => 'Не найдено в корзине',
	);
	$args = array(
		'label'               => 'portfolio',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'menu_icon' => 'dashicons-portfolio',
	);
	register_post_type( 'portfolio', $args );

}
add_action( 'init', 'portfolio_post_type', 0 );


function service_post_type() {

	$labels = array(
		'name'                => 'Сервисы',
		'singular_name'       => 'Сервис',
		'menu_name'           => 'Сервисы',
		'name_admin_bar'      => 'Сервис',
		'parent_item_colon'   => 'Parent Item:',
		'all_items'           => 'Все сервисы',
		'add_new_item'        => 'Добавить сервис',
		'add_new'             => 'Добавить сервис',
		'new_item'            => 'Новый сервис',
		'edit_item'           => 'Изменить сервис',
		'update_item'         => 'Обновить сервис',
		'view_item'           => 'Просмотреть сервис',
		'search_items'        => 'Найти сервис',
		'not_found'           => 'Не найдено',
		'not_found_in_trash'  => 'Не найдено в корзине',
	);
	$args = array(
		'label'               => 'service',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'menu_icon'	=> 'dashicons-lightbulb',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'service_post_type', 0 );