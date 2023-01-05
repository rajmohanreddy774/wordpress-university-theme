<?php 
/*
Plugin Name: NewPlugin_Dev
*/

function plugin_styles()
{
    wp_enqueue_style(
        'MyPluginStyles',
        plugins_url('/style.css', __FILE__)
    );
}

function plugin_scripts()
{
    wp_enqueue_script('MypluginScripts', plugins_url('/scripts.js', __FILE__), array('jquery'), false, true);
}
