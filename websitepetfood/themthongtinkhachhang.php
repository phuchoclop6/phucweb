<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <div >
        <form class="modal-content animate" action="suathongtinkhachhang.php" method="post" name="themthongtinkhachhang">
            <div>
                <label for="hotenkh"><b>Họ tên Khách hàng</b></label>
                <input type="text" placeholder="Enter " name="hotenkh" required><br>

                <label for="diachi"><b>Địa chỉ</b></label>
                <input type="text" placeholder="Enter " name="diachi" required><br>
                
                <label for="sodienthoai"><b>số điện thoại</b></label>
                <input type="text" placeholder="Enter " name="sodienthoai" required><br>

                <label for="email"><b>email</b></label>
                <input type="text" placeholder="Enter " name="email" required><br>

                <button type="submit" value="login">Login</button>
        </form>
    </div>
    
</body>
</html>
