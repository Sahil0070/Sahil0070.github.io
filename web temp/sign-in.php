<!DOCTYPE html>
<html>

<head>
	<title>Sliding Login Form</title>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/all.css">

	<!-- <link rel="stylesheet" href="path/to/fontawesome.min.css"> -->

	<style>
		.modal-content {
			width: 153%;
			/* height: 700px */
		}
	</style>
</head>

<body>
	<div class="conta">

		<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
			Launch demo modal
		</button> -->
		<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content" style="position: relative;right: 130px;top: 48px;">
					<div class=" container1" id="main">
						<div class="sign-up">
							<form action="logup.php" method="POST" onsubmit="return validateForm()">
								<h1>Create Account
								</h1>
								<div class="input">

									<input type="email" name="email" placeholder="Email" id="email" class="input-field">

									<small id="sm_email"></small>
									`
									<input type="password" name="pass" placeholder="Password" id="pass" class="input-field">

									<small id="sm_pass"></small>
									<input type="password" name="Cpass" placeholder="Confirm Password" id="Cpass" class="input-field">
									<small id="sm_cpass"></small>

									<button id="signup">Sign Up</button>
								</div>
								<!-- <input type="submit" value="Sign Up"> -->
							</form>
						</div>
						<div class="sign-in">
							<form action="login.php" method="POST" onsubmit="return validateLoginForm()">

								<h1>Sign in</h1>

								<input type="email" name="email" placeholder="Email" id="in_email">
								<small id="sl_email"></small>

								<input type="password" name="pass" placeholder="Password" id="in_pass">
								<small id="sl_pass"></small>

								<a href="index2.php">Forget your Password?</a>
								<button id="signin">Sign In</button>
							</form>
						</div>
						<div class="overlay-container">
							<div class="overlay">
								<div class="overlay-left">
									<h1>Wellcome Back!</h1>
									<p>To keep connected with us please login with your personal info</p>
									<button id="signIn">Sign In</button>
								</div>
								<div class="overlay-right">
									<h1>Hello, Friend</h1>
									<p>Enter your personal details and start journey with us</p>
									<button id="signUp">Sign Up</button>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script type="text/javascript">
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const main = document.getElementById('main');

		signUpButton.addEventListener('click', () => {
			main.classList.add("right-panel-active");
		});
		signInButton.addEventListener('click', () => {
			main.classList.remove("right-panel-active");
		});
	</script>
	<script src="form.js"></script>
</body>

</html>