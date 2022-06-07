<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: mylogin.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: mylogin.php?error=Password is required");
	    exit();
	}else{
		$sql = "SELECT * FROM `admin_login` WHERE username='Admin' AND Password='Admin'";
		// $sql = "SELECT * FROM `admin_login` WHERE username='$uname' AND password='$pass'";
		
		$result = mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['Password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	// $_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['Admin_Id'];
				
            	header("Location: index.php");
		        exit();
            }else{
				header("Location: mylogin.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: mylogin.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: mylogin.php");
	exit();
}