<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <title>Profile</title>

</head>
<body>

     <!-- Navigation -->
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container">
                <a href="index.php" class="logo" role="button">MovieHub</a>
            </div>
            <div class="menu-container">
                <ul class="menu-list">
                    <a href="index.php" class="menu-list-item" role="button">Home</a>
                    <a href="movies.php" class="menu-list-item" role="button">Movies</a>
                    <a href="series.php" class="menu-list-item" role="button">Series</a>
                    <a href="popular.php" class="menu-list-item" role="button">Popular</a>
                    <a href="trends.php" class="menu-list-item" role="button">Trends</a>
                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="img/profile.jpg" alt="">
                <div class="profile-text-container">
                    <a href="Profile.php" class="profile-text" role="button"><?php echo $_SESSION["username"]; ?></a>
                    <i class="fas fa-caret-down"></i>
                </div>
                <div class="toggle">
                    <i class="fas fa-moon toggle-icon"></i>
                    <i class="fas fa-sun toggle-icon"></i>
                    <div class="toggle-ball"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navigation -->

     <!-- Profile -->
    <h1>Profile</h1>
    <div class="featured-content" style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-1.jpg');">
    <p>
	<h3>username: <?php echo $_SESSION['username']; ?></h3> <!-- Sets username to username stored in database -->
	<h3>email: <?php echo $_SESSION['email']; ?></h3><!-- Sets email to email stored in database -->
    <h3><a href="logout.php" >Logout</a></h3>   <!-- Ends session and logs user out -->
    </p>    
    </div>
     <!-- End Profile -->

     <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge ">
        <a href="https://www.facebook.com/ "><i class="fa fa-facebook-official "></i></a>
        <a href="https://www.pinterest.com/winonastateu/_created/ "><i class="fa fa-pinterest-p "></i></a>
        <a href="https://twitter.com/home?lang=en "><i class="fa fa-twitter "></i></a>
        <a href="www.linkedin.com "><i class="fa fa-linkedin "></i></a>
        <p class="w3-medium ">
            Powered by <a href="index.php ">Movie Hub</a>
        </p>
        
</body>
</html>