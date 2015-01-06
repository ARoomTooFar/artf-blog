<?php
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'A Room Too Far', 'theme_domain' );
  }
  return $title . ' | A Room Too Far';
}
