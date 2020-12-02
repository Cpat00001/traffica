<?php

// register style css
function add_css(){
    wp_register_style('scrollstyle',get_template_directory_uri().'/style.css','');
    wp_enqueue_style('scrollstyle');
}
add_action('wp_enqueue_scripts','add_css');

// add javascript
function add_javascript(){
    wp_register_script('custom_javascript',get_template_directory_uri().'/scripts.js',array('jquery'),true);
    wp_enqueue_script('custom_javascript');
}
add_action('wp_enqueue_scripts','add_javascript');

// add_menu
add_theme_support('menus');

register_nav_menus(array(
    'top-menu' => 'Top Menu',
));
?>