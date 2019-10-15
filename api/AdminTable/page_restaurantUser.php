
<div class="btn-toolbar mb-2 mb-md-0" style="margin: auto;
    margin-top:30px;
    width: 50%;
    padding: 10px;">
    <h2 style="margin-bottom:20px">จัดการผู้ใช้สำหรับร้านอาหาร</h2>
    <div class="btn-group mr-2">
      <button class="btn btn-sm btn-outline-secondary"><a class="btn-outline-secondary" href="homemenu.php?page=restaurantUser&menu=notAllowUser">ร้านอาหารยังไม่ได้รับอนุญาติ</a></button>
      <button class="btn btn-sm btn-outline-secondary"><a class="btn-outline-secondary" href="homemenu.php?page=restaurantUser&menu=allowUser">ร้านอาหารที่ได้รับอนุญาติ</a></button>
    </div>
</div>
<?php
if(isset($_GET["menu"])){
$menu = $_GET["menu"];
switch ($menu) {
case "allowUser":
  include("restaurantUser/allow.php");
  break;
case "notAllowUser":
  include("restaurantUser/notAllow.php");
  break;
case "updateUser":
  include("restaurantUser/updateUser.php");
  break;
}
}else {
  include("restaurantUser/notAllow.php");
}
?>
