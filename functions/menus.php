<?php

function lam_register_menus() {

  register_nav_menus(array(
    'main-menu' => __('Main Menu', 'lam')
  ));

}

add_action( 'init', 'lam_register_menus' );