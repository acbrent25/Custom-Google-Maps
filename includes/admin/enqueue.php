<?php

function m_admin_enqueue() {

  global $typenow;
  if( $typenow != 'map' ){
    return;
  }


  wp_register_style(
    'ac_bootstrap',
    plugins_url( '/assets/css/bootstrap.min.css', MAP_PLUGIN_URL )
  );

  wp_enqueue_style( 'ac_bootstrap' );
}