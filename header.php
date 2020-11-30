<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traffica</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body <?php body_class('custom_klasa'); ?>>

<!-- Nav -->
<header class="header">
    <div class="container align-items-center justify-content-between">
        <div class="row">
                <div class="col-sm-2 col-lg-1 ">
                    <img src="<?php bloginfo('template_directory');?>./images/logo.jpg" class="img-fluid max-width: 100%;" id="logo""> 
                </div>
                <div class="col-sm-3 col-lg-3"><h5>Traffica</h5></div>
                <div class="col-sm-7 col-lg-8">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'top_menu'
                        ));
                    ?>
                </div>
        </div>
    </div>
</header>

