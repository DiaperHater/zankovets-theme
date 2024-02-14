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
    wp_enqueue_style('swiper-styles', get_theme_file_uri('/assets/css/swiper.min.css'), array(), '10.0.5', 'all');
    wp_enqueue_style('zankovets-fonts', get_theme_file_uri('/assets/css/fonts.css'), array(), S_VERSION, 'all');
    wp_enqueue_style('zankovets-styles', get_theme_file_uri('/assets/css/styles.css'), array('zankovets-fonts', 'wp-block-library'), S_VERSION, 'all');

    // Scripts    
    wp_enqueue_script('swiper-script', get_theme_file_uri('/assets/js/swiper-bundle.min.js'), array(), '10.0.5', true);
    wp_enqueue_script('zankovets-script', get_theme_file_uri('/assets/js/main.js'), array('swiper-script'), S_VERSION, true);
  }
  add_action('after_setup_theme', 'zankovets_theme_setup');
}

function zankovets_admin_theme_setup()
{
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'zankovets_admin_theme_setup');


function register_custom_post_types()
{
  register_post_type(
    'certificate',
    array(
      'labels'      => array(
        'name'          => __('Certificates', 'zankovets'),
        'singular_name' => __('Certificate', 'zankovets'),
      ),
      'public'      => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-awards',
      'supports' => array('title')
    )
  );

  register_post_type(
    'testimonial',
    array(
      'labels'      => array(
        'name'          => __('Testimonials', 'zankovets'),
        'singular_name' => __('Testimonial', 'zankovets'),
      ),
      'public'      => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-testimonial',
      'supports' => array('title')
    )
  );

  register_post_type(
    'book',
    array(
      'labels'      => array(
        'name'          => __('Books', 'zankovets'),
        'singular_name' => __('Book', 'zankovets'),
      ),
      'public'      => true,
      'has_archive' => false,
      'menu_icon' => 'dashicons-book-alt',
      'supports' => array('title')
    )
  );
}
add_action('init', 'register_custom_post_types');

// Shortcodes
function register_shortcodes()
{

  function print_socials($atts)
  {
    ob_start();
    get_template_part('template-parts/content/section', 'socials');
    return ob_get_clean();
  }
  add_shortcode('socials', 'print_socials');
}
add_action('init', 'register_shortcodes');

// CF7
add_filter('wpcf7_autop_or_not', '__return_false');
