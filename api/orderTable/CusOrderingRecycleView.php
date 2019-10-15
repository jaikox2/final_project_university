<?php
header("Content-type: text/plain; charset=utf-8");

include 'ConnectOrderTable.php';

class orderRes{
    public $order_id ;
    public $cart_id ;
    public $order_time = "";
    public $order_date = "";
}

  $userid = $_POST['user_id'];
  //$Resid = "18";

  $obj = new orderRes();

  $object_array = array();

      $sql2 = "SELECT order_id, cart_id, order_time, order_date FROM ".$TbName." where Cus_id=".$userid." AND order_status='not' ";
      $result2=mysqli_query($conn,$sql2);
      while($data2 = mysqli_fetch_assoc($result2)) {
        $obj->order_id =$data2["order_id"];
        $obj->cart_id =$data2["cart_id"];
        $obj->order_time =$data2["order_time"];
        $obj->order_date =$data2["order_date"];
        array_push($object_array,$obj);
        $obj = new orderRes();
      }
  $json_array = json_encode($object_array);
  echo $json_array;
mysqli_close($conn);
?>
