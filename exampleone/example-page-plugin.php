<?php 
/*
*Plugin Name: Example page plugin
*/

function contact_form(){

    $content = '';
    $content .= '<h2>Contact Us!</h2>';
    
    // contanct form
    $content .= '<form method="post" action="http://localhost/exampleOne/thank-you/" id="contactForm">';
    $content .='<div class="form-group">';
    $content .= '<label for="username">Name:</label>';
    $content .= '<input type="text" name="username" class="form-control" placeholder="your name">';
    $content .= ' <small id="emailHelp" class="form-text text-muted">We do not share your personal details with anyone else.</small>';
    $content .= '</div>';
    
    $content .='<div class="form-group">';
    $content .= '<label for="email">Email:</label>';
    $content .= '<input type="text" name="useremail" class="form-control" placeholder="your email">';
    $content .= '<small id="emailHelp" class="form-text text-muted">We will never share your email with anyone else.</small>';
    $content .= '</div>';

    $content .= '<div class="form-group">';
    $content .= '<label for="userquery">Your query:</label>';
    $content .= '<textarea name="usercomment" class="form-control" rows="5"></textarea>';
    $content .= '</div>';
    $content .='<input type="submit" class="btn btn-primary btn-lg btn-block" name="contact_form_submit" id="btn_form">';
    $content .= '</form>';

    return $content;
}
add_shortcode('add_contactform','contact_form');

// capture submitted form
function capture_submitted_contactform(){

    if(isset($_POST['contact_form_submit'])){
        $name = sanitize_text_field($_POST['username']);
        $email = sanitize_text_field($_POST['useremail']);
        $question = sanitize_textarea_field($_POST['usercomment']);

        // send an email with form input text fields
        $to = 'p171982@gmail.com';
        $subject = 'contact form submittion';
        $message = ' message from:  '. $email. ' sent by: '.$email. ' text: '. $question;

        wp_mail($to,$subject,$message);
    }

}
add_action('wp_head','capture_submitted_contactform');

?>