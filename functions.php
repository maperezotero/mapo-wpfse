<?php
/**
 * This file adds functions to the Mapo WordPress theme.
 *
 * @package Mapo
 * @author  @maperezotero
 * @license GNU General Public License v2 or later
 * @link    https://maperez.es/
 */

if ( ! function_exists( 'mapo_setup' ) ) {

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.8.0
	 *
	 * @return void
	 */
	function mapo_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'mapo', get_template_directory() . '/languages' );

		// Enqueue editor styles and fonts.
		add_editor_style(
			array(
				'./style.css',
			)
		);

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

	}
}
add_action( 'after_setup_theme', 'mapo_setup' );

// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'mapo_enqueue_style_sheet' );
function mapo_enqueue_style_sheet() {

	wp_enqueue_style( 'mapo', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

/**
 * Register block styles.
 *
 * @since 1.0.0
 */
function mapo_register_block_styles() {

	$block_styles = array(
		'core/columns' => array(
			'columns-reverse' => __( 'Reverse', 'mapo' ),
		),
		'core/list' => array(
			'no-disc' => __( 'No Disc', 'mapo' ),
		),
		'core/navigation-link' => array(
			'outline' => __( 'Outline', 'mapo' ),
		),
		'core/social-links' => array(
			'outline' => __( 'Outline', 'mapo' ),
		),
	);

	foreach ( $block_styles as $block => $styles ) {
		foreach ( $styles as $style_name => $style_label ) {
			register_block_style(
				$block,
				array(
					'name'  => $style_name,
					'label' => $style_label,
				)
			);
		}
	}
}
add_action( 'init', 'mapo_register_block_styles' );

add_action( 'init', function() {
	$inline_style = '.is-style-heading-background, .editor-styles-wrapper .is-style-heading-background { display: inline-block; }';
	register_block_style(
		'core/heading',
		array(
			'name' => 'heading-background',
			'label' => __( 'Heading with background', 'mapo' ),
			'inline_style' => $inline_style,
		)
	);
} );

/**
 * Register new block patterns categories.
 *
 * @since 1.0.0
 */
function mapo_register_block_pattern_categories() {
	register_block_pattern_category(
		'hero',
		array( 'label' => __( 'Hero', 'mapo' ) )
	);
}
add_action( 'init', 'mapo_register_block_pattern_categories' );

// The following line re-enables the customizer
add_action( 'customize_register', '__return_true' );