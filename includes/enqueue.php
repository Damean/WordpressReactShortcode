<?php
// This file enqueues scripts and styles

defined( 'ABSPATH' ) or die( 'Direct script access disallowed.' );

add_action( 'init', function() {

  add_filter( 'script_loader_tag', function( $tag, $handle ) {
    if ( ! preg_match( '/^wedo-/', $handle ) ) { return $tag; }
    return str_replace( ' src', ' async defer src', $tag );
  }, 10, 2 );

  add_action( 'wp_enqueue_scripts', function() {

    $react_app_js  = WEDO_REACT_APP_PATH . '/build/static/js/wedo-3d-react-script.js';
    $react_app_css = WEDO_REACT_APP_PATH . '/build/static/css/wedo-3d-react-style.css'; 
      
    // time stops stylesheet/js caching while in development, might want to remove later  
    $version = time();
    // $version = 1;
    wp_register_style( 'wedo-3d-react-style', $react_app_css, array(), $version );
    wp_register_script( 'wedo-3d-react-script', $react_app_js, array(), $version, true );

  });
});