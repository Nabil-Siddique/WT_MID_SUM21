<?php
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$cpass="";
	$err_cpass="";
	$email="";
	$err_email="";
	$phone="";
	$err_phone="";
	$address="";
	$err_address="";
	$gender="";
	$err_gender="";
	$date="";
	$err_date="";
	$hear=[];
	$err_hear="";
	$bio="";
	$err_bio="";
	
	$hasError=false;
	
	
	function hear($hear){
		global $hear;
		foreach($hear as $h){
			if($h == $hear){
				return true;
			}
		}
		return false;
	}

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$hasError = true;
		}
		else if(strlen($_POST["name"]) <=6){
			$err_name="Name Must be greater than 6";
			$hasError = true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$hasError = true;
		}
		
		else{
			$uname=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_pass="Password Required";
			$hasError = true;
		}
		else{
			$password = $_POST["password"];
		}
		if(($_POST["password"])!=($_POST["cpass"])){
			$err_cpass="Password Not Same";
			$hasError = true;
		}
		else{
			$cpass = $_POST["cpass"];
		}
		if(empty($_POST["email"])){
			$err_email="Email Required";
			$hasError = true;
		}
		else{
			$email = $_POST["email"];
		}
		if(empty($_POST["address"])){
			$err_pass="address Required";
			$hasError = true;
		}
		else{
			$address = $_POST["address"];
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$hasError = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["hear"])){
			$err_hear="Hearing Required";
			$hasError = true;
		}
		else{
			$hear = $_POST["hear"];
		}
		if(empty($_POST["bio"])){
			$err_bio="Bio Required";
			$hasError = true;
		}
		else{
			$bio = $_POST["bio"];
		}
		
		if(!$hasError){
			echo $name."<br>";
			echo $_POST["username"]."<br>";
			echo $_POST["password"]."<br>";
			echo $_POST["cpass"]."<br>";
			echo $_POST["phone"]."<br>";
			echo $_POST["email"]."<br>";
			echo $_POST["address"]."<br>";
			echo $_POST[""]."<br>";
			echo $_POST["bio"]."<br>";
			
			$arr = $_POST["hear"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
		}
		
		
	}
?>
<html>
	<head></head>
	<body>
	<h1>Club Member Registration</h1>
		<fieldset>
			<form action="" method="post">
				<table >
					<tr>
						<td>Name: </td>
						<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
						<td><span><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td>Username: </td>
						<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
						<td><span><?php echo $err_uname;?></span></td>
					</tr>
					<tr>
						<td>Password: </td>
						<td><input type="password" name="password" value="<?php echo $pass;?>" placeholder="Password"></td>
						<td><span><?php echo $err_pass;?></span></td>
					</tr>
					<tr>
						<td>Confirm Password: </td>
						<td><input type="password" name="Cpassword" placeholder="Confirm Password"></td>
					</tr>
					<tr>
						<td>Email: </td>
						<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
						<td><span><?php echo $err_email;?></span></td>
					</tr>
					<tr>
						<td>Phone: </td>
						<td><input type="text" name="phone" value="<?php echo $phone;?>" placeholder="code"><input type="text" name="phone" value="<?php echo $phone;?>" placeholder="Number"></td>
						<td><span><?php echo $err_phone;?></span></td>
					</tr>
					<tr>
						<td>Adress: </td>
						<td><input type="text" name="address" value="<?php echo $email;?>" placeholder="Street Number"><br>
						<input type="text" name="address" value="<?php echo $email;?>" placeholder="Street Number"><br>
						<input type="text" name="address" value="<?php echo $email;?>" placeholder="Street Number"><br>
						<input type="text" name="address" value="<?php echo $email;?>" placeholder="Street Number">
						</td>
						<td><span><?php echo $err_address;?></span></td>
					</tr>
					
						<td>Birth Date:  </td>
						<td>
							<select name="Day">
								<option selected disabled>--Day--</option>
								
							</select> 
							<select name="Month">
								<option selected disabled>--Month--</option>
							</select> 
							<select name="Year">
								<option selected disabled>--Year--</option>
							</select> 
						</td>
						<td><span><?php echo $err_date;?></span></td>
					</tr>
					<tr>
						<td>Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
					</tr>
					<tr>
						<td>Where did you hear <br>about us? </td>
						<td>
							<input type="checkbox" value="A Friend or Colleague" <?php if(hear("A Friend or Colleague")) echo "checked";?>  name="hear[]"> A Friend or Colleague<br>
							<input type="checkbox" value="Google" <?php if(hear("Google")) echo "checked";?> name="hear[]"> Google<br>
							<input type="checkbox" value="Blog Post" <?php if(hear("Blog Post")) echo "checked";?> name="hear[]"> Blog Post<br>
							<input type="checkbox" value="News Aricle" <?php if(hear("News Aricle")) echo "checked";?> name="hear[]"> News Aricle<br>
						</td>
						<td><span><?php echo $err_hear;?></span></td>
					</tr>
					<tr>
						<td>Bio:  </td>
						<td>
							<textarea name="bio"><?php echo $bio;?></textarea>
						</td>
						<td><span><?php echo $err_bio;?></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Register"></td>
					</tr>
					
				</table>
			</form>
		</fieldset>
	</body>
</html>