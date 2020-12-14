<?php

//add styling file
function add_styling(){
    wp_register_style('styleregis1',get_template_directory_uri(). '/style.css','',1,'all');
    wp_enqueue_style('styleregis1');
};
add_action('wp_enqueue_scripts','add_styling');

//add javascript
function add_javascript(){
    wp_register_script('custom_javascript',get_template_directory_uri().'/app.js',array('jquery'));
    wp_enqueue_script('custom_javascript');
}
add_action('add_javascript');


?>