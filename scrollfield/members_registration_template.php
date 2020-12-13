<?php 
/*
Template Name: Members Registration Form
*/
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Members Registration:</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-12" style="width:100%;height:400px;background-color:powderblue;">
            <h3>Form to register</h3>
            <form role="form" method="POST">
                <label for="user_name">User Name</label>
                <input type="text" name="user_name" id="username" value="John">
                <label for="user_email">Your email</label>            
                <input type="text" name="user_email" id="email" value="Nowski@gmail.com">
                <input type="submit" value="Submit" name="submitbtn">
            </form>
        </div>
    </div>
    <div class="row">
    <a href="http://localhost/scrollfield/registered-members/">
        <div class="button" style="background-color:crimson;padding:20px;max-width:200px;color:white;">
            <h5>Check Registered Members</h5>
        </div>
    </a>    
    </div>
</div>


