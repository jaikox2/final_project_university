<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectDeliveryTable.php';

class deliver{
       public $deli_name = "";
       public $deli_address = "";
       public $deli_phone  = "";
       public $deli_img = "";
       public $res_name  = "";
       public $res_address = "";
       public $res_phone = "";
       public $res_img = "";
}

  $obj = new deliver();

  //$userid = $_POST['user_id'];
  $deli_id = $_POST['deli_id'];
  //$deli_id = "32";
  //$userid = "1";
  //$Resid = $_POST['Res_id'];

  $sql = "SELECT order_id ,deli_name, deli_phone, deli_addDetail FROM ".$TbName." where deli_id=".$deli_id."";

  $result=mysqli_query($conn,$sql);
  $data = mysqli_fetch_assoc($result);
    $obj->deli_name = $data["deli_name"];
    $obj->deli_address = $data["deli_addDetail"];
    $obj->deli_phone = $data["deli_phone"];


    $sql = "SELECT cart_id, Cus_id FROM tb_order where order_id=".$data["order_id"]." ";
    $result1=mysqli_query($conn,$sql);
    $data1 = mysqli_fetch_assoc($result1);
    $data1["Cus_id"];

    $sql = "SELECT img FROM cususer where id=".$data1["Cus_id"]." ";
    $result5=mysqli_query($conn,$sql);
    $data5 = mysqli_fetch_assoc($result5);
    $obj->deli_img = $data5["img"];;

      $sql = "SELECT food_id FROM tb_cart where cart_id=".$data1["cart_id"]." ";
      $result2=mysqli_query($conn,$sql);
      $data2 = mysqli_fetch_assoc($result2);
        $sql = "SELECT Res_id FROM food where id=".$data2["food_id"]." ";
        $result3=mysqli_query($conn,$sql);
        $data3 = mysqli_fetch_assoc($result3);
          $sql = "SELECT resname, address, phone, img FROM resuser where id=".$data3["Res_id"]." ";
          $result4=mysqli_query($conn,$sql);
          $data4 = mysqli_fetch_assoc($result4);
            $obj->res_name = $data4["resname"];
            $obj->res_address = $data4["address"];
            $obj->res_phone = $data4["phone"];
            $obj->res_img = $data4["img"];

  $json_array = json_encode($obj);

  echo $json_array;

mysqli_close($conn);
?>
