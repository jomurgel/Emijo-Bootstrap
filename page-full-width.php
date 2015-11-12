<?php
/**
 * Template Name: Full Width Page
 *
 * @package themeHandle
 */

get_header(); ?>

<section id="primary" class="col-md-12">

	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'content' ); ?>
	
	<?php endwhile; // end of the loop. ?>

</section><!-- #primary -->

<?php get_footer(); ?>