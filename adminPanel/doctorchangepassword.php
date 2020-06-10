<!DOCTYPE html>
<html>
<head>
	<title>doctor change password</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	
	<style type="text/css">
		.one{
			margin-left: 10px;
			font-size: 32px;
		}
		.two{
			margin-left: 10px;
			font-size: 25px;
		}
		form{
			margin-left: 10px;

		}
	</style>
</head>
<body>
<?php include "doctornavigationbar.php" ?>
<div class="container">
	<div class="col-md-12 jumbotron">
		<div class="one">
			DOCTOR / CHANGE PASSWORD
		</div>	<br>
		<div class="two">
			Change Password
		</div><br>
		<form class="navbar-form">
			Current Password <br>
			<input type="password" class="form-control"><br><br>
			New Password <br>
			<input type="password" class="form-control" ><br><br>
			Confirm Password<br>
			<input type="password" class="form-control"><br><br>
			<input class="btn btn-primary" type="submit" value="Submit">
		</form>
	</div>
</div>
<script type="text/javascript" src="asset/js/jquery-3.3.3.slim.min.js"></script>
	<script type="text/javascript" src="asset/js/popper.min.js"></script>
	<script type="text/javascript" src="asset/js/bootstrap.min.js"></script>

</body>
</html>