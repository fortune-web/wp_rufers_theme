<?php
/**
 * Theme config file.
 *
 * @package RUFERS
 * @author  ThemeKalia
 * @version 1.0
 * changed
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Restricted' );
}

$config = array();

$config['default']['rufers_main_header'][] 	= array( 'rufers_preloader', 98 );
$config['default']['rufers_main_header'][] 	= array( 'rufers_main_header_area', 99 );

$config['default']['rufers_main_footer'][] 	= array( 'rufers_preloader', 98 );
$config['default']['rufers_main_footer'][] 	= array( 'rufers_main_footer_area', 99 );

$config['default']['rufers_sidebar'][] 	    = array( 'rufers_sidebar', 99 );

$config['default']['rufers_banner'][] 	    = array( 'rufers_banner', 99 );


return $config;
