<?php require('conn.php');?>
<?php 
$query="SELECT * FROM `admin`";
$result=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
$password=$row['password'];
function password_hashing($val){
    $val1=md5($val);
    $val2=sha1($val1);
    return $val2;
}
function verify_password($val,$pass){
    $value=password_verify($val,$pass);
    return $value;
}
if(isset($_POST['login'])){
    unset($_POST['login']);
    $value=$_POST['password'];
    $val1=password_hashing($value);
    $val2=verify_password($val1,$password);
    if($val2==true){
        header('Location:data-entry.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

<style>
    .admin-home{
        height: 100vh;
        width: 100%;
        background: url('https://t4.ftcdn.net/jpg/02/55/77/03/360_F_255770374_rbmJO9gkkIhMBcyVPc3iW016BCLDvcWc.jpg');
        background-size:cover;
        opacity: 0.8;
    }
    .admin-login{
        height: 10rem;
        width: 20rem;
        background-color: navy;
        border-radius: 20px;
    }
    #input-login{
        border-right:none;
    }
    #login-btn{
        border-left:none;
    }
    form{
        position: relative;
    }
    #btn-eye{
        position: absolute;
        right: 4rem;
        cursor: pointer;
    }    
    #btn-eye:focus{
        outline: :none;
    }
</style>
</head>
<body>
    <div class="admin-home d-flex justify-content-center align-items-center">
        <div class="admin-login d-flex flex-column gap-3">
                <h5 class="p-3"><b style="color:white;">ADMIN LOGIN</b></h5>
                <form action="index.php" method="post" class="px-3 d-flex">
                    <button type="button" class="btn rounded-0" id="btn-eye"><i id="eye-btn"  class="fa fa-thin fa-eye" style="color: #74777b;"></i></button>
                    <input type="password" class="form-control rounded-0" id="input-login" name="password" placeholder="Enter password here">
                    <button type="submit" id="login-btn" name="login" style="background-color: #fff;" class="btn rounded-0"><i style="color:navy;" class="fa-solid fa-arrow-right"></i></button>
                </form>
        </div>
    </div>
    <script>
        const eye_btn=document.querySelector('#eye-btn');
        const btn_eye=document.querySelector('#btn-eye');
        const input=document.querySelector('#input-login');
        eye_btn.onclick=function(){
            if(input.type=="password"){
                input.type="text";
                btn_eye.classList.add('btn-success');
                eye_btn.style.color="white";
                eye_btn.classList.remove('fa-thin');
                eye_btn.classList.remove('fa-eye');
                eye_btn.classList.add('fa-thin');
                eye_btn.classList.add('fa-eye-slash');

            }
            else{
                input.type="password";
                eye_btn.style.color=" #74777b";
                btn_eye.classList.remove('btn-success');
                eye_btn.classList.remove('fa-thin');
                eye_btn.classList.remove('fa-eye-slash');
                eye_btn.classList.add('fa-thin');
                eye_btn.classList.add('fa-eye');
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>