<?php
function yellowmontrealtheme_customize_register($wp_customize)
{

    $wp_customize->add_setting('site-icon', array(
        'default' => get_theme_file_uri() . '/assets/favicon.ico',
        'sanitize_callback' => 'esc_url_raw',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'favicon', array(
            'label' => __('Favicon', 'theme-slug'),
            'section' => 'title_tagline',
            'settings' => 'favicon',
        ))
    );

    $wp_customize->add_section('hero_section', array(
        'title' => 'Section Hero',
        'priority' => 30,
    ));

    $wp_customize->add_setting('hero_title', array(
        'default' => 'Welcome to YellowMontreal',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_title', array(
        'label' => 'Hero Section Title',
        'section' => 'hero_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('hero_text', array(
        'default' => 'A modern and customizable WordPress theme.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('hero_text', array(
        'label' => 'Hero Section Text', 
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

    $wp_customize->add_setting('hero_video', array(
        'default' => get_theme_file_uri() . '/assets/hero_video.mp4',
        'sanitize_callback' => 'esc_url_raw',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'hero_video', array(
            'label' => __('Hero Section video or image', 'theme-slug'),
            'section' => 'hero_section',
            'settings' => 'hero_video',
        ))
    );


}
add_action('customize_register', 'yellowmontrealtheme_customize_register');
?>