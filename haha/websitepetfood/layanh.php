<?php
	include 'config.php';
	$result = mysqli_query($con, "SELECT * FROM hinhhanghoa");
	while ($row = mysqli_fetch_array($result)) {
		echo "<div id='img_div'>";
		echo "<img class='anh'; src='images/".$row['tenhinh']."' ; style='width: 400px; height: 400px; float: left; padding-left: 1cm'>";
		echo "</div>";
		}
?>
