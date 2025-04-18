<?php

/**
 * yellowMontreal functions and definitions
 *
 * @link    https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package yellowMontreal
 * @since   yellowMontreal 1.0.0
 */

if (! defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

add_theme_support("title-tag");
add_theme_support("post-thumbnails");
add_theme_support("html5", array("comment-list", "comment-form", "search-form", "gallery", "caption"));
add_theme_support("automatic-feed-links");
add_theme_support( 'custom-header', array('video' => true));
add_filter( 'header_video_settings', 'hero_video_settings');
function hero_video_settings( $settings ) {
  $settings['minWidth'] = 400;
  $settings['minHeight'] = 400;
  $settings['maxWidth'] = 500;
  $settings['maxHeight'] = 500;  
  return $settings;
}
/**
 * Setup the WordPress core custom background feature.
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-background/
 *
 * @since yellowMontreal 1.0.0
 */
add_theme_support('custom-background', apply_filters('yellowmontreal_custom_background_args', array(
    'default-color' => 'fff36d',
    'default-image' => '',
)));

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @since yellowMontreal 1.0.0
 */
function yellowmontreal_widgets_init()
{
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'yellowmontreal'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'yellowmontreal'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'yellowmontreal_widgets_init');

/**
 * Enqueue scripts and styles.
 *
 * @since yellowMontreal 1.0.0
 */
function yellowmontreal_scripts()
{
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v6.5.0/css/all.css');
    wp_enqueue_style('yellowmontreal-style', get_stylesheet_uri());
    wp_enqueue_script('yellowmontreal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
    wp_enqueue_script('yellowmontreal-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
    wp_enqueue_script('yellowmontreal-custom', get_template_directory_uri() . '/js/custom.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'yellowmontreal_scripts');

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
//require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//require get_template_directory() . '/inc/jetpack.php';


function register_yellowmontreal_menus()
{
    register_nav_menus(
        array(
            'header-menu' => 'Header Menu',
            'footer-menu' => 'Footer Menu',
            'social' => 'Social'
        )
    );
}

add_action('init', 'register_yellowmontreal_menus');

