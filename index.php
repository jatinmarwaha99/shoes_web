<?php require('conn.php');?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require('.\constants\head.php') ?>
    <style>
        .hero-sec {
            height: 650px;
            background-color: #dae2d5;
            justify-content: space-between;
            padding: 20px 80px;
            background-image: url(./images/back-image-1.png);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top 10px right 20%;
        }
        .cart-icon{
            position: absolute !important;
            bottom: 20px;
            right:20px;
            z-index: 5;
        }
        .inner-card{
            transition: 0.3s ease;
        }
        .inner-card:hover{
            padding: 20px !important;
            padding-bottom: 10px;
        }
        .banner{
            background: url('https://feet-first-ecommerce.netlify.app/assets/offer-banner2.jpg');
            height: 24rem;
            background-size: cover;
            
        }
        .small-banner-1{
            background: url('https://feet-first-ecommerce.netlify.app/assets/text-banner1.jpg');
            background-size: 22rem;
        }
        .small-banner-2{
            background: url('	https://feet-first-ecommerce.netlify.app/assets/text-banner2.jpg');
            background-size: 22rem;
        }
        .small-banner-3{
            background: url('	https://feet-first-ecommerce.netlify.app/assets/text-banner3.jpg');
            background-size: 22rem;
        }
        .inner-banner{
            height: 24rem;
            width: 100%;
        }
        .hero-details{
            height: 20rem;
            width: 30rem;
            /* border: 1px solid black; */
        }
        .font-45{
            font-size: 45px;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <?php require('.\constants\navbar.php') ?>
    <!-- main section -->
    <div class="hero-sec d-flex align-items-center ">
        <div class="hero-details px-5 d-flex flex-column gap-2">
            <p><b>Trade-in-Offer</b></p>
            <h1 class="font-45">Super Cool Deals</h2>
            <h1 class="font-45" style="color:red;">on all Products</h1>
            <p>Save upto 70%</p>
            <button class="rounded-4 btn btn-dark w-50">Shop Now</button>
        </div>
    </div>
    <div class="feature" style="background-color: lightgray;">
    <div class="container">
    <div class="row" style="height: 10rem;">
        <div class="feature-box col-4 h-100 d-flex flex-column gap-2" style="align-items: center;justify-content: center;">
                <i class="fa-solid fa-truck-fast fa-4x"></i>
                <h4>Easy Shipping</h4>
        </div>
        <div class="feature-box col-4 h-100 d-flex flex-column gap-2" style="align-items: center;justify-content: center;">
                <i class="fa-solid fa-hand-holding-heart fa-4x"></i>
                <h4>100% Hand  Packed</h4>
    </div>
        <div class="feature-box col-4 h-100 d-flex flex-column gap-2" style="align-items: center;justify-content: center;">
                <i class="fa-solid fa-check-double fa-4x"></i>
                <h4>Assured Quality</h4>
    </div>
    </div>
     </div></div>
     <div class="d-flex flex-column gap-3" style="height:10rem;align-items: center; justify-content: center;">
        <h1><b> Featured Products</b></h1>
        <small>Best Price Ever</small>
     </div>
     <div class="container">
        <div class="row">
            <?php 
            $query="SELECT * FROM `shoedata` WHERE `arrival`='pre'";
            $result=mysqli_query($conn,$query);
            ?>
            <?php while($card=mysqli_fetch_assoc($result)){?>
            <div class="col-3 mt-3">
            <div onclick="clickShow('<?php echo $card['product_id']?>')" class="card" style="height:30rem;border-radius: 20px;">
            <div class="inner-card" first-url="<?php echo $card['url1']?>" second-url="<?php echo $card['url2']?>"  onmouseover="overRock(this)" onmouseout="outRock(this)" theover="#<?php echo $card['shoe_id'];?>" style="padding: 10px;position:relative;">
            <div class="image-bg">
            <img id="<?php echo $card['shoe_id'];?>" src="<?php echo $card['url1']; ?>" style="height:20rem;width:100%;border-radius:20px;">
            </div>
                <sub style="color:red;padding:10px;"><?php echo $card['brand']; ?></sub>
                <div class="card-text d-flex flex-column gap-0"style="padding: 10px;">
                <b style="font-size: small;"><?php echo $card['shoeName']; ?></b>
                <div class="star-rating d-flex gap-1">
                    <i class="fas fa-star" aria-hidden="true" style="color:gold;font-size: 12px;"></i>
                    <i class="fas fa-star" aria-hidden="true" style="color:gold;font-size: 12px;"></i>
                    <i class="fas fa-star" aria-hidden="true" style="color:gold;font-size: 12px;"></i>
                    <i class="fas fa-star" aria-hidden="true" style="color:gold;font-size: 12px;"></i>
                    <i class="fa-regular fa-star-half-stroke" aria-hidden="true" style="color:gold;font-size: 12px;"></i>
                </div>
                <div class="price">
                    <b style="color:gray;font-size:small;">₹<?php echo $card['price']; ?></b>
                </div>
                </div>
                <button class="cart-icon" onclick="cartIcon(<?php echo $card['product_id']?>)" name="show" style="border: none;background-color: #fff;"><i class="fa-solid fa-2x fa-cart-shopping "></i>
                </button>
                
            </div></div>
        </div>
        <script>
          const home=document.querySelector('#home-nav');
          document.querySelector('.active-link').classList.remove('active-link');
          home.classList.add('active-link');
          function overRock(el){
            const value=el.getAttribute('theover');
            const image=document.querySelector(value);
            const second=el.getAttribute('second-url');
            image.src=second;
        };
            function outRock(el){
            const value=el.getAttribute('theover');
            const image=document.querySelector(value);
            const first=el.getAttribute('first-url');
            image.src=first;
        };
        function clickShow(id){
            window.location="show.php?id="+id;
            console.log('fkkfkfkfffk');
        }
        function cartIcon(id){
            window.location="add-cart.php?id="+id+"&product=1";
        }
     </script>
        <?php }?>
    </div>
     </div>
     <div class="d-flex flex-column gap-3" style="height:10rem;align-items: center; justify-content: center;">
        <h1><b>New Arrivals</b></h1>
        <small>Best For Your Foot Comfort</small>
     </div>
     <div class="container">
        <div class="row">
            <?php 
            $query="SELECT * FROM `shoedata` WHERE `arrival`='new'";
            $result=mysqli_query($conn,$query);
            ?>
            <?php while($card=mysqli_fetch_assoc($result)){?>
            <div class="col-3 mt-3">
            <div onclick="clickShow('<?php echo $card['product_id']?>')" class="card" style="height:30rem;border-radius: 20px;">
            <div class="inner-card" first-url="<?php echo $card['url1']?>" second-url="<?php echo $card['url2']?>"  onmouseover="overRock(this)" onmouseout="outRock(this)" theover="#<?php echo $card['shoe_id'];?>" style="padding: 10px;position:relative;">
            <div class="image-bg">
            <img id="<?php echo $card['shoe_id'];?>" src="<?php echo $card['url1']; ?>" style="height:20rem;width:100%;border-radius:20px;">
            </div>
                <sub style="color:red;padding:10px;"><?php echo $card['brand']; ?></sub>
                <div class="card-text d-flex flex-column gap-0"style="padding: 10px;">
                <b style="font-size: small;"><?php echo $card['shoeName']; ?></b>
                <div class="star-rating d-flex gap-1">
                    <i class="fas fa-star" aria-hidden="true" style="color:gold;font-size: 12px;"></i>
                    <i class="fas fa-star" aria-hidden="true" style="color:gold;font-size: 12px;"></i>
                    <i class="fas fa-star" aria-hidden="true" style="color:gold;font-size: 12px;"></i>
                    <i class="fas fa-star" aria-hidden="true" style="color:gold;font-size: 12px;"></i>
                    <i class="fa-regular fa-star-half-stroke" aria-hidden="true" style="color:gold;font-size: 12px;"></i>
                </div>
                <div class="price">
                    <b style="color:gray;font-size:small;">₹<?php echo $card['price']; ?></b>
                </div>
                </div>
                <button class="cart-icon" name="show" style="border: none;background-color: #fff;"><i class="fa-solid fa-2x fa-cart-shopping "></i>
                </button>
                
            </div></div>
        </div>
        <script>
          const home=document.querySelector('#home-nav');
          document.querySelector('.active-link').classList.remove('active-link');
          home.classList.add('active-link');
          function overRock(el){
            const value=el.getAttribute('theover');
            const image=document.querySelector(value);
            const second=el.getAttribute('second-url');
            image.src=second;
        };
            function outRock(el){
            const value=el.getAttribute('theover');
            const image=document.querySelector(value);
            const first=el.getAttribute('first-url');
            image.src=first;
        };
        function clickShow(id){
            window.location="show.php?id="+id;
            console.log('fkkfkfkfffk');
        }
     </script>
        <?php }?>
     <div class="container my-5">
        <div class="row gap-5">
            <div class="col p-0 banner ">
                <div class="inner-banner gap-2 px-5 d-flex justify-content-center flex-column">
                <p style="color:white">crazy deals</p>
                <h3 style="color:white">Buy 1 Get 1 Free</h3>
                <sub style="color:white"><b>The best classic dress is on sale at cara</b></sub>
                <button class="my-3 btn btn-dark rounded-5 w-25">Learn More</button>
                </div>
            </div>
            <div class="col p-0 banner">
            <div class="inner-banner gap-2 px-5 d-flex justify-content-center flex-column">
                <p style="color:white">summer/spring</p>
                <h3 style="color:white">upcoming seasons</h3>
                <sub style="color:white"><b>The best classic dress is on sale at cara</b></sub>
                <button class="my-3 btn btn-dark rounded-5 w-25">Collection</button>
                </div>
            </div>
        </div>
     </div>
     <div class="container my-5">
        <div class="row gap-5" style="height:15rem;">
            <div class="px-3 col small-banner-1 p-0 d-flex justify-content-center gap-2 flex-column">
                <h5><b>SEASONAL SALE</b></h5>
                <p><b style="color: maroon;">Winter Collection -50% OFF</b></p>
            </div>
            <div class="px-3 col small-banner-2 p-0 d-flex justify-content-center gap-2 flex-column">
                <h5><b>NEW FOOTWEAR COLLECTION</b></h5>
                <p><b style="color: maroon;">Spring/Summmer 2023</b></p>
            </div>
            <div class="px-3 col small-banner-3 p-0 d-flex justify-content-center flex-column gap-2">
                <h5><b>T-shirts</b></h5>
                <p><b style="color: maroon;">New Trendy Prints</b></p>
            </div>
        </div>
     </div>
     <?php require('footer.php')?>
    <?php require('.\constants\script.php') ?>
</body>

</html>