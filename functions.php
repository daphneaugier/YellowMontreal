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

/**
 * Setup the WordPress core custom background feature.
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-background/
 *
 * @since yellowMontreal 1.0.0
 */
add_theme_support('custom-background', apply_filters('yellowmontreal_custom_background_args', array(
    'default-color' => 'ffffff',
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
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
//require get_template_directory() . '/inc/jetpack.php';

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
//require get_template_directory() . '/inc/customizer.php';


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

function yellowmontrealtheme_customize_register($wp_customize)
{
    $wp_customize->add_section('hero_section', array(
        'title' => 'Section Hero',
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default' => 'Welcome to YellowMontreal',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label' => 'Titre de la Hero Section',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_text', array(
        'default' => 'A modern and customizable WordPress theme.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_text', array(
        'label' => 'Texte de la Hero Section',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_video', array(
        'default' => get_theme_file_uri() . '/assets/hero_video.mp4',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('hero_video', array(
        'label' => 'Vidéo de la Hero Section',
        'section' => 'hero_section',
        'type' => 'text',
    ));


    $wp_customize->add_setting('hero_button', array(
        'default' => 'En savoir plus',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_button', array(
        'label' => 'Texte du bouton',
        'section' => 'hero_section',
        'type' => 'text',
    ));
}
add_action('customize_register', 'yellowmontrealtheme_customize_register');
