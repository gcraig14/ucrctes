<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package baklon
 */

?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="de-page-builder">
	<?php the_content();?>
	<div class="uk-clearfix"></div>
	<?php
		wp_link_pages(
			array(
				'before'			=> '<ul class="de-pagination de-pagination__post uk-pagination uk-margin-remove-left" data-pagination-type="number">',
				'after' 			=> '</ul>',
				'link_before'       => '',
				'link_after'        => '',
				'nextpagelink'		=> __( 'Next', 'baklon' ) . '<span data-uk-pagination-next></span>',
				'previouspagelink'	=> '<span data-uk-pagination-previous></span>' . __( 'Prev', 'baklon' ),
				'pagelink'			=> '%',
				'echo'				=> 1,

			)
		);
	?>
	</div>
	<?php if ( ( comments_open() || get_comments_number() ) && ! dahz_framework_get_option( 'global_disable_comment_on_page', false ) ) : ?>
		<div class="uk-container uk-margin-medium">
			<?php echo dahz_framework_upscale_get_comments();?>
		</div>
	<?php endif; ?>
</div><!-- #post-<?php the_ID(); ?>#-->
