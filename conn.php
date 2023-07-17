<?php
session_start();
$conn=mysqli_connect('localhost','root','','shoe_web');
$query="SELECT * FROM `shoedata`";
$result=mysqli_query($conn,$query);
if(isset($_POST['login'])){ 
     $email=$_POST['email-login'];
     $val=$_POST['pass-login'];
     $val2=md5($val);
     $pass=sha1($val2);
     $query="SELECT * FROM `users` WHERE `email`='$email' and `password`='$pass'";
     $result=mysqli_query($conn,$query);
     if(mysqli_num_rows($result)>0){
    $_SESSION['email-login']=$email;
}
}
?>
