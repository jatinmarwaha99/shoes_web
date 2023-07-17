<?php require('conn.php');?>
<?php 
    if(isset($_POST['login'])){ 
        // if(isset($_SESSION['email-login'])){
        //     $er="You need to logout first";
        //   }else{
        $email=$_POST['email-login'];
        $value=$_POST['pass-login'];
        $val1=md5($value);
        $password=sha1($val1);
        $query="SELECT * FROM `users` WHERE `email`='$email' and `password`='$password'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0){
            header('Location:index.php');
        }else{
            $er="Incorrect email or password";
        }
    }
    // }
     
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('constants/head.php') ?>
    <title>Login Page</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap');
</style>
    <link rel="stylesheet" href="css\login.css">
</head>

<body>
    <!-- navbar -->
    <?php require('constants/navbar.php') ?>
    <!-- /navbar -->
    <!-- main content -->
    <?php if(isset($er)){?>
    <div class="added-user">
      <div class="inner-ad w-100 h-100 d-flex flex-column gap-3 justify-content-center align-items-center">
        <p class="py-3"><?php
            echo $er;
            ?></p>
            <button class="btn btn-danger w-50" onclick="ok()">Ok</button>
      </div>
    </div><?php }?>
    <div class="row">
    <div class="col-lg-6 login-text login-img col-sm-12">
            <div class="row-12" style="height:5rem;"></div>
            <div class="row-12 h-75 d-flex">
                <div class="col-lg-2 h-100 col-sm-1"></div>
                <div class="col-lg-8 h-100 col-sm-10">
                    <div class="text-wrap h-100">
                        <div class="inner-text h-100 d-flex">
                            <div class="row-12 h-25 d-flex"
                                style="align-items:center;font-family: 'Permanent Marker', cursive;">
                                <h1 class="px-5" style="font-size: 100px;">FF</h1>
                            </div>
                            <div class="row-12 h-50 d-flex gap-3"
                                style="justify-content: center;flex-direction: column;">
                                <h3 style="text-align: center !important;">
                                    welcome to FEET FIRST</h3>
                                <p style="font-size: small;text-align: center !important;">Let us help you for better
                                    experience! Register your information we will keep it secure</p>
                            </div>
                            <div class="row-12 h-25 d-flex" style="justify-content: center;">
                                <p> new user? <a href="sign-up.php" class="btn" style="color:red;">register</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 h-100 col-sm-1"></div>
            </div>
            <div class="row-12" style="height:5rem;"></div>
        </div>
        <div class="col-lg-5 col-sm-12" style="height: 44rem;">
            <div class="row-12" style="height:5rem;"></div>
           <div class="row h-75">
           <div class="col-1 h-100"></div> 
            <div class="col-10 h-100 login-here style="background-color: white;">
            <h1>LOGIN HERE</h1>
            <div class="login-form">
             <div class="form-wrap d-flex h-100">
                <form action="login.php" method="post" class="d-flex form-contain">
                    <sub>Log in to try our amazing services</sub>
                    <div class="email_login">
                    <label for="email-login">Email</label>
                    <input class="form-control" type="email" name="email-login" id="email-login">
                    </div>
                    <div class="password_login" style="position: relative;">
                    <i class="fa fa-sharp fa-thin far fa-eye" id="eye-icon"></i>
                    <label for="pass-login">Password</label>
                    <input class="form-control" type="password" name="pass-login" id="pass-login">
                    </div>
                    <button class="btn btn-success" style="color: white;" name="login">Login
                    </button>
                </form>
        
            </div> 
        </div>
        </div>                
            <div class="col-1 h-100"></div> 
           </div>
            <div class="row-12" style=" height:5rem"></div>
    </div>
    </div>
    </div>
   
    <?php require('constants/script.php') ?>
    <script>
        const pass=document.querySelector('#pass-login');
        const eye=document.querySelector('#eye-icon');
        eye.onclick=function(){
            if(pass.type=="password"){
                pass.type="text";eye.classList.remove('fa-eye');
                eye.classList.remove('fa-sharp');
                eye.classList.remove('fa-thin');
                eye.classList.add('fa-regular');
                eye.classList.add('fa-eye-slash');
            }
            else{
                pass.type = 'password';
                eye.classList.add('fa-eye');
                eye.classList.add('fa-sharp');
                eye.classList.add('fa-thin');
                eye.classList.remove('fa-regular');
                eye.classList.remove('fa-eye-slash');
            }
        }
        const regex = new RegExp('[a-zA-Z0-9\._]+@[a-z0-9]{2,4}');
const email=document.querySelector('#email-login');
email.onchange=function(){
  if (regex.test(email.value)) {
            email.classList.add('is-valid');
            email.classList.remove('is-invalid');
}
else{ 
            email.classList.remove('is-valid');
            email.classList.add('is-invalid');
}
}
const login_nav=document.querySelector('#login-nav');
document.querySelector('.active-link').classList.remove('active-link');
login_nav.classList.add('active-link');
function ok(){
    document.querySelector('.added-user').style.display="none";
}
    </script>
</body>

</html>