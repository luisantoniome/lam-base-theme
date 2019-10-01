<?php

/**
 * Sidebars registration
 * @since 1.0
 */

function lam_register_sidebars() {

  register_sidebar(array(
    'name'          => __( 'Sidebar', 'lam-base-theme' ),
    'id'            => 'main-sidebar',
    'description'   => __( 'This is the main widget area', 'lam-base-theme' ),
    'class'         => '',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>'
  ));

}

add_action( 'widgets_init', 'lam_register_sidebars' );