<?php
    require('config.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['mshh'])){
            // removes backslashes
        $mshh = stripslashes($_REQUEST['mshh']);
            //escapes special characters in a string
        $mshh = mysqli_real_escape_string($con,$mshh); 
        $tenhh = stripslashes($_REQUEST['tenhh']);
        $tenhh = mysqli_real_escape_string($con,$tenhh);
        
        $quycach = stripslashes($_REQUEST['quycach']);
        $quycach = mysqli_real_escape_string($con,$quycach);
        $gia = stripslashes($_REQUEST['gia']);
        $gia = mysqli_real_escape_string($con,$gia);

        $soluonghang = stripslashes($_REQUEST['soluonghang']);
        $soluonghang = mysqli_real_escape_string($con,$soluonghang);
        $maloaihang = stripslashes($_REQUEST['maloaihang']);
        $maloaihang = mysqli_real_escape_string($con,$maloaihang);
            $query = "INSERT INTO `hanghoa` (`mshh`, `tenhh`, `quycach`, `gia`, `soluonghang`, `maloaihang`) 
            VALUES ('$mshh', '$tenhh', '$quycach', '$gia', '$soluonghang', '$maloaihang')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "thanhcong";   
        }
    }
?>