<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C++</title>
    <link rel="stylesheet" href="c_proj.css">
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
                <h1>C++ is a powerful and widely used programming language</h1>
                <p>Welcome to the world of C++ programming!
                  C++ is a powerful and widely used programming language
                  that has become an industry standard for developing complex software applications, 
                  such as operating systems, game engines, and robotics systems.</p>
    
            </div>
            <div class="header_right">
                <div class="header_right-image">
                    <img src="images/print_Hello_World__4_-removebg-preview.png">
                </div>
            </div>
        </div>
    </header>

    <section class="categories">

<div class="container categories_container">
    <div class="categories_left">
        <h1>The most important programming terms you should learn.</h1>
        <h1>
        أهم المصطلحات البرمجية التي يجب ان تتعلمها في هذه المرحلة        
      </h1>
        <a href="content.php"class="btn">More</a>
    </div>
    <div class="categories_right">
        <article class="category">
        <center><h1>المصطلحات الهامة</h1></center>
            <h1>Algorithm</h1>
            <p>مجموعة من التعليمات أو القواعد المصممة لحل مشكلة محددة </p>
        </article>
        <article class="category">
        <center><h1>المصطلحات الهامة</h1></center>
            <h1>Program</h1>
            <p>مجموعة منظمة من التعليمات التي تؤدي عند تنفيذها مهمة أو وظيفة معينة</p>
        </article>
        <article class="category">
        <center><h1>المصطلحات الهامة</h1></center>
            <h1>API</h1>
            <p>
            هي مجموعة من القواعد والإجراءات الروتينية والبروتوكولات لإنشاء تطبيقات البرامج
            </p>
           
        </article>
    </div>
</div>
</section>


    




    
    <h1><center><br>Common question about C++.</center></h1>  

   <hr>
   

   <section class="row">
    <div class="card1">
        <h3>What is C++ used for in programming?</h3>
        <p>  C++ is a good programming language for game development because it's fast and efficient.
            Game developers use C++ to create high-performance games, 
            and it also has plenty of debugging tools, which is important for game development. </p>
    </div>
    <div class="card2">
        <h3>Is C++ programming easy?</h3>
        <p>Both Python and C++ are popular, easy programming languages for beginners,
          and choosing the one to learn first is often a matter of personal preference.
        </p>
    </div>

   </section>
   <section class="row">
    <div class="card1">
        <h3>Do I need to learn C before C++?</h3>
        <p>There is no need to learn C before learning C++. They are different languages. 
            It is a common misconception that C++ is in some way dependent on C and not a fully specified language on its own.
            </p>
    </div>
    <div class="card2">
        <h3>How long will it take to learn C++?</h3>
        <p>You can expect to master the syntax of C++ in about two to three months if you devote about 10 hours every week to learning C++. 
            However, to become highly proficient at programming in C++, expect to spend at least one year studying full-time.</p>
    </div>

   </section>
   <section class="row">
    <div class="card1">
        <h3>Is C++ used anymore?</h3>
        <p> C++ isn't going away any time soon. 
            C++ is now one of the most widely used computer languages, with a wide range of applications.
        </p>
    </div>
    <div class="card2">
        <h3>Is C++ programming hard?
        </h3>
        <p>Python offers an interactive environment in which to explore procedural,
            C++ is known to be one of the most difficult programming languages to learn over other popular languages like Python and Java. 
        </p>
    </div>
   </section>

   <br>   <br>    <br>   <br>  


   <section class="levels">

   <h1><center><br>C++ projects.</center></h1>  


    <div class="main">
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/C++.png" />
              </div>
              <div class="card_content">
                <h2 class="card_title">How to Install C++?</h2>
                <div class="card_text">
                 
                             
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/C+ CO1.png" >
               
              </div>
              <div class="card_content">
                <h2 class="card_title">C++ concepts for beginners</h2>
                <div class="card_text">
                  
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/C+ L1.png" />
                
              </div>
              <div class="card_content">
                <h2 class="card_title">level 1</h2>
                <div class="card_text">
                
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
                <img src="images/C+ CO2.png"/>
              </div>
              <div class="card_content">
                <h2 class="card_title">second level concepts</h2>
                <div class="card_text">
                
                    
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/C+ L2.png" />
                
              </div>
              <div class="card_content">
                <h2 class="card_title">Level 2</h2>
                <div class="card_text">
                  
                  
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/C+ L3.png" />
\              </div>
              <div class="card_content">
                <h2 class="card_title">Level 3</h2>
                <div class="card_text">
                    
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <br><br>
      <center><a href="c++_content.php" class="btn btn-primary">Get Started</a></center>
      </section>







    

    <br>   <br>   <br>   <br>   <br>   <br>   <br>


    <script src="./main.js"></script>

    <footer>
        <div class="container footer_container">
            <div class="footer_1">
                <a href="index.php" class="footer_logo"><h4>AnaCodna</h4></a>
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