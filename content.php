<?php
/**
 * The default template for displaying content
 *
 * @package themeHandle
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> <?php if(is_single()) { ?>itemscope="itemscope" itemtype="http://schema.org/BlogPosting" itemprop="blogPost"<?php } ?>>
	
	<?php get_template_part('/inc/parts/article-header'); ?>

	<div class="entry-content" itemprop="text">
		
		<?php the_content(); ?>

			<?php if(is_home() || is_single() || is_tag() || is_category() || is_archive()) { ?>

				<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'themeTextDomain' ) . '</span>', 'after' => '</div>' ) ); ?>

			<?php } elseif(is_404()) { ?>

			<?php } elseif(is_search()) { ?>

			<?php } else { ?>

				<?php if ( is_archive() ) : ?>
				
					<p><?php _e( 'There are no published posts for this archive. Try searching using keywords instead.', 'themeTextDomain' ); ?></p>
					<?php get_search_form(); ?>

				<?php elseif ( is_search() ) : ?>

					<p><?php _e( 'No matches were found for your search terms. Please try again with different keywords.', 'themeTextDomain' ); ?></p>
					<?php get_search_form(); ?>

				<?php endif; ?>

			<?php } ?>
	</div><!-- .entry-content -->
		
	<?php if(is_home() || is_single() || is_tag() || is_category() || is_archive()) { ?>
		<footer class="entry-meta">
			
			<?php the_tags( '<div class="post-tags">' . __( 'Tagged: ', 'themeTextDomain' ) , ', ', '</div>' ); ?>
			
			<div class="comments-link">
				<?php if(is_single()) {
					comments_popup_link( 
						 __( 'Leave a comment', 'themeTextDomain' ), 
						 __( '1 comment', 'themeTextDomain' ), 
						 __( '% comments', 'themeTextDomain' ) ); 
					} else { 
					comments_number( 
						 __( 'Leave a comment', 'themeTextDomain' ), 
						 __( '1 comment', 'themeTextDomain' ), 
						 __( '% comments', 'themeTextDomain' ) ); 
				} ?>
			</div>
		</footer><!-- #entry-meta -->
	<?php } ?>
</article><!-- #post-<?php the_ID(); ?> -->
