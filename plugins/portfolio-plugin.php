<?php 
/*
* Plugin Name: Portfolio Plugin
* Plugin URI: http://alexi.codes/
* Description: A plugin for displaying portfolio pieces on your website
* Author: Alexi O'Hearn
* Author URI: http://alexi.codes/
* Version 1.0
*/
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

function ao_portfolio_post(){
    
    $singular   = 'Portfolio';
    $plural     = 'Porfolios';

    $labels = array(
        'name'                  => $plural,
        'singular_name'         => $singular,
        'add_name'              => 'Add New',
        'add_new_item'          => 'Add New ' . $singular,
        'edit'                  => 'Edit',
        'edit_item'             => 'Edit ' . $singular,
        'new_item'              => 'New ' . $singular,
        'view'                  => 'View ' . $singular,
        'view_item'             => 'View ' . $singular,
        'search_item'           => 'Search ' . $plural,
        'parent'                => 'Parent ' . $singular,
        'not_found'             => 'No '. $plural . ' found',
        'not_found_in_trash'    => 'No ' . $plural . ' in trash'
    );
    
    $args = array(
		    'labels'              => $labels,
	        'public'              => true,
	        'publicly_queryable'  => true,
	        'exclude_from_search' => false,
	        'show_in_nav_menus'   => false,
	        'show_ui'             => true,
	        'show_in_menu'        => true,
	        'show_in_admin_bar'   => true,
	        'menu_position'       => 10,
	        'menu_icon'           => 'dashicons-book',
	        'can_export'          => true,
	        'delete_with_user'    => false,
	        'hierarchical'        => false,
	        'has_archive'         => true,
	        'query_var'           => true,
	        'capability_type'     => 'post',
	        'map_meta_cap'        => true,
	        // 'capabilities' => array(),
	        'rewrite'             => array( 
	        	'slug' => 'skills',
	        	'with_front' => true,
	        	'pages' => true,
	        	'feeds' => true,
	        ),
	        'supports'            => array( 
	        	'title', 
                'thumbnail',
	        	'editor', 
	        	'author', 
	        	'custom-fields' 
	        )
	);

    register_post_type( 'portfolio', $args );
}
add_action( 'init', 'ao_portfolio_post' );

?>
