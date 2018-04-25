<?php
// Register Custom Post Type for all of the mobility equipment
function mobilityaid() {

	$labels = array(
		'name'                  => _x( 'Mobility Aid', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Mobility Aid', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Mobility Aids', 'text_domain' ),
		'name_admin_bar'        => __( 'Mobility Aids', 'text_domain' ),
		'archives'              => __( 'Mobility Aid Archives', 'text_domain' ),
		'attributes'            => __( 'Mobility Aid Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Mobility Aids', 'text_domain' ),
		'add_new_item'          => __( 'Add New Mobility Aid', 'text_domain' ),
		'add_new'               => __( 'Add New Mobility Aid', 'text_domain' ),
		'new_item'              => __( 'New Mobility Aid', 'text_domain' ),
		'edit_item'             => __( 'Edit Mobility Aid', 'text_domain' ),
		'update_item'           => __( 'Update Piece of Mobility Equipment', 'text_domain' ),
		'view_item'             => __( 'View Piece of Mobility Equipment', 'text_domain' ),
		'view_items'            => __( 'View Mobility Equipment', 'text_domain' ),
		'search_items'          => __( 'Search Mobility Equipment', 'text_domain' ),
		'not_found'             => __( 'Mobility Aid Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Mobility Equipment Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Image of Mobility Equipment', 'text_domain' ),
		'set_featured_image'    => __( 'Set Mobility Equipment image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove Mobility Aid Image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as Mobility Aid Image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Mobility Aid', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Mobility Aid', 'text_domain' ),
		'items_list'            => __( 'Mobility Aid list', 'text_domain' ),
		'items_list_navigation' => __( 'Mobility Aid list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Mobility Aid list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Mobility Aids', 'text_domain' ),
		'description'           => __( 'A list of the mobility aids offered by Szwarcbard Pharmacy', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'mobilityaid', $args );

}
add_action( 'init', 'mobilityaid', 0 );
?>