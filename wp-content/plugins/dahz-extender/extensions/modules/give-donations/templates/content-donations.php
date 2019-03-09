<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Baklon
 * @since 1.0
 * @version 1.0
 */
$excerpt = dahz_framework_get_excerpt( 
	array(
		'show_readmore'	=> false,
		'content'		=> give_get_meta( get_the_ID(), '_give_form_content', true )
	)
);
?>
<article id="post-<?php the_ID();?>" <?php post_class( 'uk-article uk-margin-medium' );?>>
	<div class="de-archive__wrapper uk-margin-medium uk-position-relative">
		<?php dahz_framework_featured_image();?>
		<?php
		dahz_framework_title( 
			array(
				'class'		=> "de-donations__item--title {$title_class} uk-margin uk-margin-remove-bottom",
			) 
		);
		?>
		<div class="entry-meta">
			<?php 
			dahz_framework_post_meta( 
				get_the_ID(),
				array(
					'items_wrap'	=> '<ul class="de-donations__item--meta uk-text-small uk-subnav uk-subnav-divider uk-margin-small uk-margin-remove-bottom">%1$s</ul>',
					'metas'			=> $metas,
				)
			);
			?>
		</div>
	</div>
	<?php if( ! empty( $excerpt ) ):?>
		<div class="de-archive__featured-content uk-margin-medium">
			<?php echo $excerpt;?>
		</div>
	<?php endif;?>
	<?php give_show_goal_progress( get_the_ID() );?>
</article>
<hr class="uk-margin-medium">