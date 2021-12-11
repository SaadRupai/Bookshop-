<?php

$showAlert = false;
$showError = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';


    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $existSql = "SELECT * from `users` WHERE username ='$username'";
    $result = mysqli_query($conn, $existSql);

    $numExistRows = mysqli_num_rows($result);
    if($numExistRows>0){
        $showError = "Username already exists.";
    }
    else{

        if($password == $cpassword){
            $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
            }
        }
    
        else{
            $showError = "Passwords do not match";
        }
    }
}
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
</head>
<body>
    <?php require './partials/_nav.php'?>
    <?php

    if($showAlert == true){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can log in.
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
        <h1 class="text-center">Signup to our website!</h1>
        <form action="/project-saad/signup.php" method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username"  name ="username" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
                <label for="cpassword" class="form-label">Confirm Password
                </label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <div id="emailHelp" class="form-text">Make sure to type the same password!               
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?php require './partials/_footer.php' ?>
</body>
</html>