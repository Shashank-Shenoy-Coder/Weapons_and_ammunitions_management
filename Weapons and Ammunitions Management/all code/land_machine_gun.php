<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

include 'config.php';
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Divisima | eCommerce Template</title>
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
                        <a href="./index.html" class="site-logo">
                            <h4>Weapons and Ammunitions Management</h4>
                        </a>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <!-- <form class="header-search-form">
							<input type="text" placeholder="Search on divisima ....">
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
									<i class="flaticon-bag"></i>
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
                    <li><a href="dealer_welcome.php">Home</a></li>
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


    <!-- Page info -->
    <div class="page-top-info">
        <div class="container">
            <h4>CAtegory Page</h4>
            <div class="site-pagination">
                <a href="dealer_welcome.php">Home</a> /
                <a href="land.php">Land Weapons</a> /
                <a href="land_pistols.php">Machine Gun</a> /
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- Category section -->
    <section class="category-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="filter-widget">
                        <h2 class="fw-title">Categories</h2>
                        <ul class="category-menu">
                            <li><a href="#">Landforce Weapons</a>
                                <ul class="sub-menu">
                                    <li><a href="land.php">All <span>(2)</span></a></li>
                                    <li><a href="land_pistols.php">Pistols<span>(56)</span></a></li>
                                    <li><a href="land_machine_gun.php">Machine Gun<span>(56)</span></a></li>
                                    <!-- <li><a href="#">Prom Dresses<span>(36)</span></a></li>
									<li><a href="#">Little Black Dresses <span>(27)</span></a></li>
									<li><a href="#">Mini Dresses<span>(19)</span></a></li> -->
                                </ul>
                            </li>
                            <!-- <li><a href="#">Man Wear</a>
								<ul class="sub-menu">
									<li><a href="#">Midi Dresses <span>(2)</span></a></li>
									<li><a href="#">Maxi Dresses<span>(56)</span></a></li>
									<li><a href="#">Prom Dresses<span>(36)</span></a></li>
								</ul></li>
							<li><a href="#">Children</a></li>
							<li><a href="#">Bags & Purses</a></li>
							<li><a href="#">Eyewear</a></li>
							<li><a href="#">Footwear</a></li> -->
                        </ul>
                    </div>
                    <!-- <div class="filter-widget mb-0">
						<h2 class="fw-title">refine by</h2>
						<div class="price-range-wrap">
							<h4>Price</h4>
                            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="10" data-max="270">
								<div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;">
								</span>
								<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;">
								</span>
							</div>
							<div class="range-slider">
                                <div class="price-input">
                                    <input type="text" id="minamount">
                                    <input type="text" id="maxamount">
                                </div>
                            </div>
                        </div>
					</div> -->
                    <!-- <div class="filter-widget mb-0">
						<h2 class="fw-title">color by</h2>
						<div class="fw-color-choose">
							<div class="cs-item">
								<input type="radio" name="cs" id="gray-color">
								<label class="cs-gray" for="gray-color">
									<span>(3)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="orange-color">
								<label class="cs-orange" for="orange-color">
									<span>(25)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="yollow-color">
								<label class="cs-yollow" for="yollow-color">
									<span>(112)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="green-color">
								<label class="cs-green" for="green-color">
									<span>(75)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="purple-color">
								<label class="cs-purple" for="purple-color">
									<span>(9)</span>
								</label>
							</div>
							<div class="cs-item">
								<input type="radio" name="cs" id="blue-color" checked="">
								<label class="cs-blue" for="blue-color">
									<span>(29)</span>
								</label>
							</div>
						</div>
					</div> -->
                    <!-- <div class="filter-widget mb-0">
						<h2 class="fw-title">Size</h2>
						<div class="fw-size-choose">
							<div class="sc-item">
								<input type="radio" name="sc" id="xs-size">
								<label for="xs-size">XS</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="s-size">
								<label for="s-size">S</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="m-size"  checked="">
								<label for="m-size">M</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="l-size">
								<label for="l-size">L</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xl-size">
								<label for="xl-size">XL</label>
							</div>
							<div class="sc-item">
								<input type="radio" name="sc" id="xxl-size">
								<label for="xxl-size">XXL</label>
							</div>
						</div>
					</div> -->
                    <!-- <div class="filter-widget">
						<h2 class="fw-title">Brand</h2>
						<ul class="category-menu">
							<li><a href="#">Abercrombie & Fitch <span>(2)</span></a></li>
							<li><a href="#">Asos<span>(56)</span></a></li>
							<li><a href="#">Bershka<span>(36)</span></a></li>
							<li><a href="#">Missguided<span>(27)</span></a></li>
							<li><a href="#">Zara<span>(19)</span></a></li>
						</ul>
					</div> -->
                </div>

                <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
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
                            $query = "SELECT WNAME,PRICE,IMG_NAME1 FROM $table AS W , manufacturing_company_weapon AS mcw, weapons_images as WI WHERE W.WID=mcw.WID and mcw.WID=WI.WID and (W.WSUBCATEGORY = 'MACHINE GUN')";
                            return $query_run = mysqli_query($conn, $query);
                        }
                        $category = getAll("weapons");
                        if (mysqli_num_rows($category) > 0) {
                            while ($item = mysqli_fetch_array($category))
                            //foreach($category as $item)
                            {
                        ?>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <!-- <div class="tag-sale">ON SALE</div> -->
                                            <a href="product_view.php?product=<?= $item['WNAME']; ?>"><img src="weapons_images/<?= $item['IMG_NAME1']; ?>" alt="<?= $item['WNAME']; ?>"></a>
                                            <div class="pi-links">
                                                <!-- <a href="#" class="add-card"><img src="dealer_icon/bag.png" alt=""></i><span>ADD TO CART</span></a> -->
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

                        <!-- <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="./img/product/7.jpg" alt="">
                                    <div class="pi-links">
                                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6>$35,00</h6>
                                    <p>Flamboyant Pink Top</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="./img/product/8.jpg" alt="">
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
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="./img/product/10.jpg" alt="">
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
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="./img/product/11.jpg" alt="">
                                    <div class="pi-links">
                                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6>$35,00</h6>
                                    <p>Flamboyant Pink Top</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="./img/product/12.jpg" alt="">
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
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="./img/product/5.jpg" alt="">
                                    <div class="pi-links">
                                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6>$35,00</h6>
                                    <p>Flamboyant Pink Top</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="./img/product/9.jpg" alt="">
                                    <div class="pi-links">
                                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6>$35,00</h6>
                                    <p>Flamboyant Pink Top</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
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
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <div class="tag-new">new</div>
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
                        </div>
                        <div class="col-lg-4 col-sm-6">
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
                        </div>
                        <div class="col-lg-4 col-sm-6">
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
                        </div>
                        <div class="text-center w-100 pt-3">
                            <button class="site-btn sb-line sb-dark">LOAD MORE</button>
                        </div> -->
                        
                    </div> <!-- Closing div of div class = "row" -->
                </div>
            </div>
        </div>
    </section>
    <!-- Category section end -->


    <!-- Footer section -->
    <section class="footer-section">
        <div class="container">
            <div class="footer-logo text-center">
                <a href="index.html"><img src="./img/logo-light.png" alt=""></a>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-widget about-widget">
                        <h2>About</h2>
                        <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                        <img src="img/cards.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3">
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
                </div>
                <div class="col-lg-3">
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
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget contact-widget">
                        <h2>Questions</h2>
                        <div class="con-info">
                            <span>C.</span>
                            <p>Your Company Ltd </p>
                        </div>
                        <div class="con-info">
                            <span>B.</span>
                            <p>1481 Creekside Lane Avila Beach, CA 93424, P.O. BOX 68 </p>
                        </div>
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
            </div>
        </div>
    </section>
    <!-- Footer section end -->



    <!-- Footer section -->
    <section class="footer-section">
        <div class="container">
            <div class="footer-logo text-center">
                <a href="home.html"><img src="./img/logo-light.png" alt=""></a>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget about-widget">
                        <h2>About</h2>
                        <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
                        <img src="img/cards.png" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
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
                </div>
                <div class="col-lg-3 col-sm-6">
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
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget contact-widget">
                        <h2>Questions</h2>
                        <div class="con-info">
                            <span>C.</span>
                            <p>Your Company Ltd </p>
                        </div>
                        <div class="con-info">
                            <span>B.</span>
                            <p>1481 Creekside Lane Avila Beach, CA 93424, P.O. BOX 68 </p>
                        </div>
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