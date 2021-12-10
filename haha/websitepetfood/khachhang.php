<?php
    include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trang nhan vien pet food</title>
    <link rel="stylesheet" type="text/css" href="stylekhachhang.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body id="bodynv">
    <div class="narbarnv">
        <div class="narbarnv-cart">
            <a href="themthongtinkhachhang.php">Chỉnh sửa thông tin</a>
        </div>
        <div class="narbarnv-cart">
            <a>giỏ hàng</a>
        </div>
        <div class="narbarnv-login">
          <div>
            <a href="logout.php">Logout</a>
          </div>
        </div>
        <a href="#home">Home</a>
        <a href="#tatcasanpham">Tất cả sản phẩm</a>
        <a href="#thongtincanthiet">thông tin cần thiết</a>
    </div>
    <div class="bodypagenv" id="home">
        <div class="bodypage-center">
                <?php include 'layanh.php';?>
        </div>
    </div>
    <div class="footernv" id="thongtincanthiet">
        <div class="footernv-content">
            <p>Mọi thắc mắc xin liên hệ về địa chỉ: https:websitepetfood.com</p>
            <p>Shop chúng tôi luôn cung cấp các loại thức ăn tốt cho thú cưng của các bạn</p>
        </div>
    </div>
    <script>
</script>
</body>
</html>