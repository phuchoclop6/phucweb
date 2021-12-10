<?php
require('config.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['usernamekh'])){
        // removes backslashes
	$usernamekh = stripslashes($_REQUEST['usernamekh']);
        //escapes special characters in a string
	$usernamekh = mysqli_real_escape_string($con,$usernamekh);
	$passwordkh = stripslashes($_REQUEST['passwordkh']);
	$passwordkh = mysqli_real_escape_string($con,$passwordkh);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `taikhoankhachhang` WHERE usernamekh='$usernamekh'
and passwordkh='".md5($passwordkh)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['usernamekh'] = $usernamekh;
            // Redirect user to index.php
	    header("Location: khachhang.php");
         }else{
		echo ";pop";
		}
    }
?>