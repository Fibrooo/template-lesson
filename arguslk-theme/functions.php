<?php

require_once __DIR__ . '/Arguslk_Menu_Walker.php';

add_action('wp_enqueue_scripts', 'arguslk_scripts');
add_action('wp_enqueue_scripts', 'arguslk_styles');
add_action('after_setup_theme', 'arguslk_setup' );
add_action('widgets_init', 'arguslk_widgets_init');
/*
 * Подключение скриптов
 * */

function arguslk_scripts(){

    //Переопределение jQuery
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', null, '3.3.1', true);
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script('js-bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.js', null, null, true);
    wp_enqueue_script('js-popper','//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', null, null, true);

}

/*
 * Подключение стилей
 * */

function arguslk_styles(){
    wp_enqueue_style( 'style-bootstrap' , get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css');
    wp_enqueue_style( 'grid-bootstrap' , get_template_directory_uri() . '/assets/bootstrap/css/bootstrap-grid.css');
    wp_enqueue_style( 'main-styles' , get_template_directory_uri() . '/assets/main.css');
}

function arguslk_setup(){
    add_theme_support( 'post-thumbnails', ['post']);
    add_theme_support('title-tag');
    add_theme_support('custom-logo', [
        'width' => 50,
        'height' => 50
    ]);
    add_theme_support('custom-background', [
        'default-color' => '000000'
    ]);

    add_theme_support('custom-header', [
        'default-image' => get_template_directory_uri() . '/assets/images/background.jpg',
        'width' => '2000',
        'height' => '700'
    ]);

    register_nav_menus([
        'header_menu' => 'Меню в шапке',
        'footer_menu' => 'Меню в футере'
    ]);
}

//Работа с навигацией

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){

    return '
	<nav class="navigation" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';

}

/*
 * Подключение Sidebar
 * */

function arguslk_widgets_init(){
    register_sidebar([
       'name' => 'Правый sidebar',
       'id' => 'right_sidebar',
        'description' => 'Область для виджетов в правом sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => "</div>\n",
        'before_title'  => '<h5 class="widgettitle">',
        'after_title'   => "</h5>\n",
    ]);
}