<?php 
require('conn.php');
if(!isset($_SESSION['password'])){
    header('Location:index.php');
  }
if(isset($_POST['save'])){
    $brand=$_POST['brand-name'];
    $shoe=$_POST['shoe-name'];
    $product=$_POST['product-id'];
    $price=$_POST['price'];
    $id=$_POST['shoe-id'];
    $url1=$_POST['image-1'];
    $url2=$_POST['image-2'];
    $url3=$_POST['image-3'];
    $url4=$_POST['image-4'];
    $url5=$_POST['image-5'];
    $url6=$_POST['image-6'];
    $arrival=$_POST['arrival'];
    $query="INSERT INTO `shoedata`( `brand`, `shoeName`, `product_id`, `price`, `shoe_id`,`url1`, `url2`, `url3`, `url4`, `url5`, `url6`,`arrival`) VALUES ('$brand','$shoe','$product','$price','$id','$url1','$url2','$url3','$url4','$url5','$url6','$arrival')";    
    $result=mysqli_query($conn,$query);
    if($result){
        echo"user added";
            }
    else{
        echo "error";
        echo mysqli_connect_error();
    }

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
        form{
            background-color:  gray;
             width:50%;
            height:80%;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }
        label{
            color:white;
        }
        .data-entry{
            height:91.8vh;
            background-color:  #dae2d5;

        }
        .left{
            position: absolute !important;
            left:-100% !important;
        }
        .right{
            position: absolute !important;
            right: -100% !important;
            top:0 ;
        }
    </style>
</head>

<body>
    <!-- navbar -->
        <?php require('navbar.php')?>
    <!-- navbar -->
 
    <div class="data-entry d-flex justify-content-center align-items-center">
        <form method="post">
        <div class="container-1 d-flex gap-5 justify-content-center align-items-center h-75">
        <div class="col_2 d-flex flex-column gap-3">
            <div class="brand-name">
                <label for="brand">Brand-name:</label>
                <input class="form-control" type="text" name="brand-name" id="brand">
            </div>
            <div class="shoe-name">
                <label for="shoe">Shoe-name:</label>
                <input class="form-control" type="text" name="shoe-name" id="shoe">
            </div>
            <div>
                <label for="arrival">Arrival:</label>
                <select name="arrival" class="form-control" id="arrival">
                    <option value="new">new</option>
                    <option value="pre">pre</option>
                </select>
            </div> 
         </div>
        <div class="col_2 d-flex flex-column gap-3">
        <div class="product-id">
                <label for="id-product">product-id:</label>
                <input class="form-control" type="text" name="product-id" id="id-product">
            </div>
        <div class="price">
                <label for="price-id">price:</label>
                <input class="form-control" type="number" name="price" id="price-id">
            </div>
            <div class="shoe_id">
                <label for="shoe-id">shoe-id:</label>
                <input class="form-control" type="text" name="shoe-id" id="shoe-id">
            </div>
           
        </div>
        </div>
        <div class="row container-2 d-flex  justify-content-center align-items-center h-75 right">
        <div class="col-4 d-flex flex-column gap-3">
                <div class="image-1">
                    <label for="image-1">First Image url:</label>
                    <input type="text" name="image-1" class="form-control" id="image-1" required>
                </div>
                <div class="image-2">
                    <label for="image-2">second Image url:</label>
                    <input type="text" name="image-2" class="form-control" id="image-2" required>
                </div>
                <div class="image-3">
                    <label for="image-3">third Image url:</label>
                    <input type="text" name="image-3" class="form-control" id="image-3" required>
                </div>
            </div>
            <div class="col-4 d-flex flex-column gap-3">
                <div class="image-4">
                    <label for="image-4">Fourth Image url:</label>
                    <input type="text" name="image-4" class="form-control" id="image-4" required>
                </div>
                <div class="image-5">
                    <label for="image-5">Fifth Image url:</label>
                    <input type="text" name="image-5" class="form-control" id="image-5" required>
                </div>
                <div class="image-6">
                    <label for="image-6">Sixth Image url:</label>
                    <input type="text" name="image-6" class="form-control" id="image-6" required>
                </div>
            </div>
            <div class="col-12" style="text-align: center;">
            <button class="btn btn-primary w-50" type="submit" name="save">Save</button>
            </div>
        </div>  
        <div class="container">
            <div class="navbar p-5">
        <button id="prev" type="button" class="btn-danger btn">Prev</button>
        <button id="next" type="button" class="btn-success btn">Next</button>
            </div>
        </div>
        </form>
    </div>
    <script>
        const cont_1=document.querySelector('.container-1');
        const cont_2=document.querySelector('.container-2');
        const next=document.querySelector('#next');
        const prev=document.querySelector('#prev');
        prev.onclick=function(){
            cont_1.classList.remove('left');
            cont_2.classList.add('right');
            prev.disabled=true;
            next.disabled=false;
        }
        next.onclick=function(){
            cont_2.classList.remove('right');
            cont_1.classList.add('left');
            next.disabled=true;
            prev.disabled=false;
        }
        // navbar
        document.querySelector('.active-link').classList.remove('active-link');
        document.querySelector('#Data-Entries').classList.add('active-link');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>