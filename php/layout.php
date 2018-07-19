<?php require_once 'ti.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="icon" href="./logo/title.png">
	<title>Moto-Rev</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/theme.css">
	<link rel="stylesheet" type="text/css" href="./css/fontawesome/css/all.css">
	<style type="text/css">
		#footer2 a
		{
			 color: white;
		}
	</style>
</head>

<body>

	<div id="header">
		<div id="brand">
			<img src="./logo/Logo1.png" alt="logo1" id="brandLogo">
		</div>
		<div class="header-search">
			<form class="form-inline my-2 my-md-0" action="">
				<input class="form-control" type="text" placeholder="Search..." aria-label="Search">
				<button type="submit" class="btn btn-sm"><i class="fas fa-search"></i></button>
			</form>
		</div>
	</div>

	<div id="nav-expand">
		<button id="nav-return"><span class="fas fa-angle-double-right"></span></button>
	</div>

	<div id="goUp">
		<a href="#Up"><i class="fas fa-angle-double-up"></i></a>
	</div>
	<div class="container-fluid" id="content">
		<div class="row">
			<div class="col-sm-3" id="nav-box">
				<div id="nav-list">
				<ul>
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
				</ul>
				</div>
				<div id="nav-shrink">
					<button id="nav-collapse"><span class="fas fa-angle-double-left"></span></button>
				</div>
				<footer id="footer1">
					<a href="#"><i class="fab fa-facebook"></i></a> | 
					<a href="#"><i class="fab fa-instagram"></i></a> | 
					<a href="#"><i class="fab fa-twitter"></i></a> | 
					<a href="#"><i class="fab fa-google-plus-square"></i></a> | 
					<a href="#"><i class="fab fa-linkedin"></i></a>
					<h4>&copy; Moto-Rev Team</h4>
				</footer>
			</div>
			<div class="col-sm-9" id="content-item">
				<div id="Up"></div>

				<?php emptyblock('article') ?>

				<footer id="footer2" style="color: white;">
					<a href="#"><i class="fab fa-facebook"></i></a> | 
					<a href="#"><i class="fab fa-instagram"></i></a> | 
					<a href="#"><i class="fab fa-twitter"></i></a> | 
					<a href="#"><i class="fab fa-google-plus-square"></i></a> | 
					<a href="#"><i class="fab fa-linkedin"></i></a>
					<h4>&copy; Moto-Rev Team</h4>
				</footer>
			</div>
		</div>
	</div>

</body>
</html>
<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/index.js"></script>