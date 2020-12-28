<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <?php wp_head(); ?>
    <title>ExampleOne</title>
</head>
<body <?php body_class('moja_klasa');?> style="max-width: 1500px;margin: auto;">


<!-- header -->
<header id="header">
  <div class="container">
    <div class="d-flex align-items-center justify-content-start">
      <a href="<?php bloginfo('url'); ?>">
      <img src="<?php bloginfo('template_directory');?>/imgs/logo.jpg" class=".img-fluid logo" >
      </a>
      <!-- display menu Top Menu -->
      <?php wp_nav_menu(array(
        'theme_location' => 'top-menu'
      )) ?>
    </div>
  </div>
</header>
  


    
