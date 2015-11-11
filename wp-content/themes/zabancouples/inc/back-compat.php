<?php
/**
 * Zaban Couples back compat functionality
 *
 * Prevents Zaban Couples from running on WordPress versions prior to 4.1,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.1.
 *
 * @package Brain_Bytes
 * @subpackage Zaban_Couples
 * @since Zaban Couples 1.0
 */

/**
 * Prevent switching to Zaban Couples on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since Zaban Couples 1.0
 */
function zabancouples_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'zabancouples_upgrade_notice' );
}
add_action( 'after_switch_theme', 'zabancouples_switch_theme' );

/**
 * Add message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Zaban Couples on WordPress versions prior to 4.1.
 *
 * @since Zaban Couples 1.0
 */
function zabancouples_upgrade_notice() {
	$message = sprintf( __( 'Zaban Couples requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'zabancouples' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevent the Customizer from being loaded on WordPress versions prior to 4.1.
 *
 * @since Zaban Couples 1.0
 */
function zabancouples_customize() {
	wp_die( sprintf( __( 'Zaban Couples requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'zabancouples' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'zabancouples_customize' );

/**
 * Prevent the Theme Preview from being loaded on WordPress versions prior to 4.1.
 *
 * @since Zaban Couples 1.0
 */
function zabancouples_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Zaban Couples requires at least WordPress version 4.1. You are running version %s. Please upgrade and try again.', 'zabancouples' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'zabancouples_preview' );
