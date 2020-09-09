<?php
    function content_post_types() {

         // Campus post type
        register_post_type('destination', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            'rewrite' => array('slug' => 'destinations'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Destinations',
                'add_new_item' => 'Add New Destination',
                'edit_item' => 'Edit Campus',
                'all_items' => 'All Destinations',
                'singular_name' => 'Destination'
            ),
            'menu_icon' => 'dashicons-location-alt'
        ));


        // Events post type
        register_post_type('event', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            'rewrite' => array('slug' => 'events'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => 'Event'
            ),
            'menu_icon' => 'dashicons-calendar'
        ));

        // Program post type
        register_post_type('program', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor'),
            'rewrite' => array('slug' => 'programs'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Programs',
                'add_new_item' => 'Add New Proram',
                'edit_item' => 'Edit Program',
                'all_items' => 'All Programs',
                'singular_name' => 'Program'

            ),
            'menu_icon' => 'dashicons-awards'
        ));

        // Member post type
        register_post_type('member', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor','thumbnail'),
            'rewrite' => array('slug' => 'members'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Members',
                'add_new_item' => 'Add New Member',
                'edit_item' => 'Edit member',
                'all_items' => 'All members',
                'singular_name' => 'member'

            ),
            'menu_icon' => 'dashicons-groups'
        ));

        // Spotlight post type
        register_post_type('spotlight', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor','thumbnail'),
            'rewrite' => array('slug' => 'spotlights'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Spotlights',
                'add_new_item' => 'Add New Spotlight',
                'edit_item' => 'Edit Spotlight',
                'all_items' => 'All Spotlights',
                'singular_name' => 'spotlight'

            ),
            'menu_icon' => 'dashicons-megaphone'
        ));
    }

    add_action('init', 'content_post_types'); 