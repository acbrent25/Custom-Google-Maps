<?php 

function m_enqueue_scripts() {

    wp_register_script(
        'm_gmaps',
        plugins_url('/assets/gmaps/gmaps.js', MAP_PLUGIN_URL),
        array('jquery'),
        '1.0.0',
        true
    );

    wp_register_script(
        'm_main',
        plugins_url('/assets/scripts/main.js', MAP_PLUGIN_URL),
        array('jquery'),
        '1.0.0',
        true
    );

    wp_register_script(
        'm_gmap_api', 'http://maps.google.com/maps/api/js?key=AIzaSyAYMZs9XbPOQgrK416F7cMNulYn3EKt--w', array(), false, true
    );

    wp_enqueue_script('m_gmap_api');
    wp_enqueue_script('m_gmaps');
    wp_enqueue_script('m_main');
};