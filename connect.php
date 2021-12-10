  if( isset($_POST(["submit"]) && $_POST(["username"]) !='' && $_POST(["password"]) !='') {
   	$myusername=mysqli_real_escape_string($db,$_POST['username']);
      	$mypassword=mysqli_real_escape_string($db,$_POST['password']); 
        $sql="SELECT * FROM menber WHERE username='$myusername' and password='$mypassword'";
   	$result=mysqli_query($db,$sql);
   	if(mysqli_numrows($myuser) > 0){
   		echo "thanh cong";
   	}else {
   		echo"sai";
   	}	
   }else{
   	header("location: login.php");
   }
