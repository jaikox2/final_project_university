<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectCustomerTable.php';

class cusUser {
       public $credit = "";
}

$obj = new cusUser();

$userid=$_POST['user_id'];
//$userid="5";

  $sql = "SELECT credit FROM ".$TbName." where id='".$userid."' ";

  $result=mysqli_query($conn,$sql);

  $row = mysqli_fetch_assoc($result);
  $obj->credit =$row["credit"];
  echo json_encode($obj);

mysqli_close($conn);
?>
