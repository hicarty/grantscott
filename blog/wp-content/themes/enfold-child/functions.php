<?php

/*
* Theme setup
*/
add_theme_support('avia_template_builder_custom_css');

// Allow SVG
function safe_allowed_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'safe_allowed_mime_types');

/*
* Load Scripts: Fonts / Styles 
*/
function child_add_scripts() {
  wp_enqueue_style( 'fonts', "https://use.typekit.net/vah0zmw.css" );
  wp_enqueue_style( 'general', get_stylesheet_directory_uri() . "/css/general.css" );
  wp_enqueue_style( 'text', get_stylesheet_directory_uri() . "/css/text.css" );
  wp_enqueue_style( 'logo', get_stylesheet_directory_uri() . "/css/logo.css" );
  wp_enqueue_style( 'services', get_stylesheet_directory_uri() . "/css/services.css" );


  wp_enqueue_script( 'staylow-js', get_stylesheet_directory_uri() . '/js/staylow.js');
}
add_action( 'wp_enqueue_scripts', 'child_add_scripts', 100);


// Setup theme page colours
function safe_theme_page_colours( $classes ) {
  $postId = get_the_ID();
  $page_theme = false;

  $page_themes = array(
    'green' => [255, 114],
    'red' => [257],
    'grey' => [259],
    'yellow' => [262],
  );

  foreach($page_themes as $theme => $pageIds) {
    if (in_array($postId, $pageIds)) {
      $page_theme = 'safe-theme-'.$theme;
      break;
    }
  }

  if ($page_theme === false) {
    $page_theme = 'safe-theme-blue';
  }

  $classes[] = $page_theme;

  return $classes;
}
add_filter('body_class', 'safe_theme_page_colours');