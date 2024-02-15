<?php 


add_action('wp_enqueue_scripts','style_theme');
add_action('wp_footer','scripts_theme');
add_action('after_setup_theme','myMenu');

function myMenu(){
    register_nav_menu('top','menu in head');
}


function style_theme(){
    wp_enqueue_style('style',get_stylesheet_uri());
    wp_enqueue_style('holyn', get_template_directory_uri() . '/assets/css/style.css');
}

function scripts_theme(){
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
}