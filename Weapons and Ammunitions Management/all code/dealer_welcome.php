<?php

session_start();

if (!isset($_SESSION["user_id"])) {
	header("Location: index.php");
}

include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Weapons And Ammunitions Management</title>
	<meta charset="UTF-8">
	<meta name="description" content=" Divisima | eCommerce Template">
	<meta name="keywords" content="divisima, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="dealer_icon/favicon.ico" rel="shortcut icon" />

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="dealer_css/bootstrap.min.css" />
	<link rel="stylesheet" href="dealer_css/font-awesome.min.css" />
	<link rel="stylesheet" href="dealer_css/flaticon.css" />
	<link rel="stylesheet" href="dealer_css/slicknav.min.css" />
	<link rel="stylesheet" href="dealer_css/jquery-ui.min.css" />
	<link rel="stylesheet" href="dealer_css/owl.carousel.min.css" />
	<link rel="stylesheet" href="dealer_css/animate.css" />
	<link rel="stylesheet" href="dealer_css/style.css" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript">
		function preventBack() {
			window.history.forward()
		};
		setTimeout("preventBack()", 0);
		window.onunload = function() {
			null;
		}
	</script>

</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 text-center text-lg-left">
						<!-- logo -->
						<a href="#" class="site-logo">
							<h4>Weapons and Ammunitions Management</h4>
						</a>
					</div>
					<div class="col-xl-6 col-lg-5">
						<!-- <form class="header-search-form">
							<input type="text" placeholder="Search Weapons ....">
							<button><i class="flaticon-search"></i></button>
						</form> -->
					</div>
					<div class="col-xl-4 col-lg-5">
						<div class="user-panel">
							<!-- <div class="up-item">
								<i class="flaticon-profile"></i>
								<a href="#">Sign</a> In or <a href="#">Create Account</a>
							</div> -->
							<div class="up-item">
								<!-- <div class="shopping-card">
									
									<span>0</span>
								</div> -->

								<a href="cart.php">Shopping</a>
								<span class="material-symbols-outlined">
									shopping_cart_checkout
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="main-navbar">
			<div class="container">
				<!-- menu -->
				<ul class="main-menu">
					<li><a href="#">Home</a></li>
					<li><a href="land.php">Land</a></li>
					<li><a href="air.php">Air</a></li>
					<li><a href="navy.php">Navy</a></li>
					<li><a href="logout.php">Logout</a></li>
					<!-- <li><a href="#">Women</a></li>
					<li><a href="#">Men</a></li>
					<li><a href="#">Jewelry
						<span class="new">New</span>
					</a></li> -->
					<!-- <li><a href="#">Land</a>
						<ul class="sub-menu">
							<li><a href="category.html">Pistols</a></li>
							<li><a href="#">Machine Gun</a></li> -->
					<!-- <li><a href="#">Formal Shoes</a></li>
							<li><a href="#">Boots</a></li>
							<li><a href="#">Flip Flops</a></li> -->
					<!-- </ul>
					</li>
					<li><a href="#">Air</a>
						<ul class="sub-menu">
							<li><a href="category.html">Air Launched Bombs</a></li>
							<li><a href="#">Air Launched Rockets</a></li> -->
					<!-- <li><a href="#">Formal Shoes</a></li>
							<li><a href="#">Boots</a></li>
							<li><a href="#">Flip Flops</a></li> -->
					<!-- </ul>
					</li>
					<li><a href="#">Navy</a>
						<ul class="sub-menu">
							<li><a href="./product.html">Missiles</a></li>
							<li><a href="#">Torpedoes</a></li> -->
					<!-- <li><a href="#">Cart Page</a></li>
							<li><a href="#">Checkout Page</a></li>
							<li><a href="#">Contact Page</a></li> -->
					<!-- </ul>
					</li> -->
					<!-- <li><a href="#">Blog</a></li> -->
				</ul>
			</div>
		</nav>
	</header>
	<!-- Header section end -->

	<!-- Hero section -->
	<section class="hero-section">

		<?php
		include 'config.php';
		error_reporting(E_ERROR | E_PARSE);
		function getAllProducts($tables)
		{
			global $conn;
			$querys = "SELECT WNAME,WDESC,PRICE,IMG_NAME1 FROM $tables AS W , manufacturing_company_weapon AS mcw, weapons_images as WI, pistols P WHERE W.WID=mcw.WID and mcw.WID=WI.WID and WI.WID= P.WID LIMIT 2";
			return $querys_run = mysqli_query($conn, $querys);
		}
		$category = getAllProducts("weapons");
		if (mysqli_num_rows($category) > 0) {
			$row = mysqli_fetch_row($category);
			/*while ($item = mysqli_fetch_array($category))
		//foreach($category as $item)
		{
			/*$fulldata[] = $item[0];
			$fname = $fulldata["WNAME"];
			echo $item["WNAME"];*/
		?>
		<?php
		}
		?>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="weapons_images/<?= $row[3]; ?>">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">

							<span>New Arrivals</span>
							<h2><?= $row[0]; ?></h2>
							<p><?= $row[1]; ?></p>
							<a href="product_view.php?product=<?= $row[0]; ?>" class="site-btn sb-line">DISCOVER</a>
							<!-- <a href="#" class="site-btn sb-white">ADD TO CART</a> -->
						</div>
					</div>
					<div class="offer-card text-white">
						<span>From</span>
						<h2><?= $row[2]; ?></h2>
						<h3>Rs.</h3>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
			<?php
			function getAllProducts2($tables)
			{
				global $conn;
				$querys = "SELECT WNAME,WDESC,PRICE,IMG_NAME1 FROM $tables AS W , manufacturing_company_weapon AS mcw, weapons_images as WI, machine_gun M WHERE W.WID=mcw.WID and mcw.WID=WI.WID and WI.WID= M.WID and WCATEGORY='Land'";
				return $querys_run = mysqli_query($conn, $querys);
			}
			$category2 = getAllProducts2("weapons");
			if (mysqli_num_rows($category2) > 0) {
				$row2 = mysqli_fetch_row($category2);
				/*while ($item = mysqli_fetch_array($category))
		//foreach($category as $item)
		{
			/*$fulldata[] = $item[0];
			$fname = $fulldata["WNAME"];
			echo $item["WNAME"];*/
			?>
			<?php
			}
			?>
			<div class="hs-item set-bg" data-setbg="weapons_images/<?= $row2[3]; ?>">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2><?= $row2[0]; ?></h2>
							<p><?= $row2[1]; ?></p>
							<a href="product_view.php?product=<?= $row2[0]; ?>" class="site-btn sb-line">DISCOVER</a>
							<!-- <a href="#" class="site-btn sb-white">ADD TO CART</a> -->
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2><?= $row2[2]; ?></h2>
						<h3>Rs.</h3>
						<p>SHOP NOW</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>

	</section>

	<!-- Hero section end -->

	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<br><br><br>
				<h2>TOP SELLING PRODUCTS</h2>
			</div>
			<!-- <ul class="product-filter-menu">
				<li><a href="#">Land</a></li>
				<li><a href="#">Air</a></li>
				<li><a href="#">Navy</a></li>
				 <li><a href="#">JEANS</a></li>
				<li><a href="#">DRESSES</a></li>
				<li><a href="#">COATS</a></li>
				<li><a href="#">JUMPERS</a></li>
				<li><a href="#">LEGGINGS</a></li> 
			</ul> -->
			<div class="row">
				<?php
				include 'config.php';
				error_reporting(E_ERROR | E_PARSE);
				function getAll($table)
				{
					global $conn;
					$user = $_SESSION["user_id"];
					$query = "SELECT * FROM  users WHERE id='$user'";
					$res = mysqli_query($conn, $query);
					$row = mysqli_fetch_array($res);
					$uid = $row["id"];
					$query = "SELECT WNAME,PRICE,IMG_NAME1 FROM $table AS W , manufacturing_company_weapon AS mcw, weapons_images as WI WHERE W.WID=mcw.WID and mcw.WID=WI.WID LIMIT 8";
					return $query_run = mysqli_query($conn, $query);
				}
				$category = getAll("weapons");
				if (mysqli_num_rows($category) > 0) {
					while ($item = mysqli_fetch_array($category))
					//foreach($category as $item)
					{
				?>
						<div class="col-lg-3 col-sm-6">
							<div class="product-item">
								<div class="pi-pic">
								<a href="product_view.php?product=<?= $item['WNAME']; ?>"><img src="weapons_images/<?= $item['IMG_NAME1']; ?>" alt="<?= $item['WNAME']; ?>"></a>
									<div class="pi-links">
										<!-- <a href="#" class="add-card"><img src="dealer_icon/bag.png" alt=""><span>ADD TO CART</span></a> -->
										<!-- <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a> -->
									</div>
								</div>
								<div class="pi-text">
									<h6>$<?= $item['PRICE']; ?></h6>
									<p><?= $item['WNAME']; ?></p>
								</div>
							</div>
						</div>
				<?php
					}
				}
				?>
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<div class="tag-sale">ON SALE</div>
							<img src="./img/product/6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><img src="dealer_icon/bag.png" alt=""><span>ADD TO CART</span></a>
								<!-- <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a> 
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/7.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><img src="dealer_icon/bag.png" alt=""><span>ADD TO CART</span></a>
								<!-- <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a> 
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/8.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><img src="dealer_icon/bag.png" alt=""><span>ADD TO CART</span></a>
								<!-- <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a> 
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/9.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><img src="dealer_icon/bag.png" alt=""><span>ADD TO CART</span></a>
								<!-- <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/10.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><img src="dealer_icon/bag.png" alt=""><span>ADD TO CART</span></a>
								<!-- <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a> 
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Black and White Stripes Dress</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/11.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><img src="dealer_icon/bag.png" alt=""><span>ADD TO CART</span></a>
								<!-- <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a> 
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/12.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><img src="dealer_icon/bag.png" alt=""><span>ADD TO CART</span></a>
								<!-- <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a> 
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				</div> -->

			</div>  <!-- Closing div of class = "row" -->


			<!-- <div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">LOAD MORE</button>
			</div> -->
		</div>
	</section>
	<!-- Product filter section end -->
	<!-- Footer section -->
	<section class="footer-section">
		<div class="container">
			<!-- <div class="footer-logo text-center">
				<a href="#"><img src="dealer_img/logo-light.png" alt=""></a>
			</div> -->
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>About</h2>
						<p>This is the Dealer Side webpage for viewing and purchasing of weapons ranging across different departments of Aerial, Land and Navy.</p>
						<img src="img/cards.png" alt="">
					</div>
				</div>
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<ul>
							<li><a href="">About Us</a></li>
							<li><a href="">Track Orders</a></li>
							<li><a href="">Returns</a></li>
							<li><a href="">Jobs</a></li>
							<li><a href="">Shipping</a></li>
							<li><a href="">Blog</a></li>
						</ul>
						<ul>
							<li><a href="">Partners</a></li>
							<li><a href="">Bloggers</a></li>
							<li><a href="">Support</a></li>
							<li><a href="">Terms of Use</a></li>
							<li><a href="">Press</a></li>
						</ul>
					</div>
				</div> -->
				<!-- <div class="col-lg-3 col-sm-6">
					<div class="footer-widget about-widget">
						<h2>Questions</h2>
						<div class="fw-latest-post-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
								<div class="lp-content">
									<h6>what shoes to wear</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
								<div class="lp-content">
									<h6>trends this year</h6>
									<span>Oct 21, 2018</span>
									<a href="#" class="readmore">Read More</a>
								</div>
							</div>
						</div>
					</div>
				</div> -->
				<div class="col-lg-3 col-sm-6">
					<div class="footer-widget contact-widget">
						<h2>Questions</h2>
						<div class="con-info">
							<span>A.</span>
							<p>Weapons and Ammunitions Management System</p>
						</div>
						<!-- <div class="con-info">
							<span>B.</span>
							<p>1481 Creekside Lane Avila Beach, CA 93424, P.O. BOX 68 </p>
						</div> -->
						<div class="con-info">
							<span>T.</span>
							<p>+53 345 7953 32453</p>
						</div>
						<div class="con-info">
							<span>E.</span>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>

				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				<p class="text-white text-center mt-5">Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

			</div>
		</div>
	</section>
	<!-- Footer section end -->




	<!-- Features section -->
	<!-- <section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!-- Features section end -->


	<!-- letest product section -->
	<!-- <section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>LATEST PRODUCTS</h2>
			</div>
			<div class="product-slider owl-carousel">
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/1.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Flamboyant Pink Top </p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<div class="tag-new">New</div>
						<img src="./img/product/2.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Black and White Stripes Dress</p>
					</div>
				</div>
				<div class="product-item">
					<div class="pi-pic">
						<img src="./img/product/3.jpg" alt="">
						<div class="pi-links">
							<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
							<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
						</div>
					</div>
					<div class="pi-text">
						<h6>$35,00</h6>
						<p>Flamboyant Pink Top </p>
					</div>
				</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/4.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
				<div class="product-item">
						<div class="pi-pic">
							<img src="./img/product/6.jpg" alt="">
							<div class="pi-links">
								<a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
								<a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
							</div>
						</div>
						<div class="pi-text">
							<h6>$35,00</h6>
							<p>Flamboyant Pink Top </p>
						</div>
					</div>
			</div>
		</div>
	</section> -->
	<!-- letest product section end -->






	<!-- Banner section -->
	<!-- <section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="img/banner-bg.jpg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>STRIPED SHIRTS</h2>
				<a href="#" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section> -->
	<!-- <a class="btn bg-gradient-primary mt-4 w-100" href="logout.php" type="button">Logout</a> -->
	<!-- Banner section end  -->




	<!--====== Javascripts & Jquery ======-->
	<script src="dealer_js/jquery-3.2.1.min.js"></script>
	<script src="dealer_js/bootstrap.min.js"></script>
	<script src="dealer_js/jquery.slicknav.min.js"></script>
	<script src="dealer_js/owl.carousel.min.js"></script>
	<script src="dealer_js/jquery.nicescroll.min.js"></script>
	<script src="dealer_js/jquery.zoom.min.js"></script>
	<script src="dealer_js/jquery-ui.min.js"></script>
	<script src="dealer_js/main.js"></script>

</body>

</html>