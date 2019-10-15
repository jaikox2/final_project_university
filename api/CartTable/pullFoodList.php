<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectCartTable.php';

class foodCart {
       public $cart_amount;
       public $cart_id;
}

$obj = new foodCart();

$user_id = $_POST['user_id'];
//$user_id = "5";

$sql = "SELECT cart_id, cart_amount FROM tb_cart where cart_status = 'notOrder' and Cus_id = '".$user_id."';";

  $result=mysqli_query($conn,$sql);

  $object_array = array();

  while($data = mysqli_fetch_assoc($result)) {
    $obj->cart_amount = $data["cart_amount"];
    $obj->cart_id = $data["cart_id"];
    array_push($object_array,$obj);
    $obj = new foodCart();
    }

    $json_array = json_encode($object_array);

  echo $json_array;

mysqli_close($conn);
?>
