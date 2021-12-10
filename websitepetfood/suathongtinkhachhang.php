<?php
    include 'config.php';
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['hotenkh'])){
        // removes backslashes
    $hotenkh = stripslashes($_REQUEST['hotenkh']);
        //escapes special characters in a string
    $hotenkh = mysqli_real_escape_string($con,$hotenkh); 
    $diachi = stripslashes($_REQUEST['diachi']);
    $diachi = mysqli_real_escape_string($con,$diachi);
    $sodienthoai = stripslashes($_REQUEST['sodienthoai']);
    $sodienthoai = mysqli_real_escape_string($con,$sodienthoai);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $query = "INSERT INTO `khachhang` (`hotenkh`, `diachi`, `sodienthoai`, `email`) VALUES ('$hotenkh', '$diachi', '$sodienthoai', '$email')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<div class='form'>
        <h3>Bạn đã chỉnh sửa thành công</h3>
        <br/> <a href='themthongtinkhachhang.php'>về</a></div>";
    }
}
?>