<?php get_header();?>

<div class="container" id="page_container">
    <!-- page feature_image -->
    <div id="feature_image">
    <img src="<?php the_post_thumbnail_url('custom-size');  ?>" alt="image_aboutUs" class="img-fluid">
      
    </div>
    <div class="row">
        <div class="col-12 col-sm-4" id="left_col_page">
            <h1><?php the_title(); ?></h1>
        </div>
       
        <div class="col-12 col-sm-8">

        <?php 
            if(have_posts()):
                while(have_posts()): the_post(); ?>
                <p><?php the_content(); ?></p>
            <?php endwhile;endif; ?>
        </div>
    </div>
</div>

<?php get_footer();?>