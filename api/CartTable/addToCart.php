<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectCartTable.php';


$userid = $_POST['user_id'];
$foodid = $_POST['food_id'];

//$foodid = "52";
//$userid = "4";


$sql = "SELECT * FROM ".$TbName." where Cus_id=".$userid." and cart_status='notOrder'";
$result=mysqli_query($conn,$sql);
$data = mysqli_fetch_assoc($result);
$oldfood=$data['food_id'];

if(mysqli_num_rows($result) > 0){

  $sql = "SELECT Res_id FROM food where id=".$foodid." ";
  $result=mysqli_query($conn,$sql);
  $data = mysqli_fetch_assoc($result);
  $newResid=$data['Res_id'];

  $sql = "SELECT Res_id FROM food where id=".$oldfood." ";
  $result=mysqli_query($conn,$sql);
  $data = mysqli_fetch_assoc($result);
  $oldResid=$data['Res_id'];

  if($newResid == $oldResid){
    $sql = "SELECT * FROM ".$TbName." where Cus_id=".$userid." and cart_status='notOrder'";
    $result=mysqli_query($conn,$sql);
    $data = mysqli_fetch_assoc($result);
    $cart_id = $data['cart_id'];
    $sql = "INSERT INTO ".$TbName." (cart_id, food_id, Cus_id)
    VALUES ('".$cart_id."', '".$foodid."', '".$userid."')";
    mysqli_query($conn,$sql);
    echo "canAdd";
  }else {
    echo "cannotAdd";
  }
}else {
  $cart_id = round(microtime(true));
  do{
    $cart_id = round(microtime(true));
    $sql = "SELECT * FROM ".$TbName." where cart_id=".$cart_id."";
    $result=mysqli_query($conn,$sql);
  }while (mysqli_num_rows($result) > 0);
  $sql = "INSERT INTO ".$TbName." (cart_id, food_id, Cus_id)
  VALUES ('".$cart_id."', '".$foodid."', '".$userid."')";
  mysqli_query($conn,$sql);
  echo "canAdd";
}
mysqli_close($conn);
?>
