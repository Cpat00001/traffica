<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-8 content">
            <?php  if(have_posts()): while(have_posts()): the_post();?>
               
                        <!-- the post title -->
                        <a href="<?php the_permalink(); ?>"><h5 id="welcometxt"><?php the_title(); ?></h5></a>
                        <!-- show post's feature image -->
                        <?php if(has_post_thumbnail()){ ?>
                            <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('post_img');?>" style="height:100px;width:150px;" class="img-fluid" /></a>
                        <?php     
                        }else{ ?>
                            <a href="<?php the_permalink(); ?>"><img src="<?php echo get_template_directory_uri().'/imgs/logo.jpg';?>" style="height:100px;width:150px;" alt="<?php the_title(); ?>" /></a>
                        <?php } 
                        // show page's excerpt
                        the_excerpt();?>
                        <!-- show post's tags -->
                        <span class="tags"><?php the_tags(); ?></span>
                        <?php 
                        endwhile;
                        endif;
                        ?>
        </div>
        <div class="col-sm-4 photopage">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="img_holder">
                            <?php
                            // show post's feature image
                            if(has_post_thumbnail()){ ?>
                               <a href="<?php the_permalink(); ?>"></a><img src="<?php the_post_thumbnail_url('post_img');?>" style="height:100px;width:150px;" class="img-fluid" />
                            <?php     
                            }else{ ?>
                                <img src="<?php echo get_template_directory_uri().'/imgs/logo.jpg';?>" style="height:100px;width:150px;" alt="<?php the_title(); ?>" />
                            <?php } ?>
                        </div>
                    </div>
                    <div class="col-12">
                        <?php get_sidebar('pagesidebar'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Pagination -->
<?php
global $wp_query;
 
$big = 999999999; // need an unlikely integer
 
echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
) );
?>


</div>

<?php get_footer(); ?>