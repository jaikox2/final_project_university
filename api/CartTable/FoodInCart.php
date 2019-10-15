<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectCartTable.php';

class foodCart {
       public $foodid = "";
       public $foodName  = "";
       public $foodPrice = "";
       public $foodImg  = "";
       public $cart_amount;
       public $c_id;
       public $ResName = "";
       public $Resid ;
}

$obj = new foodCart();

$user_id = $_POST['user_id'];
//$user_id = "4";

//  $sql = "SELECT * FROM ".$TbName." where Res_id=".$Resid." ";



$sql = "SELECT tb_cart.c_id, tb_cart.cart_amount, food.id, food.name, food.price, food.img FROM tb_cart
INNER JOIN food ON tb_cart.food_id = food.id and tb_cart.cart_status = 'notOrder' and tb_cart.Cus_id = '".$user_id."' ORDER BY food.price;";

  $result=mysqli_query($conn,$sql);

  $object_array = array();

  while($data = mysqli_fetch_assoc($result)) {
    $obj->foodid = $data["id"];
    $obj->foodName = $data["name"];
    $obj->foodPrice = $data["price"];
    $obj->foodImg = $data["img"];
    $obj->cart_amount = $data["cart_amount"];
    $obj->c_id = $data["c_id"];
    $sql = "SELECT resuser.resname ,resuser.id FROM food
    INNER JOIN resuser ON food.Res_id = resuser.id and food.id = ".$data["id"].";";
    $result1=mysqli_query($conn,$sql);
    while($data1 = mysqli_fetch_assoc($result1)){
      $obj->Resid = $data1["id"];
      $obj->ResName = $data1["resname"];
    }
    array_push($object_array,$obj);
    $obj = new foodCart();
  }

  $json_array = json_encode($object_array);

  echo $json_array;

mysqli_close($conn);
?>
