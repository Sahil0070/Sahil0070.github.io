<?php

//index.php

//error_reporting(E_ALL);

session_start();

if (isset($_SESSION["user_id"])) {
	header("location:home.php");
}

// include('function.php');

$connect = new PDO("mysql:host=localhost; dbname=fashion_ecommerce", "root", "");

$message = '';
$error_user_name = '';
$error_user_email = '';
$error_user_password = '';
$error_user_Cpassword = '';
$user_name = '';
$user_email = '';
$user_password = '';
$user_Cpassword = '';

if (isset($_POST["register"])) {
	// if (empty($_POST["user_name"])) {
	// 	$error_user_name = "<label class='text-danger'>Enter Name</label>";
	// } else {
	// 	$user_name = trim($_POST["user_name"]);
	// 	$user_name = htmlentities($user_name);
	// }

	if (empty($_POST["user_email"])) {
		$error_user_email = '<label class="text-danger">Enter Email Address</label>';
	} else {
		$user_email = trim($_POST["user_email"]);
		if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
			$error_user_email = '<label class="text-danger">Enter Valid Email Address</label>';
		}
	}

	if (empty($_POST["user_password"])) {
		$error_user_password = '<label class="text-danger">Enter Password</label>';
	} else {
		$user_password = trim($_POST["user_password"]);
		if (strlen($user_password) != 8) {

			$error_user_password = '<label class="text-danger">Password lenght must be 8 characters</label>';
		} else {
			// $user_password = trim($_POST["user_password"]);

			//$user_password = password_hash($user_password, PASSWORD_DEFAULT);
		}
	}
	if (empty($_POST["user_Cpassword"])) {
		$error_user_Cpassword = '<label class="text-danger">Enter Confirm Password</label>';
	} else {

		//$user_Cpassword = password_hash($user_Cpassword, PASSWORD_DEFAULT);
		$user_Cpassword = trim($_POST["user_Cpassword"]);

		if ($user_password != $user_Cpassword) {
			$error_user_Cpassword = `<label class="text-danger">Confirm Password and Password doesn't match</label>`;
		} else {
			// $user_Cpassword = trim($_POST["user_Cpassword"]);
			//$user_Cpassword = password_hash($user_Cpassword, PASSWORD_DEFAULT);
		}
	}

	if ($error_user_email == '' && $error_user_password == '' && $error_user_Cpassword == '') {
		$user_activation_code = md5(rand());

		$user_otp = rand(100000, 999999);

		// $data = array(
		// 	':user_name'		=>	$user_name,
		// 	':user_email'		=>	$user_email,
		// 	':user_password'	=>	$user_password,
		// 	':user_activation_code' => $user_activation_code,
		// 	':user_email_status' =>	'not verified',
		// 	':user_otp'			=>	$user_otp
		// );

		// $query = "
		// INSERT INTO register_user 
		// (user_name, user_email, user_password, user_activation_code, user_email_status, user_otp)
		// SELECT * FROM (SELECT :user_name, :user_email, :user_password, :user_activation_code, :user_email_status, :user_otp) AS tmp
		// WHERE NOT EXISTS (
		//     SELECT user_email FROM register_user WHERE user_email = :user_email
		// ) LIMIT 1
		// ";
		// echo $user_email;

		$query = "update user_login set activate_User = '" . $user_activation_code . "',user_Otp='" . $user_otp . "' WHERE Email_Id = '" . $user_email . "' ";
		$statement = $connect->prepare($query);

		$statement->execute();

		if ($statement->rowCount() == 0) {
			$message = '<label class="text-danger">Email Already Register</label>';
		} else {
			// $user_avatar = make_avatar(strtoupper($user_name[0]));
			// $user_activation_code = $query['user_activation_code'];
			// $query = "
			// UPDATE register_user 
			// SET user_avatar = '".$user_avatar."' 
			// WHERE register_user_id = '".$connect->lastInsertId()."'
			// ";

			// $statement = $connect->prepare($query);

			// $statement->execute();


			// require 'class/class.phpmailer.php';
			// $mail = new PHPMailer;
			// $mail->IsSMTP();
			// $mail->SMTPAuth = true;
			// $mail->SMTPDebug = 2;
			// $mail->Username = 'swastiktuition8899@gmail.com';
			// $mail->Password = 'Swastik8899';
			// $mail->SMTPSecure = 'tls';
			// $mail->SMTPAutoTLS = false;
			// $mail->Host = 'smtp.gmail.com';
			// $mail->Port = '587';
			// $mail->From = 'swastiktuition8899@gmail.com';
			// $mail->FromName = 'Fashion ECommerce';
			// $mail->AddAddress($user_email);
			// $mail->WordWrap = 50;
			// $mail->IsHTML(true);
			// $mail->Subject = 'Verification code for Verify Your Email Address';

			// $mail->Body = $message_body;

			$receiver = $user_email;
			$subject = "Verification code for Verify Your Email Address";
			// $body = "Hi, there...This is a test email send from Localhost.";
			$body = '
			For verify your email address, enter this verification code when prompted:' . $user_otp . 'Sincerely
			';
			$sender = "From:fashionecommerce881@gmail.com";
			// if (mail($receiver, $subject, $body, $sender)) {
			// 	echo "Email sent successfully to $receiver";
			// } else {
			// 	echo "Sorry, failed while sending mail!";
			// }
			if (mail($receiver, $subject, $body, $sender)) {
				echo '<script>alert("Please Check Your Email for Verification Code")</script>';
				$_SESSION['user_pass'] = $user_Cpassword;
				// echo $_SESSION['user_pass'];
				header('location:email_verify.php?code=' . $user_activation_code);
			} else {
				// $message = $mail->ErrorInfo;
			}
		}
	}
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>PHP Registration with Email Verification using OTP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="http://code.jquery.com/jquery.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
	<br />
	<div class="container">
		<h3 align="center">PHP Registration with Email Verification using OTP</h3>
		<br />
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Registration</h3>
			</div>
			<div class="panel-body">
				<?php echo $message; ?>
				<form method="post">
					<!-- <div class="form-group">
						<label>Enter Your Name</label>
						<input type="text" name="user_name" class="form-control" />
						
					</div> -->
					<div class="form-group">
						<label>Enter Your Email</label>
						<input type="text" name="user_email" class="form-control" />
						<?php echo $error_user_email; ?>
					</div>
					<div class="form-group">
						<label>Enter Your Password</label>
						<input type="password" name="user_password" class="form-control" />
						<?php echo $error_user_password; ?>
					</div>
					<div class="form-group">
						<label>Confirm Your Password</label>
						<input type="password" name="user_Cpassword" class="form-control" />
						<?php echo $error_user_Cpassword ?>
					</div>
					<div class="form-group">
						<input type="submit" name="register" class="btn btn-success" value="Click to Change Password" />&nbsp;&nbsp;&nbsp;
						<!-- <a href="login.php">Login</a> -->
					</div>
				</form>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>

</html>