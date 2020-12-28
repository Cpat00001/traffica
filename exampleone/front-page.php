<?php get_header(); ?>

<div id="hugo" class="img-fluid">
    <div class="container d-flex justify-content-center align-items-center h-100">
        <h5 id="welcometxt">Welcome to ExampleOne</h5>
    </div>
</div>
<div class="contentFrontPage">
    <div class="justify-content-center" id="textHolder">
    <?php 
        if(have_posts()): 
            while(have_posts()): the_post();
            the_content();
        endwhile;
        else: 
            echo "<h5>No post on this page yet.</h5>";
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>