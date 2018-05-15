<?php
/*
Plugin Name: Restore Lost Functionality
Plugin URI: https://github.com/dartiss/restore-lost-functionality
Description: Add or remove features to restore previous WordPress functionality.
Version: 3.1.1
Author: David Artiss
Author URI: https://artiss.blog
Text Domain: restore-lost-functionality
*/

include_once( plugin_dir_path( __FILE__ ) . 'includes/set-options.php' );

/**
* Plugin initialisation
*
* Make any relevant changes, depending on the user's chosen options
*
* @since    1.0
*/

function restore_wp_plugin_init() {

	restore_wp_make_changes();
}

add_action( 'init', 'restore_wp_plugin_init' );

/**
* Move comment field
*
* Moved the comment text field to the bottom
*
* @since    2.0
*
* @param    $fields     string      Comment form fields
* @return               string      Comment form fields
*/

function restore_wp_move_comment_field( $fields ) {

	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;

	return $fields;
}

/**
* Add CSS to admin bar
*
* Show admin bar shortlink in white for better visibility!
*
* @since    2.0
*/

function restore_wp_adminbar_css() {
	?>
	<style type="text/css" media="screen">#wpadminbar .shortlink-input{ color: #fff }</style>
	<?php
}

/**
* Add meta to plugin details
*
* Add options to plugin meta line
*
* @since    1.0
*
* @param    string  $links  Current links
* @param    string  $file   File in use
* @return       string      Links, now with settings added
*/

function restore_wp_set_plugin_meta( $links, $file ) {

	if ( false !== strpos( $file, 'restore-lost-functionality.php' ) ) {

		$links = array_merge( $links, array( '<a href="https://github.com/dartiss/restore-lost-functionality">' . __( 'Github', 'restore-lost-functionality' ) . '</a>' ) );

		$links = array_merge( $links, array( '<a href="http://wordpress.org/support/plugin/restore-lost-functionality">' . __( 'Support', 'restore-lost-functionality' ) . '</a>' ) );
	}

	return $links;
}

add_filter( 'plugin_row_meta', 'restore_wp_set_plugin_meta', 10, 2 );

/**
* Admin Screen Initialisation
*
* Set up submenu for plugin options
*
* @since    1.0
*
*/

function restore_wp_menu_initialise() {

	wp_enqueue_script( 'plugin-install' );
	add_thickbox();

	global $restore_wp_options_hook;

	$restore_wp_options_hook = add_submenu_page( 'options-general.php', __( 'Restore Lost Functionality Options', 'restore-lost-functionality' ), __( 'Restore Functionality', 'restore-lost-functionality' ), 'manage_options', 'restore-wp-options', 'restore_wp_options' );

	add_action( 'load-' . $restore_wp_options_hook, 'restore_wp_add_options_help' );

}

add_action( 'admin_menu', 'restore_wp_menu_initialise' );

/**
* Options screen
*
* XHTML options screen to prompt and update some plugin options
*
* @since    1.0
*/

function restore_wp_options() {

	include_once( plugin_dir_path( __FILE__ ) . 'includes/options-screen.php' );

}

/**
* Add Options Help
*
* Add help tab to options screen
*
* @since    1.0
*/

function restore_wp_add_options_help() {

	global $restore_wp_options_hook;
	$screen = get_current_screen();

	if ( $screen->id !== $restore_wp_options_hook ) {
		return; }

	$help_text  = '<p>' . __( 'This plugin allows you to add/remove features to restore previous WordPress functionality. Where this function change requires more than a simple switch, and an existing plugin exists to do this, a link will be provided so that this plugin can be installed instead and it\'s installation status will be shown on this screen.', 'restore-lost-functionality' ) . '</p>';
	$help_text .= '<p>' . __( 'Details are also provided on why the features were first added or removed - often it\'s down to streamlining the UI but sometimes there can be a more serious reason for the change. Please therefore read this information before proceeding.', 'restore-lost-functionality' ) . '</p>';
	$help_text .= '<p>' . __( 'Depending on your version of WordPress different options will appear (if they don\'t appear that means they haven\'t been switched off in your version!)', 'restore-lost-functionality' ) . '</p>';

	$screen->add_help_tab(
		array(
			'id'      => 'restore-wp-help-tab',
			'title'   => __( 'Help', 'restore-lost-functionality' ),
			'content' => $help_text,
		)
	);

	$help_text  = '<p><strong>' . __( 'For more information:', 'restore-lost-functionality' ) . '</strong></p>';
	$help_text .= '<p><a href="https://wordpress.org/plugins/restore-lost-functionality/">' . __( 'Instructions', 'restore-lost-functionality' ) . '</a></p>';
	$help_text .= '<p><a href="https://wordpress.org/support/plugin/restore-lost-functionality">' . __( 'Support Forum', 'restore-lost-functionality' ) . '</a></p></h4>';

	$screen->set_help_sidebar( $help_text );

}

/**
* Check if plugin exists
*
* Check status of plugin - if it installed and, if so, is it active?
*
* @since    2.0
*
* @param    $plugin_dir     string      The directory of the plugin
* @param    $plugin_name    string      The name of the plugin (optional)
* @return   $status         string      The status of the plugin (0=not installed / 1=installed, not active / 2 = installed, active
*/

function restore_wp_check_plugin( $plugin_dir, $plugin_name = '' ) {

	if ( '' === $plugin_name ) {
		$plugin_name = $plugin_dir . '.php'; }

	if ( is_plugin_active( $plugin_dir . '/' . $plugin_name ) ) {

		$status = 2;

	} else {

		$plugins = get_plugins( '/' . $plugin_dir );

		if ( $plugins ) {

			$status = 1;

		} else {

			$status = 0;
		}
	}

	return $status;
}
?>
