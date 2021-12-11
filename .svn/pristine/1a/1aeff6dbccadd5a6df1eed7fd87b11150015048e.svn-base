<?php
    require('config.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['usernamekh'])){
            // removes backslashes
        $usernamekh = stripslashes($_REQUEST['usernamekh']);
            //escapes special characters in a string
        $usernamekh = mysqli_real_escape_string($con,$usernamekh); 
        $passwordkh = stripslashes($_REQUEST['passwordkh']);
        $passwordkh = mysqli_real_escape_string($con,$passwordkh);
            $query = "INSERT into `taikhoankhachhang` (usernamekh, passwordkh)
    VALUES ('$usernamekh', '".md5($passwordkh)."')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<div class='form'>
    <h3>You are registered successfully.</h3>
    <br/>Click here to <a href='index.php'>Login</a></div>";
            }
        }
?>