<!-- composer require phpmailer/phpmailer -->
<?php require('conn.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart</title>
  <?php require('.\constants\head.php') ?>
</head>

<body>
  <?php require('.\constants\navbar.php') ?>
  <div class="container mt-5">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Remove</th>
          <th scope="col">Image</th>
          <th scope="col">Product</th>
          <th scope="col">Price</th>
          <th scope="col">Quantity</th>
          <th scope="col">Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $query = "SELECT * FROM `cart`";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
          ?>
          <tr>
            <td class=""><a style="color:black;" href="delete-item.php?id=<?php echo $row['id']; ?>"><i
                  class="fa-solid fa-circle-xmark"></i></a></td>
            <td> <img style="height:5rem;width:5rem;" src="<?php echo $row['url']; ?>"></td>
            <td>
              <?php echo $row['name']; ?>
            </td>
            <td>₹
              <?php echo $row['price']; ?>
            </td>
            <td>
              <?php echo $row['quantity']; ?>
            </td>
            <td>₹
              <?php echo $row['subtotal']; ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-6">
          <label for="coupon">
            <h4><b>APPLY COUPON</b></h4>
          </label>
        <div class="apply-input d-flex gap-3">
        <input type="text" class="form-control rounded-0 w-50">
        <button class="btn rounded-5 btn-dark" style="width:5rem;">Apply</button>
        </div>
      </div>
      <div class="col-6 d-flex align-items-center justify-content-center">
        <div class="list-box" style="border:1px solid black;height:18rem;width:30rem;">
        <div class="d-flex flex-column gap-3" style="padding:2rem;">  
        <h3 style="color:#000;"><b>Cart Total</b></h3>
        <table>
          <tbody>
            <tr>
              <?php $query="SELECT `subtotal` from `cart`";
              $result=mysqli_query($conn,$query);
              $row=mysqli_fetch_assoc($result);
               if(is_null($row)){$value="0";}
              else{
              $query="SELECT SUM(`subtotal`) FROM `cart`";
              $result=mysqli_query($conn,$query);
              $row=mysqli_fetch_assoc($result);
              $value=$row['SUM(`subtotal`)'];
              }
              ?>
              <td style="border:1px solid black;">Cart Total</td>
              <td style="border:1px solid black;">₹<?php if(isset($value)){print_r($value);}?>
              </td>
            </tr>
            <tr>
              <td style="border:1px solid black;">Shipping</td>
              <td style="border:1px solid black;">Fee</td>
            </tr>
            <tr >
              <td style="border:1px solid black;"><b>Total</b></td>
              <td style="border:1px solid black;">₹<?php if(isset($value)){print_r($value);}?></td>
            </tr>
          </tbody>
        </table>
        <button class="btn btn-dark rounded-5 w-50"><b>Proceed To Checkout</b></button>
        </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    const cart = document.querySelector('#cart');
    console.log(cart);
    document.querySelector('.active-link').classList.remove('active-link');
    cart.classList.add('active-link');
    const cart_icon = document.querySelector('#cart-icon');
    cart_icon.style.color = "red";
  </script>
  <?php require('.\constants\script.php') ?>
</body>

</html>