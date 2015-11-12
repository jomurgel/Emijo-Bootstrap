<?php
/**
 * Main Template File
 *
 * This file is used to display a page when nothing more specific matches a query.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package themeHandle
 */

get_header(); ?>

<section id="primary" class="col-sm8 col-md-9">

	<?php if ( have_posts() ) : ?>

		<?php get_template_part( 'inc/parts/archive-header' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', get_post_format() ); ?>

		<?php endwhile; ?>

		<?php get_template_part( 'inc/parts/pagination' ); ?>

	<?php endif; ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>