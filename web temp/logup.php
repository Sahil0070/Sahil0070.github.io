<?php
session_start();
include "db_conn.php";
if (isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['Cpass'])) {

	$uname = $_POST['email'];
	$pass = $_POST['pass'];
	$user_activation_code = '';
	$user_otp='';
	$sql = "INSERT INTO user_login (Email_Id,Password,activate_User,user_Otp) values('$uname','$pass','$user_activation_code','$user_otp') ";
	// echo $sql;die();
	// echo $sql;die();
	$result = mysqli_query($conn, $sql);
	// echo $result;	
	if ($result == 1) {
		header("Location: index.php");
	}

	// 	function validate($data)
	// 	{
	// 		$data = trim($data);
	// 		$data = stripslashes($data);
	// 		$data = htmlspecialchars($data);
	// 		return $data;
	// 	}

	// 	$uname = validate($_POST['email']);
	// 	$pass = validate($_POST['pass']);
	// 	$Cpass = validate($_POST['Cpass']);
	// 	// echo $uname;die();
	// 	if (empty($uname)) {
	// 		header("Location: index.php?error=Email is required");
	// 		exit();
	// 	} else if (empty($pass)) {
	// 		header("Location: index.php?error=Password is required");
	// 		exit();
	// 	} else if (strlen($pass) > 8) {
	// 		header("Location: index.php?error= Too Long must be less than or equal to 8");
	// 		exit();
	// 	}else if (empty($Cpass) || $Cpass!=$pass) {
	// 		header("Location: index.php?error=Password Mismatch");
	// 		exit();
	// 	}
	// 	 else {
	// 		$sql = "INSERT INTO user_login (Email_Id,Password)values('$uname','$pass') ";
	// 		// echo $sql;die();
	// 		$result = mysqli_query($conn, $sql);
	// 		// echo $result;	
	// 		if($result == 1)
	// 		{

	// 			header("Location: index.php");
	// 		}

	// 		exit();
	// 	}
} else {
	header("Location: index.php");
	exit();
}
