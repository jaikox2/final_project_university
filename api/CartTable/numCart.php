<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectCartTable.php';

class cart {
       public $Count  = "";
}

$obj = new cart();

$userid = $_POST['user_id'];

//$userid = "2";

$sql = "SELECT * FROM ".$TbName." where Cus_id='".$userid."' and cart_status='notOrder' ";

$result=mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
$obj->Count =$num;
echo json_encode($obj);
mysqli_close($conn);
?>
