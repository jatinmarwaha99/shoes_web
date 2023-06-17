<?php
$conn=mysqli_connect('localhost','root','','shoe_web');
$query="SELECT * FROM `shoedata`";
$result=mysqli_query($conn,$query);
?>
