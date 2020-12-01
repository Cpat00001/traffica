<?php

//add css
function styling(){
    wp_register_style('my_theme',get_template_directory_uri().'/style.css','');
    wp_enqueue_style('my_theme');
}
add_action('wp_enqueue_scripts','styling');

//add javascript
function add_javascript(){
    wp_register_script('custom_javascript',get_template_directory_uri().'/app.js',array('jquery'));
    wp_enqueue_script('custom_javascript');
}
add_action('wp_enqueue_scripts','add_javascript');

// add menu
add_theme_support('menus');
add_theme_support('post-thumbnails');

register_nav_menus(array(
    'top-menu' => 'Top Menu'
));

// Add images sizes
add_image_size('custom-size',1100,750,true);

?>