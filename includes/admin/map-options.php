<?php 

function acgmap_map_options_mb($post){
  $map_data         = get_post_meta($post->ID, 'map_data', true );

  if( empty($map_data)) {
    $map_data         = array(
      'addressLine1'      => '',
      'addressLine2'      => '',
      'city'              => '',
      'state'             => '',
      'zipCode'           => '',
      'marker_content'    => ''
    );
  }
  ?> 

  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="form-group">
          <label for="m_addressLine1">Street Address</label>
          <input type="text" class="form-control" name="m_addressLine1" value="<?php echo $map_data['addressLine1']; ?>" id="m_addressLine1" placeholder="Enter Street Address">
        </div>
      </div>
      <div class="col-12">
        <div class="form-group">
          <label for="m_addressLine2">Address Line 2</label>
          <input type="text" class="form-control" name="m_addressLine2" value="<?php echo $map_data['addressLine2']; ?>" id="m_addressLine2" placeholder="Enter Additional Address Info">
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="form-group">
          <label for="m_city">City</label>
          <input type="text" class="form-control" name="m_city" value="<?php echo $map_data['city']; ?>" id="m_city" placeholder="Enter City">
        </div>
      </div>
      <div class="col-2">
        <div class="form-group">
          <label for="m_state">State</label>
          <input type="text" class="form-control" name="m_state" value="<?php echo $map_data['state']; ?>" id="m_state" placeholder="Enter State">
        </div>
      </div>
      <div class="col-4">
        <div class="form-group">
          <label for="m_zipCode">Zip Code</label>
          <input type="text" class="form-control" name="m_zipCode" value="<?php echo $map_data['zipCode']; ?>" id="m_zipCode" placeholder="Enter Zip Code">
        </div>
      </div>
      <div class="col-12">
        <div class="form-group">
          <label for="m_marker_content">Map Marker Content</label>
          <input type="text" class="form-control" name="m_marker_content" value="<?php echo $map_data['marker_content']; ?>" id="m_marker_content" placeholder="Enter Map Marker Content">
        </div>
      </div>
    </div>
  </div>

  <?php 
}