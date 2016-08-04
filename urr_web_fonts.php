<?php

/*
Plugin Name: UR Web Fonts
Plugin URI: http://uly.me/google-web-fonts-plugin/
Description: A WordPress Plugin That Utilizes Google Webfonts.
Version: 1.2
Author: Ulysses Ronquillo
Author URI: http://uly.me
*/

// include main file

function urr_google_webfonts() {
	include('urr_main.php');
}

// add this plugin under the appearance theme pages

add_action( 'admin_menu', 'urr_google_webfonts_add_options' );

function urr_google_webfonts_add_options() {
	add_theme_page( 'UR Web Fonts', 'UR Web Fonts', 'manage_options', __FILE__, 'urr_google_webfonts' );
}

// add this plugin in the admin bar menu

//add_action('admin_bar_menu', 'add_toolbar_items', 100);

function add_toolbar_items($admin_bar){

	$admin_bar->add_menu( array(
		'id'    => 'ur-web-fonts',
		'title' => 'UR Web Fonts',
		'href'  => admin_url('options-general.php?page=webfonts/urwebfonts.php'),	
		'meta'  => array(
		'title' => __('UR Web Fonts'),			
		),
	));
	
}

// add code to the wp_head section

function urr_webfonts_header() {
	//get options
	$name = get_option('urr_webfont_name');
	$style = get_option('urr_webfont_style');
	// display to wp_head
	echo stripslashes($name);
	echo '<style type="text/css">'.stripslashes($style).'</style>';
}

add_action( 'wp_head', 'urr_webfonts_header' );

/* end of webfonts.php */