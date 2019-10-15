<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="icon.png">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <?php ob_start(); ?>
  <body>
  <?php if(!session_id()){
          session_start();
          }

        if(isset($_SESSION['user']) && isset($_SESSION['password'])){

  ?>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Space Delivery for Admin</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php include("menu.php"); ?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

          <!-- Container -->
	<?php
  $page = $_GET["page"];
	switch ($page) {
	case "ordering":
		include("page_home.php");
		break;
	case "ordered":
		include("page_ordered.php");
		break;
	case "deliveryUser":
    //header('Location:page_deliveryUser.php?menu=notAllowUser');
		include("page_deliveryUser.php");
		break;
	case "restaurantUser":
		include("page_restaurantUser.php");
		break;
	case "deliveryIncome":
		include("page_incomeDeliman.php");
		break;
  case "restaurantIncome":
    include("page_incomeRes.php");
    break;
  case "foodRecom":
    include("page_recomFood.php");
    break;
  case "fillCredit":
    include("page_fillCredit.php");
    break;
	default:
		include("page_home.php");
	}
	?>
        <!--<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

        </main>
      </div>
    </div>
      <script  src="index.js"></script>
  </body>
  <?php
  }else{
     echo "กรุณาล๊อกอินก่อนครับ";
  }
      ob_end_flush();
   ?>
</html>
