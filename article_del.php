
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
<?php
$id = $_POST["id"];
$con = mysqli_connect("localhost","root","") or die ("Error : Can't Connect to Server");
$db = mysqli_select_db($con,"anacodna") or die ("Error : Can't Connect to Server");
$delete = mysqli_query($con,"delete FROM python_article where id = '$id'");
if ($delete!==false){
session_start();
session_unset();
session_destroy();
header('location: index.php');
exit();
}else{
	echo ("the row has not been deleted");
}

?>
</section>

</body>
</html>
