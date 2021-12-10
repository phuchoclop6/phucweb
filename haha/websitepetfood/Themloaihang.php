<?php
    require('config.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['maloaihang'])){
            // removes backslashes
        $maloaihang = stripslashes($_REQUEST['maloaihang']);
            //escapes special characters in a string
        $maloaihang = mysqli_real_escape_string($con,$maloaihang); 
        $tenloaihang = stripslashes($_REQUEST['tenloaihang']);
        $tenloaihang = mysqli_real_escape_string($con,$tenloaihang);
            $query = "INSERT into `loaihanghoa` (maloaihang, tenloaihang)
    VALUES ('$maloaihang', '$tenloaihang')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "thanhcong";   
        }
    }
?>