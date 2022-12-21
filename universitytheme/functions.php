<?php

function university_files()
{
    wp_enqueue_style('bsf-main-style', get_stylesheet_uri('./dist/output.css'));
    wp_enqueue_style('custome-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'university_files');

function university_feat(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','university_feat');

function rjs_styles() {
    /*  General style.css file
        File is not enqueued because it only contains the theme configuration.
        CSS is generated inside css/tailwind.prod.css
    */
     
    wp_enqueue_style( 'tailwindcss', get_template_directory_uri() . '/css/tailwind.prod.css', array(), filemtime(get_template_directory() .'/css/tailwind.prod.css'), 'all');
     
     
    } //End of rjs_styles() function
     
    //Load the files, hook them into the enqueue scripts
    add_action( 'wp_enqueue_scripts', 'rjs_styles' );