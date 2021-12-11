
<?php
    require('config.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['mahinh'])){
            // removes backslashes
        $mahinh = stripslashes($_REQUEST['mahinh']);
            //escapes special characters in a string
        $mahinh = mysqli_real_escape_string($con,$mahinh); 
        $query = "DELETE FROM `hinhhanghoa` WHERE `hinhhanghoa`.`mahinh` = '$mahinh';";
        $result = mysqli_query($con,$query);
        if(!$result){
            echo '<form>Xóa thành công<br>
                <a href="nhanvien.php">Ve</a>    
            </form>';               
        }
    }
?>