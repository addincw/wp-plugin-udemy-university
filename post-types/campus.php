<?php

if (!function_exists('uu_regis_post_type_campus')) {
    function uu_regis_post_type_campus()
    {
        register_post_type('campus', [
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'rewrite' => [
                'slug' => 'campuses',
            ],
            'menu_icon' => 'dashicons-location-alt',
            'labels' => [
                'name' => 'Campuses',
                'singular_name' => 'Campus',
                'add_new_item' => 'Add New Campus',
                'edit_item' => 'Edit Campus',
                'all_items' => 'All Campuses'
            ],
        ]);
    }
}
