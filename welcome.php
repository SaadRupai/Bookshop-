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

        .btn-footer {
            margin-left: 150px;
            width: 40% !important;
        }

        .myfooter {
            display: flex;
        }
        #icon{
            margin-left: 75em;
            color: black;
            background-color: grey;
            height: 1.2em;
            width: 1.8em;
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
        
        echo '<a class="nav-link"  href="/project-saad/cart.html"><i id="icon" class="fas fa-cart-arrow-down"><sub id="cart-icon">0</sub></i></a>';
        echo '<div class="container mt-5">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Welcome <?php echo $_SESSION["username"] ?></h4>
                <p>How are you doing ? Welcome to Prime Book House.</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use log out <a href="/project-saad/logout.php">using this link</a> </p>
            </div>
        </div>
        
        <section id="product" class="container mt-5 ">
            <h2 style="color: rgb(90, 170, 90);">Fictions</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 ">
                <div class="col">
                    <div class="card h-100">
                        <img src="images/ff-1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 style="color: rgb(78, 143, 78);" class="card-title">Very Nice</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                                content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer myfooter">
                            <h2 style="color: rgb(78, 143, 78);">$50</h2>
                            <button onclick="shoppingCartUpdate()"  type="button" class="btn btn-success btn-footer ">Order Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/ff-2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 style="color: rgb(78, 143, 78);" class="card-title">Card title</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer myfooter">
                            <h2 style="color: rgb(78, 143, 78);">$50</h2>
                            <button onclick="shoppingCartUpdate()"  type="button" class="btn btn-success btn-footer">Order Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="images/ff-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 style="color: rgb(78, 143, 78);" class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                                content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer myfooter">
                            <h2 style="color: rgb(78, 143, 78);">$50</h2>
                            <button onclick="shoppingCartUpdate()"  type="button" class="btn btn-success col-8 btn-footer ">Order Now!</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container mt-5 second-section">
            <h2 style="color: rgb(90, 170, 90);">Novels</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4 ">
                <div class="col mycard">
                    <div class="card h-100">
                        <img src="images/ff-4.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 style="color: rgb(78, 143, 78);" class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                                content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer myfooter">
                            <h2 style="color: rgb(78, 143, 78);">$50</h2>
                            <button onclick="shoppingCartUpdate()"  type="button" class="btn btn-success btn-footer">Order Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col mycard ">
                    <div class="card h-100">
                        <img src="images/ff-5.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 style="color: rgb(78, 143, 78);" class="card-title">The Hobbit</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                        <div class="card-footer myfooter">
                            <h2 style="color: rgb(78, 143, 78);">$70</h2>
                            <button onclick="shoppingCartUpdate()"  type="button" class="btn btn-success btn-footer">Order Now!</button>
                        </div>
                    </div>
                </div>
                <div class="col mycard ">
                    <div class="card h-100">
                        <img src="images/ff-6.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 style="color: rgb(78, 143, 78);" class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                                content. This card has even longer content than the first to show that equal height action.</p>
                        </div>
                        <div class="card-footer myfooter">
                            <h2 style="color: rgb(78, 143, 78);">$50</h2>
                            <button onclick="shoppingCartUpdate()"  type="button" class="btn btn-success col-8 btn-footer">Order Now!</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        ';
    }
    ?>
 
    <script>
        function shoppingCartUpdate(){
            const cartInput=document.getElementById('cart-icon').innerText;
            const cartCount=parseInt(cartInput);
            let totalCartCount = cartCount+1;
            document.getElementById('cart-icon').innerText = totalCartCount;
        }
    </script>



<!-- <script type="text/javascript" src="./js/cart-id.js"></script> -->

<?php require './partials/_footer.php' ?>
</body>



</html>