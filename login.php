<!DOCTYPE html>
<html lang="en">
<?php
  

   
    include "checklogin.php";
    include "checksignup.php";

  

?>




<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles/login.css">
</head>

<body>
                     
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
				<h1>Create Account</h1>

			      <span><?php echo $msg;   ?></span>
                <span><?php echo $usErr;   ?></span>
				<input type="text" name="username" placeholder="username" />
				<span><?php echo $passErr;   ?></span>
				<input type="password" name="password" placeholder="Password" />
				<button  type="submit" name="register">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">   
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
				<!-- <h1>Sign in</h1>
                <span style="color: red"><?php echo $ms;?></span> -->
                <!--  <span><?php echo $userErr;   ?></span> -->
				<input type="text" name="username"   placeholder="username" />
				 <!--  <span><?php echo $passwordErr;   ?></span> -->
				<input type="password" name="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<button type="submit" name="login">Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Friend!</h1>
					<p>Enter your personal details and start journey with us</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>



	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});

	</script>
</body>

</html>
