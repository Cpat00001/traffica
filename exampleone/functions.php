<?php

//ad css to theme
function exampleOne_style(){
    wp_register_style('stylesheet',get_template_directory_uri() .'/style.css','');
    wp_enqueue_style('stylesheet');
}
add_action('wp_enqueue_scripts','exampleOne_style');

// add JS to theme
function exampleOne_javascript(){
    wp_register_script('exampleOnescript', get_template_directory_uri() .'/app.js','jquery',1,true);
    wp_enqueue_script('exampleOnescript');
}
add_action('wp_enqueue_scripts','exampleOne_javascript');

//add menu
add_theme_support('menus');
//register menu
register_nav_menus(array('top-menu' => 'Top Menu'));

?>