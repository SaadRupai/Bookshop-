<?php

$login = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';


    $username = $_POST["username"];
    $password = $_POST["password"];

    
    $sql = "SELECT * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        header("location: welcome.php");
    }

    
    else{
         $showError = "Invalid credentials";
    }
    

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
</head>
<body>
    <?php require './partials/_nav.php'?>
    <?php

    if($login == true){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">  
        </button>
        </div> ';
    }
    if($showError == true){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '.$showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">  
        </button>
        </div> ';
    }
    ?>
    <div class="container mt-5">
        <h1 class="text-center">Login to our website!</h1>
        <form action="/project-saad/login.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username"  name ="username" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php require './partials/_footer.php' ?>
</body>

</html>