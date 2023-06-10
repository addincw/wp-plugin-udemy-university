<?php

if (!function_exists('uu_regis_post_type_professor')) {
    function uu_regis_post_type_professor()
    {
        register_post_type('professor', [
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'supports' => ['title', 'editor', 'thumbnail'],
            'rewrite' => [
                'slug' => 'professors',
            ],
            'menu_icon' => 'dashicons-businessperson',
            'labels' => [
                'name' => 'Professors',
                'singular_name' => 'Professor',
                'add_new_item' => 'Add New Professor',
                'edit_item' => 'Edit Professor',
                'all_items' => 'All Professors'
            ],
        ]);
    }
}
