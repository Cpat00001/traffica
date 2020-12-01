<?php get_header();?>

<div id='banner'>
    <div class="container">
        <h1 class="text-center">Traffica Shop</h1>
    </div>
</div>
<div class="content">
    <?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            the_content();
        }
    }
    ?>
</div>

<?php get_footer();?>