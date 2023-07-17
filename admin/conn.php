<?php 
session_start();
$conn=mysqli_connect('localhost','root','','shoe_web');
if(isset($_POST['login'])){
    $_SESSION['password']=$_POST['password'];
}
?>