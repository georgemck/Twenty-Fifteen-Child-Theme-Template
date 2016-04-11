<?php 

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri().'/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri().'');
}

//https://developer.wordpress.org/reference/functions/wp_enqueue_style/
//https://developer.wordpress.org/reference/functions/get_template_directory_uri/
//https://codex.wordpress.org/Function_Reference/get_stylesheet_uri/

?>