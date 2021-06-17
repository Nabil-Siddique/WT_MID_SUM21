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
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$street="";
	$err_street="";
	$city="";
	$err_city="";
	$state="";
	$err_state="";
	$zip="";
	$err_zip="";
	$gender="";
	$err_gender="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$hear=[];
	$err_hear="";
	$bio="";
	$err_bio="";
	
	$err=false;
	

	function hearExist($hears){
		global $hear;
		foreach($hear as $h){
			if($h == $hears){
				return true;
			}
		}
		return false;
	}
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(empty($_POST["name"])){
			$err_name="Name Required";
			$err=true;
		}
		else{
			$name=$_POST["name"];
		}
		if(empty($_POST["username"])){
			$err_uname="Username Required";
			$err = true;
		}
		else if(strlen($_POST["username"])<=6){
			$err_uname="Must be greater than 6";
			$err = true;
		}
		else if(strpos($_POST["username"]," ")){
				$err_uname=" White space is not allowed in Username";
		}
		else{
			$uname=$_POST["username"];
		}
		if(empty($_POST["password"])){
			$err_pass="Password Required";
			$err = true;
		}
		else if(strlen($_POST["password"])<8){
			$err_pass="Password should have minimum 8 character";
		}
		else if ((!strpos($_POST["password"],"#"))||(!strpos($_POST["password"],"?")))	{
			$err_pass="Password should have minimum 1 character '?'or'#'";
		}
		else{
			$pass = $_POST["password"];
		}
		if(empty($_POST["password"])){
			$err_cpass="Re-Type Password";
			$err = true;
		}
		else if($_POST["cpassword"]!=$_POST["password"]){
			$err_cpass="Password Do not Match";
			$err = true;
		}
		else {
			$cpass = $_POST["cpassword"];
		}
		if(!strpos($_POST["email"],"@")){
			if(!strpos($_POST["email"],"."))
			$err_email="Email should contain '@' and '.' sequentially";
			}
		else {
			$email=$_POST["email"];
		}
		if(empty($_POST["code"])){
			$err_code="Code Required";
			$err = true;
		}
		else{
			$code = $_POST["code"];
		}
		if(empty($_POST["number"])){
			$err_number="Number Required";
			$err = true;
		}
		else{
			$number = $_POST["number"];
		}
		if(empty($_POST["street"])){
			$err_street="Street Number Required";
			$err = true;
		}
		else{
			$street = $_POST["street"];
		}
		if(empty($_POST["city"])){
			$err_city="City Required";
			$err = true;
		}
		else{
			$city = $_POST["city"];
		}
		if(empty($_POST["state"])){
			$err_state="State Required";
			$err = true;
		}
		else{
			$state = $_POST["state"];
		}
		if(empty($_POST["zip"])){
			$err_zip="Postal/Zip Required";
			$err = true;
		}
		else{
			$zip = $_POST["zip"];
		}
		if (!isset($_POST["day"])){
				$err_day="Day must be selected";
		}
		else{
			$day=$_POST["day"];
		}
		if (!isset($_POST["month"])){
			$err_month="Month must be selected";
		}
		else{
			$month=$_POST["month"];
		}
		if (!isset($_POST["year"])){
			$err_year="Year must be selected";
		}
		else{
			$year=$_POST["year"];
		}
		if(!isset($_POST["gender"])){
			$err_gender="Gender Required";
			$err = true;
		}
		else{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["hear"])){
			$err_hear="Hearing Required";
			$err = true;
		}
		else{
			$hear = $_POST["hear"];
		}
		if(empty($_POST["bio"])){
			$err_bio="Bio Required";
			$err = true;
		}
		else{
			$bio = $_POST["bio"];
		}
		if(!$err){
			echo "Name: ".htmlspecialchars($_POST["name"])."<br>";
			echo "Username: ".htmlspecialchars($_POST["username"])."<br>";
			echo "Password: ".htmlspecialchars($_POST["password"])."<br>";
			echo "Confirm password: ".htmlspecialchars($_POST["cpassword"])."<br>";
			echo "Email: ".htmlspecialchars($_POST["email"])."<br>";
			echo "Code: ".htmlspecialchars($_POST["code"])."<br>";
			echo "Number: ".htmlspecialchars($_POST["number"])."<br>";
			echo "Street: ".htmlspecialchars($_POST["street"])."<br>";
			echo "City: ".htmlspecialchars($_POST["city"])."<br>";
			echo "State: ".htmlspecialchars($_POST["state"])."<br>";
			echo "Zip: ".htmlspecialchars($_POST["zip"])."<br>";
			echo "Day: ".htmlspecialchars($_POST["day"])."<br>";
			echo "Month: ".htmlspecialchars($_POST["month"])."<br>";
			echo "Year: ".htmlspecialchars($_POST["year"])."<br>";
			echo "Gender: ".htmlspecialchars($_POST["gender"])."<br>";
			$arr = $_POST["hear"];
			
			foreach($arr as $e){
				echo "$e <br>";
			}
			
			echo "Bio: ".htmlspecialchars($_POST["bio"])."<br>";
		}
	}
