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
      'taxonomies'  => array( 'category', 'post_tag' ),

    )
  );
}



if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails', array( 'post', 'burger_menu' ));
    set_post_thumbnail_size( 800, 600, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
}

function goodieburger_scripts() {

//hamburger menu
wp_enqueue_script( 'wpb_slidepanel', get_template_directory_uri() . '/js/slidepanel.js', array('jquery'), false, true ); 
}
add_action( 'wp_enqueue_scripts', 'goodieburger_scripts' );


//meta box


add_filter( 'rwmb_meta_boxes', 'goodieburger_register_meta_boxes' );
function goodieburger_register_meta_boxes( $meta_boxes ) {
    $prefix = 'rw_';
    // 1st meta box
    $meta_boxes[] = array(
        'id'         => 'adress_box',
        'title'      => __( 'Adresa, otevírací doba, kontakty', 'goodieburger' ),
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => esc_html__( 'Adresa', 'goodieburger' ),
                'id'    => 'adress',
                'type'  => 'text',
                'clone' => true,
            ),
            array(
                'name'  => esc_html__( 'Otevírací doba', 'goodieburger' ),
                'id'    => 'hours',
                'type'  => 'text',
                'clone' => true,
            ),
            array(
                'name'  => esc_html__( 'Kontakty', 'goodieburger' ),
                'id'    => 'contact',
                'type'  => 'text',
                'clone' => true,
            ), 

        )
    );
    // 2nd meta box
     $meta_boxes[] = array(
        'id'         => 'info_boxes',
        'title'      => __( 'Doprava, informace', 'goodieburger' ),
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(            
            array(
                'name' => esc_html__( 'Doprava - nadpis', 'goodieburger' ),
                'desc' => esc_html__( 'jak se k nám dostanete', 'goodieburger' ),
                'id'   => "doprava_nadpis",
                'type' => 'textarea',
                'cols' => 15,
                'rows' => 1,
            ),
            array(
                'name' => esc_html__( 'Doprava', 'goodieburger' ),
                'desc' => esc_html__( 'jak se k nám dostanete', 'goodieburger' ),
                'id'   => "doprava",
                'type' => 'textarea',
                'cols' => 20,
                'rows' => 4,
            ),

             array(
                'name' => esc_html__( 'info - nadpis', 'goodieburger' ),
                'desc' => esc_html__( 'dalsi informace', 'goodieburger' ),
                'id'   => "info_nadpis",
                'type' => 'textarea',
                'cols' => 15,
                'rows' => 1,
            ),
            array(
                'name' => esc_html__( 'info', 'goodieburger' ),
                'desc' => esc_html__( 'jak se k nám dostanete', 'goodieburger' ),
                'id'   => "info",
                'type' => 'textarea',
                'cols' => 20,
                'rows' => 4,
            ),

        )
            );


    return $meta_boxes;
}


/**
 * Register our sidebars and widgetized areas.
 *
 */
function goodieburger_widgets_init() {

    register_sidebar( array(
        'name'          => 'patka adresa',
        'id'            => 'footer_kontakty_adresa',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

        register_sidebar( array(
        'name'          => 'patka oteviraci doba',
        'id'            => 'footer_kontakty_doba',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

        register_sidebar( array(
        'name'          => 'patka kontakty',
        'id'            => 'footer_kontakty',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="rounded">',
        'after_title'   => '</h2>',
    ) );

}
add_action( 'widgets_init', 'goodieburger_widgets_init' );
