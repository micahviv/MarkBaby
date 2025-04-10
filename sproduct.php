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
 				<li><a class="active" href="shop.php">Shop</a></li>
 				<li><a href="blog.php">Blog</a></li>
 				<li><a href="about.php">About</a></li>
 				<li><a href="contact.php">Contact</a></li>
 				<li id="lg-bag"><a href="cart.php"><i class="far fa-shopping-bag"></i></a></li>

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
 	
 	<section id="prodetails" class="section-p1">

 		<div class="single-pro-image">
 			<img src="images/fe/6.jpg" width="100%" id="MainImg" alt="">

 			<div class="small-img-group">
 				<div class="small-img-col">
 				<img src="images/fe/1.jpg" width="100%" class="small-img" alt="">
 			</div>
 			<div class="small-img-col">
 				<img src="images/fe/2.jpg" width="100%" class="small-img" alt="">
 			</div>
 			<div class="small-img-col">
 				<img src="images/fe/3.jpg" width="100%" class="small-img" alt="">
 			</div>
 			<div class="small-img-col">
 				<img src="images/fe/4.jpg" width="100%" class="small-img" alt="">
 			</div>
 		</div>
 		</div>
 		<div class="single-pro-details">

 			<br><br>
 			<h6>Over Sized / T-Shirt</h6>
 			<h4>Men's Fashion T Shirt</h4>
 			<h2>₱139.00</h2>
 			<select>
 				<option>Select Size</option>
 				<option>XL</option>
 				<option>XXL</option>
 				<option>Small</option>
 				<option>Large</option>
 			</select>
 			<input type="number" value="1">
 			<br><br>
 			<div class="pro">
  <button class="normal" onclick="window.location.href='cart.php';">Add To Cart</button>
  <button class="normal" onclick="window.location.href='check.php';">Buy Now</button>
</div>
 			<h4>Product Details</h4>
 			<span>A T-shirt (also spelled tee-shirt or tee shirt), or tee for short, is a style of fabric shirt named after the T shape of its body and sleeves. Traditionally, it has short sleeves and a round neckline, known as a crew neck, which lacks a collar.</span>
 		</div>
 	</section>

 	<section id="product1" class="section-p1">
 		<h2>Featured Products</h2>
 		<p>Summer Collection New Modern Design</p>
 		<div class="pro-container">
 			<div class="pro">
 				<img src="images/new/4.jpg" alt="">
 				<div class="des">
 					<span>Urban</span>
 					<h5>MegaTee</h5>
 					<div class="star">
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 				</div>
 				<h4>$80</h4>
 			</div>
 			<a href="#"><i class="fal fa-shopping-cart cart"></i></a>
 		</div>
 		<div class="pro">
 				<img src="images/fe/4.jpg" alt="">
 				<div class="des">
 					<span>Urban</span>
 					<h5>OversizeObsession</h5>
 					<div class="star">
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 				</div>
 				<h4>$80</h4>
 			</div>
 			<a href="#"><i class="fal fa-shopping-cart cart"></i></a>
 		</div>
 		<div class="pro">
 				<img src="images/new/5.jpg" alt="">
 				<div class="des">
 					<span>Urban</span>
 					<h5>MaxComfort</h5>
 					<div class="star">
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 				</div>
 				<h4>$80</h4>
 			</div>
 			<a href="#"><i class="fal fa-shopping-cart cart"></i></a>
 		</div>
 		<div class="pro">
 				<img src="images/fe/1.jpg" alt="">
 				<div class="des">
 					<span>Urban</span>
 					<h5>RelaxedFit</h5>
 					<div class="star">
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 				</div>
 				<h4>$80</h4>
 			</div>
 			<a href="#"><i class="fal fa-shopping-cart cart"></i></a>
 		</div>
 		<div class="pro">
 				<img src="images/new/6.jpg" alt="">
 				<div class="des">
 					<span>Urban</span>
 					<h5>GenerousGlam</h5>
 					<div class="star">
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 				</div>
 				<h4>$80</h4>
 			</div>
 			<a href="#"><i class="fal fa-shopping-cart cart"></i></a>
 		</div>
 		<div class="pro">
 				<img src="images/new/3.jpg" alt="">
 				<div class="des">
 					<span>Urban</span>
 					<h5>ChillChic</h5>
 					<div class="star">
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 				</div>
 				<h4>$80</h4>
 			</div>
 			<a href="#"><i class="fal fa-shopping-cart cart"></i></a>
 		</div>
 	</section>
 	<section id="reviews" class="section-reviews">
 		<section>
  <h2>Customer Reviews</h2>
 <img src="images/jus.jpg" alt="" style="width: 50px; height: 50px;margin-left: 70px; border-radius: 100%;"profile-image">
  <div class="review">
    <div class="user-profile">
    </div>
    <div class="review-details">
      <div class="user">John Doe</div>
      <div class="rating">
        <i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
      </div>
      <p>2023-11-04 17:03 | Variation: Yellow,Large</p>
      <br>
      <div class="comment">
        <p>Great quality shirt. Fits perfectly and looks stylish.</p>
        <br>
         <p> Apperance:  Good</p>
         <br>
  <p>Colour: good</p>
  <br>
  <p>Material Quality:  Good</p>
  <br>
  <div class="profile-images">
  <img src="images/fe/1.jpg" alt="" style="width: 50px; height: 50px;">
  <img src="images/fe/1.jpg" alt="" style="width: 50px; height: 50px;">
  <img src="images/fe/1.jpg" alt="" style="width: 50px; height: 50px;">
</div>
 </div>
    </div>
  </div>
</section>
<img src="images/justine.jpg" alt="" style="width: 50px; height: 50px;margin-left: 70px; border-radius: 100%;"profile-image">
  <div class="review">
  <div class="review">
    <div class="user-profile">
    </div>
    <div class="review-details">
      <div class="user">Jane Smith</div>
      <div class="rating">
        <i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
 					<i class="fas fa-star"></i>
      </div>
      <p>2023-11-04 17:03 | Variation: Yellow,Large</p>
      <br>
      <div class="comment">
        <p>Love this shirt! The material is soft and comfortable.</p>
        <br>
         <p> Apperance:  Good</p>
         <br>
  <p>Colour: good</p>
  <br>
  <p>Material Quality:  Good</p>
  <br>
  <div class="profile-images">
  <img src="images/fe/1.jpg" alt="" style="width: 50px; height: 50px;">
  <img src="images/fe/1.jpg" alt="" style="width: 50px; height: 50px;">
  <img src="images/fe/1.jpg" alt="" style="width: 50px; height: 50px;">
</div>
      </div>
    </div>
  </div>

  <!-- Add more review sections as needed -->

 
</section>
<input type="text" id="review-input" placeholder="Write your review...">
<button class="btnv" onclick="submitReview()">Submit Review</button>
 	<section id="newsletter" class="section-p1 section-m1">
 		<div class="newstext">
 			<h4>Sign Up For Newsletter</h4>
 			<p>Get E-mail updateds about our latest shop and <span>special offers</span></p>
 		</div>
 		<div class="form">
 			<input type="text" placeholder="   Your email address">
 			<button class="normal">Sign Up</button>
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
 			<script>
 				var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
          MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
          MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
          MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
          MainImg.src = smallimg[3].src;
        }
 			</script>

 	<script type="script.js"></script>
  <script>
  function submitReview() {
    var reviewText = document.getElementById("review-input").value;
    alert("Review submitted: " + reviewText);
  }
</script>
 </body>
</php>
