<?php

add_theme_support( 'post-thumbnails' );

function wp_theme_styles() {
	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' );
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wp_theme_styles' );

function wp_theme_scripts(){
	wp_enqueue_script( 'js-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'wp_theme_scripts');

function wp_theme_jquery() {
	if (!is_admin()) {
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'wp_theme_jquery');


function wp_theme_widgets_init() {
	register_sidebar(
		array(
			'name' => 'Background Image',
			'id' => 'background_image',
		)
	);
	register_sidebar(
		array(
			'name' => 'Header Text',
			'id' => 'header_text',
			'before_title' => '<h1 class="brand-heading">',
			'after_title' => '</h1>'
		)
	);
    register_sidebar(
        array(
            'name' => 'Main Content Box',
            'id' => 'main_content_box',
            'before_title' => '<h2 id="about">',
            'after_title' => '</h2>'
        )
    );
}

function wp_theme_register_menu() {
    register_nav_menu('header-menu', __('Header Menu'));
	register_nav_menu('footer-menu', __('Footer Menu'));
}

add_action( 'widgets_init', 'wp_theme_widgets_init' );
add_action('init', 'wp_theme_register_menu');

?>