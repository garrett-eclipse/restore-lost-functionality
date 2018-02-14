<?php
/**
* Set Options
*
* Functions to define screen options and perform any required actions
*
* @package	Restore-lost-Functionality
*/

/**
* Get screen options
*
* Build an array containing the screen options
*
* @since	3.0
*
* @returns	string		Array of option parameters
*/

function restore_wp_screen_options() {

	// Options - plugin, tick box, name in table, title, short desc/plugin name, long desc, wp version

	$options = array(
					array( true, true, 'opensans', __( 'Admin fonts', 'restore-lost-functionality' ), 'opensans-ftw', __( 'Restore the Open Sans fonts to the dashboard. This was changes to system fonts in WordPress 4.6.', 'restore-lost-functionality' ) , 4.6 ),

					array( false, true, 'jetpack', __( 'Advanced settings for Jetpack', 'restore-lost-functionality' ), __( 'Adds a menu link to the old full module list.', 'restore-lost-functionality' ), '', 'jetpack' ),

					array( true, true, 'updates', __( 'Automatic updates', 'restore-lost-functionality' ), 'update-control', __( 'Add options to control the automatic updates in WordPress 3.7.', 'restore-lost-functionality' ) , 3.7 ),

					array( true, true, 'classiced', __( 'Classic editor', 'restore-lost-functionality' ), 'classic-editor', __( 'Restore the classic editor to those running WordPress 5.0 and above.', 'restore-lost-functionality' ) , 5.0 ),					

					array( false, true, 'comment', __( 'Comment text field', 'restore-lost-functionality' ), __( 'Move the comment field to the bottom', 'restore-lost-functionality' ), __( 'In WordPress 4.4 the comment text field was moved to after the other fields (name, etc). This was because, when users clicked on the reply button, they were taken to the comment text area. If a user was on mobile, they may not even see the comment name and email fields and may write and submit a comment only to return back with an error. Therefore this change addressed usability and accessibility issues.', 'restore-lost-functionality' ), 4.4 ),

					array( false, true, 'dns', __( 'DNS prefetch', 'restore-lost-functionality' ), __( 'Switch off the DNS prefetch', 'restore-lost-functionality' ), __( 'Since WordPress 4.6 code is added to a site\'s header to add DNS prefetch URLs for both Google fonts and s.w.org. The prefetching, supported by some browsers, will resolve the DNS name before the URLs are then accessed, potentially resolving issues of perceived latency.', 'restore-lost-functionality' ), 4.6 ),

					array( true, true, 'embeds', __( 'Enhanced embeds', 'restore-lost-functionality' ), 'disable-embeds', __( 'Disable the enhanced embeds added in WordPress 4.4.', 'restore-lost-functionality' ) , 4.4 ),

					array( false, true, 'shortlink', __( 'Get shortlink button', 'restore-lost-functionality' ), __( 'Restore the button to the post editor', 'restore-lost-functionality' ), __( 'The Get Shortlink button was removed in WordPress 4.4 in an effort to clean the interface.', 'restore-lost-functionality' ), 4.4 ),

					array( true, true, 'image_prop', __( 'Image properties', 'restore-lost-functionality' ), 'advanced-image-styles', __( 'In WordPress 3.9 the ability to easily add a border, vertical, and horizontal padding to images was removed. This was done to simply to clean up the UI as these changes can be easily made via CSS.', 'restore-lost-functionality' ) , 3.9 ),

					array( false, true, 'quality', __( 'Image quality', 'restore-lost-functionality' ), __( 'Restore the original image quality', 'restore-lost-functionality' ), __( 'In WordPress 4.5 the image quality was dropped from 90 to 82 to allow faster rendering.', 'restore-lost-functionality' ), 4.5),

					array( true, true, 'inline', __( 'Inline links', 'restore-lost-functionality' ), 'advanced-wplink', __( 'Disable the inline links that were added in WordPress 4.5.', 'restore-lost-functionality' ) , 4.5 ),				

					array( false, true, 'links', __( 'Link manager', 'restore-lost-functionality' ), __( 'Restore the Links administration option', 'restore-lost-functionality' ), __( 'Removed in WordPress 3.5, the Link Manager (which some use to build blogrolls) is disabled by default.', 'restore-lost-functionality' ), 3.5 ),

					array( false, false, 'linkthis', __( 'Link this bookmarklet', 'restore-lost-functionality' ), sprintf( __( 'Drag this <a href=%s>Link This Bookmarklet</a> link to your bookmarks bar. Then, when you\'re on a page you want to add your links manager, simply select that bookmark.', 'restore-lost-functionality' ), "javascript:void(linkmanpopup=window.open('" . get_admin_url() . "link-add.php?action=popup&linkurl='+escape(location.href)+'&name='+escape(document.title),'LinkManager','scrollbars=yes,width=750,height=550,left=15,top=15,status=yes,resizable=yes'));linkmanpopup.focus();window.focus();linkmanpopup.focus();" ), __( 'This was removed in WordPress 2.5.', 'restore-lost-functionality' ) , 2.5 ),

					array( true, true, 'pressthis', __( 'Press This', 'restore-lost-functionality' ), 'press-this', __( 'Re-adds the Press This feature, removed in WordPress 4.9, that allows you to convert content from any other site into a post on your own. Once this option is active, head to Tools -> Available Tools for full details.', 'restore-lost-functionality' ) , 4.9 ),					

					array( true, true, 'tinymce', __( 'Restore editor', 'restore-lost-functionality' ), 're-add-underline-justify', __( 'Re-adds the TinyMCE editor buttons for text underline and text justify and rearranges the buttons buttons to how they were pre-WordPress 4.7.', 'restore-lost-functionality' ) , 4.7 ),

					array( false, true, 'toolbar', __( 'Shortlink in admin toolbar', 'restore-lost-functionality' ), __( 'Restore the shortlink option in the admin. toolbar', 'restore-lost-functionality' ), __( 'This was removed in version 3.3 because it was felt it was no longer required.', 'restore-lost-functionality' ), 3.3 ),

					array( false, true, 'dashboard1', __( 'Single column dashboard', 'restore-lost-functionality' ), __( 'Bring back the single column dashboard', 'restore-lost-functionality' ), __( 'WordPress 3.8 got rid of the single column dashboard.', 'restore-lost-functionality' ), 3.8 ),

					array( false, true, 'responsive', __( 'SRCSET attribute', 'restore-lost-functionality' ), __( 'Remove the SRCSET attribute from images', 'restore-lost-functionality' ), __( 'This parameter was added in WordPress 4.4 to improve responsive image output. However, it\'s known to cause issues with some plugins and themes.', 'restore-lost-functionality' ), 4.4 ),

					array( true, true, 'link_title', __( 'Title for links', 'restore-lost-functionality' ), 'restore-link-title-field', __( 'Removed in version 4.2, WordPress actively discourages the use of title attributes in links as they are largely useless outside of providing the "hover tooltip" many visual users enjoy, and more importantly, they don\'t promote good accessibility.', 'restore-lost-functionality' ) . ' <a href="https://silktide.com/i-thought-title-text-improved-accessibility-i-was-wrong/">' . __( 'Read more about the accessibility issues', 'restore-lost-functionality' ) . '</a>' , 4.2 )

					);

	return $options;
}

