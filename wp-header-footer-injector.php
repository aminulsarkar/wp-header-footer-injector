<?php
/**
 * Plugin Name: WP Header & Footer Code Injector
 * Plugin URI:  https://aminulsarkar.com/
 * Description: Easily add custom scripts to WordPress header and footer without editing theme files.
 * Version:     1.0.0
 * Author:      Aminul Sarkar
 * Author URI:  https://aminulsarkar.com/
 * Text Domain: wp-hfi
 * Domain Path: /languages
 * License:     GPLv2 or later
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Prevent direct access
}

// Load Translation
function hfi_load_textdomain() {
    load_plugin_textdomain( 'wp-hfi', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'init', 'hfi_load_textdomain' );


// Plugin constants
define( 'WP_HFI_PATH', plugin_dir_path( __FILE__ ) );
define( 'WP_HFI_URL', plugin_dir_url( __FILE__ ) );

// Include files
require_once WP_HFI_PATH . 'includes/sanitizer.php';
require_once WP_HFI_PATH . 'includes/admin-page.php';
require_once WP_HFI_PATH . 'includes/injector.php';
