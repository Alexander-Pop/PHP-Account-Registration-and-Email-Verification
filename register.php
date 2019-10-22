<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Intern Assingment - Register</title>
		<link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/ >
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<?php
		session_start();
		require_once('funs.php');
		
		if( isset($_SESSION["username"]) )
		{
	    	header("location:home.php");
	    	exit();
		}
	?>

	<body style="overflow: hidden;background-color: #eee;">

		<div class="row">
			<h1 class="text-center" style="padding-top:25px;color: #000;font-weight: bold;font-size: 3.0em;">Intern Assignment <small>(Login Panel with Confirmation)</small></h1><br>
			<div class="error"><?php register(); ?></div>
			<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading">Register User</div>
					<div class="panel-body">
						<form class="" method="post" action="">
							<fieldset>
								<div class="form-group">
									<input class="form-control input-lg" placeholder="Name" name="name" type="text" required>
								</div>
								<div class="form-group">
									<input class="form-control input-lg" placeholder="Email" name="email" type="email" required>
								</div>
								<div class="form-group">
									<input class="form-control input-lg" placeholder="Username" name="username" type="text" required>
								</div>
								<div class="form-group">
									<input class="form-control input-lg" placeholder="Password" name="password" type="password" required>
								</div>
								<button class="btn btn-primary btn-lg" name="register" type="submit" id="login">Register</button> &nbsp;OR &nbsp;
								<a href="index.php">Already have account? Login now!</a>
							</fieldset>
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->	
		<div class="text-center" style="margin-top: 75px; color: #000;">
			<b>Some text placeholder</b>
		</div>
	</body>
</html>