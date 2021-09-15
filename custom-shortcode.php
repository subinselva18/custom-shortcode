<?php
/**
 * Main plugin file
 *
 * @package custom-shortcode
 * @since 1.0.0
 * @version 1.0.0
 *
 * Undocumented function
 * Plugin Name:       custom-shortcode
 * Plugin URI:        http://159.65.148.33/plugins/custom-shortcode/
 * Description:       To list down last five post.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Subin-Selva
 * Author URI:        http://159.65.148.33/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       post-list
 * Domain Path:       /languages
 **/

defined( 'ABSPATH' ) || exit;

/**
 * Plugin's file path
 *
 * @since 0.1.0
 */
define( 'CS_PATH', plugin_dir_path( __FILE__ ) );

/**
 * Plugin's url path
 *
 * @since 0.1.0
 */
define( 'CS_URL', plugin_dir_url( __FILE__ ) );

/**
 * Includes the main functionality file.
 *
 * @since 1.0.0
 */
require_once 'includes/shortcode.php';
