<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('127.0.0.1', 'root', 'password', 'registration');

//Registration for new user
if (isset($_POST['reg_user'])) {

  // Get input from PHP form 
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  //Check to see all info was entered correctly
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  //Check to see if username or email are already being used by another user
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  //Prompt to let user know the username is already taken
  if ($user) { 
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

  //Prompt to let user know the email is already taken
    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  //Create account if form was completed correctly
  if (count($errors) == 0) {
  	$password = md5($password_1);//password encryption

  	$query = "INSERT INTO users (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
	  $_SESSION['email'] = $email;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

//Current user login
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  //if statement to make sure username is entered
  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  //if statement to make sure password is entered
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }
  //if statement that checks to make sure there were no errors in login and creates session if valid
  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
	    $user = mysqli_fetch_assoc($results);

      //sets session information for current user
  	  $_SESSION['username'] = $user['username'];
	    $_SESSION['email'] = $user['email'];	
  	  $_SESSION['success'] = "You are now logged in";

    //takes user to index page once logged in  
	  if (isset($_SESSION["username"]) && isset($_SESSION["email"])){
  	  	header('location: index.php');
	  }
  	}else { //if username/password entered incorrectly, prompt user it was incorrect
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>
