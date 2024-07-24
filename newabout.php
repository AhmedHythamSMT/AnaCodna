<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>about</title>
        <link rel="stylesheet" href="newabout.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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

    <section class="head">
    <header>
        <div class="container header_container">
            <div class="header_left">
                <h1>Programing</h1>
                <p>A programming language is a formal language designed to communicate instructions to a computer. 
                    It allows software developers to write code that can be executed by a computer to perform specific tasks or solve problems. 
                    Programming languages have their own syntax and grammar,
                    and each language has a unique set of rules and commands that programmers use to create computer programs
                </p>
                <a href="index.html" class="btn btn-primary">Get Started</a>
            </div>
            <div class="header_right">
                <div class="header_right-image">
                    <img src="images/team1.png">
                </div>
            </div>
        </div>
    </header>
    </section>

    

    <br>   <br>  <br>   <br>  


    <h1><center><br>OUR TEAM</center></h1>  


    <div class="main">
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/a(4).png" />
              </div>
              <div class="card_content">
                <h2 class="card_title">Team Leader</h2>
                <div class="card_text">
                    <ul class="socials">
                        <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                        <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                        <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                        <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                    </ul>
                
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/a(5).png" >
               
              </div>
              <div class="card_content">
                <h2 class="card_title">Team Member</h2>
                <div class="card_text">
                   
                    <ul class="socials">
                        <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                        <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                        <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                        <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                    </ul>
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/a(8).png" />
                
              </div>
              <div class="card_content">
                <h2 class="card_title">Team Member</h2>
                <div class="card_text">
                    <ul class="socials">
                        <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                        <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                        <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                        <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                    </ul>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>

      <div class="main">
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/a(6).png"/>
              </div>
              <div class="card_content">
                <h2 class="card_title">Team Member</h2>
                <div class="card_text">

                        <ul class="socials">
                            <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                            <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                            <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                            <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                        </ul>             

                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/a(6).png" />
                
              </div>
              <div class="card_content">
                <h2 class="card_title">Team Member</h2>
                <div class="card_text">
                    <ul class="socials">
                        <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                        <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                        <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                        <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                    </ul>
                  
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/a(9).png" />
\              </div>
              <div class="card_content">
                <h2 class="card_title">Team Member</h2>
                <div class="card_text">
                
                        <ul class="socials">
                            <li><a href="#"><i class="uil uil-facebook-f"></i></a></li>
                            <li><a href="#"><i class="uil uil-instagram-alt"></i></a></li>
                            <li><a href="#"><i class="uil uil-twitter"></i></a></li>
                            <li><a href="#"><i class="uil uil-linkedin-alt"></i></a></li>
                        </ul>                  
                  
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>















    

    <br>   <br>   <br>   <br>   <br>   <br>   <br>


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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Project</a></li>
                    <li><a href="index.html">About</a></li>
                    <li><a href="index.html">Feedback</a></li>
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