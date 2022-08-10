<?php
  //Written By: Jason Fong 
  include ("connect.php");
  
//   if(isset($_POST['username'])) {
//     $sql->mysqli_query($conn, "SELECT * FROM gojoanimelogin WHERE username = '".$_POST["username"]."' AND loginpasswd = '".$_POST["password"]."' ");
//     $conn = mysqli_connect();

//     if($num > 0){
//         $row = mysqli_fetch_array($sql);
//         header("Location:watchlist.php");
//         exit();
//     } else {
//         echo '<script>';
//         echo "alert(\"Invalid Username and Password, Please try again\");";
//         echo '</script>';
//     }

//   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carter+One">
    <title>Gojo Anime</title>
</head>
<body>
    <header>
        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-gray border rounded-5 shadow-sm" id="pillNav2" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5 active" id="home-btn" data-bs-toggle="tab" type="button" role="tab" aria-selected="true">Home</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="about-btn" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" tabindex="-1" onclick = "window.open('index.php', '_self')">About</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link rounded-5" id="register-btn" data-bs-toggle="tab" type="button" role="tab" aria-selected="false" tabindex="-1" onclick = "window.open('register.php', '_self')">Register</button>
            </li>
        </ul>
    </header>

    <main>
        <div id="home">
            <div id="welcome-message">
                <h1 id="message-part1">Welcome to</h1>
                <h1 id="message-part2">Gojo Anime!</h1>
            </div>

            <div id="login-form-area">
                <h3>Login</h3>
                <form action="./login_rediect.php" method="post" >
                    <div class="login-form-elements">
                        <label for="username">USERNAME</label>
                        <input id="username" type="text" name="username">
                    </div>
                    <div class="login-form-elements">
                        <label for="username">PASSWORD</label>
                        <input id="password" type="password" name="password">
                    </div>
                    <div class="login-form-elements">
                        <input class="login-btn" type="submit" id="Login" value="Login">
                    </div>
                </form>
                <hr id="form-divider1"><hr id="form-divider2">
                <h6>Or</h6>
                <button class="btn btn-secondary register-btn">Register</button>
            </div>
        </div>

        <!--about us page-->
        <section id="about">
            <div id="about-1">
                <h1>About Us</h1>
                <p>At Gojo Anime, we aspire to create a anime database and community for the world to use.   </p>
            </div>
        <!--text box content-->
            <div id="about-2">
                <div class="content-box-lg">
                    <div class="container-us">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <h3>Our Mission</h3>
                                    <hr>
                                    <p>We help everyone belong. That's our mission. What have you watched? Create your personalized list from thousands of animes on your favourite anime database.
                                        Stay up to date? Use your list to organize and track what animes you have completed, your progress, what you plan to watch and much more.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <h3>Our Story</h3>
                                    <hr>
                                    <p>Uniting through anime. As anime enthusiasts, we created this database to allow other anime fans who devote their time to have an ideal place to store their data.
                                        This idea was born after the inconvenience of shared streaming sites that are incapable of maintaing various users current episodes watched.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-item text-center">
                                    <h3>Our Vission</h3>
                                    <hr>
                                    <p>Our Vission reflects our commitment to diversity & inclusion. By creating an account with Gojo Anime we aspire to give anime watchers the convience and security to store their data with the ability
                                        without having to worry about missing out on your current episode/anime you are on. We have a growth mindset commited to constant forward progress.  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--register page-->
        <section id="register-1">
            <div id="register">
                <div class="title">Registeration</div>
                <div class="content">
                    <form action="#">
                        <div class="user">
                            <div class="input">
                                <span class="details">Full Name</span>
                                <input type="text" placeholder="Enter your name" required>
                            </div>
                            <div class="input">
                                <span class="details">UserName</span>
                                <input type="text" placeholder="Enter your username" required>
                            </div>
                            <div class="input">
                                <span class="details">Email</span>
                                <input type="text" placeholder="Enter your email" required>
                            </div>
                            <div class="input">
                                <span class="details">Phone Number</span>
                                <input type="text" placeholder="Enter your number" required>
                            </div>
                            <div class="input">
                                <span class="details">Password</span>
                                <input type="text" placeholder="Enter your password" required>
                            </div>
                            <div class="input">
                                <span class="details">Confirm Password</span>
                                <input type="text" placeholder="Confirm your password" required>
                            </div>
                        </div>
                        <div class="gender">
                            <input type="radio" name="gender" id="radio-1">
                            <input type="radio" name="gender" id="radio-2">
                            <input type="radio" name="gender" id="radio-3">
                            <span class="gender-title">Gender</span>
                            <div class="category">
                                <label for="radio-1">
                                    <span class="radio one"></span>
                                    <span class="gender">Male</span>
                                </label>
                                <label for="radio-2">
                                    <span class="radio two"></span>
                                    <span class="gender">Female</span>
                                </label>
                                <label for="radio-3">
                                    <span class="radio three"></span>
                                    <span class="gender">Prefer not to say</span>
                                </label>
                            </div>
                        </div>
                        <div class="button">
                            <input type="submit" value="Register">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-4 d-flex align-items-center">
                <img id="footer-logo" src="favicon.jpg" width="8%" alt="Logo of the website.">
                <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Gojo Anime, Inc</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="footer-links" href="#">Home</a></li>
                <li class="ms-3"><a class="footer-links" href="#">About</a></li>
                <li class="ms-3"><a class="footer-links" href="#">Register</a></li>
            </ul>
        </footer>
    </div>

    <canvas class="background"></canvas>

    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="particles.min.js"></script>
</body>
</html>