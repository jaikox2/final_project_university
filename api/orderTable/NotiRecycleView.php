<?php
header("Content-type: text/plain; charset=utf-8");

include 'ConnectOrderTable.php';

class orderRes{
    public $order_id ;
    public $cart_id ;
    public $order_time = "";
    public $order_date = "";
}

  $Resid = $_POST['Res_id'];
  //$Resid = "18";

  $sql = "SELECT tb_cart.cart_id FROM food
  INNER JOIN tb_cart ON tb_cart.food_id = food.id and food.Res_id =".$Resid." ";

  $result=mysqli_query($conn,$sql);

  $obj = new orderRes();

  $object_array = array();
  $cart_id = 0;
    while($data1 = mysqli_fetch_assoc($result)) {
    if($data1["cart_id"] != $cart_id){
      $cart_id = $data1["cart_id"];
      $sql2 = "SELECT order_id, cart_id, order_time, order_date FROM ".$TbName." where cart_id=".$data1["cart_id"]." AND order_status='not' ";
      $result2=mysqli_query($conn,$sql2);
      while($data2 = mysqli_fetch_assoc($result2)) {
        $obj->order_id =$data2["order_id"];
        $obj->cart_id =$data2["cart_id"];
        $obj->order_time =$data2["order_time"];
        $obj->order_date =$data2["order_date"];
        array_push($object_array,$obj);
        $obj = new orderRes();
      }
    }
    }
  $json_array = json_encode($object_array);
  echo $json_array;
mysqli_close($conn);
?>
