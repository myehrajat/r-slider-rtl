<?php
/**
 * @package Rentit_Slider_RTL
 * @version 1.0
 */
/*
Plugin Name: Rentit Slider RTL
Plugin URI: https://wordpress.org/plugins/hello-dolly/
Description: Compatible with Bootstrap 3
Version: 1.0
Author URI: https://ma.tt/
Text Domain: Rentit_Slider_RTL
*/
//SOURCE http://keith-wood.name/rtlsliders.html

//
/* add forntend */
add_action( 'wp_enqueue_scripts', 'Rentit_Slider_RTL_dequeue_scripts', 99999999 );
add_action( 'wp_footer', 'Rentit_Slider_RTL_enqueue_scripts', 1 );
/******************************************/
//Updating scripts
/******************************************/
function Rentit_Slider_RTL_dequeue_scripts() {
	//wp_dequeue_script('jquery-ui-slider');
}
function Rentit_Slider_RTL_enqueue_scripts() {
	wp_enqueue_script( 'jquery-ui-mouse');
	wp_enqueue_script( 'jquery-ui-slider-rtl',plugins_url("jquery-ui-slider-rtl/jquery.ui.slider-rtl.min.js",__FILE__ ),array('jquery'),  '1.8.9', true );
	//need to be footer to be sure jquery is loaded of use wp_enqueue_script and with 3th param say load first jquery
	echo '<script>';
	?>
	jQuery( document ).ready( function( $ ) {
/* based on http://keith-wood.name/rtlsliders.html document rtl slider*/
		jQuery('#slider-range').slider({isRTL: true,range: true});
/* make text rtl*/
		jQuery('#slider-range').next().css({"text-align":"right", "width":"100%"});
/*make button a little down to have enough space for text*/
		jQuery('#slider-range').next().after("<br/>");
	});
	<?php
	echo '</script>';
}
/******************************************/
//Updating styles
/******************************************/
add_action( 'wp_enqueue_scripts', 'Rentit_Slider_RTL_dequeue_styles', 99999999 );
add_action( 'wp_enqueue_scripts', 'Rentit_Slider_RTL_enqueue_styles', 99999999 );
function Rentit_Slider_RTL_dequeue_styles() {

}
function Rentit_Slider_RTL_enqueue_styles() {
	wp_enqueue_style( 'renita_jquery-style-slider-rtl',plugins_url("jquery-ui-slider-rtl/jquery.ui.slider-rtl.css",__FILE__ ), array(), '1.8.9', true);

}
