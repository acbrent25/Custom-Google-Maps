<?php 

function map_init(){
  $labels = array(
		'name'               => _x( 'Maps', 'post type general name', 'acgmap' ),
		'singular_name'      => _x( 'Map', 'post type singular name', 'acgmap' ),
		'menu_name'          => _x( 'Maps', 'admin menu', 'acgmap' ),
		'name_admin_bar'     => _x( 'Map', 'add new on admin bar', 'acgmap' ),
		'add_new'            => _x( 'Add New', 'map', 'acgmap' ),
		'add_new_item'       => __( 'Add New Map', 'acgmap' ),
		'new_item'           => __( 'New Map', 'acgmap' ),
		'edit_item'          => __( 'Edit Map', 'acgmap' ),
		'view_item'          => __( 'View Map', 'acgmap' ),
		'all_items'          => __( 'All Maps', 'acgmap' ),
		'search_items'       => __( 'Search Maps', 'acgmap' ),
		'parent_item_colon'  => __( 'Parent Maps:', 'acgmap' ),
		'not_found'          => __( 'No maps found.', 'acgmap' ),
		'not_found_in_trash' => __( 'No maps found in Trash.', 'acgmap' )
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'acgmap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'map' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 20,
    'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    'taxonomies'         => array( 'category', 'post_tag' )
	);

	register_post_type( 'map', $args );
}