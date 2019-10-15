<h2 style="margin-top:30px">ร้านอาหารยังไม่ได้รับอนุญาติ</h2>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>หมายเลข</th>
        <th>ชื่อร้าน</th>
        <th>ที่อยู่</th>
        <th>ชื่อ-นามสกุล</th>
        <th>เบอร์โทร</th>
        <th>ที่อยู่แผ่นที่</th>
        <th>แก้ไขสถานะ</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "ConnectAdminTable.php";
              $sql = "SELECT id, resname,firstname, lastname, address, phone, addmap FROM resuser where status='null' ";
              $result=mysqli_query($conn,$sql);
              while($data = mysqli_fetch_assoc($result)) {
                echo "<tr>".
                "<td>".$data["id"]."</td>".
                "<td>".$data["resname"]."</td>".
                "<td>".$data["address"]."</td>".
                "<td>".$data["firstname"]." ".$data["lastname"]."</td>".
                "<td>".$data["phone"]."</td>".
                "<td>".$data["addmap"]."</td>".
                "<td><button class=btn btn-sm btn-outline-secondary onclick=allowResUser(".$data["id"].")>อนุญาติ</button></td>".
               "</tr>";
        }
        ?>
    </tbody>
  </table>
</div>
