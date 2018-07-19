<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../logo/title.png">
  <title>Moto-Rev</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap1.min.css">
  <link rel="stylesheet" type="text/css" href="../css/new.css">
  <link rel="stylesheet" type="text/css" href="../css/floating-labels.css">
  <link rel="stylesheet" type="text/css" href="../css/fontawesome/css/all.css">
</head>
<body>
		<div class="container-fluid">
      <form class="form-signin" action="../php/login-process.php" method="post">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal header">Register Brand</h1>
      </div>

      <div class="form-label-group">
        <input type="text" id="brandname" name="brandname" class="form-control" placeholder="brandname" required autofocus>
        <label for="brandname">brand</label>
      </div>

      <div class="form-label-group">
        <select class="form-control">
          <option value="bike">2-wheeler</option>
          <option value="car">4-wheeler</option>
        </select>
      </div>
      <span id="error" class="text-danger"></span>
      <button class="btn btn-lg btn-primary btn-block" type="submit" id="submit">Entry</button>
    </form>
    </div>
</body>
</html>
<script type="text/javascript" src="../js/new.js"></script>