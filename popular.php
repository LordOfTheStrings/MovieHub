<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <title>Home - Movie Hub</title>
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
                    <a href="index.php" class="menu-list-item">Home</a>
                    <a href="movies.php" class="menu-list-item" role="button">Movies</a>
                    <a href="series.php" class="menu-list-item" role="button">Series</a>
                    <a href="popular.php" class="menu-list-item" role="button">Popular</a>
                    <a href="trends.php" class="menu-list-item" role="button">Trends</a>
                </ul>
            </div>
            <div class="profile-container">
                <img class="profile-picture" src="img/profile.jpg" alt="" >
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

      <!-- Banner -->
    <div class="banner">
        <div class="banner_contents">
            <h1 class="banner_title">The Batman</h1>
            <div class="banner_buttons">
                <a href="player.php?movie=Avengers" class="banner_button" role="button">Watch</a>
            </div>
            <div class="banner_description">
            A reclusive billionaire who obsessively protects Gotham City as a masked vigilante to cope with his traumatic past.
            </div>
        </div>
        <div class="banner--fadeBottom"></div>
    </div>
     <!-- End Banner -->

     <!-- Container -->
    <div class="container">
        <div class="content-container">

         <!-- New Releases -->
            <div class="movie-list-container ">
                <h1 class="movie-list-title ">NEW RELEASES</h1>
                <div class="movie-list-wrapper ">
                    <div class="movie-list ">
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/1.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Space Jam</span>
                            <p class="movie-list-item-desc ">Swackhammer, owner of the amusement park planet Moron Mountain is desperate get new attractions and he decides that the Looney Tune characters would be perfect. He sends his diminutive underlings to get them to him, whether
                                Bugs Bunny and Co. want to go or not. Well armed for their size, Bugs Bunny is forced to trick them into agreeing to a competition to determine their freedom. Taking advantage of their puny and stubby legged foes, the gang
                                selects basketball for the surest chance of winning. However, the Nerdlucks turn the tables and steal the talents of leading professional basketball stars to become massive basketball bruisers known as the Monstars. In
                                desperation, Bugs Bunny calls on the aid of Michael Jordan, the Babe Ruth of basketball, to help them have a chance at winning their freedom.</p>
                            <button class="movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=SpaceJam" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/2.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Star Wars</span>
                            <p class="movie-list-item-desc ">Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire's world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious
                                Darth Vader.</p>
                            <button class="movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=StarWars" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/3.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Harry Potter</span>
                            <p class="movie-list-item-desc ">Adaptation of the first of J.K. Rowling's popular children's novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his
                                own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth
                                about his parents' mysterious deaths.</p>
                            <button class=" movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=HarryPotter" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/4.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Lord of The Rings</span>
                            <p class="movie-list-item-desc ">The future of civilization rests in the fate of the One Ring, which has been lost for centuries. Powerful forces are unrelenting in their search for it. But fate has placed it in the hands of a young Hobbit named Frodo Baggins
                                (Elijah Wood), who inherits the Ring and steps into legend. A daunting task lies ahead for Frodo when he becomes the Ringbearer - to destroy the One Ring in the fires of Mount Doom where it was forged.</p>
                            <button class="movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=Rings" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/5.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Avengers</span>
                            <p class="movie-list-item-desc ">When Thor's evil brother, Loki (Tom Hiddleston), gains access to the unlimited power of the energy cube called the Tesseract, Nick Fury (Samuel L. Jackson), director of S.H.I.E.L.D., initiates a superhero recruitment effort
                                to defeat the unprecedented threat to Earth. Joining Fury's "dream team " are Iron Man (Robert Downey Jr.), Captain America (Chris Evans), the Hulk (Mark Ruffalo), Thor (Chris Hemsworth), the Black Widow (Scarlett Johansson)
                                and Hawkeye (Jeremy Renner).</p>
                            <button class="movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=Avengers" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class=" movie-list-item ">
                            <img class="movie-list-item-img " src="img/6.jpeg " alt=" ">
                            <span class="movie-list-item-title ">The Matrix</span>
                            <p class="movie-list-item-desc ">Neo (Keanu Reeves) believes that Morpheus (Laurence Fishburne), an elusive figure considered to be the most dangerous man alive, can answer his question -- What is the Matrix? Neo is contacted by Trinity (Carrie-Anne Moss),
                                a beautiful stranger who leads him into an underworld where he meets Morpheus. They fight a brutal battle for their lives against a cadre of viciously intelligent secret agents. It is a truth that could cost Neo something
                                more precious than his life. </p>
                            <button class="movie-list-item-button ">Watch</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow "></i>
                </div>
            </div>
             <!-- End New Releases -->

             <!-- New Releases -->
            <div class="movie-list-container ">
                <h1 class="movie-list-title ">NEW RELEASES</h1>
                <div class="movie-list-wrapper ">
                    <div class="movie-list ">
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/1.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Space Jam</span>
                            <p class="movie-list-item-desc ">Swackhammer, owner of the amusement park planet Moron Mountain is desperate get new attractions and he decides that the Looney Tune characters would be perfect. He sends his diminutive underlings to get them to him, whether
                                Bugs Bunny and Co. want to go or not. Well armed for their size, Bugs Bunny is forced to trick them into agreeing to a competition to determine their freedom. Taking advantage of their puny and stubby legged foes, the gang
                                selects basketball for the surest chance of winning. However, the Nerdlucks turn the tables and steal the talents of leading professional basketball stars to become massive basketball bruisers known as the Monstars. In
                                desperation, Bugs Bunny calls on the aid of Michael Jordan, the Babe Ruth of basketball, to help them have a chance at winning their freedom.</p>
                            <button class="movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=SpaceJam" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/2.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Star Wars</span>
                            <p class="movie-list-item-desc ">Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire's world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious
                                Darth Vader.</p>
                            <button class="movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=StarWars" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/3.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Harry Potter</span>
                            <p class="movie-list-item-desc ">Adaptation of the first of J.K. Rowling's popular children's novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his
                                own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth
                                about his parents' mysterious deaths.</p>
                            <button class=" movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=HarryPotter" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/4.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Lord of The Rings</span>
                            <p class="movie-list-item-desc ">The future of civilization rests in the fate of the One Ring, which has been lost for centuries. Powerful forces are unrelenting in their search for it. But fate has placed it in the hands of a young Hobbit named Frodo Baggins
                                (Elijah Wood), who inherits the Ring and steps into legend. A daunting task lies ahead for Frodo when he becomes the Ringbearer - to destroy the One Ring in the fires of Mount Doom where it was forged.</p>
                            <button class="movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=Rings" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/5.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Avengers</span>
                            <p class="movie-list-item-desc ">When Thor's evil brother, Loki (Tom Hiddleston), gains access to the unlimited power of the energy cube called the Tesseract, Nick Fury (Samuel L. Jackson), director of S.H.I.E.L.D., initiates a superhero recruitment effort
                                to defeat the unprecedented threat to Earth. Joining Fury's "dream team " are Iron Man (Robert Downey Jr.), Captain America (Chris Evans), the Hulk (Mark Ruffalo), Thor (Chris Hemsworth), the Black Widow (Scarlett Johansson)
                                and Hawkeye (Jeremy Renner).</p>
                            <button class="movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=Avengers" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class=" movie-list-item ">
                            <img class="movie-list-item-img " src="img/6.jpeg " alt=" ">
                            <span class="movie-list-item-title ">The Matrix</span>
                            <p class="movie-list-item-desc ">Neo (Keanu Reeves) believes that Morpheus (Laurence Fishburne), an elusive figure considered to be the most dangerous man alive, can answer his question -- What is the Matrix? Neo is contacted by Trinity (Carrie-Anne Moss),
                                a beautiful stranger who leads him into an underworld where he meets Morpheus. They fight a brutal battle for their lives against a cadre of viciously intelligent secret agents. It is a truth that could cost Neo something
                                more precious than his life. </p>
                            <button class="movie-list-item-button ">Watch</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow "></i>
                </div>
            </div>
             <!-- End New Releases -->

             <!-- New Releases -->
            <div class="movie-list-container ">
                <h1 class="movie-list-title ">NEW RELEASES</h1>
                <div class="movie-list-wrapper ">
                    <div class="movie-list ">
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/1.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Space Jam</span>
                            <p class="movie-list-item-desc ">Swackhammer, owner of the amusement park planet Moron Mountain is desperate get new attractions and he decides that the Looney Tune characters would be perfect. He sends his diminutive underlings to get them to him, whether
                                Bugs Bunny and Co. want to go or not. Well armed for their size, Bugs Bunny is forced to trick them into agreeing to a competition to determine their freedom. Taking advantage of their puny and stubby legged foes, the gang
                                selects basketball for the surest chance of winning. However, the Nerdlucks turn the tables and steal the talents of leading professional basketball stars to become massive basketball bruisers known as the Monstars. In
                                desperation, Bugs Bunny calls on the aid of Michael Jordan, the Babe Ruth of basketball, to help them have a chance at winning their freedom.</p>
                            <button class="movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=SpaceJam" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/2.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Star Wars</span>
                            <p class="movie-list-item-desc ">Luke Skywalker joins forces with a Jedi Knight, a cocky pilot, a Wookiee and two droids to save the galaxy from the Empire's world-destroying battle station, while also attempting to rescue Princess Leia from the mysterious
                                Darth Vader.</p>
                            <button class="movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=StarWars" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/3.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Harry Potter</span>
                            <p class="movie-list-item-desc ">Adaptation of the first of J.K. Rowling's popular children's novels about Harry Potter, a boy who learns on his eleventh birthday that he is the orphaned son of two powerful wizards and possesses unique magical powers of his
                                own. He is summoned from his life as an unwanted child to become a student at Hogwarts, an English boarding school for wizards. There, he meets several friends who become his closest allies and help him discover the truth
                                about his parents' mysterious deaths.</p>
                            <button class=" movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=HarryPotter" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/4.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Lord of The Rings</span>
                            <p class="movie-list-item-desc ">The future of civilization rests in the fate of the One Ring, which has been lost for centuries. Powerful forces are unrelenting in their search for it. But fate has placed it in the hands of a young Hobbit named Frodo Baggins
                                (Elijah Wood), who inherits the Ring and steps into legend. A daunting task lies ahead for Frodo when he becomes the Ringbearer - to destroy the One Ring in the fires of Mount Doom where it was forged.</p>
                            <button class="movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=Rings" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class="movie-list-item ">
                            <img class="movie-list-item-img " src="img/5.jpeg " alt=" ">
                            <span class="movie-list-item-title ">Avengers</span>
                            <p class="movie-list-item-desc ">When Thor's evil brother, Loki (Tom Hiddleston), gains access to the unlimited power of the energy cube called the Tesseract, Nick Fury (Samuel L. Jackson), director of S.H.I.E.L.D., initiates a superhero recruitment effort
                                to defeat the unprecedented threat to Earth. Joining Fury's "dream team " are Iron Man (Robert Downey Jr.), Captain America (Chris Evans), the Hulk (Mark Ruffalo), Thor (Chris Hemsworth), the Black Widow (Scarlett Johansson)
                                and Hawkeye (Jeremy Renner).</p>
                            <button class="movie-list-item-button ">Watch</button>
                            <a href="player.php?movie=Avengers" class="movie-list-item-button ">Watch</a>
                        </div>
                        <div class=" movie-list-item ">
                            <img class="movie-list-item-img " src="img/6.jpeg " alt=" ">
                            <span class="movie-list-item-title ">The Matrix</span>
                            <p class="movie-list-item-desc ">Neo (Keanu Reeves) believes that Morpheus (Laurence Fishburne), an elusive figure considered to be the most dangerous man alive, can answer his question -- What is the Matrix? Neo is contacted by Trinity (Carrie-Anne Moss),
                                a beautiful stranger who leads him into an underworld where he meets Morpheus. They fight a brutal battle for their lives against a cadre of viciously intelligent secret agents. It is a truth that could cost Neo something
                                more precious than his life. </p>
                            <button class="movie-list-item-button ">Watch</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow "></i>
                </div>
            </div>
             <!-- End New Releases -->
        </div>
         <!-- End Content Container -->
    </div>
     <!-- End Container -->

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