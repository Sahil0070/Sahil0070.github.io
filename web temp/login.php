<?php
session_start();
include "db_conn.php";
if (isset($_POST['email']) && isset($_POST['pass'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['email']);
	$pass = validate($_POST['pass']);

	$sql = "SELECT * FROM user_login WHERE Email_Id='$uname' AND Password='$pass'";
	// echo $sql;die();
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		if ($row['Email_Id'] === $uname && $row['Password'] === $pass) {
			$_SESSION['Email'] = $row['Email_Id'];

			$_SESSION['id'] = $row['User_Id'];
			header("Location: index.php");
			exit();
		}
	}
} else {
	header("Location: index.php");
	exit();
}
