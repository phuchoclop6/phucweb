<?php
include 'config.php';
if (isset($_POST['upload'])) {
    $mahinh= stripslashes($_REQUEST['mahinh']);
    $mahinh = mysqli_real_escape_string($con,$mahinh); 
    $mshh = stripslashes($_REQUEST['mshh']);
    $mshh = mysqli_real_escape_string($con,$mshh);

    $errors= array();
    $file_name = $_FILES['tenhinh']['name'];
    $file_size = $_FILES['tenhinh']['size'];
    $file_tmp = $_FILES['tenhinh']['tmp_name'];
    $file_type = $_FILES['tenhinh']['type'];
    $file_parts =explode('.',$_FILES['tenhinh']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");
    if(in_array($file_ext,$expensions)=== false){
    $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
    }
    if($file_size > 2097152) {
    $errors[]='Kích thước file không được lớn hơn 2MB';
    }
    $tenhinh = $_FILES['tenhinh']['name'];
    $target = "images/".basename($tenhinh);
    $sql = "INSERT INTO `hinhhanghoa` (mahinh,tenhinh,mshh) VALUES ('$mahinh','$tenhinh','$mshh')";
    mysqli_query($con, $sql);
    if (move_uploaded_file($_FILES['tenhinh']['tmp_name'], $target)) {
    echo '<script language="javascript">alert("Đã upload thành công!");</script>';
    }else{
    echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
    }
    }
    
?>
