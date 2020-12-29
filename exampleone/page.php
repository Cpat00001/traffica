<?php get_header(); ?>

<div class="container">
<h5 id="welcometxt"><?php the_title(); ?></h5>
    <div class="row">
        <div class="col-sm-8 content">
            <?php  if(have_posts()): 
                    while(have_posts()): 
                    the_post();
                    // show page's content
                    the_content();
                    endwhile;
                else: echo "<h5>Sorry no posts here yet</h5>";
            endif;  
            ?> 
        </div>
        <div class="col-sm-4 photopage">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="img_holder">
                            <img src="<?php the_post_thumbnail_url('post_img');?>" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12">
                        <?php get_sidebar('pagesidebar'); ?>
                    </div>
                </div>
            </div>

            

        </div>
    </div>
</div>

<?php get_footer(); ?>