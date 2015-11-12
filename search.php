<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package themeHandle
 */

get_header(); ?>

<section id="primary" class="col-sm-8 col-md-9">

	<?php if ( have_posts() ) : ?>

		<?php get_template_part('inc/part/article-header'); ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content'); ?>

		<?php endwhile; ?>

		<?php get_template_part( 'inc/pagination' ); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>