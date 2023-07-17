<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <?php require('.\constants\head.php') ?>
    <style>
        .footer-body{
            height:30rem;
            background-color: #fff;
        }
        .footer-logo{
            width: 15rem;
        }
        .foot-image{
            width: 10rem;
        }
        .follow-app{
            width: 10rem;
            border: 1px solid black;
            border-radius: 5px;
        }
        .foot-data:hover{
            color: maroon;
            
        }
        
    </style>
</head>
<body>
    <div class="footer-body py-3">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col h-100 d-flex flex-column gap-3">
                    <img class="footer-logo" src="https://feet-first-ecommerce.netlify.app/assets/logo2.png" alt="logo">
                    <h2><b>Contact</b></h2>
                    <p><b>Address:</b> local street, local area, local City, local state</p>
                    <p><b>Phone:</b> (+91) 99887 66554</p>
                    <p><b>Working hours:</b> 10:00 AM to 5:00 PM</p>
                    <h5><b>Follow us</b></h5>
                    <div class="foot-icons">
                        <i class="foot-data fa-brands fa-facebook"></i>
                        <i class="foot-data fa-brands fa-twitter"></i>
                        <i class="foot-data fa-brands fa-instagram"></i>
                        <i class="foot-data fa-brands fa-pinterest-p"></i>
                        <i class="foot-data fa-brands fa-youtube"></i>
                    </div>
                </div>
                <div class="col h-100 d-flex">
                    <div class="col d-flex flex-column gap-1">
                    <h5><b>About</b></h5>
                    <p class="foot-data">About us</p>
                    <p class="foot-data">Delivery Information</p>
                    <p class="foot-data">Privacy Policy</p>
                    <p class="foot-data">Terms & Conditions</p>
                    <p class="foot-data">Contact us</p>
                    </div>
                    <div class="col d-flex flex-column gap-1">
                    <h5><b>My Account</b></h5>
                    <!-- <a href="#" class="btn foot-data">My Account</a> -->
                    <p href="#" class=" foot-data">View Cart</p>
                    <p href="#" class="foot-data">Sign in</p>
                    <p href="#" class=" foot-data">Track order</p>
                    <p href="#" class=" foot-data">Help</p>
                    </div>
                </div>
                <div class="col h-100 d-flex flex-column gap-1">
                <h5><b>Install App</b></h5>
                <p>from App Store or Google Play</p>
                <div class="d-flex gap-1">
                <img class="follow-app" src="https://feet-first-ecommerce.netlify.app/assets/app.jpg" alt="app">
                <img class="follow-app"  src="https://feet-first-ecommerce.netlify.app/assets/play.jpg" alt="app">
                </div>
                <p>Secured Payment Gateways</p>
                <div>
                    <img class="foot-image" src="https://feet-first-ecommerce.netlify.app/assets/pay.png" alt="master">
                </div>
                </div>
            </div>
        </div>
    </div>
<?php require('.\constants\script.php') ?>    
</body>
</html>