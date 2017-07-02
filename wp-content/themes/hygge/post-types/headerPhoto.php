<?php

function headerPhoto_init() {
	register_post_type( 'portfolio', array(
		'labels'            => array(
			'name'                => __( 'headerPhotos', 'Hygge' ),
			'singular_name'       => __( 'headerPhoto', 'Hygge' ),
			'all_items'           => __( 'All headerPhotos', 'Hygge' ),
			'new_item'            => __( 'New headerPhoto', 'Hygge' ),
			'add_new'             => __( 'Add New', 'Hygge' ),
			'add_new_item'        => __( 'Add New headerPhoto', 'Hygge' ),
			'edit_item'           => __( 'Edit headerPhoto', 'Hygge' ),
			'view_item'           => __( 'View headerPhoto', 'Hygge' ),
			'search_items'        => __( 'Search headerPhotos', 'Hygge' ),
			'not_found'           => __( 'No headerPhotos found', 'Hygge' ),
			'not_found_in_trash'  => __( 'No headerPhotos found in trash', 'Hygge' ),
			'parent_item_colon'   => __( 'Parent headerPhoto', 'Hygge' ),
			'menu_name'           => __( 'headerPhotos', 'Hygge' ),
		),
		'public'            => true,
		'hierarchical'      => false,
		'show_ui'           => true,
		'show_in_nav_menus' => true,
		'supports'          => array( 'title', 'editor' ),
		'has_archive'       => true,
		'rewrite'           => true,
		'query_var'         => true,
		'menu_icon'         => 'dashicons-admin-tools',
		'show_in_rest'      => true,
		'rest_base'         => 'headerPhoto',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
	) );

}
add_action( 'init', 'headerPhoto_init' );

function headerPhoto_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['headerPhoto'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('headerPhoto updated. <a target="_blank" href="%s">View headerPhoto</a>', 'Hygge'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'Hygge'),
		3 => __('Custom field deleted.', 'Hygge'),
		4 => __('headerPhoto updated.', 'Hygge'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('headerPhoto restored to revision from %s', 'Hygge'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('headerPhoto published. <a href="%s">View headerPhoto</a>', 'Hygge'), esc_url( $permalink ) ),
		7 => __('headerPhoto saved.', 'Hygge'),
		8 => sprintf( __('headerPhoto submitted. <a target="_blank" href="%s">Preview headerPhoto</a>', 'Hygge'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('headerPhoto scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview headerPhoto</a>', 'Hygge'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('headerPhoto draft updated. <a target="_blank" href="%s">Preview headerPhoto</a>', 'Hygge'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}
add_filter( 'post_updated_messages', 'headerPhoto_updated_messages' );