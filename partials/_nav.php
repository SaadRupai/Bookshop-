<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <style>
        .cart{
            color: white;
            margin-top: .6em;
            margin-left: 10em;
        }
    </style>
</head>


<?php


if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    $loggedin = true;
}
else{
    $loggedin = false;
}

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/project-saad/welcome.php"><img style="width: 50px;" src="images/logo1.jpg" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/project-saad/welcome.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#contact">Contact</a>
                </li>'; 
                if(!$loggedin){
           echo'<li class="nav-item">
                <a class="nav-link" href="/project-saad/login.php">Login</a>
                </li>';
            echo'<li class="nav-item">
                <a class="nav-link" href="/project-saad/admin.php">Admin</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/project-saad/signup.php">Signup</a>
                </li>';
                }
                if($loggedin){
            echo '<li class="nav-item">
                <a class="nav-link" href="/project-saad/logout.php">Logout</a>
                </li>
                ';
            }
            echo '</ul>
                <form  class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
</nav>';
?>



<!-- <script type="text/javascript" src="../js/cart-id.js"></script> -->
</html>