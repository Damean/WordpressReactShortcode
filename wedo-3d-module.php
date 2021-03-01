<?php
/**
 * @wordpress-plugin
 * Plugin Name: Wedo 3D Module
 */

defined( 'ABSPATH' ) or die( 'Direct script access disallowed.' );

define( 'WEDO_REACT_APP_PATH', plugin_dir_url( __FILE__ ) . '/wedo-3d-react-app' ); // URL ROUTE
define( 'WEDO_INCLUDES', plugin_dir_path( __FILE__ ) . '/includes' ); // FILE PATH


require_once( WEDO_INCLUDES . '/enqueue.php' );
require_once( WEDO_INCLUDES . '/shortcode.php' );
