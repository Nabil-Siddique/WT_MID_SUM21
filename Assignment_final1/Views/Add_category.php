<?php include '../Controllers/CategoryControll.php'; ?>
<html>
    <head></head>
	<body>
	    <div align="center">
		    <h3>Add Category</h3>
			<h5><?php echo $err_db; ?></h5>
			<form action="" method="post">
			    <div>
				    <h4>Category Name</h4>
					<input type = "text" name = "cname"/>
					<span> <?php echo $err_cname; ?> </span>
				</div>
				<div>
					<input type = "submit" name = "addCategory" value = "Add"/>
				</div>
			</form>
		</div>
	</body>
</html>