<?php require('conn.php');?>
<?php 
if(isset($_SESSION['email-login'])){
    $er="You are already logged in";
    $disabled="disabled";
}
// echo $_SESSION['email-login'];
?>
<?php if(isset($_POST['submit'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email-signup'];
    $mobile=$_POST['mobile'];
    $value=$_POST['pass-signup'];
    $val1=md5($value);
    $password=sha1($val1);
    $val2=$_POST['cpass-signup'];
    $val3=md5($val2);
    $cpassword=sha1($val3);
    $city=$_POST['city'];
    $nearby=$_POST['nearby'];
    $pin=$_POST['pin'];
    $address1=$_POST['address1'];
    $address2=$_POST['address2'];
    $query="SELECT * FROM `users` WHERE `email`='$email'";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==0){
    $query="INSERT INTO `users`(`firstname`, `lastname`, `email`, `mobile`, `password`, `city`, `nearby`, `address1`, `address2`, `pincode`)
     VALUES ('$fname','$lname','$email','$mobile','$password','$city','$nearby','$address1','$address2','$pin')";
     if($password==$cpassword){
        $result=mysqli_query($conn,$query);
        if($result){
            $er="User Added";
        }else{
            $er="something went wrong";
        }

     }
     else if(mysqli_num_rows($result)>0){
        $er="password wrong";
     }
    }
    else{
        $er="Email aready Exists";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('constants/head.php') ?>
    <title>Document</title>
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
            <button class="btn btn-danger w-50" onclick="ok()">OK</button>
      </div>
    </div><?php }?>
    <div class="row">
        <div class="col-lg-6 login-text sign-up-img col-sm-12">
            <div class="row-12" style="height:5rem;"></div>
            <div class="row-12 h-75 d-flex">
                <div class="col-lg-2 col-sm-1 h-100 "></div>
                <div class="col-lg-8 h-100 col-sm-10 ">
                    <div class="text-wrap h-100">
                        <div class="inner-text h-100 d-flex">
                            <div class="row-12 h-25 d-flex px-5"
                                style="align-items:center;font-family: 'Permanent Marker', cursive;">
                                <h1 style="font-size: 100px;">FF</h1>
                            </div>
                            <div class="row-12 h-50 d-flex gap-3"
                                style="justify-content: center;flex-direction: column;">
                                <h3 style="text-align: center !important;">
                                    welcome to Feet First</h3>
                                <p style="font-size: small;text-align: center !important;">Let us help you for better
                                    experience! Register your information we will keep it secure</p>
                            </div>
                            <div class="row-12 h-25 d-flex" style="justify-content: center;">
                                <p> Already signed in? <a href="login.php" class="btn" style="color:green;">login</a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-2 col-sm-1 h-100"></div>
            </div>
            <div class="row-12" style="height:5rem;"></div>
        </div>
        <div class="col-lg-6 col-sm-12" style="height: 41.5rem;">
            <div class="row-12" style="height:5rem;"></div>
            <div class="row scroll-sign w-100 h-75" style="height:35rem;">
                <div class="col-1 h-100"></div>
                <div class="col-10  login-here d-flex gap-2" style=" background-color: white;flex-direction: column;">
                    <h1>Sign-Up HERE</h1>
                    <div class="login-form h-100">
                        <div class="form-wrap d-flex h-100">
                            <form action="sign-up.php" method="post" class="d-flex form-contain h-100">
                                <div class="names d-flex gap-2">
                                <div class="first-n"> 
                                    <label for="first-name">First name</label>
                                    <input type="text" class="form-control" name="fname" id="fname"></div>
                                    <div class="last-n"> 
                                    <label for="last-name">last name</label>
                                    <input type="text" class="form-control" name="lname" id="lname"></div>
                                </div>

                                <div class="email_signup">
                                    <label for="email-signup">Email</label>
                                    <input class="form-control" type="email" name="email-signup" id="email-signup">
                                </div>
                                <div class="mobile">
                                    <label for="mobile">Mobile</label>
                                    <input class="form-control" type="number" name="mobile" id="mobile">
                                </div>
                                <div class="d-flex gap-3" style="flex-direction: column;">
                                 <div class="password_signup d-flex gap-2" style="position:relative;">
                                   <div class="password1">
                                     <i class="fa fa-sharp fa-thin far fa-eye" id="eye-icon1"></i>
                                     <label for="pass-signup">Password</label>
                                     <input class="form-control" type="password" name="pass-signup" id="pass-signup">
                                   </div>
                                   <div class="c-password1">
                                     <i class="fa fa-sharp fa-thin far fa-eye" id="eye-icon"></i>
                                     <label for="cpass-signup">Confirm Password</label>
                                     <input class="form-control" type="password" name="cpass-signup" id="cpass-signup">
                                   </div>
                                </div>
                                <div class="d-flex">
                                <sub class="error-pass" id="err-pass" style="width:50%"></sub>
                                  <sub class="match" id="message"></sub>
                                </div>
                                </div>  
                            <div class="address-lines">
                                <label for="address">Address</label>
                                <div class="input-address d-flex flex-column gap-3">
                                   <input class="form-control w-50" max="999999" type="number" name="pin" id="pin" placeholder="pincode">
                                    <div class="d-flex gap-2">
                                    <input required class="form-control" type="text" name="city" id="city" placeholder="city name">
                                    <input required class="form-control" type="text" name="nearby" id="nearby" placeholder="nearby place">
                                    </div>
                                    <div class="d-flex gap-2">
                                    <textarea required placeholder="Address 1" class="form-control" name="address1" id="address1" cols="10" rows="5"></textarea>
                                    <textarea required placeholder="Back-up Address" class="form-control" name="address2" id="address2" cols="10" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                                <button type="submit" <?php if(isset($disabled)){echo $disabled;}?> onclick="submit()" class="btn btn-danger" style="color: white;" name="submit">Submit
                                </button>  
                            
                            </form>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    </div>
    <script>
    const register_nav=document.querySelector('#register-nav');
document.querySelector('.active-link').classList.remove('active-link');
register_nav.classList.add('active-link');
function ok(){
    document.querySelector('.added-user').style.display="none";
}
function submit(){
    document.querySelector('.added-user').style.display="block";
}
    </script>
    <?php require('constants/script.php') ?>
    <script src="js\sign-up.js"></script>
</body>

</html>