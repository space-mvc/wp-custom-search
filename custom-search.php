<?php
/*
Plugin Name: WP Custom Search
Plugin URI:
description: This plugin will add search by categories capability to the standard post search.
Version: 1.2
Author: Daniel Lee
Author URI:
License: GPL2
*/

function register_custom_post_types() {
    $labels = array(
        'name'               => _x( 'Products', 'post type general name' ),
        'singular_name'      => _x( 'Product', 'post type singular name' ),
        'add_new'            => _x( 'Add New ', 'Product' ),
        'add_new_item'       => __( 'Add New Product' ),
        'edit_item'          => __( 'Edit Product' ),
        'new_item'           => __( 'New Product' ),
        'all_items'          => __( 'All Products' ),
        'view_item'          => __( 'View Product' ),
        'search_items'       => __( 'Search Products' ),
        'not_found'          => __( 'No Products found' ),
        'not_found_in_trash' => __( 'No Products found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Products'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => 'Contains a list of Products',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'),
        'has_archive'   => true,
        'taxonomies'  => array('category'),
    );

    register_post_type('products', $args);
}
add_action( 'init', 'register_custom_post_types' );

function register_custom_search_form_query($query) {
    if ($query->is_main_query() && is_search()) {

        $categoryName = get_query_var('category_name');

        if(!empty($categoryName)) {
            $query->set('category_name', $categoryName);
        }
    }
    return $query;
}
add_filter('pre_get_posts','register_custom_search_form_query');
