<?php
/**
 * @package           webstarters-autocomplete-zipcode-denmark
 * @version           1.0
 * @link              https://webstarters.dk
 *
 * Plugin Name:       Webstarters autocomplete zipcode Denmark
 * Plugin URI:        https://webstarters.dk
 * Description:       Et plugin der automatisk udfylder by under checkout i Woocoommerce når kunden har udfyldt deres zip code.
 * Version:           1.2.1
 * Author:            Webstarters
 * Author URI:        https://webstarters.dk
 */

// If this file is called directly, abort.
if (! defined('ABSPATH')) {
    die;
}

if (! defined('MODUL_DIR')) {
    define('MODUL_DIR', dirname(__FILE__));
}

// Instantiate classes
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
  add_action('wp_enqueue_scripts','autocomplete_load_js');

	function autocomplete_load_js() {
		wp_register_script('autocomplete-zipcode-denmark', plugins_url( '/assets/autocomplete-zip.js', __FILE__ ), array('jquery'), '1.0', true );

		// Enqueue script, if checkout
		if(is_checkout()){
			wp_enqueue_script('autocomplete-zipcode-denmark');
		}
	}
} else {

}

?>
