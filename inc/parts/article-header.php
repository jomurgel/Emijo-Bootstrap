<?php
/**
 * Article Header
 *
 * @package themeHandle
 */
?>

<header class="entry-header">
	<?php if(is_page()) { ?>
		
		<h1 class="entry-title">
			<?php the_title(); ?>				
		</h1>
		
	<?php } elseif(is_home() || is_single() || is_tag() || is_category() || is_archive()) { ?>
		
		<h1 class="entry-title" itemprop="headline">
			<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themeTextDomain' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h1>
		<span class="entry-date">
			<?php echo get_the_date(); ?>
		</span>
		
	<?php } elseif(is_404()) { ?>
		
		<h1 class="entry-title"><?php _e( 'Aw, Snap!', 'themeTextDomain' ); ?></h1>
	
	<?php } elseif(is_search()) { ?>
		
		<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'themeTextDomain' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			
	<?php } else { ?>
		
		<h1 class="entry-title">
			<?php _e( 'Nothing Found', 'themeTextDomain' ); ?>
		</h1>
		
	<?php } ?>
</header>