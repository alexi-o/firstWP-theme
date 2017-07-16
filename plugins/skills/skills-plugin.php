<?php 
/*
* Plugin Name: Skills Plugin
* Plugin URI: http://alexi.codes/
* Description: A plugin for displaying skills
* Author: Alexi O'Hearn
* Author URI: http://alexi.codes/
* Version 1.0
*/
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

require_once ( plugin_dir_path(__FILE__) . 'skills-cpt.php' );
require_once ( plugin_dir_path(__FILE__) . 'skills-render-admin.php');

?>
