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
        .cart-icon{
            position: absolute !important;
            bottom: 20px;
            right:20px;
        }
        .inner-card{
            transition: 0.3s ease;
        }
        .inner-card:hover{
            padding: 20px !important;
            padding-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <?php require('.\constants\navbar.php') ?>
    <!-- main section -->
    
     <div class="d-flex flex-column gap-3" style="height:10rem;align-items: center; justify-content: center;">
        <h1><b> Featured Products</b></h1>
        <small>Best Price Ever</small>
     </div>
     <div class="container">
        <div class="row">
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
          const shop=document.querySelector('#shop-nav');
          document.querySelector('.active-link').classList.remove('active-link');
          shop.classList.add('active-link');
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
    </div>
     </div>
     
    <?php require('.\constants\script.php') ?>
</body>

</html>