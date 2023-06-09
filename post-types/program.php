<?php

if (!function_exists('uu_regis_post_type_program')) {
    function uu_regis_post_type_program()
    {
        register_post_type('program', [
            'public' => true,
            'show_in_rest' => true,
            'has_archive' => true,
            'rewrite' => [
                'slug' => 'programs',
            ],
            'menu_icon' => 'dashicons-welcome-learn-more',
            'labels' => [
                'name' => 'Progams',
                'singular_name' => 'Progam',
                'add_new_item' => 'Add New Progam',
                'edit_item' => 'Edit Progam',
                'all_items' => 'All Progams'
            ],
        ]);
    }
}
