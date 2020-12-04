<?php

//define variables
$name = $email = $number = '';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = checkData($_POST("Na"));
    var_dump($name);
    $email = checkData($POST("Em"));
    $number = checkData($POST("Nu"));
}

function checkData($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $number;

?>    
