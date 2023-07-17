<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <?php require('../constants/head.php')?>
    <style>
         img{
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
        <img src="https://feet-first-ecommerce.netlify.app/assets/logo.jpg" alt="logo">
        <ul class="navbar-nav d-flex flex-row gap-5">
            <li class="nav-item"><a  id="home-nav" href="data-entry.php" class= "nav-link active-link">Home</a></li>
            <li  class="nav-item"><a  id="Data-Entries" href="entry.php"  class="nav-link">Entries</a></li>
            <li class="nav-item"><a href="customers.php"  id="customers" class="nav-link">Customers</a></li>
            <li  class="nav-item"><a id="inventory" href=""  class="nav-link">Inventory</a></li>
            <li  class="nav-item"><a  id="sales" href="sales.php"  class=" nav-link">Sales</a></li>
            <li  class="nav-item d-flex" style="align-items: center;"><a href="logout.php"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #cc1c0f;font-size: 25px;"></i></a></li>
        </ul>
        </div>
    </nav>
    <?php require('../constants/script.php')?>
</body>
</html>