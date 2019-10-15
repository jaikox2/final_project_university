<h2 style="margin-top:30px">ผู้ส่งอาหารที่ได้รับอนุญาติ</h2>
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
        <th>แก้ไข ลบ</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "ConnectAdminTable.php";

      if(isset($_POST["name"])){
        $id =$_GET["id"];
        $name = $_POST["name"];
        $lastname = $_POST["lastname"];
        $sex = $_POST["sex"];
        $address = $_POST["address"];
        $phone = $_POST["phone"];
        $licensePlate = $_POST["licensePlate"];
        $vahicle = $_POST["vahicle"];
        $status = $_POST["status"];

        $sql="UPDATE deliverymanuser SET firstname='".$name."', lastname='".$lastname."', sex='".$sex."', address='".$address."', phone='".$phone."', licensePlate='".$licensePlate."', vahicle='".$vahicle."' ,status='".$status."' WHERE id=".$id."";
        $result=mysqli_query($conn,$sql);
        if($result){
        //  echo "แก้ไขเรียบร้อย";
        }else{
        //  echo "แก้ไขไม่สำเร็จ";
        }

      }

              $sql = "SELECT id, firstname, lastname, sex, address, phone, licensePlate, vahicle FROM deliverymanuser where status='allow' ";
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
                "<td><button class=btn btn-sm btn-outline-secondary ><a href=homemenu.php?page=deliveryUser&menu=updateUser&id=".$data["id"].">แก้ไข</a></button>
                <button class=btn btn-sm btn-outline-secondary onclick=deleteDelimanUser(".$data["id"].")>ลบ</button></td>".
                "</tr>";
              }
        ?>
    </tbody>
  </table>
</div>
