<?php 
/**
 * Navigation
 *
 * @package themeHandle
 */
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar top-bar"></span>
				<span class="icon-bar middle-bar"></span>
				<span class="icon-bar bottom-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>/">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/assets/images/logo.png'" alt="<?php bloginfo('name'); ?>" class="img-responsive" width="24" height="24" />
			</a>
		</div>
		<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<?php wp_nav_menu( array( 
					'container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'primary', 'fallback_cb' => 'wp_bootstrap_navwalker::fallback', 'walker' => new wp_bootstrap_navwalker()
					)); ?>
			</ul>
			<?php get_template_part('nav-form'); ?>
		</div>
	</div>
</nav>