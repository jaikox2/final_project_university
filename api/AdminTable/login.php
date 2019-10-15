<?php ob_start();
session_start();
include "ConnectAdminTable.php";
$password=$_POST['pass'];
$email=$_POST['email'];

$name ="";
$sql="select * from ".$TbName." where email='$email'";
$result=mysqli_query($conn,$sql);
while($dbarr=mysqli_fetch_array($result)){
  $name=$email;
  $pass=$dbarr["password"];
}

if($email == $name && $password == $pass ){
  $_SESSION["user"]=$email;
  $_SESSION["password"]=$password;
  //include "homemenu.php";
  header('Location:homemenu.php?page=ordering');
}else{
  echo "รหัสไม่ถูกต้อง<br>";
  echo"<a href=index.php >ล็อกอินใหม่</a>";
}



ob_end_flush();
 ?>
