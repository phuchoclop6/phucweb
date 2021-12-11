<?php
    require('config.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['maloaihang'])){
            // removes backslashes
        $maloaihang = stripslashes($_REQUEST['maloaihang']);
            //escapes special characters in a string
        $maloaihang = mysqli_real_escape_string($con,$maloaihang); 
        $query = "DELETE FROM `loaihanghoa` WHERE `loaihanghoa`.`maloaihang` = '$maloaihang';";
        $result = mysqli_query($con,$query);
        if(!$result){
            echo '<form>Xóa thành công<br>
                <a href="nhanvien.php">Ve</a>    
            </form>';               
        }
    }
?>