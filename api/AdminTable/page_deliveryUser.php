
<div class="btn-toolbar mb-2 mb-md-0" style="margin: auto;
    margin-top:30px;
    width: 50%;
    padding: 10px;">
    <h2 style="margin-bottom:20px">จัดการผู้ใช้สำหรับผู้ส่ง</h2>
    <div class="btn-group mr-2">
      <button class="btn btn-sm btn-outline-secondary"><a class="btn-outline-secondary" href="homemenu.php?page=deliveryUser&menu=notAllowUser">ผู้ส่งอาหารยังไม่ได้รับอนุญาติ</a></button>
      <button class="btn btn-sm btn-outline-secondary"><a class="btn-outline-secondary" href="homemenu.php?page=deliveryUser&menu=allowUser">ผู้ส่งอาหารที่ได้รับอนุญาติ</a></button>
    </div>
</div>
<?php
if(isset($_GET["menu"])){
$menu = $_GET["menu"];
switch ($menu) {
case "allowUser":
  include("deliveryUser/allow.php");
  break;
case "notAllowUser":
  include("deliveryUser/notAllow.php");
  break;
case "updateUser":
  include("deliveryUser/updateUser.php");
  break;
}
}else {
  include("deliveryUser/notAllow.php");
}
?>
