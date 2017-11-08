<?php
/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_html5()
{

    register_post_type('services', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Service', 'html5blank'), // Rename these to suit
            'singular_name' => __('Service', 'html5blank'),
            'add_new' => __('Add New', 'html5blank'),
            'add_new_item' => __('Add New service', 'html5blank'),
            'edit' => __('Edit', 'html5blank'),
            'edit_item' => __('Edit service', 'html5blank'),
            'new_item' => __('New service', 'html5blank'),
            'view' => __('View service', 'html5blank'),
            'view_item' => __('View service', 'html5blank'),
            'search_items' => __('Search service', 'html5blank'),
            'not_found' => __('No services found', 'html5blank'),
            'not_found_in_trash' => __('No services found in Trash', 'html5blank')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'menu_icon' => 'dashicons-info',   // http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'can_export' => true // Allows export in Tools > Export
    ));
    register_taxonomy(
        'type_of_staff',    // Taxonomy
        'services',             // Object Type
        array(
            'label' => __( 'Type of Services' ),
            'rewrite' => array( 'slug' => 'services' ),
            'hierarchical' => true, // Is this taxonomy hierarchical like categories or not hierarchical like tags.
        )
    );

}
