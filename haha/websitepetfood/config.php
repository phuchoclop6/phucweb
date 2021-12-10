<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quanlydathang";

    //ket noi den sqli
    $con = mysqli_connect($servername,$username,$password,$dbname);

    //kiem tra ket noi
    if(!$con){
        die("Connection fail:" .mysqli_connnect_error());
    }
?>