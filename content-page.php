<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package themeHandle
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>
	
	<?php get_template_part('/inc/parts/article-header'); ?>

	<div class="entry-content" itemprop="text">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'themeTextDomain' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
