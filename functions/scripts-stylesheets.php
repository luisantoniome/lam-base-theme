<?php

/**
 * Stylesheets and scripts registration
 * @since 1.0
 */

function lam_load_styles() {

  wp_register_style( 'theme_style', get_stylesheet_uri(), '', 1.0, 'all' );

  wp_enqueue_style( 'theme_style' );

}

add_action( 'wp_enqueue_scripts', 'lam_load_styles' );

function lam_load_scripts() {

  wp_register_script( 'theme_scripts', get_stylesheet_directory_uri() . '/js/index.js', '', '0.1', true );

  wp_enqueue_script( 'theme_scripts' );

}

add_action( 'wp_enqueue_scripts', 'lam_load_scripts' );