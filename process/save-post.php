<?php

function m_save_post_admin( $post_id, $post, $update ) {
  if(!$update) {
    return;
  }
  // Sanitize Data
  $map_data                     = array();
  $map_data['addressLine1']     = sanitize_text_field( $_POST['m_addressLine1'] );
  $map_data['addressLine2']     = sanitize_text_field( $_POST['m_addressLine2'] );
  $map_data['city']             = sanitize_text_field( $_POST['m_city'] );
  $map_data['state']            = sanitize_text_field( $_POST['m_state'] );
  $map_data['zipCode']          = sanitize_text_field( $_POST['m_zipCode'] );
  $map_data['marker_content']   = sanitize_text_field( $_POST['m_marker_content'] );
  $map_data['long']             = 0;
  $map_data['lat']              = 0;


  // update post data
  update_post_meta( $post_id, 'map_data', $map_data);

}