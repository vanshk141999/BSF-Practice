<?php
/**
 * Plugin Name:       Price Box
 * Description:       A Gutenberg block to show pricing box.
 * Version:           0.1.0
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Author:            Vansh Kapoor
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       price-box
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function create_block_price_box_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_price_box_block_init' );
