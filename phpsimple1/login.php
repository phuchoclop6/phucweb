<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['tentkkh'])){
        // removes backslashes
	$tentkkh = stripslashes($_REQUEST['tentkkh']);
        //escapes special characters in a string
	$tentkkh = mysqli_real_escape_string($con,$tentkkh);
	$mktkkh = stripslashes($_REQUEST['mktkkh']);
	$mktkkh = mysqli_real_escape_string($con,$mktkkh);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `taikhoankhachhang` WHERE tentkkh='$tentkkh' and mktkkh='".md5($mktkkh)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['tentkkh'] = $tentkkh;
            // Redirect user to index.php
	    header("Location: index.php");
         }else{
	echo "<div class='form'>
<h3>tentkkh/mktkkh is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
	}
    }else{
?>
<div class="form">
<h1>Log In</h1>
<form action="" method="post" name="login">
<input type="text" name="tentkkh" placeholder="tentkkh" required />
<input type="mktkkh" name="mktkkh" placeholder="mktkkh" required />
<input name="submit" type="submit" value="Login" />
</form>
<p>Not registered yet? <a href='registration.php'>Register Here</a></p>
</div>
<?php } ?>
</body>
</html>
