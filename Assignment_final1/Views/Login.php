<?php include '../Controllers/UserController.php'; ?>
 <html>
    <head>
	<title>Login</title>
	</head>
	<body>
	    <div align="center">
		    <h1>Login</h1>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div align="center">
				    <h4>Username</h4>
					<input type="text" name="uname" value="<?php echo $uname; ?>"/>
					<span> <?php echo $err_uname; ?> </span>
				</div>
				<div align="center">
				    <h4 >Password</h4>
					<input type="password" name="pass"/>
					<span> <?php echo $err_pass; ?> </span>
				</div>
				<br>
				<div align="center">
					<input type="submit" name="login" value="Login"/>
				</div>
				<div>
					Not Registered Yet?<a href="Signup.php">Sign Up</a>
				</div>
			</form>
		</div>
	</body>
</html>