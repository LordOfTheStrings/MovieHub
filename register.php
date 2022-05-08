  <?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>MovieHub Registration Page</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

   <!-- Header -->
  <div class="header">
  	<h2>Register</h2>
  </div>
   <!-- End Header -->

   <!-- Create registration form -->
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>  <!-- Included to check for errors during registration -->
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">  <!-- Takes user input for username to store in database -->
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>"> <!-- Takes user input for email to store in database -->
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1"> <!-- Takes user input for password to store in database -->
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2"> <!-- Takes user input for password/Used for validating password was entered correctly by entering twice-->
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button><!-- Submit button that adds user to database if all information was correct -->
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a><!-- Takes user to login page if they already have an account -->
  	</p>
  </form>
   <!-- End Form -->
</body>
</html>