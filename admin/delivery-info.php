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
        overflow-y: scroll;
    }
</style>
    </head>
<body>
    <?php require('navbar.php')?>
    <?php 
    $id=$_GET['id'];
    $query="SELECT * FROM `purchase` WHERE `id`='$id'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_all($result);
    // print_r($row);
    ?>
    <div class="info-body d-flex justify-content-center align-items-center">
        <div class="info-inner flex-column d-flex gap-1 px-5">
            <h2 class="py-3"><?php echo $row[$id-1][1]?></h2>
            <p><b>Mobile:</b><?php echo $row[$id-1][2]?></p>
            <p><b>Email:</b><?php echo $row[$id-1][3]?></p>
            <p><b>Address:</b><?php echo $row[$id-1][4]?>,<?php echo $row[$id-1][5]?>,<?php echo $row[$id-1][7]?></p>  
            <p><b>Pincode:</b><?php echo $row[$id-1][6]?></p>
            <p><b>Nearby:</b><?php echo $row[$id-1][8]?></p>
        <div class="row w-100 gap-2">
            <?php 
        $product=explode("&&",$row[$id-1][9]);
      $count=count($product);
      for($j=0;$j<$count;$j++){
        $product2=explode(",",$product[$j]);?>
            <div class="col" style="border:1px solid black">
        <p><b>product name:</b><?php echo $product2[2]?></p>
        <p><b>product id:</b><?php echo $product2[6]?></p>
        <p><b>price:</b>₹<?php echo $product2[3]?></p>
        <p><b>Quantity:</b><?php echo $product2[4]?></p>
        <p><b>Subtotal:</b>₹<?php echo $product2[5]?></p>
      </div>
      <?php }
            ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> 
</body>
</html>