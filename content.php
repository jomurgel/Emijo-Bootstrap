<?php
/**
 * The default template for displaying content
 *
 * @package themeHandle
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost">
	
	<?php get_template_part('/inc/parts/article-header'); ?>

	<div class="entry-content" itemprop="text">
		
		<?php
		if ( get_the_post_thumbnail() != '' ):
			$image_small  = wp_get_attachment_image_src( get_post_thumbnail_id(), 'feature_block_narrow' );
			$image_medium = wp_get_attachment_image_src( get_post_thumbnail_id(), 'feature_block_medium' );
			$image_large  = wp_get_attachment_image_src( get_post_thumbnail_id(), 'feature_block_wide' );
		?>
		
		<picture>
			<!--[if IE 9]><video style="display: none;"><![endif]-->
			<source srcset="<?php echo esc_url( $image_large[0] ); ?>" media="(min-width: 969px)">
			<source srcset="<?php echo esc_url( $image_medium[0] ); ?>" media="(min-width: 769px)">
			<source srcset="<?php echo esc_url( $image_small[0] ); ?>"></span>
			<!--[if IE 9]></video><![endif]-->
			<img srcset="<?php echo esc_url( $image_small[0] ); ?>">
		</picture>
		
		<?php endif; ?>
		
		<?php the_excerpt(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'themeTextDomain' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		
		<?php the_tags( '<div class="post-tags">' . __( 'Tagged: ', 'themeTextDomain' ) , ', ', '</div>' ); ?>
		
		<?php if(! is_search()) { ?>
		<div class="comments-link">
			<?php comments_popup_link( 
				 __( 'Leave a comment', 'themeTextDomain' ), 
				 __( '1 comment', 'themeTextDomain' ), 
				 __( '% comments', 'themeTextDomain' ) ); 
			?>
		</div>
		<?php } ?>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
