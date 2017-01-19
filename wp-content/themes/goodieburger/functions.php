<?php
/**
 * goodieburger functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage goodieburger
 * @since goodieburger 1.0
 */





add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'burger_menu',
    array(
      'supports' => array('title', 'editor','thumbnail', 'custom-fields', 'excerpt'),
      'labels' => array(
        'name' => __( 'Burgery' ),
        'singular_name' => __( 'Burger' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}



if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails', array( 'post' ));
    set_post_thumbnail_size( 800, 600, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
}

function goodieburger_scripts() {

//hamburger menu
wp_enqueue_script( 'wpb_slidepanel', get_template_directory_uri() . '/js/slidepanel.js', array('jquery'), false, true ); 
}
add_action( 'wp_enqueue_scripts', 'goodieburger_scripts' );