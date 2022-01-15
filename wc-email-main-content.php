<?php
/**
 * Plugin Name: WooCommerce Email Main Content
 * Description: Allows to set main content in woocommerce emails.
 * Plugin URI:  https://github.com/kukuew/wc-email-main-content
 * Author URI:  https://github.com/kukuew
 * Author:      Mykola Smuzhanytsia
 *
 * Text Domain: wc-emc
 * Domain Path: /languages/
 *
 * Requires PHP: 7.4
 * Requires at least: 5.3
 *
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 *
 * Version:     1.0.0
 *
 */

defined( 'ABSPATH' ) || exit;

// Define constants
if ( ! defined( 'WC_EMC_PLUGIN_FILE' ) ) {
    define( 'WC_EMC_PLUGIN_FILE', __FILE__ );
}

if ( ! defined( 'WC_EMC_ABSPATH' ) ) {
    define( 'WC_EMC_ABSPATH', dirname( WC_EMC_PLUGIN_FILE ) );
}

if ( ! defined( 'WC_EMC_PLUGIN_BASENAME' ) ) {
    define( 'WC_EMC_PLUGIN_BASENAME', plugin_basename( WC_EMC_PLUGIN_FILE ) );
}

if ( ! defined( 'WC_EMC_PLUGIN_VERSION' ) ) {
    define( 'WC_EMC_PLUGIN_VERSION', get_plugin_data( WC_EMC_PLUGIN_FILE )['Version'] );
}

// Include the main plugin class.
if ( ! class_exists( 'WC_EMC' ) ) {
    include_once WC_EMC_ABSPATH . '/inc/class-wc-emc.php';
}


// Initialize
add_action( 'plugins_loaded', 'WC_EMC::instance' );