<?php 
// Remove admin bar for all users if false
if(is_admin()) {
	show_admin_bar( true );
}



// Remove Emojis
// remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
// remove_action( 'admin_print_styles', 'print_emoji_styles' );
// remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
// remove_action( 'wp_head', 'rsd_link' );
// remove_action( 'wp_head', 'wlwmanifest_link' );
// remove_action( 'wp_head', 'wp_generator' );
// remove_action( 'wp_print_styles', 'print_emoji_styles' );



// Remove Menu Items
// function remove_menus(){
//   remove_menu_page( 'upload.php' );			// Media
//   remove_menu_page( 'edit-comments.php' );	// Comments
//   remove_menu_page( 'users.php' );			// Users
//   remove_menu_page( 'tools.php' );			// Tools
// }
// add_action( 'admin_menu', 'remove_menus' ); // Remove pesky menu items



// function edit_admin_menus() {
//     global $menu;
// 
//    foreach ( $menu as $key => $val ) {
//        if ( __( 'Posts') == $val[0] ) {
//            $menu[$key][6] = 'dashicons-editor-paragraph';
//        }
//    }
//     
//     $menu[5][0] = 'News'; // Change Posts to News
// }
//
//add_action( 'admin_menu', 'edit_admin_menus' ); // Change menu item names (posts to news)


// Move ACF Options menu under Settings
//if( function_exists('acf_add_options_sub_page') )
//{
//    acf_add_options_sub_page(array(
//        'title' => __( 'Site Options', 'themeTextDomain' ),
//        'parent' => 'options-general.php',
//        'capability' => 'manage_options'
//    ));
//}



/* Tiny MCE Tweaks
========================== */
// Add TinyMCE Styles
function themeFunction_add_editor_styles() {
	add_editor_style( 'css/editor-styles.css' );
}
add_action( 'admin_init', 'themeFunction_add_editor_styles' );




// add buttons to Tiny MCD
function themeFunction_mce_buttons_2( $buttons ) {
  array_unshift( $buttons, 'styleselect' );
  return $buttons;
}
add_filter( 'mce_buttons_2', 'themeFunction_mce_buttons_2' );

// add custom buttons
function themeFunction_mce_before_init( $settings ) {

  $style_formats = array(
	array(
	  'title' => 'Button',
	  'selector' => 'a',
	  'classes' => 'btn btn-default'
	),
	array(
	  'title' => 'Primary Button',
	  'selector' => 'a',
	  'classes' => 'btn btn-primary'
	),
	array(
	  'title' => 'Success Button',
	  'selector' => 'a',
	  'classes' => 'btn btn-success'
	),
	array(
	  'title' => 'Info Button',
	  'selector' => 'a',
	  'classes' => 'btn btn-info'
	),
	array(
	  'title' => 'Warning Button',
	  'selector' => 'a',
	  'classes' => 'btn btn-warning'
	),
	array(
	  'title' => 'Danger Button',
	  'selector' => 'a',
	  'classes' => 'btn btn-danger'
	)
  );

  $settings['style_formats'] = json_encode( $style_formats );

  return $settings;

}
add_filter( 'tiny_mce_before_init', 'themeFunction_mce_before_init' );



// add typekit fonts to tinyMCE
// function themeFunction_admin_typekit( ) {
//     global $pagenow;
//     $arg = array( 'post.php', 'post-new.php', 'page-new.php', 'page.php' );
//     if ( ! in_array( $pagenow, $arg ))
/*            return; ?>
// 
<!--      <script type="text/javascript">
//          (function () {
//             var config = {
//           kitId:'nol0xey',
//           scriptTimeout:3000
//           };
//           var h = document.getElementsByTagName("html")[0];
//           h.className += " wf-loading";
//           var t = setTimeout(function () {
//           h.className = h.className.replace(/( |^)wf-loading( |$)/g, "");
//           h.className += " wf-inactive"
//           }, config.scriptTimeout);
//           var tk = document.createElement("script");
//           tk.src = '//use.typekit.net/' + config.kitId + '.js';
//           tk.type = "text/javascript";
//           tk.async = "true";
//           tk.onload = tk.onreadystatechange = function () {
//       var a = this.readyState;
//        if (a && a != "complete" && a != "loaded")return;
//           clearTimeout(t);
//            try {
//              Typekit.load(config)
//            } catch (b) { } };
//            var s = document.getElementsByTagName("script")[0];
//            s.parentNode.insertBefore(tk, s)
//         })();
//         </script> -->
/* <?php }
// add_action( 'admin_print_scripts', 'themeFunction_admin_typekit' );



/* Fonts
========================== */
// ADD Google Fonts Support
//function child_load_google_fonts() {
//  	
  	// Setup font arguments
//	$query_args = array(
//		'family' => 'Open+Sans:300,400,700' // Change this font to whatever font you'd like
//	);

 	// A safe way to register a CSS style file for later use
//	wp_register_style( 'google-fonts', add_query_arg( $query_args, "//fonts.googleapis.com/css" ), array(), null );

	// A safe way to add/enqueue a CSS style file to a WordPress generated page
//	wp_enqueue_style( 'google-fonts' );
//}

// add_action( 'wp_enqueue_scripts', 'child_load_google_fonts' ); // Add Google Fonts Support


// Add Typekit Support
/*
function themeFunction_typekit() {
	wp_enqueue_script( 
	  'themeFunction_typekit', 
	  '//use.typekit.net/xxxxxxx.js'
	);
}
add_action( 'wp_enqueue_scripts', 'themeFunction_typekit' ); // Add Typekit Script Support

function themeFunction_typekit_inline() {
  if ( wp_script_is( 'themeFunction_typekit', 'done' ) ) { ?>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <?php } 
}
add_action( 'wp_head', 'themeFunction_typekit_inline' ); // Add Typekit Support
*/
?>
