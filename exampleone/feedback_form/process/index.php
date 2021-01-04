<?php

$path = preg_replace('/wp-content.*$/','',__DIR__);

require_once($path."wp-load.php");

if(function_exists('build_feedback_form')){
    echo "Welcome to process page";
}

?>