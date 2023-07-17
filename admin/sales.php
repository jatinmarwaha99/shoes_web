<?php require('conn.php');
if(!isset($_SESSION['password'])){
    header('Location:index.php');
  }?>
  <?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales-Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php require('navbar.php')?>
    <div class="py-5 heading d-flex justify-content-center"><h1>DELIVERY LIST</h1></div>
<table class="table py-5" style="width:100%;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Status</th>
      <th scope="col">More info</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $query="SELECT * FROM `purchase`";
      $result=mysqli_query($conn,$query);
      $row=mysqli_fetch_all($result);
      $count=count($row);
      for($i=0;$i<=$count-1;$i++){ ?>
    <tr>
      <th scope="row"><?php echo $row[$i][0];?></th>
      <td><?php echo $row[$i][1];?></td>
      <td><?php echo $row[$i][2];?></td>
      <td><?php echo $row[$i][3];?></td>
      <td>pending</td>
      <td><a href="delivery-info.php?id=<?php echo $row[$i][0];?>" class="btn">Click here</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
 <script>
    // navbar
    document.querySelector('.active-link').classList.remove('active-link');
    document.querySelector('#sales').classList.add('active-link');
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>