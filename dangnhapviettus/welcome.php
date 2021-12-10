<?php
   include('session.php');
?>
<html">
   
   <head>
      <title>Chào mừng bạn đến với ... </title>
   </head>
   
   <body>
      <h1>Chào mừng <?php echo $login_session; ?></h1> 
      <h2><a href="logout.php">Đăng xuất</a></h2>
   </body>
   
</html>
