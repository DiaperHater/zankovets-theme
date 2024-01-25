<?php

define('DEBUG', true);

if (!defined('S_VERSION')) {
  define('S_VERSION', DEBUG ? microtime() : '1.0.0');
}

add_theme_support('title-tag');

if (!is_admin()) {

  function zankovets_theme_setup()
  {

    // Styles
    wp_enqueue_style('zankovets-fonts', get_theme_file_uri('/assets/css/fonts.css'), array(), S_VERSION, 'all');
    wp_enqueue_style('zankovets-styles', get_theme_file_uri('/assets/css/styles.css'), array('zankovets-fonts'), S_VERSION, 'all');

    // Scripts    
    wp_enqueue_script('zankovets-script', get_theme_file_uri('/assets/js/main.js'), array(), S_VERSION, true);
  }
  add_action('after_setup_theme', 'zankovets_theme_setup');
}
