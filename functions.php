<?php

add_theme_support('thumbnails');

function wp_theme_styles() {

	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'wp_theme_styles' );

function wp_theme_js() {

    wp_enqueue_script('script_js', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );
    wp_enqueue_script('script_js', get_template_directory_uri() . '/js/bootstrap.js', '', '', true );
}

function wp_theme_widgets_init() {
	register_sidebar(
		array(
			'name' => 'Background Image',
			'id' => 'background_image'
		)
	);
	register_sidebar(
		array(
			'name' => 'Header Text',
			'id' => 'header_text',
			'before_widget' => '<p class="intro-text">',
			'after_widget' => '</p>',
			'before_title' => '<h1 class="brand-heading">',
			'after_title' => '</h1>'
		)
	);
    register_sidebar(
        array(
            'name' => 'Main Content Box',
            'id' => 'main_content_box',
            'before_widget' => '<p>',
            'after_widget' => '</p>',
            'before_title' => '<h2 id="about">',
            'after_title' => '</h2>'
        )
    );
}

function wp_theme_register_menu() {
    register_nav_menu('new-menu', __('Header Menu'));
}

add_action( 'widgets_init', 'wp_theme_widgets_init' );
add_action( 'wp_enqueue_scripts', 'wp_theme_js' );
add_action('init', 'wp_theme_register_menu');

?>