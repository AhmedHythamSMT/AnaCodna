<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    <title>project</title>
    <link rel="stylesheet" href="project.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <div class="container nav_container">
            <a href="index.php"><img src="images/a logo.png"></a>
                <ul class="nav_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="newabout.php">About</a></li>
                <li><a href="pro.php">Project</a></li>
               
                <?php
                if(isset($_SESSION["email"])){
                    echo "<li><a href='profile.php'>MyProfile</a></li>";
                    echo "<li><a href='logout.php'>Logout</a></li>";
                }else{
                    echo "<li><a href='login.php'>Login</a></li>";
                }
                ?>


            </ul>
            <button id="menu-btn"><i class="uil uil-bars"></i></button>
            <button id="menu-btn-close"><i class="uil uil-multiply"></i></button>

        </div>
    </nav>

    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1>Programming has become an essential skill in today's digital world.</h1>
                <p> With technology permeating every aspect of our lives,
                    programming has become a fundamental tool for solving complex problems,
                    automating tasks, and creating innovative solutions.
                    In this article, we will discuss the importance of learning programming and how it can benefit you.
                </p>
                <a href="index.php" class="btn btn-primary">Get Started</a>
            </div>
            <div class="header_right">
                <div class="header_right-image">
                    <img src="./images/header.svg">
                </div>
            </div>
        </div>
    </header>

   



    <br>
    
    <section class="cards" id ="project">
        <h1><center>Projects</center></h1>
        <hr>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-c"></i>
                </div>
                <div class="info">
                    <h3>C programming</h3>
                    <p>learn to C <a href="c_proj.php" class="project-btn">click here</a></p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-c">++</i>
                </div>
                <div class="info">
                    <h3>C++ programming</h3>
                    <p>learn to C++ <a href="c++_proj.php" class="project-btn">click here</a></p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-brands fa-python"></i>
                </div>
                <div class="info">
                    <h3>Python programming</h3>
                    <p>learn to Python <a href="python_proj.php" class="project-btn">click here</a></p>
                </div>
            </div>
        </div>
    </section>


    <br> <br>  















    <script src="./main.js"></script>

    <footer>
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.html" class="footer_logo"><h4>AnaCodna</h4></a>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, pariatur.
                </p>
            </div>

            <div class="footer_2">
                <h4>Links</h4>
                <ul class="links">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php">About</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="pro.php">Project</a></li>
                </ul>
            </div>

            <div class="footer_3">
                <h4>Privacy</h4>
                <ul class="privcay">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                </ul>
            </div>

            <div class="footer_4">
                <h4>Contact Us</h4>
                <div>
                    <a href="tel+123456789">Call Us</a>
                    <br>
                    <a href="mailto:example@gmail.com">Send Mail</a>
                </div>
            </div>

            <ul class="socials">
                <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
            </ul>
        </div>
    </footer>
    
</body>
</html>