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
        <li><a  href="about.php">About</a></li>
        <li><a  href="contact.php">Contact</a></li>
        <li id="lg-bag"><a class="active" href="check.php"><i class="far fa-shopping-bag"></i></a></li>
     
        <hr class="navbar-divider">
        <a href="#" id="close"><i class="far fa-times"></i></a>
        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
      </ul>
    </div>
    <div id="mobile">
      <a href="cart.php"><i class="far fa-shopping-bag"></i></a>
      <i id="bar" class="fas fa-outdent"></i>
    </div>
  </section>
  <section id="cart" class="section-p1">
    <br><br><br>
  <table width="100%">         
<style>
  ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  li a .m{
    color: #088178;
  text-decoration: none;
  border: 1px solid #088178;
  padding: 10px;
  border-radius: 5px;

  }
  li a .m:hover {
    background-color: #088178;
    color: #fff;
  }
    body {
            font-family: 'Arial', sans-serif;
        }

        .radio-container {
            display: flex;
            align-items: center;
        }

        .radio-container label {
            margin-right: 10px; /* Add margin for spacing */
        }

        .radio-container input {
            margin-left: 0; /* Reset default margin */
        }
        body {
            font-family: 'Arial', sans-serif;
        }

        .labels-container {
            display: inline-block;
        }

        .labels-container label {
            display: inline-block;
            margin-right: 20px; /* Add margin for spacing */
        }
</style>
<br>
  </div>
  </div>
    <tbody>
      
  </table>
</section>
</style>
<section class="about" id="about">
  <div class="row">
  <div class="col-75">
    <div class="container1">
      <form action="/action_page.php">

           <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="/action_page.php">
      
        <div class="row">
          <div class="col-50">
            <h3>Shipping Address</h3>
            <br></br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Block/ Lot / phase / Street / barangay">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Bacolod">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="Philippines">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="1400">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <br></br>
            <div class="labels-container">
            <input type="radio" id="option1" name="options" value="option1">
        <label for="fname">Credit/Debit Card</label>
    </div>
            <div class="icon-container">
              <img class="ey" src="images/paypal.png">
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Card Holder Name</label>
            <input type="text" id="cname" name="cardname" placeholder="">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="">
              </div>
              <div class="labels-container">
            <input type="radio" id="option1" name="options" value="option1">
        <label for="fname">COD</label>
    </div>
            </div>
          </div>
          
        </div>
      </form>
    </div>
  </div>
  
</div>
 <div class="pro"onclick="window.location.href='place.php';">
        <input  type="submit" value=" Continue to checkout" class="btn">
</div>

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
      <p>2023, Mark Dennis V. Manangan -php CSS JS Ecomerce Website</p>
    </div> 
      </footer>


  <script type="script.js"></script>
 </body>
</php>
