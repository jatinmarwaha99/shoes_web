<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <?php require('head.php')?>
    <style>
        .right img{
            width: 120px;
        }
        nav{
            justify-content: space-between;
            padding: 10px 80px;
            background-color: #dae2d5;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            z-index: 999;
            position: sticky;
            top: 0;
            left: 0;
        }
        .nav-link{
            color: black !important;
            font-weight: bold !important;
        }
        .active-link,.active-link:hover{
            color: red !important;
            border-bottom: 3px solid red;
        }
        .nav-link:hover,i:hover{
            color: lightslategray !important;
            
        }
        .active-link:hover{
            color: red !important;
            border-bottom: 3px solid red;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="container">
        <div class="right">
            <img src=".\images\logo.jpg" alt="logo">
        </div>
        <ul class="navbar-nav d-flex flex-row gap-5">
            <li class="nav-item "><a id="home-nav" href="./index.php" class= "nav-link active-link">Home</a></li>
            <li  class="nav-item"><a id="shop-nav" href="./shop.php"  class=" nav-link">Shop</a></li>
            <li class="nav-item"><a href="#"  id="contact-nav" class=" nav-link">Contact</a></li>
            <li  class="nav-item"><a id="register-nav" href="#"  class=" nav-link">Register</a></li>
            <li  class="nav-item"><a id="login-nav" href="#"  class=" nav-link">Login</a></li>
            <li id="cart" class="nav-item d-flex" style="align-items: center;"><a href="./cart.php"><i id="cart-icon" class="fa-solid fa-bag-shopping"style="font-size:25px;color:black;"></i></a></li>
        </ul>
        </div>
    </nav>

    <?php require('script.php')?>
</body>
</html>