<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // tên_người_dùng và mật_khẩu được gửi từ form 
      
      $myusername=mysqli_real_escape_string($db,$_POST['username']);
      $mypassword=mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql="SELECT id FROM member WHERE username='$myusername' and 'password'='$mypassword'";
      $result=mysqli_query($db,$sql);
      $row=mysqli_fetch_array($result);
      $active=$row['active'];
      
      $count=mysqli_num_rows($result);
      
      // nếu kết quả là so khớp với $myusername và $mypassword, sẽ có
      // một hàng kết quả
		
      if($count==1)
      {
         session_register("myusername");
         $_SESSION['login_user']=$myusername;
         
         header("location: welcome.php");
      }
      else 
      {
         $error="Tên đăng nhập và mật khẩu không hợp lệ";
      }
   }
?>
<html>
   
   <head>
      <title>Trang đăng nhập</title>
      
      <style type="text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor="#FFFFFF">
	
      <div align="center">
         <div style="width:300px; border: solid 1px #333333; " align="left">
            <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style="margin:30px">
               
               <form action="" method="post">
                  <label>Tên người dùng  :</label><input type="text" name="username" class="box"/><br /><br />
                  <label>Mật khẩu  :</label><input type="password" name="password" class="box" /><br/><br />
                  <input type="submit" value=" Submit "/><br />
               </form>
               
               <div style="font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>