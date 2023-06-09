<?php

if (!function_exists('uu_regis_post_type_event')) {
    function uu_regis_post_type_event()
    {
        register_post_type('event', [
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'rewrite' => [
                'slug' => 'events',
            ],
            'menu_icon' => 'dashicons-calendar-alt',
            'labels' => [
                'name' => 'Events',
                'singular_name' => 'Event',
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events'
            ],
        ]);
    }
}
