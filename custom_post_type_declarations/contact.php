<?php
namespace Tekno_Cpt;

// Register Custom Post Type
function register_contact_cpt() {

    $labels = array(
        'name'                  => _x( 'Contacts', 'Post Type General Name', 'teknocpt' ),
        'singular_name'         => _x( 'Contact', 'Post Type Singular Name', 'teknocpt' ),
        'menu_name'             => __( 'Contacts', 'teknocpt' ),
        'name_admin_bar'        => __( 'Contact', 'teknocpt' ),
        'archives'              => __( 'Contacts', 'teknocpt' ),
        'attributes'            => __( 'Contact Attributes', 'teknocpt' ),
        'parent_item_colon'     => __( 'Parent Contact:', 'teknocpt' ),
        'all_items'             => __( 'All Contacts', 'teknocpt' ),
        'add_new_item'          => __( 'Add New Contact', 'teknocpt' ),
        'add_new'               => __( 'Add New', 'teknocpt' ),
        'new_item'              => __( 'New Contact', 'teknocpt' ),
        'edit_item'             => __( 'Edit Contact', 'teknocpt' ),
        'update_item'           => __( 'Update Contact', 'teknocpt' ),
        'view_item'             => __( 'View Contact', 'teknocpt' ),
        'view_items'            => __( 'View Contacts', 'teknocpt' ),
        'search_items'          => __( 'Search Contact', 'teknocpt' ),
        'not_found'             => __( 'Not found', 'teknocpt' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'teknocpt' ),
        'featured_image'        => __( 'Featured Image', 'teknocpt' ),
        'set_featured_image'    => __( 'Set featured image', 'teknocpt' ),
        'remove_featured_image' => __( 'Remove featured image', 'teknocpt' ),
        'use_featured_image'    => __( 'Use as featured image', 'teknocpt' ),
        'insert_into_item'      => __( 'Insert into contact', 'teknocpt' ),
        'uploaded_to_this_item' => __( 'Uploaded to this contact', 'teknocpt' ),
        'items_list'            => __( 'Contacts list', 'teknocpt' ),
        'items_list_navigation' => __( 'Contacts list navigation', 'teknocpt' ),
        'filter_items_list'     => __( 'Filter contacts list', 'teknocpt' ),
    );
    $args = array(
        'label'                 => __( 'Contact', 'teknocpt' ),
        'description'           => __( 'Danish Board of Technology contacts', 'teknocpt' ),
        'labels'                => $labels,
        'supports'              => array( 'revisions' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
        'rewrite'             => array('slug' => 'contact', 'feeds' => false),
    );

    register_post_type( 'contacts', $args );

}
add_action( 'init', 'Tekno_Cpt\register_contact_cpt', 0 );

?>