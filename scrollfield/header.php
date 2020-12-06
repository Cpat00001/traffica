<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ScrollField</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- styling css/js -->
    <?php wp_head(); ?>
</head>
<body>
<div class="frame mx-auto">
    <div class="container">
        <div class="row">
            <div class="col-12" id="header_menu">
                <?php wp_nav_menu(array(
                    'theme_location' => 'top-menu'
                ))?>
            </div>
            <div class="col-12" id="first_row"><h5><?php the_title();?></h5></div>
            <div class="col-12" id="second_row"><h5>About Us</h5></div>
            
            <div class="col-12" id="third_row">
                <h5>Projects</h5>
                        <!-- carousel -->
                        <!--OPEN CAROUSEL LOOP-->
                        <?php $loop = new WP_Query(array(
                                'post_type' => 'post', 
                                'posts_per_page' => 6,
                                'orderyby' => 'post_id',
                                'order' => 'ASC' )); 
                                ?>

                        <div id="demo" class="carousel slide" data-ride="carousel">

                        <!-- Indicators -->
                            <ul class="carousel-indicators">
                            <?php $count = 0; while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <li data-target="#news-carousel" data-slide-to="<?php echo $count ?>" class="<?php if($count == '0'){ echo 'active'; } ?>"></li>
                            <?php $count++; endwhile; wp_reset_postdata(); ?>  
                            </ul>

                        <?php $count = 0; while ( $loop->have_posts() ) : $loop->the_post(); ?>      
                            
                        <!-- The slideshow -->
                                <div class="carousel-item <?php if($count == '0'){ echo 'active'; } ?>">
                                    <div >
                                        <?php the_post_thumbnail( 'full' ); ?>
                                        <h1><?php the_title(); ?></h1>
                                        <p><?php the_excerpt(); ?></p>      
                                    </div>
                            </div><!-- /item -->

                        
                            <?php $count++; endwhile; wp_reset_postdata(); ?>  

                        </div> <!-- Carousel 1 -->
                        <!-- end of carousel -->
            </div>
                  
            <div class="col-12" id="fourth_row">
                <div class="row" id="formDiv">
                    <div class="col col-sm-3" id="fourth_row_label">
                        <h5>Contact Us</h5>
                    </div>
                    <div class="col col-sm-12">
                            <!-- form -->
                        <form method="POST" action="http://localhost/scrollfield/wp-content/plugins/process/processPage.php" id="form" onsubmit="checkMe(event)">
                            <p>Please fill in this form and we will contact you.</p>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="Na">Name</label>
                                <input type="text" maxlength="15" class="form-control" name="Na" id="Na" placeholder="Name" >
                                </div>
                                <div class="form-group col-md-6">
                                <label for="Em">Email</label>
                                <input type="email" maxlength="30" class="form-control" name="Em" id="Em" placeholder="Email">
                                </div>
                            </div>
                            <!-- display error message -->
                            <div id="error" style="color:red"></div>
                            <div class="form-group">
                                <label for="Nu">Contact Number</label>
                                <input type="text" class="form-control" name="Nu" id="Nu" placeholder="contact number">
                            </div>
                            <button name="sub" type="submit" value="Submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- go to top div -->
        <div id="myID" class="bottomMenu hide" onclick="topFunction()">Top</div>
    </div>
   







    
