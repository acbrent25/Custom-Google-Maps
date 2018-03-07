<?php
function m_create_metaboxes() {
  add_meta_box( 
    'acgmap_map_options_mb',  // ID
    __( 'Maps Options', 'map' ), // Meta Box Name 
    'acgmap_map_options_mb', // Callback Function
    'map', // What post type it will appear in 
    'advanced', // Where the Meta Box will appear (3 options: normal, advanced, side )
    'high' // Priority (high, core, low, default)
  );
}