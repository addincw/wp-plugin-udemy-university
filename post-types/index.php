<?php

require_once __DIR__ . '/campus.php';
require_once __DIR__ . '/event.php';
require_once __DIR__ . '/program.php';
require_once __DIR__ . '/professor.php';

if (!function_exists('uu_register_custom_post_types')) {
    function uu_register_custom_post_types()
    {
        uu_regis_post_type_professor();
        uu_regis_post_type_program();
        uu_regis_post_type_campus();
        uu_regis_post_type_event();
    }
}
