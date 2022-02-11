<?php

function my_custom_post_vcard()
{
    $labels = array(
        'name'               => _x('vcard', 'post type general name'),
        'singular_name'      => _x('Vcard', 'post type singular name'),
        'add_new'            => _x('Add New', 'book'),
        'add_new_item'       => __('Add New Vcard'),
        'edit_item'          => __('Edit Vcard'),
        'new_item'           => __('New Vcard'),
        'all_items'          => __('All Vcards'),
        'view_item'          => __('View Vcard'),
        'search_items'       => __('Search vcard'),
        'not_found'          => __('No vcard found'),
        'not_found_in_trash' => __('No vcard found in the Trash'),
        'parent_item_colon'  => '',
        'menu_name'          => 'vcard'
    );

    $args = array(
        'labels'        => $labels,
        'description'   => 'Self vcard',
        'public'        => true,
        'menu_position' => 2,
        'rewrite'       => array('slug' => 'vcard'), //or some other slug :)
        'supports'      => array('title'),
        'has_archive'   => true,
        'capability_type' => 'page',
        'menu_icon'     => 'dashicons-cart',

    );
    register_post_type('Vcard', $args);
}
add_action('init', 'my_custom_post_vcard');



/**THERE IS ANOTHER WAY ADDING SELF TOXONOMY BY THE CODE BELOW BUT I DID IT THE SHORT WAY FROM FUNCTIONS.PHP FILE
 * IF YOU ANCOMMENT THE CODE BELOW YOU WILL HAVE ON ADMI DASHBOARD THE CATEGORY......
 */
/**================================================================================================================== */

// function my_taxonomies_Vcard()
// {
//     $labels = array(
//         'name'              => _x('Vcard Categories', 'taxonomy general name'),
//         'singular_name'     => _x('Vcard Category', 'taxonomy singular name'),
//         'search_items'      => __('Search Vcard Categories'),
//         'all_items'         => __('All Vcard Categories'),
//         'parent_item'       => __('Parent Vcard Category'),
//         'parent_item_colon' => __('Parent Vcard Category:'),
//         'edit_item'         => __('Edit Vcard Category'),
//         'update_item'       => __('Update Vcard Category'),
//         'add_new_item'      => __('Add New Vcard Category'),
//         'new_item_name'     => __('New Vcard Category'),
//         'menu_name'         => __('Vcard Categories'),
//     );
//     $args = array(
//         'labels' => $labels,
//         'hierarchical' => true,
//     );
//     register_taxonomy('Vcard_category', 'Vcard', $args);
// }
// add_action('init', 'my_taxonomies_Vcard', 0);

/**================================================================================================================== */