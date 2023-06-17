<?php require('conn.php');?>
<?php 
$id=$_GET['id'];
$query="DELETE FROM `cart` WHERE `id`='$id'";
$result=mysqli_query($conn,$query);
if($result){
    header('Location:cart.php');
}
?>