<?php 
/**
 * Register/enqueue custom scripts and styles
 */
add_action( 'wp_enqueue_scripts', function() {
	// Enqueue your files on the canvas & frontend, not the builder panel. Otherwise custom CSS might affect builder)
	if ( ! bricks_is_builder_main() ) {
		wp_enqueue_style( 'bricks-child', get_stylesheet_uri(), ['bricks-frontend'], filemtime( get_stylesheet_directory() . '/style.css' ) );
	}
} );

/**
 * Register custom elements
 */
add_action( 'init', function() {
  $element_files = [
    __DIR__ . '/elements/title.php',
  ];

  foreach ( $element_files as $file ) {
    \Bricks\Elements::register_element( $file );
  }
}, 11 );

/**
 * Add text strings to builder
 */
add_filter( 'bricks/builder/i18n', function( $i18n ) {
  // For element category 'custom'
  $i18n['custom'] = esc_html__( 'Custom', 'bricks' );

  return $i18n;
} );


// Equeue Styles
// function bsd_scripts_styles() {
	    
//   wp_enqueue_style( 'core-framework', get_stylesheet_directory_uri() . '/assets/css/core_framework.css', array(), rand(111,9999), 'all' );
//   wp_enqueue_style( 'bsd-style-base', get_stylesheet_directory_uri() . '/assets/css/base.css', array(), rand(111,9999), 'all' );
//   wp_enqueue_style( 'bsd-style-main', get_stylesheet_directory_uri() . '/assets/css/main.css', array(), rand(111,9999), 'all' );
//   wp_enqueue_style( 'bsd-theme-style', get_stylesheet_directory_uri() . '/assets/css/theme-style.css', array(), rand(111,9999), 'all' );
//   wp_enqueue_style( 'bsd-style-responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array(), rand(111,9999), 'all' );
// }


// add_action( 'wp_enqueue_scripts', 'bsd_scripts_styles' );


require_once __DIR__ . '/config/vite.config.php';


// Addtional Widget
function register_custom_widget_area() {
  register_sidebar(array(
    'id' => 'widget-post-categories',
    'name' => esc_html__( 'Widget - Post Categories', 'theme-domain' ),
    'description' => esc_html__( 'A Widget for Post Categories', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
  ));
  register_sidebar(array(
    'id' => 'widget-post-latest',
    'name' => esc_html__( 'Widget - Latest Post', 'theme-domain' ),
    'description' => esc_html__( 'A Widget for Latest Post', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
  ));
  register_sidebar(array(
    'id' => 'widget-post-archive',
    'name' => esc_html__( 'Widget - Archive Post', 'theme-domain' ),
    'description' => esc_html__( 'A Widget for Archive Post', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
  ));
  register_sidebar(array(
    'id' => 'widget-post-calendar',
    'name' => esc_html__( 'Widget - Calendar', 'theme-domain' ),
    'description' => esc_html__( 'A Widget for Calendar', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
  ));
  register_sidebar(array(
    'id' => 'widget-tag-cloud',
    'name' => esc_html__( 'Widget - Tag Cloud', 'theme-domain' ),
    'description' => esc_html__( 'A Widget for Tag Cloud', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
  ));
  register_sidebar(array(
    'id' => 'widget-latest-comments',
    'name' => esc_html__( 'Widget - Latest Comments', 'theme-domain' ),
    'description' => esc_html__( 'A Widget for Latest Comments', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
  ));
  register_sidebar(array(
    'id' => 'widget-custom-1',
    'name' => esc_html__( 'Widget - Custom 1', 'theme-domain' ),
    'description' => esc_html__( 'A Widget for Custom 1', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
  ));
  register_sidebar(array(
    'id' => 'widget-custom-2',
    'name' => esc_html__( 'Widget - Custom 2', 'theme-domain' ),
    'description' => esc_html__( 'A Widget for Custom 2', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
  ));
  register_sidebar(array(
    'id' => 'widget-custom-3',
    'name' => esc_html__( 'Widget - Custom 3', 'theme-domain' ),
    'description' => esc_html__( 'A Widget for Custom 3', 'theme-domain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<div class="widget-title-holder"><h3 class="widget-title">',
    'after_title' => '</h3></div>'
  ));
}
add_action( 'widgets_init', 'register_custom_widget_area' );


