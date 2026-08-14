<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

define( 'HOMELANCER_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'HOMELANCER_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
define( 'HOMELANCER_DIR', trailingslashit( get_template_directory() ) );
define( 'HOMELANCER_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'homelancer_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since walker_fse 1.0.0
	 *
	 * @return void
	 */
	function homelancer_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'post-thumbnails' );
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		// Removing default patterns.
		remove_theme_support( 'core-block-patterns' );
	}

endif;
add_action( 'after_setup_theme', 'homelancer_support' );

/*
----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'homelancer_styles' ) ) :
	function homelancer_styles() {
		// registering style for theme
		wp_enqueue_style( 'homelancer-style', get_stylesheet_uri(), array(), HOMELANCER_VERSION );
		wp_enqueue_style( 'homelancer-aos-style', get_template_directory_uri() . '/assets/css/aos.css', array(), HOMELANCER_VERSION );
		if ( is_rtl() ) {
			wp_enqueue_style( 'homelancer-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css', HOMELANCER_VERSION );
		}
		wp_enqueue_script( 'homelancer-aos-scripts', get_template_directory_uri() . '/assets/js/aos.js', array(), HOMELANCER_VERSION, true );
		wp_enqueue_script( 'homelancer-scripts', get_template_directory_uri() . '/assets/js/homelancer-scripts.js', array( 'jquery' ), HOMELANCER_VERSION, true );
	}
endif;

add_action( 'wp_enqueue_scripts', 'homelancer_styles' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function homelancer_block_assets() {
	wp_enqueue_style( 'homelancer-swiper-bundle-editor-style', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), HOMELANCER_VERSION );
	wp_enqueue_style( 'homelancer-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css', array(), HOMELANCER_VERSION );
	wp_enqueue_script( 'homelancer-swiper-bundle-editor-scripts', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), HOMELANCER_VERSION, true );
}
add_action( 'enqueue_block_assets', 'homelancer_block_assets' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

if ( ! function_exists( 'homelancer_excerpt_more_postfix' ) ) {
	function homelancer_excerpt_more_postfix( $more ) {
		if ( is_admin() ) {
			return $more;
		}
		return '...';
	}
	add_filter( 'excerpt_more', 'homelancer_excerpt_more_postfix' );
}
function homelancer_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'homelancer_add_woocommerce_support' );

function homelancer_premium_access() {
	$status = false;

	if ( function_exists( 'cozy_addons_premium_access' ) ) {
		$status = cozy_addons_premium_access();
	}

	return $status;
}

function homelancer_is_plugin_installed( $plugin_slug ) {
	$plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
	return file_exists( $plugin_path );
}
function homelancer_is_plugin_activated( $plugin_slug ) {
	return is_plugin_active( $plugin_slug );
}

/* Admin init */
if ( is_admin() ) {
	require_once HOMELANCER_DIR . 'admin/class-admin.php';
	HomeLancer_Admin::get_instance();
}