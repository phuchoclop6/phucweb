<?php
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="stylenhanvien.css"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
  <h2>Quản lý sản phẩm của nhân viên</h2>
  <p><a href="logout.php">Thoát</a></p>

  <div class="tab">
    <button class="tablinks" onclick="openCity(event, 'ThemLoaiHangHoa')" id="defaultOpen">Thêm loại hàng hóa</button>
    <button class="tablinks" onclick="openCity(event, 'ThemHangHoa')">Thêm hàng hóa</button>
    <button class="tablinks" onclick="openCity(event, 'ThemHinhHangHoa')">Thêm hinh hàng hóa</button>
    <button class="tablinks" onclick="openCity(event, 'XoaHinhHangHoa')">Xóa hình hàng hóa</button>
    <button class="tablinks" onclick="openCity(event, 'XoaHangHoa')">Xóa hàng hóa</button>
    <button class="tablinks" onclick="openCity(event, 'XoaLoaiHangHoa')">Xóa loại hàng hóa</button>
  </div>

  <div id="ThemLoaiHangHoa" class="tabcontent">
      <form class="modal-content animate" action="Themloaihang.php" method="post" name="ThemLoaiHangHoa">
          <div class="container">
              <label for="maloaihang"><b>Mã loại hàng</b></label>
              <input type="text" placeholder="Enter Maloaihang" name="maloaihang" required><br>
              <label for="tenloaihang"><b>Tên loại hàng</b></label>
              <input type="text" placeholder="Enter Tenloaihang" name="tenloaihang" required><br>       
              <button type="submit" value="themloaihang">Thêm</button>
          </div>
      </form>
  </div>

  <div id="ThemHangHoa" class="tabcontent">
      <form class="modal-content animate" action="Themhanghoa.php" method="post" name="ThemHangHoa">
              <div class="container">
                  <label for="mshh"><b>Mã số hàng hóa</b></label>
                  <input type="text" placeholder="Enter mshh" name="mshh" required><br>
                  <label for="tenhh"><b>Tên hàng hóa</b></label>
                  <input type="text" placeholder="Enter tenhh" name="tenhh" required><br>
                  <label for="quycach"><b>quy cách</b></label>
                  <input type="text" placeholder="Enter quy cach" name="quycach" required><br>
                  <label for="gia"><b>giá</b></label>
                  <input type="text" placeholder="Enter gia" name="gia" required><br>
                  <label for="soluonghang"><b>Số lượng hàng hóa</b></label>
                  <input type="text" placeholder="Enter so luong hang" name="soluonghang" required><br>
                  <label for="maloaihang"><b>Mã loại hàng</b></label>
                  <input type="text" placeholder="Enter ma loai hang" name="maloaihang" required><br>          
                  <button type="submit" value="Themhanghoa">Thêm</button>
              </div>
      </form>
  </div>

  <div id="ThemHinhHangHoa" class="tabcontent">
    <form method="post" action="nhanvien.php" enctype="multipart/form-data"> 
      <label for="mahinh"><b>Mã hình</b></label>
      <input type="text" placeholder="Enter ma hinh" name="mahinh" required><br>
      <label for="mshh"><b>Mã số hàng hóa</b></label>
      <input type="text" placeholder="Enter ma so hang hoa" name="mshh" required><br>
      <input type="hidden" name="size" value="1000000"> 
      <input type="file" name="tenhinh"> 
      <button type="submit" name="upload">POST</button>
      <?php require "Themhinhhanghoa.php"?>
    </form> 
  </div>

  <div id="XoaHinhHangHoa" class="tabcontent">
      <form class="modal-content animate" action="xoahinhhanghoa.php" method="post" name="xoahinhhanghoa">
          <div class="container">
              <label for="mahinh"><b>Mã hình</b></label>
              <input type="text" placeholder="Enter mahinh" name="mahinh" required><br>   
              <button type="submit" value="xoahinhhanghoa">Xóa</button>
          </div>
      </form>
  </div>
  <div id="XoaHangHoa" class="tabcontent">
      <form class="modal-content animate" action="xoahanghoa.php" method="post" name="xoahanghoa">
          <div class="container">
              <label for="mshh"><b>Mã số hàng hóa</b></label>
              <input type="text" placeholder="Enter mshh" name="mshh" required><br>   
              <button type="submit" value="xoamshh">Xóa</button>
          </div>
      </form>
  </div>
  <div id="XoaLoaiHangHoa" class="tabcontent">
      <form class="modal-content animate" action="xoaloaihanghoa.php" method="post" name="xoaloaihanghoa">
          <div class="container">
              <label for="maloaihang"><b>Mã loại hàng</b></label>
              <input type="text" placeholder="Enter Maloaihang" name="maloaihang" required><br>   
              <button type="submit" value="xoaloaihanghoa">Xóa</button>
          </div>
      </form>
  </div>

  <script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  </script>
   
</body>
</html> 
