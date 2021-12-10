<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['tentkkh'])){
        // removes backslashes
	$tentkkh = stripslashes($_REQUEST['tentkkh']);
        //escapes special characters in a string
	$tentkkh = mysqli_real_escape_string($con,$tentkkh); 
	$mskh = stripslashes($_REQUEST['mskh']);
	$mskh = mysqli_real_escape_string($con,$mskh);
	$mktkkh = stripslashes($_REQUEST['mktkkh']);
	$mktkkh = mysqli_real_escape_string($con,$mktkkh);
//	$trn_date = date("Y-m-d H:i:s");
  //      $query = "INSERT into `users` (tentkkh, mktkkh, mskh, trn_date)
  	$query = "INSERT into `taikhoankhachhang` (tentkkh, mktkkh, mskh)
VALUES ('$tentkkh', '".md5($mktkkh)."', '$mskh')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="tentkkh" placeholder="tentkkh" required />
<input type="mskh" name="mskh" placeholder="mskh" required />
<input type="mktkkh" name="mktkkh" placeholder="mktkkh" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
<?php } ?>
</body>
</html>
