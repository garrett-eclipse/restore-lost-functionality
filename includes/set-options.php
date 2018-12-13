<?php
/**
* Set Options
*
* Functions to define screen options and perform any required actions
*
* @package  Restore-lost-Functionality
*/

/**
* Get screen options
*
* Build an array containing the screen options
*
* @since    3.0
*
* @returns  string      Array of option parameters
*/

function restore_wp_screen_options() {

	// Options - plugin, tick box, name in table, title, short desc/plugin name, long desc, wp version

	$options = array(
		array( true, true, 'opensans', esc_html__( 'Admin fonts', 'restore-lost-functionality' ), 'opensans-ftw', esc_html__( 'Restore the Open Sans fonts to the dashboard. This was changes to system fonts in WordPress 4.6.', 'restore-lost-functionality' ), 4.6 ),

		array( false, true, 'jetpack', esc_html__( 'Advanced settings for Jetpack', 'restore-lost-functionality' ), esc_html__( 'Adds a menu link to the old full module list.', 'restore-lost-functionality' ), '', 'jetpack' ),

		array( true, true, 'updates', esc_html__( 'Automatic updates', 'restore-lost-functionality' ), 'update-control', esc_html__( 'Add options to control the automatic updates in WordPress 3.7.', 'restore-lost-functionality' ), 3.7 ),

		array( true, true, 'classiced', esc_html__( 'Classic Editor', 'restore-lost-functionality' ), 'classic-editor', esc_html__( 'Restore the Classic Editor to those running WordPress 5.0 and above.', 'restore-lost-functionality' ), 5.0 ),
		array( false, true, 'comment', esc_html__( 'Comment text field', 'restore-lost-functionality' ), esc_html__( 'Move the comment field to the bottom', 'restore-lost-functionality' ), __( 'In WordPress 4.4 the comment text field was moved to after the other fields (name, etc). This was because, when users clicked on the reply button, they were taken to the comment text area. If a user was on mobile, they may not even see the comment name and email fields and may write and submit a comment only to return back with an error. Therefore this change addressed usability and accessibility issues.', 'restore-lost-functionality' ), 4.4 ),

		array( false, true, 'dns', esc_html__( 'DNS prefetch', 'restore-lost-functionality' ), esc_html__( 'Switch off the DNS prefetch', 'restore-lost-functionality' ), esc_html__( 'Since WordPress 4.6 code is added to a site\'s header to add DNS prefetch URLs for both Google fonts and s.w.org. The prefetching, supported by some browsers, will resolve the DNS name before the URLs are then accessed, potentially resolving issues of perceived latency.', 'restore-lost-functionality' ), 4.6 ),

		array( true, true, 'embeds', esc_html__( 'Enhanced embeds', 'restore-lost-functionality' ), 'disable-embeds', esc_html__( 'Disable the enhanced embeds added in WordPress 4.4.', 'restore-lost-functionality' ), 4.4 ),

		array( false, true, 'shortlink', esc_html__( 'Get shortlink button', 'restore-lost-functionality' ), esc_html__( 'Restore the button to the post editor', 'restore-lost-functionality' ), esc_html__( 'The Get Shortlink button was removed in WordPress 4.4 in an effort to clean the interface.', 'restore-lost-functionality' ), 4.4 ),

		array( true, true, 'image_prop', esc_html__( 'Image properties', 'restore-lost-functionality' ), 'advanced-image-styles', esc_html__( 'In WordPress 3.9 the ability to easily add a border, vertical, and horizontal padding to images was removed. This was done to simply to clean up the UI as these changes can be easily made via CSS.', 'restore-lost-functionality' ), 3.9 ),

		array( false, true, 'quality', esc_html__( 'Image quality', 'restore-lost-functionality' ), esc_html__( 'Restore the original image quality', 'restore-lost-functionality' ), esc_html__( 'In WordPress 4.5 the image quality was dropped from 90 to 82 to allow faster rendering.', 'restore-lost-functionality' ), 4.5 ),

		array( true, true, 'inline', esc_html__( 'Inline links', 'restore-lost-functionality' ), 'advanced-wplink', esc_html__( 'Disable the inline links that were added in WordPress 4.5.', 'restore-lost-functionality' ), 4.5 ),
		array( false, true, 'links', esc_html__( 'Link manager', 'restore-lost-functionality' ), esc_html__( 'Restore the Links administration option', 'restore-lost-functionality' ), esc_html__( 'Removed in WordPress 3.5, the Link Manager (which some use to build blogrolls) is disabled by default.', 'restore-lost-functionality' ), 3.5 ),

		array( false, false, 'linkthis', esc_html__( 'Link this bookmarklet', 'restore-lost-functionality' ), sprintf( __( 'Drag this <a href=%s>Link This Bookmarklet</a> link to your bookmarks bar. Then, when you\'re on a page you want to add your links manager, simply select that bookmark.', 'restore-lost-functionality' ), "javascript:void(linkmanpopup=window.open('" . get_admin_url() . "link-add.php?action=popup&linkurl='+escape(location.href)+'&name='+escape(document.title),'LinkManager','scrollbars=yes,width=750,height=550,left=15,top=15,status=yes,resizable=yes'));linkmanpopup.focus();window.focus();linkmanpopup.focus();" ), __( 'This was removed in WordPress 2.5.', 'restore-lost-functionality' ), 2.5 ),

		array( true, true, 'pressthis', esc_html__( 'Press This', 'restore-lost-functionality' ), 'press-this', esc_html__( 'Re-adds the Press This feature, removed in WordPress 4.9, that allows you to convert content from any other site into a post on your own. Once this option is active, head to Tools -> Available Tools for full details.', 'restore-lost-functionality' ), 4.9 ),
		array( true, true, 'tinymce', esc_html__( 'Restore editor', 'restore-lost-functionality' ), 're-add-underline-justify', esc_html__( 'Re-adds the TinyMCE editor buttons for text underline and text justify and rearranges the buttons buttons to how they were pre-WordPress 4.7.', 'restore-lost-functionality' ), 4.7 ),

		array( false, true, 'toolbar', esc_html__( 'Shortlink in admin toolbar', 'restore-lost-functionality' ), esc_html__( 'Restore the shortlink option in the admin. toolbar', 'restore-lost-functionality' ), esc_html__( 'This was removed in version 3.3 because it was felt it was no longer required.', 'restore-lost-functionality' ), 3.3 ),

		array( false, true, 'dashboard1', esc_html__( 'Single column dashboard', 'restore-lost-functionality' ), esc_html__( 'Bring back the single column dashboard', 'restore-lost-functionality' ), esc_html__( 'WordPress 3.8 got rid of the single column dashboard.', 'restore-lost-functionality' ), 3.8 ),

		array( false, true, 'responsive', esc_html__( 'SRCSET attribute', 'restore-lost-functionality' ), esc_html__( 'Remove the SRCSET attribute from images', 'restore-lost-functionality' ), esc_html__( 'This parameter was added in WordPress 4.4 to improve responsive image output. However, it\'s known to cause issues with some plugins and themes.', 'restore-lost-functionality' ), 4.4 ),

		array( true, true, 'link_title', esc_html__( 'Title for links', 'restore-lost-functionality' ), 'restore-link-title-field', esc_html__( 'Removed in version 4.2, WordPress actively discourages the use of title attributes in links as they are largely useless outside of providing the "hover tooltip" many visual users enjoy, and more importantly, they don\'t promote good accessibility.', 'restore-lost-functionality' ) . ' <a href="https://silktide.com/i-thought-title-text-improved-accessibility-i-was-wrong/">' . esc_html__( 'Read more about the accessibility issues', 'restore-lost-functionality' ) . '</a>.', 4.2 ),

	);

	return $options;
}

