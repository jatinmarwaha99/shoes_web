<?php 
require('conn.php');
$id=$_GET['id'];
$query="SELECT `product_id` FROM `cart` WHERE `product_id`='$id'";
$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)>0){
    $er="already exists";
}
else{
 $product=$_GET['product'];
$query="SELECT * FROM `shoedata` WHERE product_id='$id'";;
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$url=$row['url1'];
$price=$row['price'];
$name=$row['shoeName'];
$subtotal=$price*$product;
$query="INSERT INTO `cart`(`url`, `name`, `price`, `quantity`, `subtotal`,`product_id`)
 VALUES ('$url','$name','$price','$product','$subtotal','$id')";
 $result=mysqli_query($conn,$query);
 }
 header('Location:cart.php');
?>