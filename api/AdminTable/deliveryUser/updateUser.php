<?php
  $id = $_GET["id"];
  include "ConnectAdminTable.php";
  $sql = "SELECT id, firstname, lastname, sex, address, phone, licensePlate, vahicle FROM deliverymanuser where id=".$id." ";
  $result=mysqli_query($conn,$sql);
  $data = mysqli_fetch_assoc($result);
 ?>
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-8" >
    <form action="homemenu.php?page=deliveryUser&menu=allowUser&id=<?php echo $id;?>" method="POST" style="margin-top:10px">
      <h2>แก้ไขผู้ใช้สำหรับส่งอาหาร</h2>
      <div class="form-group" style="margin-top:20px">
        <label for="email">ชื่อ:</label>
        <input type="text" class="form-control" id="email" placeholder="Enter name" name="name" value="<?php echo $data["firstname"];?>" >
      </div>
      <div class="form-group" style="margin-bottom:20px">
        <label for="pwd">นามสกุล:</label>
        <input type="text" class="form-control" id="pass" placeholder="Enter lastname" name="lastname" value="<?php echo $data["lastname"]      ;?>">
      </div>
      <div class="form-group" style="margin-bottom:20px">
        <label for="pwd">เพศ:</label>
        <input type="text" class="form-control" id="pass" placeholder="Enter sex" name="sex" value="<?php echo $data["sex"];?>">
      </div>
      <div class="form-group" style="margin-bottom:20px">
        <label for="pwd">ที่อยู่:</label>
        <input type="text" class="form-control" id="pass" placeholder="Enter address" name="address" value="<?php echo $data["address"];?>">
      </div>
      <div class="form-group" style="margin-bottom:20px">
        <label for="pwd">เบอร์โทร:</label>
        <input type="text" class="form-control" id="pass" placeholder="Enter phone" name="phone" value="<?php echo $data["phone"];?>">
      </div>
      <div class="form-group" style="margin-bottom:20px">
        <label for="pwd">ประเภทรถ:</label>
        <input type="text" class="form-control" id="pass" placeholder="Enter vahicle" name="vahicle" value="<?php echo $data["vahicle"];?>">
      </div>
      <div class="form-group" style="margin-bottom:20px">
        <label for="pwd">ป้ายทะเบียน:</label>
        <input type="text" class="form-control" id="pass" placeholder="Enter license plate" name="licensePlate" value="<?php echo $data["licensePlate"];?>">
      </div>
      <div class="form-group" style="margin-bottom:20px">
        <label for="pwd">สถานะ:</label>
        <select name="status" class="form-control">
          <option value="allow">อนุญาติ</option>
          <option value="null">ไม่อนุญาติ</option>
        </select>
      </div>
      <button type="submit" class="btn btn-sm btn-outline-secondary">บันทึก</button>
    </form>
  </div>
</div>
