<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectOrderTable.php';

class order {
       public $order_id = "";
}

$obj = new order();

$cart_id = $_POST['cart_id'];

//$cart_id = "1540886263";

$sql = "SELECT order_id FROM ".$TbName." where cart_id=".$cart_id." ";

$result=mysqli_query($conn,$sql);

$data = mysqli_fetch_assoc($result);

$obj->order_id =$data["order_id"];

echo json_encode($obj);

mysqli_close($conn);
?>
