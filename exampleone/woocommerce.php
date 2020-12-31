<?php include "variables.php"; ?>
<?php get_header(); ?>

<div class="container">
<h5 id="welcometxt"><?php the_title(); ?></h5>
    <div class="row">
        <div class="col-sm-8 content">
            <?php woocommerce_content(); ?>
        </div>
        <div class="col-sm-4 photopage">

            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div id="shopper_CTA">
                            <h5>Take a PROMO before <?php echo $promo ;?></h5>
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