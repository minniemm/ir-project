
<?php
	
	include("connectDB.php");
	

	//$sql = "INSERT into peoplelost (Pname,Fname,Lname,Gender,age,hiredate,place,detail,type) 
	//	VALUES ('".$_POST["pname"]."','".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["gender"]."',".$_POST["age"]."
	//	,'".$_POST["hiredate"]."','".$_POST["place"]."','".$_POST["detail"]."','".$_POST["type"]."')";

	
	//$sql = "INSERT into peoplelost(Pname,Fname,Lname,Gender,age,hiredate,place,detail,type)
	//VALUES ('".$_POST['pname']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['gender']."',
	//'".$_POST[age]."','".$_POST['hiredate']."','".$_POST['place']."','".$_POST['detail']."','".$_POST['type']."')";
	
		
		
	$query = mysqli_query($cid,$sql);

	if($query) {
		echo "Record add successfully";
	}else{
		echo "Failed: ".mysqli_error($cid);
	}

	mysqli_close($cid);
?>


