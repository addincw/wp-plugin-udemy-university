<?php

if (!function_exists('uu_regis_post_type_my_note')) {
    function uu_regis_post_type_my_note()
    {
        register_post_type('my-note', [
            'public' => false,
            'show_ui' => true,
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-welcome-write-blog',
            'labels' => [
                'name' => 'My Notes',
                'singular_name' => 'My Note',
                'add_new_item' => 'Add New Note',
                'edit_item' => 'Edit Note',
                'all_items' => 'All My Notes'
            ],
        ]);
    }
}
