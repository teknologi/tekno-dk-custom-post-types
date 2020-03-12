<?php

namespace Tekno_Cpt;

add_action( 'init', 'Tekno_Cpt\register_role_taxonomy' );

function register_role_taxonomy() {
  $labels = array(
    'name'                       => _x( 'Roles', 'taxonomy general name', 'teknocpt' ),
    'singular_name'              => _x( 'Role', 'taxonomy singular name', 'teknocpt' ),
    'search_items'               => __( 'Search Roles', 'teknocpt' ),
    'popular_items'              => __( 'Popular Roles', 'teknocpt' ),
    'all_items'                  => __( 'All Roles', 'teknocpt' ),
    'parent_item'                => null,
    'parent_item_colon'          => null,
    'edit_item'                  => __( 'Edit Role', 'teknocpt' ),
    'update_item'                => __( 'Update Role', 'teknocpt' ),
    'add_new_item'               => __( 'Add New Role', 'teknocpt' ),
    'new_item_name'              => __( 'New Role Name', 'teknocpt' ),
    'separate_items_with_commas' => __( 'Separate roles with commas', 'teknocpt' ),
    'add_or_remove_items'        => __( 'Add or remove roles', 'teknocpt' ),
    'choose_from_most_used'      => __( 'Choose from the most used roles', 'teknocpt' ),
    'not_found'                  => __( 'No roles found.', 'teknocpt' ),
    'menu_name'                  => __( 'Roles', 'teknocpt' ),
  );

  $args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_in_nav_menus'     => true,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'contacts' ),
  );

    register_taxonomy( 'role', 'contacts', $args );
}