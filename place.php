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
	<br><br><br><br><br><br><br><br><br>
	
	<section id="thank-you">
		<div class="container">
			<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank You for Your Purchase!</h1>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We appreciate your business and hope you enjoy your new items.</p>
		</div>
		<div class="pro"onclick="window.location.href='shop.php';">
				<input  type="submit" value=" Continue Shopping" class="btn">
</div>
	</section>

</body>
</php>