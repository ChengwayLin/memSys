<html>
	<head>
		<link rel="shortcut icon" href="img/favicon.ico" />
		<!-- <link rel="icon" type="image/ico" href="img/favicon.ico"> -->
		<title>Register</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">

		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="js/addProject2.js"></script>
	</head>

	<body>
		<!-- basic form -->
		<div class='container'>

			<h1>Registor</h1>
			<form name="form" method="post" action="registerProcess.php">

					<div class="form-group">
						<label>Email address</label>
						<input type="email" class="form-control"  placeholder="Enter email"  name="mail" >
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password" name="password">
					</div>
					<div class="form-group">
						<label >Confirm Password</label>
						<input type="password" class="form-control" placeholder="Enter email"  name="confirmed_password">
					</div>
					<div class="form-group">
						<label >Name</label>
						<input type="text" class="form-control" placeholder="How do you like to be called"  name="nickname">
					</div>					
					<button type="submit" class="btn btn-success">Registor</button>
			 </form>

		</div>


	</body>

</html>