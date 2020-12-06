<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#212529;">
        <div style="box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);max-width:500px; margin: auto;
  width: 50%;">
        <div  style="background-color:#daad86;
        border:1px solid blue;
        text-align:center;">
                <h5>Thanks for submitting your data</h5>
        </div>
        <div  style="background-color:cornflowerblue;text-align:center;max-width:500px;border:1px solid rgb(89, 142, 222)">
            <?php
                require_once("../../../wp-load.php");

                // if(function_exists('form_include')){
                //     echo "Works";
                // }
                    if(isset($_POST["sub"])){
                        // print_r($_POST);

                        $name = sanitize_text_field($_POST["Na"]);
                        $email = sanitize_text_field($_POST["Em"]);
                        $number = sanitize_text_field($_POST["Nu"]);

                        echo "Form submitted:";
                        echo "</br>";
                        echo "Your name: $name";
                        echo "</br>";
                        echo "Your email: $email ";
                        echo "</br>";
                        echo "Your number: $number";
                        echo "</br>";
                        echo "Go back to home page";
                        echo "</br>";
                        echo "<a href='http://localhost/scrollfield/'><h5>Go back to Front Page</h5></a>";
                    }
            ?>
        </div>
        </div>      
</body>
</html>

