<?php

include '../libs/connectDB.php';
$TbName = "deliverymanUser";
  // check table exists
$sql="DESCRIBE ".$TbName."";
$result=mysqli_query($conn,$sql);
if ($result) {
  // check num row table
  $row = mysqli_num_rows($result);
  //echo "<br>row: ".$row;
    if($row != 0) {
      //  echo "<br>Table exists";
    }
}
else {
  //  echo "<br>Table does not exist";
    // sql to create table
    $sql = "CREATE TABLE ".$TbName." (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    sex VARCHAR(10) NOT NULL,
    address TEXT NOT NULL,
    phone VARCHAR(10) NOT NULL,
    img VARCHAR(255) DEFAULT 'pro.jpg',
    email VARCHAR(50) NOT NULL,
    password VARCHAR(30) NOT NULL,
    licensePlate VARCHAR(50) NOT NULL,
    vahicle VARCHAR(50) NOT NULL,
    status VARCHAR(10) DEFAULT 'null'
    )";
    // check create table
    if (mysqli_query($conn, $sql)) {
        echo "<br>Table ".$TbName." created successfully";
    } else {
        echo "<br>Error creating table: " . mysqli_error($conn);
    }
}

 ?>