/**
* Make Changes
*
* Make any required changes, based on user selected options
*
* @since    3.0
*/

function restore_wp_make_changes() {

	// Get the options

	$options = get_option( 'restore_wp_options' );

	// Restore short link button

	if ( ( isset( $options['shortlink'] ) ) && ( '1' === $options['shortlink'] ) ) {

		add_filter(
			'get_shortlink', function( $shortlink ) {
				return $shortlink;
			}
		);
	}

	// Enable links manager

	if ( ( isset( $options['links'] ) ) && ( '1' === $options['links'] ) ) {

		add_filter( 'pre_option_link_manager_enabled', '__return_true' );
	}

	// Enable Shortlink item in toolbar

	if ( ( isset( $options['toolbar'] ) ) && ( '1' === $options['toolbar'] ) ) {

		add_action( 'admin_bar_menu', 'wp_admin_bar_shortlink_menu', 90 );
		add_action( 'wp_head', 'restore_wp_adminbar_css' );
	}

	// Enable moving comment text field to bottom

	if ( ( isset( $options['comment'] ) ) && ( '1' === $options['comment'] ) ) {

		add_filter( 'comment_form_fields', 'restore_wp_move_comment_field' );
	}

	// Suppress SRCSET attribute

	if ( ( isset( $options['responsive'] ) ) && ( '1' === $options['responsive'] ) ) {

		add_filter( 'max_srcset_image_width', create_function( '', 'return 1;' ) );
	}

	// Restore single column dashboard

	if ( ( isset( $options['dashboard1'] ) ) && ( '1' === $options['dashboard1'] ) ) {

		add_filter( 'screen_layout_columns', 'restore_wp_columns' );
		add_filter( 'get_user_option_screen_layout_dashboard', 'restore_wp_dashboard' );
	}

	// Restore the original image quality

	if ( ( isset( $options['quality'] ) ) && ( '1' === $options['quality'] ) ) {

		add_filter( 'jpeg_quality', 'restore_wp_image_quality' );
	}

	// Switch off DNS Prefetch

	if ( ( isset( $options['dns'] ) ) && ( '1' === $options['dns'] ) ) {

		remove_action( 'wp_head', 'wp_resource_hints', 2 );
	}

	// Advanced Settings for Jetpack

	if ( ( isset( $options['jetpack'] ) ) && ( '1' === $options['jetpack'] ) ) {

		include_once( plugin_dir_path( __FILE__ ) . 'advanced-settings-for-jetpack/advanced-settings-for-jetpack.php' );
	}

	return;
}

/**
* Restore Single Column Dashboard
*
* Functions to configure dashboard for single column output
*
* @since    3.0
*
* @param    string  $columns    The number of columns required
* @return   string              Array of parameters
*/

function restore_wp_dashboard() {
	return 1; }

function restore_wp_columns( $columns ) {

	$columns['dashboard'] = 1;

	return $columns;

}

/**
* Restore image quality
*
* Returns a value to indicate
*
* @since    3.0
*
* @return   string              Image quality value
*/

function restore_wp_image_quality() {

	return 90;

}
