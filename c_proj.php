<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C</title>
    <link rel="stylesheet" href="c_proj.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.6/css/unicons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

    
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
                <h1>C is a powerful and versatile programming language.</h1>
                <p>Welcome to the world of C programming! 
                  C is a powerful and versatile programming language used by developers for building everything
                   from operating systems and embedded systems to high-performance applications and games.

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


    <br>
    
    
   
    <h1><center><br>Common question about C.</center></h1>  
    <br>   <br>
    
    <section class="row">
        <div class="card1">
            <h3>What is C programming used for?</h3>
            <p>  C programming language is a machine-independent programming language
                 that is mainly used to create many types of applications and operating systems such as Windows </p>
        </div>
        <div class="card2">
            <h3>What is C language for beginners?</h3>
            <p>C is a powerful general-purpose programming language. It can be used to develop software like operating systems,
                 databases, compilers, and so on. C programming is an excellent language to learn to program for beginners.
                 Our C tutorials will guide you to learn C programming one step at a time
            </p>
        </div>
    
       </section>
       <section class="row">
        <div class="card1">
            <h3>Is C programming easy?</h3>
            <p>Compared to other languages—like Java, PHP, or C#—
                C is a relatively simple language to learn for anyone just starting to learn computer programming because of its limited number of keywords.
            </p>
        </div>
        <div class="card2">
            <h3>Should I learn C or Python?</h3>
            <p>C is a great way to learn how computers actually work in terms of memory management, and is useful in high-performance computing.
                Python is awesome for science and statistics.</p>
        </div>
    
       </section>
       <section class="row">
        <div class="card1">
            <h3>How fast can you learn C?</h3>
            <p> It can take a few weeks to a few months to learn C. Each programmer has their own specific timeline in learning the programming language,
                 especially if they are an absolute beginner.
                 Therefore there is no one-size-fits-all for learning how to code using C
            </p>
        </div>
        <div class="card2">
            <h3>Is it better to learn C before C++?</h3>
            <p>There's no exact order of learning any of these two languages. What may work in one language may not work in the other,
                 although they are basically one derived from the other. C++ is a much larger, much more complex language than C. 
            </p>
        </div>
       </section>



    <br>   <br>  <br>   <br>  

  <section class="levels">
    <h1><center><br>C Projects.</center></h1>  
    <div class="main">
        <ul class="cards">
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/C1.png" />
              </div>
              <div class="card_content">
                <h2 class="card_title">How to Install C?</h2>
                <div class="card_text">

                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/C CO1.png" >
               
              </div>
              <div class="card_content">
                <h2 class="card_title">C concepts for beginners</h2>
                <div class="card_text">
            
                </div>
              </div>
            </div>
          </li>
      
          <li class="cards_item">
            <div class="card">
              <div class="card_image">
                <img src="images/C L1.png" />
                
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
                <img src="images/C CO2.png"/>
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
                <img src="images/C L2.png" />
                
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
                <img src="images/C L3.png" />
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
      <center><a href="c_content.php" class="btn btn-primary">Get Started</a></center>
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