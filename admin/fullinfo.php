<?php require('conn.php');?>
<?php if(!isset($_SESSION['password'])){
    header('Location:index.php');
  }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fullinfo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
    .info-body{
        height:40rem;
        width: 100%;
    }
    .info-inner{
        height: 35rem;
        width: 50rem;
        border: 1px solid black;
    }
</style>
    </head>
<body>
    <?php require('navbar.php')?>
    <?php 
    $id=$_GET['id'];
    $query="SELECT * FROM `users` WHERE `id`='$id'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
    ?>
    <div class="info-body d-flex justify-content-center align-items-center">
        <div class="info-inner flex-column d-flex gap-2 px-5">
            <h2 class="py-3"><?php echo $row['firstname']?> <?php echo $row['lastname']?></h2>
            <p><b>Mobile:</b> <?php echo $row['mobile']?></p>
            <p><b>Email:</b> <?php echo $row['email']?></p>
            <p><b>Address:</b> <?php echo $row['address1']?>,<?php echo $row['address2']?></p>
            <p><b>Pincode:</b> <?php echo $row['pincode']?></p>
            <p><b>Nearby:</b> <?php echo $row['nearby']?></p>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> 
</body>
</html>