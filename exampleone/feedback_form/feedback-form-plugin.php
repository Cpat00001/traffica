<?php 
/* 
* Plugin Name:Feedback Form Two
* Description: Feedback Form Two Description
*/

function build_feedback_form(){

    $content = '';
    $content .= "<form method='post' action='". plugin_dir_url(__FILE__)."process/'>";
    $content .= "<h1>Feedback</h1>";
    $content .= "<input type='text' name='yourname' placeholder='your full name'>";
    
    $content .= "</form>";

    return $content;

}
add_shortcode('feedback','build_feedback_form');

?>