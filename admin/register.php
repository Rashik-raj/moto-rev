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
    <form class="form-signin" onsubmit="return checkPass()" action = "../php/register-process.php" method="post" >
  	<div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal header">Register</h1>
      </div>

      <div class="form-label-group">
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <label for="username">Username</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required onkeydown="clearError()">
        <label for="password">Password</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="cPassword" name="cPassword" class="form-control" placeholder="Confirm Password" required onkeydown="clearError()">
        <label for="cPassword">Confirm Password</label>
      </div>
      <div class="form-label-group">
        <span class="form-control text-danger" id="error"></span>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Register <i class="fas fa-sign-in-alt"></i></button>
      <p class="mt-5 mb-3 text-muted text-center">
        Already a member? <a href="login.php">LogIn</a>
      </p>
  </form>
  

</body>
</html>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="../js/checkuser.js"></script>
<script type="text/javascript">
  function checkPass()
  {
    const pass = document.getElementById('password').value;
    const cPass = document.getElementById('cPassword').value;

    if (pass.length<=5)
    {
      document.getElementById('error').style.display = "block";
      document.getElementById('error').innerHTML = "***Password length must be atleast 6!!!";
      return false;      
    }
    else if (pass != cPass)
    {
      document.getElementById('error').style.display = "block";
      document.getElementById('error').innerHTML = "***Password Mismatched!!!";
      return false;
    }
    else
    {
      return true;
    }
  }
  function clearError()
  {
    document.getElementById('error').innerHTML = "";
    document.getElementById('error').style.display = "none";
  }
</script>