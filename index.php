<?php

/* 

    Plugin Name: cleanSSL
    Description: Get rid off SSL warnings about insecure content ( mainly images, stylesheets and javascript files) on pages served via https 
    Author: First 10 Digital 
    Version: 0.1.3a 
    Author URI: http://www.first10.co.uk

*/  

function callback($buffer) {
  
    $buffer = preg_replace('~src\s*=\s*["\']\s*http:(.*?)["\']~i', 'src="$1"', $buffer);
    
    return $buffer;
}

function buffer_start() {
    ob_start("callback");
}

function buffer_end() {
    ob_end_flush();
}

add_filter('wp', 'buffer_start');
add_filter('wp_footer', 'buffer_end');
