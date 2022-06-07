<div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="container1" id="main">
				<div class="sign-up">
					<form action="logup.php">
						<h1>Create Account</h1>


						<input type="email" name="email" placeholder="Email" required="">
						<input type="password" name="pass" placeholder="Email" required="">
						<input type="password" name="Cpass" placeholder="Password" required="">
						<button>Sign Up</button>
					</form>
				</div>
				<div class="sign-in">
					<form action="#">
						<h1>Sign in</h1>
						<div class="social-container">
							<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
							<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
							<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
						</div>
						<p>or use your account</p>
						<input type="email" name="email" placeholder="Email" required="">
						<input type="password" name="pswd" placeholder="Password" required="">
						<a href="index2.php">Forget your Password?</a>
						<button>Sign In</button>
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