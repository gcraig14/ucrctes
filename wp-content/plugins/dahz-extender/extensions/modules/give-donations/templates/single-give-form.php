<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baklon
 */

get_header();

	$disabled_footer = dahz_framework_get_static_option( 'disabled_footer', false );

	do_action( 'dahz_framework_page_header' );

	dahz_framework_get_template_part( 'global/global-wrapper', 'open' );
	
		/**
		 * Fires in single form template, before the main content.
		 *
		 * Allows you to add elements before the main content.
		 *
		 * @since 1.0
		 */
		do_action( 'give_before_main_content' );

		while ( have_posts() ) : the_post();

			give_get_template_part( 'single-give-form/content', 'single-give-form' );

		endwhile; // end of the loop.

		/**
		 * Fires in single form template, after the main content.
		 *
		 * Allows you to add elements after the main content.
		 *
		 * @since 1.0
		 */
		do_action( 'give_after_main_content' );

		/**
		 * Fires in single form template, on the sidebar.
		 *
		 * Allows you to add elements to the sidebar.
		 *
		 * @since 1.0
		 */
		do_action( 'give_sidebar' );

	dahz_framework_get_template_part( 'global/global-wrapper', 'close' );

if ( $disabled_footer ) {

	get_footer( 'blank' );

} else {

	get_footer();

}