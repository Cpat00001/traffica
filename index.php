<?php

$path = preg_replace('/wp-content.*$/','',__DIR__);

require_once($path."wp-load.php");

if(isset($_POST['feedback_submit'])){

    // get submitted data
   $feedname = sanitize_text_field($_POST['your_name']);
   $feedemail = sanitize_text_field($_POST['your_email']);
   $feedtext = sanitize_textarea_field($_POST['feed_text']);

   echo "Thanks " .$feedname. " for your feedback,<br> we value your opinion <br>". $feedtext ; 
}
// send an email with submitted data
$to = 'adminemail@gmail.com';
$subject = "Customers Feedback";
$message = 'Hello, message has been sent to you<br/>';
$message = 'From' . $feedname . '<br/>';
$message = 'Text: '. $feedtext . "<br/>";

wp_mail($to,$subject,$message);

// redirect after sending an email
$location = 'http://localhost/exampleOne/thank-you/';
wp_redirect($location );

// if(function_exists('build_feedback_form')){
//     echo "Welcome to process page";
// }

?>