<?php
require('config.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['usernamenv'])){
        // removes backslashes
	$usernamenv = stripslashes($_REQUEST['usernamenv']);
        //escapes special characters in a string
	$usernamenv = mysqli_real_escape_string($con,$usernamenv);
	$passwordnv = stripslashes($_REQUEST['passwordnv']);
	$passwordnv = mysqli_real_escape_string($con,$passwordnv);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `taikhoannhanvien` WHERE usernamenv='$usernamenv'
and passwordnv='$passwordnv'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $usernamenv;
            // Redirect user to index.php
	    header("Location: nhanvien.php");
         }else{
		// echo "<div class='form'>
		// 	<h3>Username/password is incorrect.</h3>
		// 	<br/>Click here to <a href='index.php'>Login</a></div>";
		echo "<script type='text/javascript'>alert('sairui');</script>";
		}
    }
?>