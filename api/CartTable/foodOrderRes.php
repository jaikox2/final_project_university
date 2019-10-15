<?php
header("Content-type: text/plain; charset=utf-8");

include 'ConnectCartTable.php';

class orderRes{
    public $food_name ;
    public $food_img ;
    public $food_quantity = "";
}

  $cartid = $_POST['cart_id'];
  //$cartid = "1541316597";

  $sql = "SELECT food.name, food.img, tb_cart.cart_amount FROM tb_cart
  INNER JOIN food ON tb_cart.food_id = food.id and tb_cart.cart_id =".$cartid." ";

  $result=mysqli_query($conn,$sql);

  $obj = new orderRes();

  $object_array = array();

    while($data = mysqli_fetch_assoc($result)) {
      $obj->food_name =$data["name"];
      $obj->food_img =$data["img"];
      $obj->food_quantity =$data["cart_amount"];

      array_push($object_array,$obj);
      $obj = new orderRes();
      }
  $json_array = json_encode($object_array);
  echo $json_array;
mysqli_close($conn);
?>