?>

<html>
	<head></head>
	<body>
	<h1>Club Member Registration</h1>
		<fieldset>
			<form action="" method="post">
			 <table>
				<tr>
					<td align="right">Name: </td>
					<td><input type="text" name="name" value="<?php echo $name;?>" placeholder="Name"></td>
					<td><span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td align="right">Username: </td>
					<td><input type="text" name="username" value="<?php echo $uname;?>" placeholder="Username"></td>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td align="right">Password: </td>
					<td><input type="password" name="password" value="<?php echo $pass;?>" placeholder="Password"></td>
					<td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td align="right">Confirm Password: </td>
					<td><input type="password" name="cpassword" value="<?php echo $cpass;?>" placeholder="Confirm Password"></td>
					<td><span><?php echo $err_cpass;?></span></td>
				</tr>
				<tr>
					<td align="right">Email: </td>
					<td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email"></td>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td align="right">Phone: </td>
					<td><input type="number" name="code" value="<?php echo $code;?>" placeholder="code"> -
						<input type="number" name="number" value="<?php echo $number;?>" placeholder="number">
					</td>
					<td><span><?php echo $err_code;?> - <?php echo $err_number;?></span></td>
				</tr>
				<tr>
					<td align="right">Address: </td>
					<td><input type="text" name="street" value="<?php echo $street;?>" placeholder="Street Number"><br>
					<input type="text" name="city" value="<?php echo $city;?>" placeholder="City"> -
					<input type="text" name="state" value="<?php echo $state;?>" placeholder="State"><br>
					<input type="text" name="zip" value="<?php echo $zip;?>" placeholder="Postal/Zip code">
					</td>
					<td><span><?php echo $err_street;?></span></td><td><span><?php echo $err_city;?></span></td><td><span><?php echo $err_state;?></span></td><td><span><?php echo $err_zip;?></span></td>
				</tr>
				<tr>
				<td align="Right">Birth Date:</td>
					<td>
						<select name="day">
							<option selected disabled>Day</option>
									<?php
										for($i=1;$i<=31;$i++)
										{
											echo "<option>$i</option>";
										}
									?>
						</select>
						<select name="month">
							<option selected disabled>Month</option>
									<?php
										$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
										for($j=0;$j<count($mon);$j++)
										{
											echo "<option>$mon[$j]</option>";
										}
									?>
						</select>
						<select name="year">
							<option selected disabled>Year</option>
									<?php
										for($k=1948;$k<=2020;$k++)
										{
											echo "<option>$k</option>";
										}
									?>
						</select>
					</td>
					<td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
				</tr>
				<tr>
						<td align="Right">Gender: </td>
						<td><input type="radio" value="Male" <?php if($gender == "Male") echo "checked";?> name="gender"> Male <input <?php if($gender == "Female") echo "checked";?> name="gender"  value="Female" type="radio"> Female</td>
						<td><span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
					<td align="Right">Where did you hear <br>about us? </td>
					<td>
						<input type="checkbox" value="A Friend or Colleague" <?php if(hearExist("A Friend or Colleague")) echo "checked";?>  name="hear[]"> A Friend or Colleague<br>
						<input type="checkbox" value="Google" <?php if(hearExist("Google")) echo "checked";?> name="hear[]"> Google<br>
						<input type="checkbox" value="Blog Post" <?php if(hearExist("Blog Post")) echo "checked";?> name="hear[]"> Blog Post<br>
						<input type="checkbox" value="News Aricle" <?php if(hearExist("News Aricle")) echo "checked";?> name="hear[]"> News Aricle<br>
					</td>
					<td><span><?php echo $err_hear;?></span></td>
				</tr>
				<tr>
					<td align="Right">Bio: </td>
					<td>
						<textarea name="bio"><?php echo $bio;?></textarea>
					</td>
					<td><span><?php echo $err_bio;?></span></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" name="submit"value="Register"></td>
				</tr>
			</form>	
		</fieldset>		
	</body>
</html>