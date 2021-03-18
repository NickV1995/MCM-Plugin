<?php
/**
 * Plugin Name: MCM Plugin
 * Plugin URI: 
 * Description: De plugin voor Muziekcentrum Middelburg
 * Version: 1.0.0
 * Author: Nick Vinke
 * Author URI: https://webnv.nl/
 * Developer: Nick Vinke
 * Developer URI: https://webnv.nl/
 * Text Domain: MCM Plugin
 * Domain Path: /languages
 *
 * Woo: 12345:342928dfsfhsf8429842374wdf4234sfd
 * WC requires at least: 2.2
 * WC tested up to: 2.3
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly
}

/**
* Check if WooCommerce is active
**/
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
  function woo_add_custom_general_fields() {

    global $woocommerce, $post;
    
    echo '<div class="options_group">';
    
    // Text Field
woocommerce_wp_text_input( 
	array( 
		'id'          => '_text_field', 
		'label'       => __( 'Inkoopprijs', 'woocommerce' ), 
		'desc_tip'    => 'true',
		'description' => __( 'De inkoopprijs van het product', 'woocommerce' ) 
	)
);
    
    echo '</div>';
    
  }
}
?>