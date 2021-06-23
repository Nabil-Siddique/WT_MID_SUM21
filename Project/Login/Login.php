<?php 
		global $username;
		global $password;
		$user;
		if($username=="user")
		{
			$user = "../HomePage.php";
		}
?>
<html>
	<body>
	<fieldset><legend><h1>Ticket Management System</h1></legend>
	<form border>
	<table align = "Right">
	<tr>
		<td>
		Username
		</td>
		<td>
			<input type="text" name="username" value="<?php echo $username;?>" placeholder="User name">
		</td>
	</tr>
	<tr>
		<td>
		Password
		</td>
		<td>
			<input type="password" name="password" value="<?php echo $password;?>" placeholder="Password">
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<a href="Forget Pass\forgetpass.php">Forget Password</a>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<a href="Create Account\Create Account.php">
			Create Account
			</a>
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<a href=<?php echo $user; ?>>
			Log In
			</a>
		</td>
	</tr>
	</table>	
	<form>
	</fieldset>
	</body>

</html>
© 2021 GitHub, Inc.