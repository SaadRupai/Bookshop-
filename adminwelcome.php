<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
} else {
    $loggedin = false;
    echo '<div class=" alert alert-success"><h1 class="text-center">Welcome to Prime Book House</h1>
            <h6 class="text-center">Please Login/Signup to continue</h6>
            </div>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome <?php echo $_SESSION["username"] ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

    <style>
        .resturant-info {
            position: absolute;
            /* transform: translate(-50%, -50%) !important; */
            top: 430px;
            color: white;
        }

        .first-section img {
            width: 100%;
            height: 30em;
            opacity: .98;
            position: relative;
        }

        .card img {
            width: 100%;
            height: 300px;
        }

        .card {
            border-radius: 18px !important;
            box-shadow: 10px 10px 10px grey;
        }


        .myfooter {
            display: flex;
        }
        
        .ordered{
            background-color: 	rgb(211,211,211);
        }
        .my-image{
            height: 250px;
            width: 180px;
            padding: 10px 10px;
        }
        .my-box{
            margin-left: 60px;
            margin-right: 60px;
        }
        .btn{
            margin-left: 200px;
        }
        .item-box{
            position: relative;
            border: 1px solid black;
            margin: 10px 10px;
            padding: 10px 10px;
        }
        
    </style>
</head>

<body>
    <?php require './partials/_nav.php' ?>
    
    <!-- <a class="nav-link"  href="/project-saad/cart.html"><i id="icon" class="fas fa-cart-arrow-down"><sub id="cart-icon">0</sub></i></a> -->
                
    
    <?php
    if(!$loggedin){
    
    echo '<section class="first-section">
        <img src="images/back-1.jpg" alt="">
        <div class="resturant-info">
            <h1>Prime Book House</h1>
            <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam perspiciatis reprehenderit architecto qui
                delectus! Debitis pariatur delectus eaque asperiores Lorem ipsum dolor sit amet consectetur adipisicing
                elit.
                Reiciendis possimus voluptates distinctio provident soluta pariatur obcaecati delectus quaerat fugiat ad.
                Magni incidunt placeat reiciendis doloribus, ullam debitis deleniti vel quos!</h5>
        </div>
    </section>';
    }

    

    if ($loggedin) {
        echo '<div class="container mt-5">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Welcome <?php echo $_SESSION["username"] ?></h4>
                <p>Welcome to Prime Book House Admin Panel.</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use log out <a href="/project-saad/logout.php">using this link</a> </p>
            </div>
        </div>
        
        <div class="container mt-5 ordered">
            <div class="item-box">
                <img class="col-3 my-image" src="./images/ff-1.jpg">
                <strong class="col-3 my-box">Very Nice</strong>
                <strong class="col-3 my-box">2</strong>
                <strong class="col-3 my-box">$100</strong>
                <button onclick="confirmOrder()"  type="button" class="btn btn-success btn-footer ">Confirm Order!</button>
            </div>
            <div class="item-box">
                <img class="col-3 my-image" src="./images/ff-5.jpg">
                <strong class="col-3 my-box">The Hobbit</strong>
                <strong class="col-3 my-box">1</strong>
                <strong class="col-3 my-box">$70</strong>
                <button onclick="confirmOrder()"  type="button" class="btn btn-success btn-footer ">Confirm Order!</button>
            </div>
        </div>';
    }
    ?>
 

<script>
    function confirmOrder(){
        alert('Order Confirmed');
    }
</script>

<!-- <script type="text/javascript" src="./js/cart-id.js"></script> -->

<?php require './partials/_footer.php' ?>
</body>



</html>