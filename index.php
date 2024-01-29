<?php

/**
 * registering functionality for wp-theme-udemy-university.
 * 
 * 
 * this is in subdirectories, so You may want to create 
 * a proxy PHP loader file inside the mu-plugins directory,
 * 
 * ex: require WPMU_PLUGIN_DIR.'/our-plugin/index.php'
 */

require_once __DIR__ . '/post-types/index.php';
require_once __DIR__ . '/api.php';

add_action('init', 'uu_register_custom_post_types');

add_action('rest_api_init', 'uu_register_routes_api');
