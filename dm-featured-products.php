<?php
/*
Plugin Name: Featured Products
Plugin URI: http://www.designmissoula.com/
Description: Used by Millions to make WordPress better.
Author: Bradford Knowlton
Version: 1.9.9
Author URI: http://bradknowlton.com/
GitHub Plugin URI: https://github.com/DesignMissoula/DM-featured-products
GitHub Branch: master
*/

add_action( 'init', 'register_cpt_featured_product' );

function register_cpt_featured_product() {
	$labels = array(
		'name' => _x( 'Featured Products', 'featured_product' ),
		'singular_name' => _x( 'Featured Product', 'featured_product' ),
		'add_new' => _x( 'Add New', 'featured_product' ),
		'add_new_item' => _x( 'Add New Featured Product', 'featured_product' ),
		'edit_item' => _x( 'Edit Featured Product', 'featured_product' ),
		'new_item' => _x( 'New Featured Product', 'featured_product' ),
		'view_item' => _x( 'View Featured Product', 'featured_product' ),
		'search_items' => _x( 'Search Featured Products', 'featured_product' ),
		'not_found' => _x( 'No featured products found', 'featured_product' ),
		'not_found_in_trash' => _x( 'No featured products found in Trash', 'featured_product' ),
		'parent_item_colon' => _x( 'Parent Featured Product:', 'featured_product' ),
		'menu_name' => _x( 'Featured Products', 'featured_product' ),
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => false,
		'supports' => array( 'title', 'editor', 'thumbnail' ),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'publicly_queryable' => true,
		'exclude_from_search' => true,
		'has_archive' => false,
		'query_var' => true,
		'can_export' => true,
		'rewrite' => false,
		'capability_type' => 'post'
	);
	register_post_type( 'featured_product', $args );
} 