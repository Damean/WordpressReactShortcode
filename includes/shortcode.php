<?php
// This file enqueues a shortcode.

defined( 'ABSPATH' ) or die( 'Direct script access disallowed.' );

add_shortcode( 'wedo-3d-module', function( $atts ) {

  wp_enqueue_style( 'wedo-3d-react-style');
  wp_enqueue_script( 'wedo-3d-react-script');

  $default_atts = array();
  $args = shortcode_atts( $default_atts, $atts );

  return "<div id='wedo-root'></div>";
});