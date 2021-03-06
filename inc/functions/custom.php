<?php
/**
 * Custom Post Types + Taxonomies + Walkers
 *
 * @package themeHandle
 */

/* CUSTOM POST TYPES
 ========================== */
// function themeFunction_post_product() {
//   $labels = array(
//     'name'               => _x( 'Products', 'post type general name' ),
//     'singular_name'      => _x( 'Product', 'post type singular name' ),
//     'add_new'            => _x( 'Add New', 'book' ),
//     'add_new_item'       => __( 'Add New Product' ),
//     'edit_item'          => __( 'Edit Product' ),
//     'new_item'           => __( 'New Product' ),
//     'all_items'          => __( 'All Products' ),
//     'view_item'          => __( 'View Product' ),
//     'search_items'       => __( 'Search Products' ),
//     'not_found'          => __( 'No products found' ),
//     'not_found_in_trash' => __( 'No products found in the Trash' ), 
//     'parent_item_colon'  => '',
//     'menu_name'          => 'Products'
//   );
//   $args = array(
//     'labels'        => $labels,
//     'description'   => 'Holds our products and product specific data',
//     'public'        => true,
//     'menu_position' => 5, // '5' places menu item directly below Posts
//     'menu_icon' => 'dashicons-admin-home', // https://developer.wordpress.org/resource/dashicons/
//     'taxonomies' => array('play'), // associates with custom taxonomy  
//     'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
//     'has_archive'   => true,
//   );
//   register_post_type( 'product', $args ); 
// }
// add_action( 'init', 'themeFunction_post_product' );



/* TAXONOMIES
 ========================== */
// function themeFunction_taxonomies_product() {
//   $labels = array(
//     'name'              => _x( 'Product Categories', 'taxonomy general name' ),
//     'singular_name'     => _x( 'Product Category', 'taxonomy singular name' ),
//     'search_items'      => __( 'Search Product Categories' ),
//     'all_items'         => __( 'All Product Categories' ),
//     'parent_item'       => __( 'Parent Product Category' ),
//     'parent_item_colon' => __( 'Parent Product Category:' ),
//     'edit_item'         => __( 'Edit Product Category' ), 
//     'update_item'       => __( 'Update Product Category' ),
//     'add_new_item'      => __( 'Add New Product Category' ),
//     'new_item_name'     => __( 'New Product Category' ),
//     'menu_name'         => __( 'Product Categories' ),
//   );
//   $args = array(
//     'labels' => $labels,
//     'hierarchical' => true,
//   );
//   register_taxonomy( 'product_category', 'product', $args );
// }
// add_action( 'init', 'themeFunction_taxonomies_product', 0 );

?>
