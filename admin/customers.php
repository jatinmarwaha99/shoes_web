<?php require('conn.php')?>
<?php if(!isset($_SESSION['password'])){
    header('Location:index.php');
  }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<!-- navbar -->
<?php require('navbar.php');?>
<!-- navbar -->
<div class="py-5 heading d-flex justify-content-center"><h1>CUSTOMERS LIST</h1></div>
<table class="table py-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">More info</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $query="SELECT * FROM `users`";
      $result=mysqli_query($conn,$query);
      while($row=mysqli_fetch_assoc($result)){ ?>
    <tr>
      <th scope="row"><?php echo $row['id'];?></th>
      <td><?php echo $row['firstname'];?> <?php echo $row['lastname'];?></td>
      <td><?php echo $row['email'];?></td>
      <td><?php echo $row['mobile'];?></td>
      <td><a href="fullinfo.php?id=<?php echo $row['id'];?>" class="btn">Click here</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script> 
        <script>
             // navbar
        document.querySelector('.active-link').classList.remove('active-link');
        document.querySelector('#customers').classList.add('active-link');
        </script>
</body>
</html>