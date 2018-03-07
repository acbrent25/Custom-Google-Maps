<?php

function m_activate_plugin(){
  // check if compatible with current wordpress
    if(version_compare( get_bloginfo( 'version'), '4.5', '<' ) ){
        wp_die(__( 'You must update wordress to use this plugin', 'acgmap') );
    }
}