<?php require('conn.php');?>
<?php 
$query="SELECT * FROM `cart`";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_all($result);
$count=count($row)-1;
for($i=0;$i<=$count;$i++){
    
   $row[$i]= implode(",",$row[$i]);
       
}
$data=implode(" && ",$row);
$email_login=$_SESSION['email-login'];
$query="SELECT * FROM `users` WHERE `email`='$email_login'";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$username=$row['firstname']." ".$row['lastname'];
$email=$row['email'];
$mobile=$row['mobile'];
$city=$row['city'];
$nearby=$row['nearby'];
$address1=$row['address1'];
$pincode=$row['pincode'];
$address2=$row['address2'];
$query="INSERT INTO `purchase`( `username`, `email`, `mobile`, `address1`, `address2`, `pincode`, `city`, `nearby`, `details`) VALUES
 ('$username','$email','$mobile','$address1','$address2','$pincode','$city','$nearby','$data')";
$result=mysqli_query($conn,$query);
if($result){
    $query="DELETE  FROM `cart`";
    $result=mysqli_query($conn,$query);
    if($result){
        header('Location:cart.php');
    }
}
?>