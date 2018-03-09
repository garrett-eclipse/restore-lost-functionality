<?php
/**
* Options Page
*
* Screen for allowing users to specify which functionality to restore
*
* @package	Restore-lost-Functionality
* @since	1.0
*/
?>
<div class="wrap">

<h1><?php esc_attr_e( 'Restore Lost Functionality', 'restore-lost-functionality' ); ?></h1>

<?php
$screen_options = restore_wp_screen_options();

// If options have been updated on screen, update the database

if ( ( !empty( $_POST ) ) && ( check_admin_referer( 'restore-wp-options', 'restore_wp_options_nonce' ) ) ) { // Input var okay.

	// Loop through the options array. If a valid option that requires storing, santitize the
	// field appropriately

	$loop = 0;
	while ( $loop < count( $screen_options ) ) {

		$option = $screen_options[ $loop ];

		if ( !$option[ 0 ] && $option[ 1 ] ) {

			if ( isset( $_POST[ 'restore_wp_' . $option[ 2 ] ] ) ) { // Input var okay.
				$options[ $option[ 2 ] ] = sanitize_text_field( $_POST[ 'restore_wp_' . $option[ 2 ] ] ); // Input var okay.
			} else {
				$options[ $option[ 2 ] ] = '';
			}
		}

		$loop++;
	}

	// Update the options

	update_option( 'restore_wp_options', $options );
	$update_message = __( 'Settings Saved.', 'restore-lost-functionality' );
	echo '<div class="updated fade"><p><strong>' . esc_html__( $update_message ) . "</strong></p></div>\n";
}

// Get options

$options = get_option( 'restore_wp_options' );
if ( !is_array( $options ) ) { $options = array(); }
?>

<form method="post" action="<?php echo esc_attr( get_bloginfo( 'wpurl' ) ) . '/wp-admin/options-general.php?page=restore-wp-options' ?>">

<table class="form-table">

<?php
$loop = 0;

global $wp_version;

while ( $loop < count( $screen_options ) ) {

	$option = $screen_options[ $loop ];

	if ( ( ( float ) $wp_version >= $option[ 6 ] && 'jetpack' !== $option[ 6 ] ) or ( 'jetpack' === $option[ 6 ] && is_plugin_active( 'jetpack/jetpack.php' ) ) ) {

		// If a plugin, check it's installation status and prepare an appropriate message

		if ( $option[ 0 ] ) {
			$status = restore_wp_check_plugin( $option[ 4 ] );
			if ( 0 === $status ) {
				$text = __( 'Install the plugin', 'restore-lost-functionality' );
			} else {
				if ( 1 === $status ) {
					$text = __( 'Plugin installed but not active', 'restore-lost-functionality' );
				} else {
					$text = __( 'Plugin installed and active', 'restore-lost-functionality' );
				}
			}
		}

		// Output the initial part of the form

		echo '<tr>'  . "\n" . '<th scope="row">' . esc_attr( ucwords( $option[ 3 ] ) ) . ' </th>' . "\n";
		echo '<td><fieldset><legend class="screen-reader-text"><span>' . esc_attr( ucwords( $option[ 3 ] ) ) . ' </span></legend>' . "\n";

		// Add the checkbox, read-only if a plugin and whether a relevant current status

		if ( $option[ 1 ] ) {

			echo "\t" . '<label for="restore_wp_' . esc_attr( $option[ 2 ] ) . '"><input ';
			if ( $option[ 0 ] ) { echo 'disabled="disabled" '; }
			echo 'type="checkbox" name="restore_wp_' . esc_attr( $option[ 2 ] ) . '" id="restore_wp_' . esc_attr( $option[ 2 ] ) . '" value="1" ';
			if ( $option[ 0 ] ) {
				checked( $status, 2 );
			} else {
				checked( $options[ $option[ 2 ] ], 1 );
			}
			echo '/>';

		}

		// Depending on whether this is a plugin or not, either output a short description
		// or a link to the plugin

		if ( $option[ 0 ] ) {
			$url = admin_url( 'plugin-install.php?s=' . $option[ 4 ] . '&tab=search&type=term' );
			echo '<a href="' . esc_url( $url ) . '" aria-label="' . esc_attr__( 'Display information about the plugin', 'restore-lost-functionality' ) . '">' . esc_attr__( $text ) . '</a>';
		} else {
			echo $option[ 4 ]; // @codingStandardsIgnoreLine -- Source array is escaped. Not doing it again here, otherwise it strips valid HTML from the content.
		}

		// Input finalisation, including the long description

		echo '</label>' . "\n";
		echo "\t" . '<p class="description">' . $option[ 5 ] . '</p>' . "\n"; // @codingStandardsIgnoreLine -- Source array is escaped. Not doing it again here, otherwise it strips valid HTML from the content.
		echo '</fieldset></td>' . "\n" . '</tr>' . "\n";
	}

	$loop++;
}

?>

</table>

<?php wp_nonce_field( 'restore-wp-options', 'restore_wp_options_nonce', true, true ); ?>

<p class="submit"><input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e( 'Save Changes', 'restore-lost-functionality' ); ?>"/></p>

</form>

</div>