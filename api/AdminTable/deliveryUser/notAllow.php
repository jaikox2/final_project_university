<h2 style="margin-top:30px">ผู้ส่งอาหารยังไม่ได้รับอนุญาติ</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>หมายเลข</th>
        <th>ชื่อ-สกุล</th>
        <th>เพศ</th>
        <th>ที่อยู่</th>
        <th>เบอร์โทร</th>
        <th>ป้ายทะเบียน</th>
        <th>ประเภทรถ</th>
        <th>แก้ไขสถานะ</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "ConnectAdminTable.php";
              $sql = "SELECT id, firstname, lastname, sex, address, phone, licensePlate, vahicle FROM deliverymanuser where status='null' ";
              $result=mysqli_query($conn,$sql);
              while($data = mysqli_fetch_assoc($result)) {
                echo "<tr>".
                "<td>".$data["id"]."</td>".
                "<td>".$data["firstname"]." ".$data["lastname"]."</td>".
                "<td>".$data["sex"]."</td>".
                "<td>".$data["address"]."</td>".
                "<td>".$data["phone"]."</td>".
                "<td>".$data["licensePlate"]."</td>".
                "<td>".$data["vahicle"]."</td>".
                "<td><button class=btn btn-sm btn-outline-secondary onclick=allowDelimanUser(".$data["id"].")>อนุญาติ</button></td>".
               "</tr>";
        }
        ?>
    </tbody>
  </table>
</div>
