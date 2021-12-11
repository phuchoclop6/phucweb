<?php
    require("logincustomer.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="form1.js"></script>
</head>
<body class="trangchu">

    <h1 class="center">Welcome to the pet food store</h1>
    <div class="center">
        <button onclick="document.getElementById('id02').style.display='block'" class="fontcenter">KhachHang</button>
        <button onclick="document.getElementById('id01').style.display='block'" class="fontcenter">Nhan vien</button>
    </div>

    <div id="id01" class="modal">
    
        <form class="modal-content animate" action="login_staff.php" method="post" name="loginnhanvien">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="usernamenv"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="usernamenv" required>

                <label for="passwordnv"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="passwordnv" required>
                
                <button type="submit" value="login">Login</button>
                <div>neu khong co tai khoan thi lien he nguoi quan tri de biet them thong tin</div>
            </div>

            <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>
    <div id="id02" class="modal">
    
        <form class="modal-content animate" action="logincustomer.php" method="post" name="loginkhachhang">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="usernamekh"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="usernamekh" required>

                <label for="passwordkh"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="passwordkh" required>
                
                <button type="submit" value="login">Login</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
            <button type="button" onclick="document.getElementById('id03').style.display='block'"  class="registerbtn">Register</button>
            </div>
        </form>
        <div id="id03" class="modal">
    
        <form class="modal-content animate" action="registerkh.php" method="post" name="resigterkhachhang">
            <div class="imgcontainer">
                <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="usernamekh"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="usernamekh" required>

                <label for="passwordkh"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="passwordkh" required>
                
                <button type="submit" value="login">Login</button>
            </div>

            <div class="container" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
        </form>
    </div>
    </div>

</body>
</html>
