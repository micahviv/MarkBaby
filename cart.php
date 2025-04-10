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
		<div class="pro" onclick="window.location.href='index.php';">
			<a href="#"><img src="images/logo1.png" class="logo" alt=""></a>
		</div>
		<div>
			<ul id="navbar">
				<li><a href="index.php">Home</a></li>
				<li><a href="shop.php">Shop</a></li>
				<li><a href="blog.php">Blog</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li id="lg-bag"><a class="active" href="cart.php"><i class="far fa-shopping-bag"></i></a></li>

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
	<style>
		ul {
			list-style: none;
			margin: 0;
			padding: 0;
		}
		li a .m {
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
	</style>

	<section id="cart" class="section-p1">
		<br><br><br>
		<table width="100%">
			<thead>
				<tr>
					<td>Remove</td>
					<td>Image</td>
					<td>Product</td>
					<td>Price</td>
					<td>Quantity</td>
					<td>Subtotal</td>
				</tr>
			</thead>
		</table>

		<table>
			<tbody>
				<tr>
					<td><i class="far fa-times-circle"></i></td>
					<td><img src="images/fe/2.jpg" alt=""></td>
					<td>Cartoon Astronaut T-Shirts</td>
					<td>₱118.19</td>
					<td><input type="number" value="1"></td>
					<td>&nbsp;&nbsp;&nbsp;₱118.9&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" class="che"></td>
				</tr>
				<!-- Repeat similar rows for other products -->
			</tbody>
		</table>
	</section>

	<div class="pro" onclick="window.location.href='check.php';">
		<input type="submit" value=" Checkout" class="btn">
	</div>

	<footer class="section-p1">
		<!-- Your footer content goes here -->
	</footer>

	<script src="script.js"></script>
</body>
</php>
