<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package themeHandle
 */

get_header(); ?>

<section id="primary" class="container-fluid">

	<article id="post-0" class="post error404 not-found">
		
		<?php get_template_part('inc/parts/article-header'); ?>

		<div class="entry-content">
			<p><?php _e( 'You broke the internet.  Maybe you can search for what you&rsquo;re looking for.', 'themeTextDomain' ); ?></p>
			
			<a href="<?php echo esc_url( home_url() ); ?>/" class="btn btn-primary">Go Home</a>

		</div><!-- .entry-content -->
	</article><!-- #post-0 -->

</section><!-- #primary -->
<?php get_footer(); ?>