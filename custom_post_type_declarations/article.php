<?php
namespace Tekno_Cpt;

// Register Custom Post Type
function register_article_cpt() {

    $labels = array(
        'name'                  => _x( 'Articles', 'Post Type General Name', 'teknocpt' ),
        'singular_name'         => _x( 'Article', 'Post Type Singular Name', 'teknocpt' ),
        'menu_name'             => __( 'Articles', 'teknocpt' ),
        'name_admin_bar'        => __( 'Article', 'teknocpt' ),
        'archives'              => __( 'Articles', 'teknocpt' ),
        'attributes'            => __( 'Article Attributes', 'teknocpt' ),
        'parent_item_colon'     => __( 'Parent Article:', 'teknocpt' ),
        'all_items'             => __( 'All Articles', 'teknocpt' ),
        'add_new_item'          => __( 'Add New Article', 'teknocpt' ),
        'add_new'               => __( 'Add New', 'teknocpt' ),
        'new_item'              => __( 'New Article', 'teknocpt' ),
        'edit_item'             => __( 'Edit Article', 'teknocpt' ),
        'update_item'           => __( 'Update Article', 'teknocpt' ),
        'view_item'             => __( 'View Article', 'teknocpt' ),
        'view_items'            => __( 'View Articles', 'teknocpt' ),
        'search_items'          => __( 'Search Article', 'teknocpt' ),
        'not_found'             => __( 'Not found', 'teknocpt' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'teknocpt' ),
        'featured_image'        => __( 'Featured Image', 'teknocpt' ),
        'set_featured_image'    => __( 'Set featured image', 'teknocpt' ),
        'remove_featured_image' => __( 'Remove featured image', 'teknocpt' ),
        'use_featured_image'    => __( 'Use as featured image', 'teknocpt' ),
        'insert_into_item'      => __( 'Insert into article', 'teknocpt' ),
        'uploaded_to_this_item' => __( 'Uploaded to this article', 'teknocpt' ),
        'items_list'            => __( 'Articles list', 'teknocpt' ),
        'items_list_navigation' => __( 'Articles list navigation', 'teknocpt' ),
        'filter_items_list'     => __( 'Filter articles list', 'teknocpt' ),
    );
    $args = array(
        'label'                 => __( 'Article', 'teknocpt' ),
        'description'           => __( 'Articles description', 'teknocpt' ),
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
        'has_archive'           => false,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'rewrite'               => array('feeds' => false),

    );
    register_post_type( 'article', $args );

}
add_action( 'init', 'Tekno_Cpt\register_article_cpt', 0 );

?>