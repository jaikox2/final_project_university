<?php
header("Content-type: text/plain; charset=utf-8");
include 'ConnectCustomerTable.php';


class upload {
       public $status  = "";
}


@mkdir("upload-proimg"); 		//ถ้าไม่มีไดเร็กทอรี้นี้ ให้สร้างใหม่

$obj = new upload();
$newfilename = $_POST['img'];

if(isset($_FILES['upload_file'])) {          //Upload image

  while (file_exists("upload-proimg/" . $newfilename)){

    if($newfilename != "pro.jpg"){
        unlink("upload-proimg/".$newfilename);
    }
      $temp = explode(".", $_FILES['upload_file']['name']);
      $newfilename = round(microtime(true)) . '.' . end($temp);  //check the same image name
    }


    //check the same image name
	$target = "upload-proimg/" . $newfilename;
 	move_uploaded_file($_FILES['upload_file']['tmp_name'], $target);

  $name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $sex = $_POST['sex'];
  $address = $_POST['address'];
  $Resid = $_POST['Res_id'];
  $img = $newfilename;

  /*$res_name ="fesfesf";
  $res_add = "fsdfds";
  $name = "jiojh";
  $lastname ="kofd90";
  $email = "iu09uo";
  $phone = "vnidniu";
  $addmap = "4789305fd";
  $Resid = 1;*/

$sql = "UPDATE ".$TbName." SET 	firstname='".$name."',lastname='".$lastname."',sex='".$sex."',address='".$address."',phone='".$phone."',img='".$img."' WHERE id=".$Resid."";

$result=mysqli_query($conn,$sql);

if($result){
  $obj->status = "update success";
  echo json_encode($obj);
}else {
  $obj->status ="update Error";
  echo json_encode($obj);
}

} else {
  $name = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $phone = $_POST['phone'];
  $sex = $_POST['sex'];
  $address = $_POST['address'];
  $Resid = $_POST['Res_id'];
  $img = $newfilename;


$sql = "UPDATE ".$TbName." SET 	firstname='".$name."',lastname='".$lastname."',sex='".$sex."',address='".$address."',phone='".$phone."',img='".$img."' WHERE id=".$Resid."";

  $result=mysqli_query($conn,$sql);

  if($result){
    $obj->status = "update success";
  	echo json_encode($obj);
  }else {
    $obj->status ="update Error";
    echo json_encode($obj);
  }
}

mysqli_close($conn);
?>
