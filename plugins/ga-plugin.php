<?php
/*
* Plugin Name: Google Analytics Tag
* Plugin URI: http://alexi.codes/
* Description: A plugin for adding a Google Analytics tag to your website
* Author: Alexi O'Hearn
* Author URI: http://alexi.codes
* Version: 1.0
*/

function ao_add_google_link(){

    global $wp_admin_bar;

    $wp_admin_bar->add_menu( array(
        'id' => 'google_analytics',
        'title' => 'Google Analytics',
        'href' => 'http://google.com/analytics'
    ));
}

add_action( 'wp_before_admin_bar_render', 'ao_add_google_link' );