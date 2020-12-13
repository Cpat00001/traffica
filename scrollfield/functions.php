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

    // form.js 
    wp_register_script('js_form', get_template_directory_uri() . '/form.js', array('jquery'), true);
    wp_enqueue_script('js_form');

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

// add php form validation
// if(isset($_POST["sub"])){
//     $name = "";
//     $name = sanitize_text_field($_POST["Na"]);
//     $email = sanitize_text_field($_POST["Em"]);
//     $number = sanitize_text_field($_POST["Nu"]);

//     echo "Form submitted:";
//     echo "</br>";
//     echo "Your name: $name";
//     echo "</br>";
//     echo "Your email: $email ";
//     echo "</br>";
//     echo "Your number: $number";
//     echo "</br>";
//     echo "Go back to home page";
//     echo "</br>";
//     echo "<a href='http://localhost/scrollfield/'><h1>Go back</h1></a>";
// }

// capture data submitted in members registrations form
if(isset($_POST['submitbtn'])){
    echo $_POST['user_name'];
    echo "</br>";
    echo $_POST['user_email'];
    $data = array(
        'name' => $_POST['user_name'],
        'email' => $_POST['user_email'],
    );
$table = 'members';

$result = $wpdb->insert($table, $data, $format = null);

    if($result == 1){
        echo "<script>alert('Submitted data saved');</script>";
    }else{
        echo "<script>alert('Error, data not saved, try again.');</script>";
    }
}

?>
