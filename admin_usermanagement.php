
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/style_h.css">

</head>
<body>


    <nav>
        <div class="container nav_container">
            <a href="index.php"><img src="images/a logo.png"></a>
                <ul class="nav_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="pro.php">Project</a></li>
                <li><a href="about.html">About</a></li>
                <?php
                if(isset($_SESSION["email"])){
                    echo "<li><a href='profile.php'>Profile</a></li>";
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
    
    <section>
          <form action="editcode.php" method="post">

            Name:<input type="text" name="name" required>


            Email:<input type="text" name="email" required>

            Password:<input type="text" name="password" required>
            
            City:<input type="text" name="city" required> 

            <button type="submit" name="update" value="Update Data" class="btn btn-primary">Edit</button>  

        </form>
    </section>
    <section class="del_edi">
<div class="form-box login">
                <form action="delete_by_admin.php" method="post" name="regform">

                    <h1>Delete User account</h1>
                    <br>
                    <div class="del">
                        <span class="icon"><i class='bx bxs-envelope' ></i></span>
                        <label>Enter Your Email </label>
                        <input type="email" name="email" required>
                        <br> <br>
                    </div>

                        <button type="delete" class="btn btn-primary">delete</button>  
                </form>
            </div>
            </div>
</section>
</body>
</html>