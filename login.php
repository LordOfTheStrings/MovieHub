<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>MovieHub Login Page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

  <!-- Header -->
  <div class="header">
  	<h2>MovieHub Login</h2>
  </div>
  <!-- End Header -->
	 
  <!-- Create form -->
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?> <!-- Included to check for errors in the form -->
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" ><!-- Takes user input for username to check database if current user -->
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password"><!-- Takes user input for password to check database if current user -->
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button> <!-- Button that logs user in if correct info was entered -->
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a><!-- Takes user to registration page if they do not have an account -->
  	</p>
  </form>
  <!-- End Form -->
</body>
</html>