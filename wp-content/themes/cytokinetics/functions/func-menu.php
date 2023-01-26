<?php
/**
 * Menu functions
 *
 * @author   TF
 * @version  1.0.0
 * @package  
 */

/**
 * Register nav menus
 */
 function register_my_menus() {
  register_nav_menus(
    array(
      'main' => __( 'Main Navigation' ),
			'utility' => __( 'Utility Navigation' ),
      'footer' => __( 'Footer Navigation' )
    )
  );
}
add_action( 'init', 'register_my_menus' );
