<?php include '../Controllers/UserController.php'; ?>
<html>
	<head>
	<title>Sign Up</title>
	<head>
	
	<body>
		<div align="center">
			<h1>Sign Up</h1>
			<form action="" method="post">
			<div align="center">
				<h4>Name</h4>
				<input type="text" name="name" value="<?php echo $name;?>" ><br>
				<span><?php echo $err_name?></span>
			</div>
			<div align="center">
				<h4>Username</h4>
				<input type="text" name="uname" value="<?php echo $uname;?>"><br>
				<span><?php echo $err_uname?></span>
			</div>
			<div align="center">
				<h4>Email</h4>
				<input type="text" name="email" value="<?php echo $email;?>"><br>
				<span><?php echo $err_email?></span>
			</div>
			<div align="center">
				<h4>Password</h4>
				<input type="password" name="pass" value="<?php echo $pass;?>"><br>
				<span><?php echo $err_pass?></span>
			</div>
			<br>
			<div>
				<input type="submit" name="signup" value="Sign Up">
			</div>
			</form>
		</div>
	</body>
</html>