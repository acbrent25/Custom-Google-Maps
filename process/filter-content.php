<?php 

function m_filter_map_content($content) {
    if(!is_singular('map')) {
        return $content;
    }

    global $post;
    $map_html               =   file_get_contents('map-template.php', true);
    $map_data               = get_post_meta($post->ID, 'map_data', true);
    $map_html               = str_replace('ADDRESSLINE1_PH', $map_data['addressLine1'], $map_html);
    $map_html               = str_replace('ADDRESSLINE2_PH', $map_data['addressLine2'], $map_html);
    $map_html               = str_replace('CITY_PH', $map_data['city'], $map_html);
    $map_html               = str_replace('STATE_PH', $map_data['state'], $map_html);
    $map_html               = str_replace('ZIPCODE_PH', $map_data['zipCode'], $map_html);

    $map_html               = str_replace('MAP_ID', $post->ID, $map_html);
    
    return $map_html . $content;
};