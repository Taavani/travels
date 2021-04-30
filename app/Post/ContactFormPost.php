<?php

/**
 *
 */

namespace App\Post;

use Carbon_Fields\Container;
use Carbon_Fields\Field\Field;

/**
 * Bootstrap the contact custom post type.
 */
add_action('init', function () {
    $labels = [
        'name'                  => _x('Inquiry', 'Post Type General Name', 'travels'),
        'singular_name'         => _x('Inquiry', 'Post Type Singular Name', 'travels'),
        'menu_name'             => __('Inquiries', 'travels'),
        'name_admin_bar'        => __('Inquiry', 'travels'),
        'archives'              => __('Inquiry archive', 'travels'),
        'attributes'            => __('Inquiry Attributes', 'travels'),
        'all_items'             => __('All Inquiries', 'travels'),
        'add_new_item'          => __('Add New Inquiry', 'travels'),
        'add_new'               => __('Add New Inquiry', 'travels'),
        'new_item'              => __('New Inquiry', 'travels'),
        'edit_item'             => __('Edit Inquiry', 'travels'),
        'update_item'           => __('Update Inquiry', 'travels'),
        'view_item'             => __('View Inquiry', 'travels'),
        'view_items'            => __('View Inquiries', 'travels'),
        'search_items'          => __('Search Inquiries', 'travels'),
        'not_found'             => __('No Inquiries found', 'travels'),
        'not_found_in_trash'    => __('No Inquiries in Trash', 'travels'),
        'featured_image'        => __('Featured Image', 'travels'),
        'set_featured_image'    => __('Set featured image', 'travels'),
        'remove_featured_image' => __('Remove featured image', 'travels'),
        'use_featured_image'    => __('Use as featured image', 'travels'),
        'insert_into_item'      => __('Insert into Inquires', 'travels'),
        'uploaded_to_this_item' => __('Uploaded to Inquiry', 'travels'),
        'items_list'            => __('List of Inquires', 'travels'),
        'items_list_navigation' => __('Inquires list navigation', 'travels'),
        'filter_items_list'     => __('Filter list of Inquiries', 'travels')
    ];

    $rewrite = [
        'slug'       => 'inquires',
        'with_front' => true,
        'pages'      => true,
        'feeds'      => false,
    ];

    $args = [
        'label'               => __('Inquiry', 'travels'),
        'labels'              => $labels,
        // A short descriptive summary of what the post type is
        'description'         => __('This is a collection of enquiries from potential customers.', 'travels'),
        // Whether a post type is intended for use publicly either via the admin interface or by front-end users.
        'public'              => false,
        // Whether the post type is hierarchical (e.g. page).
        'hierarchical'        => false,
        // Whether to exclude posts with this post type from front end search results
        'exclude_from_search' => true,
        // Whether queries can be performed on the front end for the post type as part of parse_request().
        'publicly_queryable'  => true,
        // Whether to generate and allow a UI for managing this post type in the admin
        'show_ui'             => true,
        // Where to show the post type in the admin menu. To work, $show_ui must be true.
        'show_in_menu'        => true,
        // Makes this post type available for selection in navigation menus.
        'show_in_nav_menus'   => false,
        // Makes this post type available via the admin bar
        'show_in_admin_bar'   => true,
        //  Whether to include the post type in the REST API. Set this to true for the post type to be available in
        // the block editor.
        'show_in_rest'        => true,
        // To change the base url of REST API route.
        // 'rest_base'           => null,
        // REST API Controller class name.
        // 'rest_controller_class' => null,
        // The position in the menu order the post type should appear.
        'menu_position'       => 20,
        // The url to the icon to be used for this menu.
        'menu_icon'           => 'dashicons-format-chat',
        'capability_type'     => 'page',
        // Array of capabilities for this post type.
        // 'capabilities'        => [],
        // 'map_meta_cap'        => false,
        'supports'            => [ 'title', 'revisions' ],
        // 'register_meta_box_cb' => null,
        'taxonomies'          => [],
        'has_archive'         => true,
        'rewrite'             => $rewrite,
        'query_var'           => true,
        'can_export'          => true,
        'delete_with_user'    => false
    ];

    register_post_type('travels-contact', $args);
}, 0);

/**
 * Remove Publish meta box from the custom post type date
 */
add_action('admin_menu', function () {
    remove_meta_box('submitdiv', 'travels-contact', 'side');
});

/**
 *
 */
add_action('carbon_fields_register_fields', function () {
    Container::make('post_meta', __('Customer information', 'travels'))
        ->where('post_type', '=', 'travels-contact')
        ->add_fields(array(
            Field::make('text', 'travels_contact_name', __('Name', 'travels'))
                ->set_attribute('type', 'text')
                ->set_attribute('readOnly', true),
            Field::make('text', 'travels_contact_email', __('Email', 'travels'))
                ->set_attribute('type', 'email')
                ->set_attribute('readOnly', true),
            Field::make('text', 'travels_contact_phone', __('Phone', 'travels'))
                ->set_attribute('type', 'tel')
                ->set_attribute('readOnly', true),
            Field::make('textarea', 'travels_contact_message', __('Message', 'travels'))
                ->set_attribute('readOnly', true),
            Field::make('select', 'travels_contact_status', __('Status', 'travels'))
                ->set_options(array(
                    'awaiting' => __('Awaiting', 'travels'),
                    'replied' => __('Replied', 'travels'),
                    'finished_no_offer' => __('Finished (No purchase)', 'travels'),
                    'finished_offer' => __('Finished (Purchase)', 'travels')
                ))
        ));
});
