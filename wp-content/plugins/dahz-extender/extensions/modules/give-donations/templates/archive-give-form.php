<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baklon
 */

get_header();

dahz_framework_get_template_part( 'global/global-wrapper', 'open' );

	if ( have_posts() ) :

		/* Start the Loop */

		do_action('dahz_framework_before_archive_loop');
		
		$loop_posts = dahz_framework_get_post_columns( dahz_framework_get_option( 'archive_donations_column', 2 ), dahz_framework_get_option( 'archive_donations_order', 1 ) );
		
		$is_title_uppercase = dahz_framework_get_option( 'archive_donations_layout_post_title', false );
		
		$title_classes = array(
			dahz_framework_get_option( 'archive_donations_heading', 'uk-article' ),
			$is_title_uppercase ? 'uk-text-uppercase' : '',
		);
		
		$default = array(
			'date',
			'categories',
			'comment',
		);
		
		$metas = dahz_framework_get_option( 
			'archive_donations_post_meta', 
			array(
				'date',
				'author',
			) 
		);
		
		foreach ( $loop_posts as $loop_post ) : ?>
		
			<div>
			
			<?php foreach ( $loop_post as $post ) {
				
				setup_postdata( $GLOBALS['post'] = $post );
				
				dahzextender_get_template( 
					'content-donations.php',
					array(
						'title_class'	=> implode( ' ', $title_classes ),
						'metas'			=> $metas,
					),
					'',
					DAHZEXTENDER_MODULES_ABSPATH . 'give-donations/templates/'
				);
				
			} ?>
			
			</div>
			
		<?php endforeach; 
		
	else :

		dahz_framework_get_template_part( 'content/archive/content', 'none' );

	endif;
	
dahz_framework_get_template_part( 'global/global-wrapper', 'close' );

get_footer();