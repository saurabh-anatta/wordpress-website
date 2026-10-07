<?php
/**
 * anatta-site — child of Twenty Twenty-Five.
 *
 * Override parent behaviour with hooks here and parent files by copying them
 * into this theme at the same relative path. Never edit the parent.
 *
 * @package anatta-site
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function anatta_site_enqueue_styles() {
	// Block parents enqueue their own styles; the child style.css is loaded by WordPress via the theme header.
	wp_enqueue_style( 'anatta-site', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'anatta_site_enqueue_styles', 20 );

/**
 * Enqueue supplemental theme styles (sticky header, nav breakpoint, grayscale logos, cards).
 */
function anatta_site_enqueue_theme_styles() {
	wp_enqueue_style(
		'anatta-site-theme',
		get_theme_file_uri( 'assets/css/theme.css' ),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'anatta_site_enqueue_theme_styles', 20 );

/**
 * Theme setup — runs after the parent's after_setup_theme callbacks.
 */
function anatta_site_setup() {
	add_editor_style( 'assets/css/theme.css' );
}
add_action( 'after_setup_theme', 'anatta_site_setup', 11 );

/**
 * Register the pattern category and custom block styles.
 */
function anatta_site_register_block_extras() {
	register_block_pattern_category(
		'anatta-site',
		array( 'label' => __( 'Anatta', 'anatta-site' ) )
	);

	register_block_style(
		'core/image',
		array(
			'name'  => 'anatta-site-grayscale',
			'label' => __( 'Grayscale', 'anatta-site' ),
		)
	);
}
add_action( 'init', 'anatta_site_register_block_extras' );

/**
 * Return the copyright line for the current year.
 *
 * @return string
 */
function anatta_site_get_copyright_year() {
	return esc_html( '© ' . wp_date( 'Y' ) );
}

/**
 * Register the copyright-year block bindings source (WordPress 6.5+).
 */
function anatta_site_register_bindings() {
	if ( ! function_exists( 'register_block_bindings_source' ) ) {
		return;
	}

	register_block_bindings_source(
		'anatta-site/copyright-year',
		array(
			'label'              => __( 'Copyright year', 'anatta-site' ),
			'get_value_callback' => 'anatta_site_get_copyright_year',
		)
	);
}
add_action( 'init', 'anatta_site_register_bindings' );

/**
 * Create the "Work" category used by the Featured work query loop.
 */
function anatta_site_create_work_category() {
	if ( ! term_exists( 'work', 'category' ) ) {
		wp_insert_term( 'Work', 'category', array( 'slug' => 'work' ) );
	}
}
add_action( 'after_switch_theme', 'anatta_site_create_work_category' );
