<!DOCTYPE php>
<php lang="en">

<head>
  <link rel="icon" href="images/logo1.png" type="image/x-icon">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce Website</title>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link rel="stylesheet" href="style.css">

</head>
 <body>
  <section id="header">
    <div class="pro"onclick="window.location.href='index.php';">
    <a href="#"><img src="images/logo1.png" class="logo" alt=""></a>
  </div>
    <div>
  <ul id="navbar">
    <li><a href="index.php">Home</a></li>
    <li><a href="shop.php">Shop</a></li>
    <li><a href="blog.php">Blog</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>
    <li><a class="active" href="signup.php">Sign Up</a></li>
    <hr class="navbar-divider">
    <a href="#" id="close"><i class="far fa-times"></i></a>
    <li><a href="login.php">Login</a></li>

  </ul>
</div>
  </section>
  <br><br><br><br><br>
  <br>
  <br>

<style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
    }

    .container {
      max-width: 700px;
      margin: 0 auto;
      padding: 40px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="password"] {
      width: 100%;
      padding: 8px;
      border-radius: 3px;
      border: 1px solid #ccc;
    }

    .form-group input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #088178;
      color: #088178;
      font-weight: bold;
      border-radius: 3px;
      cursor: pointer;
    }

    .form-group input[type="submit"]:hover {
     background-color: #088178;
  color: #ffffff;
    }

    .form-group .forgot-password {
      text-align: center;
      margin-top: 10px;
    }

    .form-group .forgot-password a{
      color: #088178;
      
    }
    .form-group .spacer {
  display: inline-block;
  width: 267px; /* Adjust the width to add the desired space */
}
.form-group .spacer1 {
  display: inline-block;
  width: 10px; /* Adjust the width to add the desired space */
}
.form-group .spacer2 {
  display: inline-block;
  width: 300px; /* Adjust the width to add the desired space */
}

   .form-group .log-in-phone {
      text-align: center;
      margin-top: 20px;
    }

    .form-group .log-in-phone a {
      color: #999;
      text-decoration: none;
      font-weight: bold;
    }

    .form-group .separator {
      text-align: center;
      margin-top: 20px;
      position: relative;
    }

    .form-group .separator::before,
    .form-group .separator::after {
      content: "";
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      height: 1px;
      background-color: #ccc;
    }

     .form-group.separator {
    text-align: center;
    margin-top: 10px;
    margin-bottom: 10px;
    position: relative;
    color: black;
  }

  .form-group.separator::before,
  .form-group.separator::after {
    content: "";
    position: absolute;
    top: 50%;
    width: 45%;
    height: 1px;
    border: 1px solid lightgrey;
  }

  .form-group.separator::before {
    right: 5%;
  }

  .form-group.separator::after {
    left: 2%;
  }

  .form-group.separator span {
    position: relative;
    background-color: #fff;
    padding: 0 10px;
  }

    .form-group .social-logos {
      text-align: center;
      margin-top: 20px;
    }

    .form-group .social-logos img {
      width: 30px;
      margin: 0 5px;
      cursor: pointer;
    }

    .form-group .sign-up {
      text-align: center;
      margin-top: 20px;
    }

    .form-group .sign-up a {
      color: #999;
      text-decoration: none;
      font-weight: bold;
    }
    .form-group.social-logos {
    display: flex;
    align-items: center;
  }

  .form-group.social-logos img {
    width: 30px;
    height: 30px;
    margin-right: 10px;
  }

  .shop-form input[type="submit"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #088178;
      color: #088178;
      font-weight: bold;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>

<body>
<div class="shop-form container" >
  <h2>Sign Up Successful</h2>
  <h2>Go to Shopping?</h2>
  <br>
  <form id="shopForm" action="shop.php" method="get">
    <input type="submit" value="shop">
  </form>
</div>


<br>
<br>
<br>
<br>

  </section>
  <footer class="section-p1">
    <div class="col">
      <img class="logo" src="images/logo1.png" alt="">
      <h4>Contact</h4>
      <p><strong>Address: </strong> Canetown subd. Victoris City</p>
      <p><strong>Phone:</strong> 094602345678</p>
      <p><strong>Hours:</strong> 10:00 - 10:00, Mon - Sat</p>
      <div class="follow">
        <h4>Follow us</h4>
        <div class="icon">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-pinterest-p"></i>
          <i class="fab fa-youtube"></i>
        </div>
      </div>
    </div>

    <div class="col">
      <h4>About</h4>
      <a href="#">About us</a>
      <a href="#">Delivery Information</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms & Condition</a>
      <a href="#">Contact Us</a>
    </div>
    <div class="col">
      <h4>My Account</h4>
      <a href="#">Sign IN</a>
      <a href="#">View Cart</a>
      <a href="#">My Wishlist</a>
      <a href="#">Track My Order</a>
      <a href="#">Help</a>
    </div>
    <div class="col install">
      <h4>Install App</h4>
      <p>From App Store or Google Play</p>
      <div class="row">
        <img class="logos" src="images/apse.png" alt="">
        <img class="logos" src="images/sto.png" alt="">
      </div>
<p>Secured Payment Gateways</p>
       <div class="row">
      <img  class="logoss" src="images/paypal.png" alt="">
      </div>
    </div>
    <div class="copyright">
      <p>2023, Mark Dennis V. Manangan -HTML CSS JS Ecomerce Website</p>
    </div> 
      </footer>


  <script type="script.js"></script>
 </body>