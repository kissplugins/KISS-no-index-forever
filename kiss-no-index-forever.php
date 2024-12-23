<?php
/**
 * Plugin Name: KISS - No Index Forever (Almost)
 * Plugin URI:  https://kissplugins.com
 * Description: Ensures that search engines are always discouraged from indexing this site by checking and resetting the "Discourage search engines" setting every hour.
 * Version:     1.0.0
 * Author:      Hypercart
 * Author URI:  https://kissplugins.com
 * License:     GPLv2 or later
 * Text Domain: no-index-forever-almost
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class No_Index_Forever_Almost {

	/**
	 * Hook into WordPress actions and filters.
	 */
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'load_textdomain' ) );

		// Add a link to the settings page on the Plugins screen.
		add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), array( $this, 'add_settings_link' ) );
		
		// Add settings page under 'Settings' in admin.
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );

		// Schedule the hourly event.
		add_action( 'init', array( $this, 'schedule_event' ) );

		// The action hook that runs our check.
		add_action( 'nifa_hourly_check', array( $this, 'enforce_discourage_setting' ) );

		// Activation/Deactivation hooks.
		register_activation_hook( __FILE__, array( $this, 'activate' ) );
		register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );
	}

	/**
	 * Load plugin textdomain.
	 */
	public function load_textdomain() {
		load_plugin_textdomain( 'no-index-forever-almost', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
	}

	/**
	 * Add a link to our settings page on the Plugins page.
	 *
	 * @param array $links Existing plugin action links.
	 * @return array Modified array of links.
	 */
	public function add_settings_link( $links ) {
		$settings_link = '<a href="options-general.php?page=no-index-forever-almost">' . esc_html__( 'Settings', 'no-index-forever-almost' ) . '</a>';
		array_unshift( $links, $settings_link );
		return $links;
	}

	/**
	 * Add the admin menu page.
	 */
	public function admin_menu() {
		add_options_page(
			__( 'No Index Forever (Almost)', 'no-index-forever-almost' ),
			__( 'No Index Forever', 'no-index-forever-almost' ),
			'manage_options',
			'no-index-forever-almost',
			array( $this, 'settings_page' )
		);
	}

	/**
	 * Render the settings page.
	 */
	public function settings_page() {
		?>
		<div class="wrap">
			<h1><?php esc_html_e( 'No Index Forever (Almost)', 'no-index-forever-almost' ); ?></h1>
			<p><?php esc_html_e( 'This plugin ensures that search engines are always discouraged from indexing this site. Every hour, it checks the WordPress "Discourage search engines" setting and resets it if it detects otherwise.', 'no-index-forever-almost' ); ?></p>
			<p><?php esc_html_e( 'There are no additional settings to configure.', 'no-index-forever-almost' ); ?></p>
		</div>
		<?php
	}

	/**
	 * Schedule the hourly event if not already scheduled.
	 */
	public function schedule_event() {
		if ( ! wp_next_scheduled( 'nifa_hourly_check' ) ) {
			wp_schedule_event( time(), 'hourly', 'nifa_hourly_check' );
		}
	}

	/**
	 * Enforce the discourage search setting.
	 * If blog_public is set to 1, reset it to 0.
	 */
	public function enforce_discourage_setting() {
		$blog_public = get_option( 'blog_public', 1 );
		if ( 1 === (int) $blog_public ) {
			update_option( 'blog_public', 0 ); 
		}
	}

	/**
	 * Activation hook to ensure scheduling is set.
	 */
	public function activate() {
		$this->schedule_event();
	}

	/**
	 * Deactivation hook to clear scheduled event.
	 */
	public function deactivate() {
		$timestamp = wp_next_scheduled( 'nifa_hourly_check' );
		if ( $timestamp ) {
			wp_unschedule_event( $timestamp, 'nifa_hourly_check' );
		}
	}
}

new No_Index_Forever_Almost();
