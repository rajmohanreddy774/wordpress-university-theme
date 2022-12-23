<?php

function university_files()
{
    wp_enqueue_style('bsf-main-style', get_stylesheet_uri('./dist/output.css'));
    wp_enqueue_style('custome-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awsome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'university_files');

function university_feat()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'university_feat');



register_sidebar(array(
    'name' => '404 Page',
    'id' => '404',
    'description'  => __('Content for your 404 error page goes here.'),
    'before_widget' => '<div id="error-box">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>'
));

//tailwind css enqueue scripts 
function tailwindcss_setup_scripts()
{
    wp_enqueue_style('tailwindcss_setup-style', get_stylesheet_uri(), array(), 'all');
    wp_style_add_data('tailwind_setup-style', 'rtl', 'replace');
    wp_enqueue_style('tailwindcss_output', get_template_directory_uri() . '/dist/output.css', array(), 'all');
    wp_enqueue_script('tailwindss_setup-navigation', get_template_directory_uri(), '/js/navigation.js', array(), 'all', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'tailwindcss_setup_scripts');

require get_template_directory() . '/header.php';


