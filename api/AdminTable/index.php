<!DOCTYPE html>
<html lang="en">
<head>
  <title>Space Delivery</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;"></div>
    <div class="col-sm-4" >
      <form action="login.php" method="POST" style="margin-top:120px">
        <h2>Space Delivery For Admin</h2>
        <div class="form-group" style="margin-top:80px">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group" style="margin-bottom:30px">
          <label for="pwd">Password:</label>
          <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
    <div class="col-sm-4" style="background-color:lavender;"></div>
  </div>
</div>
</body>
</html>
