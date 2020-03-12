<?php

namespace Tekno_Cpt;

function contacts_auto_generate_slug_title( $post_id ) {

    global $post;

    if( $post->post_type == 'contacts' ) {
        $title = get_field('name', $post_id);
        $slug = wp_unique_post_slug(sanitize_title( trim( $title ) ), $post->ID, $post->post_status, $post->post_type, $post->post_parent);

    $content = array(
        'ID' => $post_id,
        'post_title' => $title,
        'post_name' => $slug
    );
    remove_action( 'save_post', 'Tekno_Cpt\contacts_auto_generate_slug_title' ); // prevent a loop
    wp_update_post($content);

    add_action( 'save_post', 'Tekno_Cpt\contacts_auto_generate_slug_title', 10, 3 );
    }
}

add_action( 'save_post', 'Tekno_Cpt\contacts_auto_generate_slug_title', 10, 3 );