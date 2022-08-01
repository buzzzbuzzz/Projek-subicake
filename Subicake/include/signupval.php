<?php
if(isset($_POST['register'])){
	require 'config.php';

	$uname = $_POST['username'];
	$pas= $_POST['password'];
	$nme=$_POST['name'];
	$eml= $_POST['email'];
	$pasval= $_POST['passval'];
	$adrs= $_POST['address'];
	$phne= $_POST['phone'];
	$dte= $_POST['date'];
	$mnth= $_POST['month'];
	$yer= $_POST['year'];

	if(empty($uname) || empty($pas)|| empty($eml) || empty($nme) || empty($pasval) 
	|| empty($adrs) || empty($phne) || empty($dte) || empty($mnth) 
	|| empty($yer))
	{
		header("Location:../pages/signup.php?error=emptyfield&username=".$uname."&email=".$eml);
		exit();
	}
	else if(!filter_var ($eml, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-z0-9]*$/",$uname))
	{
		header("location:../pages/signup.php?error=invalidemail&username");
		exit();
	}
	else if(!filter_var($eml, FILTER_VALIDATE_EMAIL ))
	{
		header("location:../pages/signup.php?error=invalidemail&username=".$uname);
		exit();
	}
	else if(!preg_match("/^[a-zA-z0-9]*$/",$uname))
	{
		header("location:../pages/signup.php?error=invalidusername&email=".$eml);
		exit();
	}
	else if($pas !== $pasval)
	{
		header("Location:../pages/signup.php?error=passworddidn'tmatch&username=".$uname."&email=".$eml);
		exit();
	}
	else {
		$sql= "SELECT Username FROM customer WHERE Username=?";
		$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $$sql))
			{
				header("Location:../pages/signup.php?error=sqlerror");
				exit();	
			}
			else
			{
				mysqli_stmt_bind_param($stmt,"s",$uname);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if($resultCheck > 0){
					header("location:../pages/signup.php?error=takenusername&email=".$eml);
					exit();
				}
			else{
				$sql= "INSERT INTO customer(Username,password,CustomerName,Email,address,phonenumber,dob,mob,yob) VALUES (?,?,?,?,?,?,?,?,?)";
				$stmt = mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql))
					{
						header("Location:../pages/signup.php?error=sqlerror");
						exit();	
					}
				
				else{
				$hashedpwd = password_hash($pas, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt,"ssssssss",$uname,$hashedpwd,$eml,$adrs,$phne,$dte,$mnth,$yer);
				mysqli_stmt_execute($stmt);
					header("Location:../pages/signup.php?signup=success");
						exit();	
				}
		}

	}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else{
	header("Location:../pages/signup.php");
		exit();	
}
?>