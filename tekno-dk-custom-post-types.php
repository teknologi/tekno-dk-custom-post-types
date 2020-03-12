<?php

/**
 * Plugin Name: Tekno.dk custom post types
 * Description: Custom post types and their relations for tekno.dk
 * Version: 0.0.1
 * Plugin URI: https://github.com/teknologi/tekno-dk-custom-post-types
 * Author: Hans Czajkowski Jørgensen
 * Text Domain: teknocpt
 * Domain Path: /languages
 */
namespace Tekno_Cpt;

if ( !defined( 'ABSPATH' ) )
    exit;

/**
 * Load paths need to be set in this file to work
 */
add_filter( 'acf/settings/load_json', function ( $paths ) {
    $paths[] = plugin_dir_path( __FILE__ ).'acf-json';
    return $paths;
});


/**
 *
 */
class Tekno_Cpt
{

    public function load()
    {
        $cpt_file_names = array("activity", "project", "contact", "article");

        foreach ($cpt_file_names as $cpt_file_name) {
            include_once "custom_post_type_declarations/{$cpt_file_name}.php";
        }

        include_once 'actions/contacts_auto_generate_slug_title.php';

    }
}

function tekno_cpt_load() {
    $tekno_cpt = new Tekno_Cpt();
    $tekno_cpt->load();
}

add_action('plugins_loaded', 'Tekno_Cpt\tekno_cpt_load');
