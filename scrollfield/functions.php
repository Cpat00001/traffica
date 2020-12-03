<?php

// register style css
function add_css()
{
    wp_register_style('scrollstyle', get_template_directory_uri() . '/style.css', '');
    wp_enqueue_style('scrollstyle');
}
add_action('wp_enqueue_scripts', 'add_css');

// add javascript
function add_javascript()
{
    wp_register_script('custom_javascript', get_template_directory_uri() . '/scripts.js', array('jquery'), true);
    wp_enqueue_script('custom_javascript');
}
add_action('wp_enqueue_scripts', 'add_javascript');

// add_menu
add_theme_support('menus');

register_nav_menus(array(
    'top-menu' => 'Top Menu',
));

// register posts - developments
function create_posttype()
{

    register_post_type('movies',
        // CPT Options
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Project'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'projects'),
            'show_in_rest' => true,

        )
    );
}
// display posts on front page among regular posts
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
 
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'projects' ) );
    return $query;
}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');

// add post thumbnail
add_theme_support( 'post-thumbnails' );

?>
