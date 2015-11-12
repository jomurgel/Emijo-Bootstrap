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
		
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'themeTextDomain' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		
		<?php the_tags( '<div class="post-tags">' . __( 'Tagged: ', 'themeTextDomain' ) , ', ', '</div>' ); ?>
		
		<div class="comments-link">
			<?php comments_popup_link( 
				 __( 'Leave a comment', 'themeTextDomain' ), 
				 __( '1 comment', 'themeTextDomain' ), 
				 __( '% comments', 'themeTextDomain' ) ); 
			?>
		</div>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
