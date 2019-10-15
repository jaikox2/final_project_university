<?php
  ob_start();
  session_start();
  $id=$_GET['id'];
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "FPDdb";

  $conn = mysqli_connect($servername, $username, $password);
  mysqli_select_db($conn, $dbname);

  $sql="DELETE FROM deliverymanuser WHERE id=".$id."";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "ลบเรียบร้อย";
  }else{
    echo "ลบไม่สำเร็จ";
  }
  ob_end_flush();
 ?>
