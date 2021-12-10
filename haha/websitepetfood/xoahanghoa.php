<?php
    require('config.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['mshh'])){
            // removes backslashes
        $mshh = stripslashes($_REQUEST['mshh']);
            //escapes special characters in a string
        $mshh = mysqli_real_escape_string($con,$mshh); 
        $query = "DELETE FROM `hanghoa` WHERE `hanghoa`.`mshh` = '$mshh';";
        $result = mysqli_query($con,$query);
        if(!$result){
            echo '<form>Xóa thành công<br>
                <a href="nhanvien.php">Ve</a>    
            </form>';               
        }
    }
?>