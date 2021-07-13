<?php
    include '../Models/DBConfig.php';
    $cname="";
    $err_cname="";
	$err_db="";
	$hasError = false;

    if(isset($_POST["addCategory"])){
		if(empty($_POST["cname"])){
		    $err_cname = "Category Name Requird";
			$hasError = true;
	    }
		if(!$hasError){
			$rs = insertCategory($cname);
			if($rs === true){
				header("Location: AllCategories.php");
			}
			$err_db = $rs;
		}
	}
	else if(isset($_POST["updateCategory"])){
		if(empty($_POST["cname"])){
		    $err_cname = "Category Name Requird";
			$hasError = true;
	    }
		if(!$hasError){
			$rs = updateCategory($cname, $_POST["id"]);
			if($rs === true){
				header("Location: AllCategories.php");
			}
			$err_db = $rs;
		}
	}
	
	
	function insertCategory($cname){
		$query = "insert into categories values (NULL,'$cname')";
		return execute($query);
	}
	function getAllCategories(){
		$query = "select * from categories";
		$rs = get($query);
		if(count($rs)>0){
			return $rs;
		}
		return false;
	}
	function getCategory($id){
		$query = "select * from categories where id=$id";
		$rs = get($query);
		if(count($rs)>0){
			return $rs[0];
		}
		return false;
	}
	function updateCategory($name,$id){
		$query = "update categories set name='$name' where id=$id";
		$rs = execute($query);
		return $rs;
	}
?>