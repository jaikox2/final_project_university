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

  $sql="UPDATE resuser SET status='allow' WHERE id=".$id."";
  $result=mysqli_query($conn,$sql);
  if($result){
    echo "อนุญาติเรียบร้อย";
  }else{
    echo "อนุญาตไม่สำเร็จ";
  }
  ob_end_flush();
 ?>
