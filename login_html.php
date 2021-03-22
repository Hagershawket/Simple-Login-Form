<!DOCTYPE html>
<html>
	<head>
		<meta charset="uf-8">
		<meta name="description" content=" Welcome To Registiration form to login">
		<link rel="stylesheet" href="css_style.css">
	   <title> Log in </title>
	</head>
	<body>
	<div class="background_Mask">
		<div class="form">
			 <form name="Registiration" action="login_php.php" method="POST">
				<h1> Login Form </h1>
				<label>Username:</label><br>
				<input type="text" name="username" maxlength="50" placeholder="Enter Username "><br>
				<label>Password:</label><br>
				<input type="password" name="password" maxlength="50" placeholder="Enter password"><br>
				<input type="submit"  value="Login">
				<div class=footer>
					Don't have an account yet?
					<a href="register_html.php" target=_self title="Sign up">Sign up now</a>
				</div>
			 </form>
		</div>
	</div>
</html>


