<?php
/**
 * Home Page
 *
 * @package themeHandle
 */

get_header(); ?>

<section id="primary" class="col-sm-8 col-md-9">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'page' ); ?>

			<?php comments_template( '', true ); ?>

		<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>