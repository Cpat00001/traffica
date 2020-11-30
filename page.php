<?php get_header();?>

<div class="container" id="page_container">
    <div class="row">
        <div class="col-4" id="left_col_page">
            <h1><?php the_title(); ?></h1>
        </div>
       
        <div class="col-8">

        <?php 
            if(have_posts()):
                while(have_posts()): the_post(); ?>
                <p><?php the_content(); ?></p>
            <?php endwhile;endif; ?>
        </div>
    </div>
    
</div>

<?php get_footer();?>