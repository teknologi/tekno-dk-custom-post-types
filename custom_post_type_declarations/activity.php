<?php
namespace Tekno_Cpt;

// Register Custom Post Type
function register_activity_cpt() {

    $labels = array(
        'name'                  => _x( 'Activities', 'Post Type General Name', 'teknocpt' ),
        'singular_name'         => _x( 'Activity', 'Post Type Singular Name', 'teknocpt' ),
        'menu_name'             => __( 'Activities', 'teknocpt' ),
        'name_admin_bar'        => __( 'Activity', 'teknocpt' ),
        'archives'              => __( 'Activities', 'teknocpt' ),
        'attributes'            => __( 'Activity Attributes', 'teknocpt' ),
        'parent_item_colon'     => __( 'Parent Activity:', 'teknocpt' ),
        'all_items'             => __( 'All Activities', 'teknocpt' ),
        'add_new_item'          => __( 'Add New Activity', 'teknocpt' ),
        'add_new'               => __( 'Add New', 'teknocpt' ),
        'new_item'              => __( 'New Activity', 'teknocpt' ),
        'edit_item'             => __( 'Edit Activity', 'teknocpt' ),
        'update_item'           => __( 'Update Activity', 'teknocpt' ),
        'view_item'             => __( 'View Activity', 'teknocpt' ),
        'view_items'            => __( 'View Activities', 'teknocpt' ),
        'search_items'          => __( 'Search Activity', 'teknocpt' ),
        'not_found'             => __( 'Not found', 'teknocpt' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'teknocpt' ),
        'featured_image'        => __( 'Featured Image', 'teknocpt' ),
        'set_featured_image'    => __( 'Set featured image', 'teknocpt' ),
        'remove_featured_image' => __( 'Remove featured image', 'teknocpt' ),
        'use_featured_image'    => __( 'Use as featured image', 'teknocpt' ),
        'insert_into_item'      => __( 'Insert into activity', 'teknocpt' ),
        'uploaded_to_this_item' => __( 'Uploaded to this activity', 'teknocpt' ),
        'items_list'            => __( 'Activities list', 'teknocpt' ),
        'items_list_navigation' => __( 'Activities list navigation', 'teknocpt' ),
        'filter_items_list'     => __( 'Filter activities list', 'teknocpt' ),
    );
    $args = array(
        'label'                 => __( 'Activity', 'teknocpt' ),
        'description'           => __( 'Activities for projects', 'teknocpt' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'revisions' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => 'activities',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'rest_controller_class' => 'WP_REST_Activities_Controller',
    );
    register_post_type( 'activity', $args );

}
add_action( 'init', 'Tekno_Cpt\register_activity_cpt', 0 );

?>