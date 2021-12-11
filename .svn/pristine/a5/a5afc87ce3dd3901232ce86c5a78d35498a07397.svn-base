<?php
	include 'config.php';
	$result = mysqli_query($con, "SELECT * FROM hinhhanghoa");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="content">
   
<?php
while ($row = mysqli_fetch_array($result)) {
echo "<div id='img_div'>";
echo "<img src='images/".$row['tenhinh']."' >";
echo "</div>";
}
?>
</div>
</body>
</html>
