<?php

/*
Plugin Name: Allow Full Stops in Short URLs
Plugin URI: http://sophia.wtf
Description: Allow Full Stops in Short URLs
Version: 1.0
Author: Sophia Atkinson
Author URI: http://sophia.wtf
Plugin Based Off Of William Bargent's Allow Forward Slashes in Short URLs.
*/



if( !defined( 'YOURLS_ABSPATH' ) ) die();

yourls_add_filter( 'get_shorturl_charset', 'full_stop_in_charset' );
function full_stop_in_charset( $in ) {
        return $in.'.';
}


//This plugin will work with URL forwarding plugins active!
