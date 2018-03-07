<?php

function map_admin_init() {
  include( 'create-metaboxes.php' );
  include( 'map-options.php' );
  include('enqueue.php');

  add_action( 'add_meta_boxes_map', 'm_create_metaboxes' );
  add_action( 'admin_enqueue_scripts', 'm_admin_enqueue' );
}