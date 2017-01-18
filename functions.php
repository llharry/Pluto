<?php
add_theme_support('post-thumbnails');
/**
 * Enqueues scripts and styles for front end.
 *
 * @since Wp Bootstrap 1.0
 *
 * @return void
 */
function charonTemplate_scripts_styles() {

  // Loads CSSified SASS
  //wp_enqueue_style('mainSASS', get_template_directory_uri() . '/css/main.css');
  // Loads our main stylesheet.
  wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array('mainSASS') ,'1.0');
}
add_action('wp_enqueue_scripts', 'charonTemplate_scripts_styles');

if ( ! function_exists( 'charonTemplate_WP_theme_setup' ) ):
  function charonTemplate_WP_theme_setup() {
    // Adds the main menu
    register_nav_menus( array(
      'main-menu' => __( 'Main Menu', 'charonTemplate_WP' ),
    ) );
  }
endif;
add_action( 'after_setup_theme', 'charonTemplate_WP_theme_setup' );


/*
******************************
*Begin registering widgets =D*
******************************
*/


function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Page Sidebar',
		'id'            => 'page-sidebar',
		'description'   => 'Appears as a sidebar on most pages',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => 'Homepage Sidebar',
		'id'            => 'homepage-sidebar',
		'description'   => 'Appears as a sidebar on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
		'name'          => 'Menu',
		'id'            => 'menu-topbar',
		'description'   => 'Appears as the on most pages',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Feature Image',
		'id'            => 'feature-image',
		'description'   => 'Appears on the front page as the featured image.',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Feature Widget 1',
		'id'            => 'feature-widget-1',
		'description'   => 'Appears in the feature widget container on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Feature Widget 2',
		'id'            => 'feature-widget-2',
		'description'   => 'Appears in the feature widget container on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => 'Feature Widget 3',
		'id'            => 'feature-widget-3',
		'description'   => 'Appears in the feature widget container on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Tagline',
		'id'            => 'tagline-widget',
		'description'   => 'Appears below the feature widget container on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => 'Homepage - About',
		'id'            => 'about-widget',
		'description'   => 'Appears next to the About text on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Contact',
		'id'            => 'contact-widget',
		'description'   => 'Contact box on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
		'name'          => 'Action Widget 1',
		'id'            => 'action-widget-1',
		'description'   => 'Appears in the action container on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );
    register_sidebar( array(
		'name'          => 'Action Widget 2',
		'id'            => 'action-widget-2',
		'description'   => 'Appears in the action container on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget 1',
		'id'            => 'footer-widget-1',
		'description'   => 'Appears in the footer on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget 2',
		'id'            => 'footer-widget-2',
		'description'   => 'Appears in the footer on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget 3',
		'id'            => 'footer-widget-3',
		'description'   => 'Appears in the footer on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Footer Widget 4',
		'id'            => 'footer-widget-4',
		'description'   => 'Appears in the footer on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => 'Copyright Widget',
		'id'            => 'copyrightwidget',
		'description'   => 'Appears in the footer on the homepage',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );



}
add_action( 'widgets_init', 'arphabet_widgets_init' );
