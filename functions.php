<?php
/**
 * Theme functions
 *
 * Sets up the theme and provides some helper functions.
 *
 * @package themeHandle
 */


/* OEMBED SIZING
 ========================== */
 
if ( ! isset( $content_width ) )
	$content_width = 600;
	
	
/* THEME SETUP
 ========================== */
 
// add title tag 
// add title tag 
function themeFunction_wp_title( $title, $sep ) {
	if ( is_feed() ) {
		return $title;
	}

	global $page, $paged;

	// Add the blog name
	$title .= get_bloginfo( 'name', 'display' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title .= " $sep $site_description";
	}

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title .= " $sep " . sprintf( __( 'Page %s', '_s' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'themeFunction_wp_title', 10, 2 );
 

// theme setup 
if ( ! function_exists( 'themeFunction_setup' ) ):
function themeFunction_setup() {

	// Available for translation
	load_theme_textdomain( 'themeTextDomain', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to <head>.
	add_theme_support( 'automatic-feed-links' );

	// Add custom nav menu support
	register_nav_menu( 'primary', __( 'Primary Menu', 'themeTextDomain' ) );
	
	// Add featured image support
	add_theme_support( 'post-thumbnails' );
	
	// Add custom image sizes for picturefill
	// add_image_size( 'feature_block_narrow', 750, 750, true );
	// add_image_size( 'feature_block_medium', 450, 450, true );
	// add_image_size( 'feature_block_wide', 300, 300, true );
	
	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif;
add_action( 'after_setup_theme', 'themeFunction_setup' );


// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes)
{
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)


// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function themeFunction_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}
add_action('init', 'themeFunction_pagination'); // Add our HTML5 Pagination


/* SIDEBARS & WIDGET AREAS
 ========================== */
function themeFunction_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'themeTextDomain' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'themeFunction_widgets_init' );


/* ENQUEUE SCRIPTS & STYLES
 ========================== */
// load jquery only once
function load_jquery() {

	// deregister the original version of jQuery
	wp_deregister_script('jquery');

	// register it again, this time with no file path
	wp_register_script('jquery', '', true, '1.11.3');

	// add it back into the queue
	wp_enqueue_script('jquery');
}

add_action('template_redirect', 'load_jquery'); 

function themeFunction_scripts() {
	// theme style.css file
	wp_enqueue_style( 'themeTextDomain-style', get_stylesheet_uri() );
	
	// fontawesome
	wp_enqueue_style( 'themeTextDomain-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
	
	// threaded comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	
	// jQuery
	wp_enqueue_script(
		'theme-jquery', //script name
		'//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', //script location
		array('jquery'), //depends on jquery
		date("h:i:s"), //version number
		true // enqueue in footer
	);
	
	//Bootstrap scripts
	wp_enqueue_script(
		'theme-bootstrap', //script name
		'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js', //script location
		array('jquery'), //depends on jquery
		null, //version number
		true // enqueue in footer
	);

	// theme scripts
	wp_enqueue_script(
		'theme-init', //script name
		get_template_directory_uri() . '/js/min/theme.min.js', //script location
		array('jquery'), //depends on jquery
		date("h:i:s"), //version number
		true // enqueue in footer
	);
	
	// responsive images scripts
	// wp_enqueue_script(
	// 	'theme-picturefill', //script name
	// 	get_template_directory_uri() . '/js/min/picturefill.min.js', //script location
	// 	array('jquery'), //depends on jquery
	// 	null, //version number
	// 	true // enqueue in footer
	// );
}    
add_action('wp_enqueue_scripts', 'themeFunction_scripts');

/* MISC EXTRAS
 ========================== */
 
// add a favicon to your ala http://realfavicongenerator.net/
function themeFunction_favicon() { ?>
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/icons/manifest.json">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon.ico">
	<meta name="msapplication-TileColor" content="#2d89ef">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/icons/mstile-144x144.png">
	<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/icons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
<?php }
add_action('wp_head', 'themeFunction_favicon');

// Schema (http://www.schema.org)
include('inc/functions/schema.php');// Redirect to thank you post after comment

add_filter('get_comment_link', 'redirect_after_comment');
function redirect_after_comment($location)
{
	return preg_replace("/#comment-([\d]+)/", "", $location);
}
// Comments & pingbacks display template
include('inc/functions/comments.php');

// Custom Post Types + Taxonomies + Walkers
include('inc/functions/custom.php');

// Includes: TinyMCE tweaks, admin menu & bar settings, query overrides + Google Fonts/Typekit Support
include('inc/functions/customizations.php');

// Bootstrap Walker
require_once('inc/bootstrap/walker.php');
?>
