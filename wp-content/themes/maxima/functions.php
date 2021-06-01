<?php

/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = get_template_directory() . '/inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
	'/bharat.php',
);

// Load WooCommerce functions if WooCommerce is activated.
if (class_exists('WooCommerce')) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if (class_exists('Jetpack')) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ($understrap_includes as $file) {
	require_once $understrap_inc_dir . $file;
}

// remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);


// change text of the add to cart button to 'order this skip bin'
add_filter('woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_add_to_cart_text');
function woocommerce_custom_add_to_cart_text()
{
	return __('Order this skip bin', 'woocommerce');
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');

add_filter('woocommerce_add_to_cart_sold_individually_found_in_cart', 'wbrubaker_redirect_to_cart');
function wbrubaker_redirect_to_cart($found_in_cart)
{
	if ($found_in_cart) {
		wp_safe_redirect(wc_get_page_permalink('cart'));
		exit;
	}
	return $found_in_cart;
}

add_filter('woocommerce_billing_fields', 'ced_remove_billing_fields');
function ced_remove_billing_fields($fields)
{
	unset($fields['billing_last_name']);
	return $fields;
}

add_filter('woocommerce_checkout_fields', 'ced_rename_checkout_fields');

// Change placeholder and label text
function ced_rename_checkout_fields($fields)
{
	$fields['billing']['billing_first_name']['placeholder'] = 'Full Name';
	$fields['billing']['billing_first_name']['label'] = 'Your Name';
	return $fields;
}

add_filter('woocommerce_checkout_fields', 'remove_company_name');
function remove_company_name($fields)
{
	unset($fields['billing']['billing_company']);
	return $fields;
}

/**
 * Change the default state and country on the checkout page
 */
add_filter('default_checkout_billing_country', 'change_default_checkout_country');
add_filter('default_checkout_billing_state', 'change_default_checkout_state');

function change_default_checkout_country()
{
	return 'AU'; //country code
}

function change_default_checkout_state()
{
	return 'WA'; //state code
}

// Reposition Checkout Addons to under Order Notes
function sv_wc_checkout_addons_change_position()
{
	return 'woocommerce_before_order_notes';
}
add_filter('wc_checkout_add_ons_position', 'sv_wc_checkout_addons_change_position');
