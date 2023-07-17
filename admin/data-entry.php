<?php 
require('conn.php');
if(!isset($_SESSION['password'])){
    header('Location:index.php');
  }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Entry</title>
    <style>
        .admin-hero{
            height: 42rem;
            background-color: #dae2d5;
        }
        .rounded{
            border-radius: 15px;
           background-color: gray; 
        }
    </style>
</head>

<body>
    <!-- navbar -->
        <?php require('navbar.php')?>
    <!-- navbar -->
    <div class="admin-hero">
        <div class="container py-5">
            <div class="row gap-3" style="height:10rem;">
                <div class="col h-100 rounded d-flex flex-column gap-2 align-items-center justify-content-center">
                    <p><b>Number of users</b></p>
                    <p><?php 
                    $query="SELECT * FROM `users`";
                    $result=mysqli_query($conn,$query);
                    $value=mysqli_fetch_all($result);
                    echo $count=count($value);
                    ?></p>
                </div>
                <div class="col h-100 rounded d-flex flex-column gap-2 align-items-center justify-content-center">
                    <p><b>Pending Deliveries</b></p>
                    <p>222</p>
                </div><div class="col h-100 rounded d-flex flex-column gap-2 align-items-center justify-content-center">
                    <p><b>Delivered Number</b></p>
                    <p>222</p>
                </div>
            </div>
        </div>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <script>
              document.querySelector('.active-link').classList.remove('active-link');
        document.querySelector('#home-nav').classList.add('active-link');
        </script>
</body>

</html>