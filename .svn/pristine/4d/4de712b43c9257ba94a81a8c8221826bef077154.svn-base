<?php 
    include 'config.php';
    $sql = "insert into member (id,username,password,phone,email) 
    values ('11','phuc','123','0382157112','phuc12@gmail.com')";

    if(mysqli_query($conn,$sql)) {
        echo "thanh cong";
    } else {
        echo "error: " .sql ."<br>" .mysqli_error($conn);
    }
    mysqli_close($conn);
?>