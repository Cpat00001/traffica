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
            <div class="col-12" id="first_row"><h5>Top</h5></div>
            <div class="col-12" id="second_row"><h5>About Us</h5></div>
            <div class="col-12" id="third_row"><h5>More Details</h5></div>
            <div class="col-12" id="fourth_row">
                <div class="row">
                    <div class="col col-sm-3" id="fourth_row_label">
                        <h5>Contact Us</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- go to top div -->
        <div id="myID" class="bottomMenu hide" onclick="topFunction()">Top</div>
    </div>
   







    
