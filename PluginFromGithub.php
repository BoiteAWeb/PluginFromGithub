<?php
/*
Plugin Name: Plugin From Github
Author: Julio Potier
*/

add_action( 'wp_footer', '__wp_footer' );
function __wp_footer(){
	printf( '<p>%s</p>', date_i18n( 'l j F Y, H:i:s' ) );
}
?>
