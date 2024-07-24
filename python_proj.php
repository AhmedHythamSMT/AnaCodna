<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>python</title>
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
                <h1>Python is a popular general-purpose programming language.</h1>
                <p>Welcome to the world of Python programming! Python is a popular high-level programming language used by developers,
                   data scientists, and machine learning engineers for various applications. With its simplicity, readability, and flexibility,
                   Python has become one of the most widely used programming languages in the world.
                </p>
         
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
   
    
    <h1><center><br>Common question about Python.</center></h1>  

   <hr>

   <section class="row">
    <div class="card1">
        <h3>What is python?</h3>
        <p>  Python is an interpreted, object-oriented, high-level programming language with dynamic semantics
             developed by Guido van Rossum. It was originally released in 1991. </p>
    </div>
    <div class="card2">
        <h3>Why do we need to learn Python?</h3>
        <p>Python is highly versatile. You can use it for both small and complex tasks, and it is used across many different industries —
             from its more common applications in data science and software engineering to environments like mobile app development,
            artificial intelligence, and machine learning.</p>
    </div>

   </section>
   <section class="row">
    <div class="card1">
        <h3>How long to learn Python?</h3>
        <p>While you can start to write small scripts in Python after just a few days of study,
             you'll probably spend around four months gaining an essential ability in programming with Python.
             You'll have to spend years and build many projects to become a Python expert in even just one field.</p>
    </div>
    <div class="card2">
        <h3>Who uses Python?</h3>
        <p>Python is used by Intel, IBM, NASA, Pixar, Netflix, Facebook,
             JP Morgan Chase, Spotify, and a number of other massive companies.
             It's one of the four main languages at Google, while Google's YouTube is largely written in Python.</p>
    </div>

   </section>
   <section class="row">
    <div class="card1">
        <h3>What job can I do with Python?</h3>
        <p>    Python Developer. Becoming a Python developer is the most direct job out there for someone who knows the Python programming language,
            Product Manager,
            Data Analyst,
            Educator,
            Financial Advisors,
            Data Journalist.</p>
    </div>
    <div class="card2">
        <h3>Why do students use Python?</h3>
        <p>Python offers an interactive environment in which to explore procedural,
             functional and object oriented approaches to problem solving.
              Its high level data structures and clear syntax make it an ideal first language,
               while the large number of existing libraries make it suitable to tackle almost any programming tasks.</p>
    </div>
   </section>



   <br>   <br>    <br>   <br>    <br>   <br>  

   <section class="levels">

   <h1><center>Python learning process.</center></h1>  
   <div class="main">
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/python.jpg" />
              </div>
              <div class="card_content">
                <h2 class="card_title">How to Install Python?</h2>
                <div class="card_text">
                 
                          
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/concept 1.png" >
               
              </div>
              <div class="card_content">
                <h2 class="card_title">Concepts for beginners</h2>
                <div class="card_text">
                  
                  
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/print(Hello World)(2).png" />
                
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
                <img src="images/concept 2.png"/>
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
                <img src="images/py level 2.png" />
                
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
                <img src="images/py level 3.png" />
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
      <center><a href="python_content.php" class="btn btn-primary">Get Started</a></center>
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