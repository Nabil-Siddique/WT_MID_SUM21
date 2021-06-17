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
	$num="";
	$err_num="";
	$gender="";
	$err_gender="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$bio="";
	$err_bio="";
	$sources="";
	$err_sources="";
	
	
		if	($_SERVER["REQUEST_METHOD"]=="POST")
		{
			if (empty($_POST["name"]))
			{
				$err_name="**Name Required";
			}
			else
			{
				$name=$_POST["name"];
			}
			
			if (strlen($_POST["uname"])<6)
			{
				$err_uname="Username length must be 6 or longer";
			}
			elseif(strpos($_POST["uname"]," "))
			{
				$err_uname=" White space is not allowed in Username";
			}
			else
			{
				$uname=$_POST["uname"];
			}
			if(strlen($_POST["pass"])>8)
			{
				$pass=$_POST["pass"];
			if ((!strpos($_POST["pass"],"#"))||(!strpos($_POST["pass"],"?")))
				{
				$err_pass="Password should have minimum 1 character '?'or'#'";
				}
				for ($l=0;$l<strlen($_POST["pass"]);$l++)
				{
					if (ctype_lower($_POST["pass"][$l]))
					{
						break;
					}
					else
					{
						$err_pass="Password should have minimum 1 lower case letter";
					}
				}
				for ($m=0;$m<strlen($_POST["pass"]);$m++)
				{
					if (ctype_upper($_POST["pass"][$m]))
					{
						break;
					}
					else
					{
						$err_pass="Password should have minimum 1 upper case letter";
					}
				}
				for($n=0;$n<strlen($_POST["pass"]);$n++)
				{
					if(is_numeric($_POST["pass"][$n]))
					{
						break;
					}
					else
					{
						$err_pass="Password should have minimum 1 numeric character";
					}
				}
			}
			else	
			$err_pass="Password length must be 8 or longer";
			
			if($_POST["cpass"]!=$_POST["pass"])
			{
				$err_cpass="Password Didn't matched";
			}
			else{$cpass=$_POST["cpass"];}
			
			if(strpos($_POST["email"],"@"))
			{if(strpos($_POST["email"],"."))
			$email=$_POST["email"];
			}
			else $err_email="Email should contain '@' and '.' sequentially";
			
			if(!is_numeric($_POST["code"]))
			{
				$err_code="Code should be numeric";
			}
			else $num=$_POST["num"];
			
			if(!is_numeric($_POST["num"]))
			{
				$err_num="Number should be numeric";
			}
			else $num=$_POST["num"];
			
			
			if (!isset($_POST["day"]))
			{
				$err_day="Day must be selected";
			}
			else
			{
				$day=$_POST["day"];
			}
			if (!isset($_POST["month"]))
			{
				$err_month="Month must be selected";
			}
			else
			{
				$month=$_POST["month"];
			}
			if (!isset($_POST["year"]))
			{
				$err_year="Year must be selected";
			}
			else
			{
				$year=$_POST["year"];
			}
			
			if (empty($_POST["bio"]))
			{
				$err_bio="Bio can not be blank";
			}
			else
			{
				$bio=$_POST["bio"];
			}
			
			
			
			if(!isset($_POST["gender"]))
			{
				$err_gender="Please select a gender";
			}
			else
			{
				$gender=$_POST["gender"];
			}
			
			if(!isset($_POST["sources"]))
			{
				$err_sources="Least 1 source have to be ticked";
			}
			else
			{
				$sources=$_POST["sources"];
			}
		echo "Name: ".htmlspecialchars($_POST["name"])."<br>";
		echo "Password: ".htmlspecialchars($_POST["pass"])."<br>";
		
		}
?>

<html>
	<head></head>
	<body>
		<center>
		<form action="" method="post">
		<fieldset>
		<legend align="center">Club Member Registration</legend>
			<table>
				<tr>
					<td><span >Name</span></td>
					<td>:</td>
					<td><input type="text" name="name" value="<?php echo $name;?>"><td><span><?php echo $err_name;?></span></td>
				</tr>
				
				<tr>
					<td><span >Username</span></td>
					<td>:</td>
					<td><input type="text" name="uname" value="<?php echo $uname;?>"> </td><td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span>Password</span></td>
					<td>:</td>
					<td><input type="password" name="pass" value="<?php echo $pass;?>"> </td><td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span>Confirm Password</span></td>
					<td>:</td>
					<td><input type="password" name="cpass" value="<?php echo $cpass;?>"> </td><td><span><?php echo $err_cpass;?></span></td>
				</tr>
				<tr>
					<td><span>Email</span></td>
					<td>:</td>
					<td><input type="text" name="email" value="<?php echo $email;?>"> </td><td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
					<td><span>Phone</span></td>
					<td>:</td>
					<td><input type="text" name="code" value="<?php echo $code;?>" placeholder="Code" size="4">-<input type="text" name="num" value="<?php echo $num;?>" placeholder = "Number" size="10"> </td><td><span><?php echo $err_code;?></span><span><?php echo $err_num;?></span></td>
				</tr>
				<tr>
					<td><span>Address</span></td>
					<td>:</td>
					<td><input type="text" name="sa" placeholder="Street Address"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><input type="text" name="city" placeholder = "City" size="6">-<input type="text" name="state" placeholder = "State" size="8"></td>
				</tr>
				<tr>
					<td></td>
					<td><td>
					<input type="text" name="Pocode" placeholder = "Postal/Zip Code">
				</tr>
				
				<tr>
				<td><span>Birth Date</span></td>
				<td>:</td>
				<td>
				<select name="day">
					<option disabled selected>Day</option>
					<?php
						for($i=1;$i<=31;$i++)
						{
							echo "<option>$i</option>";
						}
					?>
					</select>
					<select name="month">
					<option disabled selected>Month</option>
					<?php
						$mon= array("January","February","March","April","May","June","July","August","September","October","November","December");
						for($j=0;$j<count($mon);$j++)
						{
							echo "<option>$mon[$j]</option>";
						}
					?>
				</select>
				<select name="year">
					<option disabled selected>Year</option>
					<?php
						for($k=1971;$k<=2040;$k++)
						{
							echo "<option>$k</option>";
						}
					?>
				</select>
				</td>
				<td><?php echo "$err_day"."  "."$err_month"."  "."$err_year"?></td>
				</tr>
				<tr>
				<td><span>Gender</span></td>
				<td>:</td>
				<td><input type="radio" name="gender" value="Male"><span>Male</span>
				<input type="radio" name="gender" value="Female"><span>Female</span> </td><td><span> <?php echo $err_gender;?></span></td><br>
				</tr>
				<tr>
				<td><span>Where did you hear about us ?</span></td>
				<td>:</td>
					<td><input type="checkbox" value="friend" name ="sources[]">A Friend or Colleague<br>
					<input type="checkbox"value="google" name ="sources[]">Google<br>
					<input type="checkbox"value="blog" name ="sources[]">Blog Post<br>
					<input type="checkbox"value="news" name ="sources[]">News Article</td><td> <span><?php echo $err_sources;?></span></td></br>
				</tr>			
				<tr>
				<td><span>Bio</span></td>
				<td>:</td>
				<td><textarea name="bio" ></textarea></td>
				<td><span><?php echo $err_bio;?></span></td>
				</tr>
				<tr>
				<td><br></td>
				</tr>
				<tr>
				<td colspan="3" align="center">
				<input type="Submit" name="submit" value="Register">
				</td>
				</tr>
			</table>
	</fieldset>
		</form>
		</center>
	</body>
</html>