<?php
if(isset($_POST['login']))
{
	require 'config.php';
	$uname = $_POST['username'];
	$pas= $_POST['password'];
	if(empty($uname) || empty($pas))
	{
	header("Location:../pages/login.php?error=emptyfields");
		exit();	
	}
	else{
		$sql="SELECT * FROM customer WHERE Username=?";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt, $sql))
			{
				header("Location:../pages/login.php?error=sqlerror");
				exit();	
			}
		else{
				mysqli_stmt_bind_param($stmt,"s",$uname);
				mysqli_stmt_execute($stmt);
				$result=mysqli_stmt_get_result($stmt);
					if($row=mysqli_fetch_assoc($result)){
						$pwdCheck = password_verify($pas, $row['password']);
						if(pwdCheck == false){
							header("Location:../pages/login.php?error=wrongpassword");
							exit();	
						}else if(pwdCheck == true){
							session_start();
							$_SESSION['userid'] = $row['UserID'];
							$_SESSION['username']= $row['Username'];
							header("Location:../pages/login.php?login=success");
							exit();	
						}

					}
					else{
					header("Location:../pages/login.php?error=nouser");
					exit();	
					}
					header("Location:../pages/login.php?login=success");
						exit();	
				}
	}
}
else{
	header("Location:../pages/index.php");
		exit();	
}
?>