<?php

function m_activate_plugin(){
  // check if compatible with current wordpress
    if(version_compare( get_bloginfo( 'version'), '4.5', '<' ) ){
        wp_die(__( 'You must update wordress to use this plugin', 'acgmap') );
    }

    global $wpdb;

    $createSQL      =  " 
        CREATE TABLE `" . $wpdb->prefix . "map_coordinates` (
        `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        `map_id` BIGINT(20) UNSIGNED NOT NULL,
        `longitude` BIGINT(20) UNSIGNED NOT NULL,
        `latitude` BIGINT(20) UNSIGNED NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB " . $wpdb->get_charset_collate() . " AUTO_INCREMENT=1;
        ";

        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
	    dbDelta( $createSQL );
}