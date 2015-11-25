<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package themeHandle
 */
?>

	</main><!-- #main -->
</div><!-- #page -->

<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">

	<div class="footer-nav container-fluid">
		Add Footer Elements Here
	</div>

	<div class="copyright container-fluid">
		&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?>. <br class="visible-xs-* hidden-lg hidden-md hidden-sm">Design by <a href="designerURI" target="_blank" rel="nofollow">themeDesigner</a>. Built by <a href="authorURI" target="_blank" rel="nofollow">themeAuthor</a>
	</div>

</footer><!-- #colophon -->

<?php
	wp_footer();
	get_template_part( 'inc/parts/analytics' );
?>

</body>
</html>
