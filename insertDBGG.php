<?php
	
	include("connection.php");
	$sql = "INSERT into peoplelost(Pname,Fname,Lname,Gender,age,hiredate,place,detail,type, doc) VALUES (".
	"'".$_POST["pname"]."',"."'".$_POST["fname"]."',"."'".$_POST["lname"]."',"."'".$_POST["gender"].
	"',".$_POST["age"].",STR_TO_DATE('".$_POST["hiredate"]."', '%Y-%m-%d'),"."'".$_POST["place"]."',"."'".
	$_POST["detail"]."',"."'".$_POST["type"]."',"."'".$_POST["doc"]."')";
	$a = "{$fname}{$lname}{$detail}";
		echo $a;
	$cid->set_charset("utf8");
	$query = mysqli_query($cid,$sql);
	
	if($query) {
		echo "Record add successfully";
	}else{
		echo "Failed: ".mysqli_error($cid);
	}

	mysqli_close($cid);
?>