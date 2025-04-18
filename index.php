<?php 
/*
Template Name: Yellow Montreal
Description: A custom template for the Yellow Montreal theme.
Author: Daphné Augier
Author URI: https://www.daphneaugier.com
Version: 1.0
*/
get_header();

if ( is_front_page() ) {
    get_template_part( 'hero' );
}

get_template_part( 'content', 'page' );
get_footer();
?>