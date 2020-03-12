<?php
namespace Tekno_Cpt;

// Register Custom Post Type
function register_project_cpt() {

    $labels = array(
        'name'                  => _x( 'Projects', 'Post Type General Name', 'teknocpt' ),
        'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'teknocpt' ),
        'menu_name'             => __( 'Projects', 'teknocpt' ),
        'name_admin_bar'        => __( 'Project', 'teknocpt' ),
        'archives'              => __( 'Projects', 'teknocpt' ),
        'attributes'            => __( 'Project Attributes', 'teknocpt' ),
        'parent_item_colon'     => __( 'Parent Project:', 'teknocpt' ),
        'all_items'             => __( 'All Projects', 'teknocpt' ),
        'add_new_item'          => __( 'Add New Project', 'teknocpt' ),
        'add_new'               => __( 'Add New', 'teknocpt' ),
        'new_item'              => __( 'New Project', 'teknocpt' ),
        'edit_item'             => __( 'Edit Project', 'teknocpt' ),
        'update_item'           => __( 'Update Project', 'teknocpt' ),
        'view_item'             => __( 'View Project', 'teknocpt' ),
        'view_items'            => __( 'View Projects', 'teknocpt' ),
        'search_items'          => __( 'Search Project', 'teknocpt' ),
        'not_found'             => __( 'Not found', 'teknocpt' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'teknocpt' ),
        'featured_image'        => __( 'Featured Image', 'teknocpt' ),
        'set_featured_image'    => __( 'Set featured image', 'teknocpt' ),
        'remove_featured_image' => __( 'Remove featured image', 'teknocpt' ),
        'use_featured_image'    => __( 'Use as featured image', 'teknocpt' ),
        'insert_into_item'      => __( 'Insert into project', 'teknocpt' ),
        'uploaded_to_this_item' => __( 'Uploaded to this project', 'teknocpt' ),
        'items_list'            => __( 'Projects list', 'teknocpt' ),
        'items_list_navigation' => __( 'Projects list navigation', 'teknocpt' ),
        'filter_items_list'     => __( 'Filter projects list', 'teknocpt' ),
    );
    $args = array(
        'label'                 => __( 'Project', 'teknocpt' ),
        'description'           => __( 'Danish Board of Technology projects', 'teknocpt' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => 'projects',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        // 'rest_controller_class' => 'WP_REST_Projects_Controller',
        'rewrite'             => array('slug' => 'project', 'feeds' => false),

    );
    register_post_type( 'projects', $args );

}
add_action( 'init', 'Tekno_Cpt\register_project_cpt', 0 );

?>