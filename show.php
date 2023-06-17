<?php require('conn.php'); ?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM `shoedata` WHERE `product_id`='$id'";
$result = mysqli_query($conn, $query);
$card = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
    <?php require('.\constants\head.php') ?>
<style>
    #image-main img{
        height: 43rem;
        width: 90%;
    }
    .other-images img{
        width: 20%;
    }
    .details li{
        font-size: 20px;
    }
</style>
</head>

<body>
    <!--navbar  -->
    <?php require('.\constants\navbar.php') ?>
    <!-- /navbar -->
    <!-- main -->
    <div class="main">

        <div class="row p-5" style="margin:auto;">
            <div class="col-6 p-0" style="height:43rem;" id="image-main">
                <img src="<?php echo $card['url1'];?>" alt="">
            </div>
            <div class="col-6" style="height:43rem;">
                <div class="heading-data p-5">
                    <sub><b>HOME/SHOP</b></sub>
                </div>
                <div class="shoe-name px-5">
                    <h5><b><?php echo $card['shoeName']?></b></h5>
                </div>
                <div class="price-class px-5">
                    <h2><b>₹<?php echo $card['price']; ?></b></h2>
                </div>
                <div class="px-5 d-flex flex-column gap-3">
                    <select name="size" class="form-select" aria-label="shoe-size" id="size" style="width:8rem;">
                        <option selected>select size</option>
                        <option value="1">7</option>
                        <option value="1">8</option>
                        <option value="1">9</option>
                        <option value="1">10</option>
                        <option value="1">11</option>
                        <option value="1">12</option>
                    </select>
                    <div class=" d-flex gap-3">
                        
                        <input type="number" class="form-control rounded-0" name="quantity" id="quantity" min="1" value="1" style="width:3rem;height:3rem;">
                        <button type="submit" onclick="cart('<?php echo $id;?>')" class="btn btn-dark d-flex align-items-center justify-content-center rounded-5" id="add_cart" style="width:8rem;" ><b>Add to cart</b></button>
                    
                    </div>
                    <p class="px-2" style="font-size:20px;"><b>Product Details</b></p>
                    <ul class="details">
                        <li>Wipe with a clean, dry cloth when needed</li>
                        <li>Lace Fastening</li>
                        <li>2-month warranty against manufacturing defects</li>
                        <li>Mesh upper</li>
                        <li>Package contains: 1 pair of shoes</li>
                        <li>Rubber sole</li>
                        <li>Product Code:<?php echo $id;?></li>
                        <li>Net Qty:2N(1 Pair Footwear)</li>
                        <li>Customer Care Address: Local Area, Local Street</li>
                        <li>Commodity: Men's Sneakers</li>
                    </ul>
                </div>
            </div>
            <div class="col-6 py-2" style="height:10rem">
            <div class="other-images d-flex gap-2 h-100" style="width:90%;">
            <img src="<?php echo $card['url2'];?>">
            <img src="<?php echo $card['url3'];?>">
            <img src="<?php echo $card['url4'];?>">
            <img src="<?php echo $card['url5'];?>">
            <img src="<?php echo $card['url6'];?>">
            </div>
            </div>
        </div>

    </div>
    <?php require('.\constants\script.php') ?>
<script>
    const quantity=document.querySelector('#quantity');
    const add_cart=document.querySelector('#add_cart');
    function cart(id){
        const value=quantity.value;
        window.location="add-cart.php?id="+id+"&product="+value;
        console.log(id);
    }
</script>
</body>

</html>