/**
* Make Changes
*
* Make any required changes, based on user selected options
*
* @since	3.0
*/

function restore_wp_make_changes() {

	// Get the options

	$options = get_option( 'restore_wp_options' );

	// Restore short link button

	if ( ( isset( $options[ 'shortlink' ] ) ) && ( $options[ 'shortlink' ] == 1 ) ) {

		add_filter( 'get_shortlink', function( $shortlink ) { return $shortlink; } );

	}

	// Enable links manager

	if ( ( isset( $options[ 'links' ] ) ) && ( $options[ 'links' ] == 1 ) ) {

		add_filter( 'pre_option_link_manager_enabled', '__return_true' );

	}

	// Enable Shortlink item in toolbar

	if ( ( isset( $options[ 'toolbar' ] ) ) && ( $options[ 'toolbar' ] == 1 ) ) {

		add_action( 'admin_bar_menu', 'wp_admin_bar_shortlink_menu', 90 );
		add_action( 'wp_head', 'restore_wp_adminbar_css' );

	}

	// Enable moving comment text field to bottom

	if ( ( isset( $options[ 'comment' ] ) ) && ( $options[ 'comment' ] == 1 ) ) {

		add_filter( 'comment_form_fields', 'restore_wp_move_comment_field' );

	}

	// Suppress SRCSET attribute

	if ( ( isset( $options[ 'responsive' ] ) ) && ( $options[ 'responsive' ] == 1 ) ) {

		add_filter( 'max_srcset_image_width', create_function( '', 'return 1;' ) );

	}

	// Restore single column dashboard

	if ( ( isset( $options[ 'dashboard1' ] ) ) && ( $options[ 'dashboard1' ] == 1 ) ) {

		add_filter( 'screen_layout_columns', 'restore_wp_columns' );
		add_filter( 'get_user_option_screen_layout_dashboard', 'restore_wp_dashboard' );

	}

	// Restore the original image quality

	if ( ( isset( $options[ 'quality' ] ) ) && ( $options[ 'quality' ] == 1 ) ) {

		add_filter( 'jpeg_quality', 'restore_wp_image_quality' );

	}

	// Switch off DNS Prefetch

	if ( ( isset( $options[ 'dns' ] ) ) && ( $options[ 'dns' ] == 1 ) ) {

		remove_action( 'wp_head', 'wp_resource_hints', 2 );

	}

	// Advanced Settings for Jetpack

	if ( ( isset( $options[ 'jetpack' ] ) ) && ( $options[ 'jetpack' ] == 1 ) ) {

		include_once( plugin_dir_path( __FILE__ ) . 'advanced-settings-for-jetpack/advanced-settings-for-jetpack.php' );

	}

	return;
}

/**
* Restore Single Column Dashboard
*
* Functions to configure dashboard for single column output
*
* @since	3.0
*
* @param	string	$columns	The number of columns required
* @return	string				Array of parameters
*/

function restore_wp_dashboard() { return 1; }

function restore_wp_columns( $columns ) {

	$columns[ 'dashboard' ] = 1;

	return $columns;

}

/**
* Restore image quality
*
* Returns a value to indicate
*
* @since	3.0
*
* @return	string				Image quality value
*/

function restore_wp_image_quality() {

    return 90;

}
?>