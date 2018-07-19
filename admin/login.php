<?php
  session_start();
  if(isset($_SESSION["username"]))
  {
    header('location: home.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../logo/title.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css">
    <link rel="stylesheet" type="text/css" href="../css/admin-form.css">
    <link rel="stylesheet" type="text/css" href="../css/floating-labels.css">

    <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.css">
</head>
<body>
  <form class="form-signin" action="../php/login-process.php" method="post">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal header">LogIn</h1>
      </div>

      <div class="form-label-group">
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="username">Username</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <label for="password">Password</label>
      </div>
      <span id="error" class="text-danger"></span>
      <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">LogIn <i class="fas fa-sign-in-alt"></i></button>
      <p class="mt-5 mb-3 text-muted text-center">
        Not yet a member? <a href="register.php">Register</a>
      </p>
    </form>
</body>
</html>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/checkpass.js"></script>