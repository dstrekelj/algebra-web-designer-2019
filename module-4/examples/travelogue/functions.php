<?php

function travelogue_init() {
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'header' => 'Header menu',
        'footer' => 'Footer menu'
    ));
}

add_action('init', 'travelogue_init');
