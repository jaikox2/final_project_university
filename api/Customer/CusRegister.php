<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectCustomerTable.php';

class response {
       public $res  = "";
       public $status  = "";
}

$obj = new response();

$name = $_POST['name'];
$surname = $_POST['surname'];
$sex = $_POST['sex'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['pass'];


$sql = "SELECT id FROM ".$TbName." where email='".$email."' ";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) {
  $obj->res = "อีเมล์นี้เคยสมัครแล้ว";
  $obj->status = "#0";
  echo json_encode($obj);
}else {

$sql = "INSERT INTO ".$TbName." (firstname, lastname, sex,  address, phone, email, password)
VALUES ('".$name."', '".$surname."', '".$sex."', '".$address."', '".$phone."', '".$email."','".$password."')";

$result=mysqli_query($conn,$sql);

if($result){
  $obj->res = "ลงทะเบียนสำเร็จ";
  $obj->status = "#1";
  echo json_encode($obj);
}else {
  $obj->res = "ลงทะเบียนไม่สำเร็จ";
  $obj->status = "#0";
  echo json_encode($obj);
}
}
mysqli_close($conn);
?>
