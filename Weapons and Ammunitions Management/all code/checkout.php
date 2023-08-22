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
    <link href="dealer_image/favicon.ico" rel="shortcut icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

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
            <h4>Your cart</h4>
            <div class="site-pagination">
                <a href="dealer_welcome.php">Home</a> /
                <a href="cart.php">Your Cart</a> /
                <a href="">Checkout</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- checkout section  -->
    <section class="checkout-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1">
                    <?php
                    error_reporting(E_ALL ^ E_NOTICE);
                    $user = $_SESSION["user_id"];
                    $query = "SELECT * FROM  users WHERE id='$user'";
                    $res = mysqli_query($conn, $query);
                    $row = mysqli_fetch_array($res);
                    $uid = $row["id"];
                    /*function getid($table)
                    {
                        global $conn;
                        $query = "SELECT WID FROM $table AS C , manufacturing_company_weapon AS mcw, weapons_images as WI,weapons as W WHERE C.prod_name = W.WNAME and W.WID=mcw.WID and mcw.WID=WI.WID and C.user_id= $uid";
                        return $query_run = mysqli_query($conn, $query);
                    }
                    $category = getid("carts");
                    $name = $item['WNAME'];*/
                    if (isset($_REQUEST["submit"])) {
                        $Name = mysqli_real_escape_string($conn, $_POST["Name"]);
                        //echo $wname;
                        $Address = mysqli_real_escape_string($conn, $_POST["Address"]);
                        //echo $wcategory;
                        $Country = mysqli_real_escape_string($conn, $_POST["Country"]);
                        //echo $wsub_category;
                        $State = mysqli_real_escape_string($conn, $_POST["State"]);
                        //echo $date;
                        $Phone_no = mysqli_real_escape_string($conn, $_POST["Phone_no"]);
                        //echo $quantity;
                        $sql = "INSERT INTO orders (dealer_id,dealer_name,address, country, state,phone_no) VALUES ('$uid','$Name','$Address','$Country','$State','$Phone_no')";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                            $_POST["Name"] = "";
                            $_POST["Address"] = "";
                            $_POST["Country"] = "";
                            $_POST["State"] = "";
                            $_POST["Phone_no"] = "";
                            echo "<script>alert('Order Details Successfully Uploaded');</script>";
                        } else {
                            echo "<script>alert('Order Details Failed to Upload');</script>";
                        }
                    }
                    ?>
                    <form class="checkout-form" action="" method="post">
                        <div class="cf-title">Billing Information</div>
                        <!-- <div class="row">
                            <div class="col-md-7">
                                <p>*Billing Information</p>
                            </div>
                            <div class="col-md-5">
                                <div class="cf-radio-btns address-rb">
                                    <div class="cfr-item">
                                        <input type="radio" name="pm" id="one">
                                        <label for="one">Use my regular address</label>
                                    </div>
                                    <div class="cfr-item">
                                        <input type="radio" name="pm" id="two">
                                        <label for="two">Use a different address</label>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row address-inputs">
                            <div class="col-md-12">
                                <input type="text" name="Name" placeholder="Name" value="<?php echo $_POST["Name"]; ?>">
                                <input type="text" name="Address" placeholder="Address" value="<?php echo $_POST["Address"]; ?>">
                                <input type="text" name="Country" placeholder="Country" value="<?php echo $_POST["Country"]; ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="State" placeholder="State" value="<?php echo $_POST["State"]; ?>">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="Phone_no" placeholder="Phone no." value="<?php echo $_POST["Phone_no"]; ?>">
                            </div>
                        </div>
                        <!-- <div class="cf-title">Delievery Info</div>
                        <div class="row shipping-btns">
                            <div class="col-6">
                                <h4>Standard</h4>
                            </div>
                            <div class="col-6">
                                <div class="cf-radio-btns">
                                    <div class="cfr-item">
                                        <input type="radio" name="shipping" id="ship-1">
                                        <label for="ship-1">Free</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <h4>Next day delievery </h4>
                            </div>
                            <div class="col-6">
                                <div class="cf-radio-btns">
                                    <div class="cfr-item">
                                        <input type="radio" name="shipping" id="ship-2">
                                        <label for="ship-2">$3.45</label>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="cf-title">Payment</div>
                        <ul class="payment-list">
                            <li>Paypal<a href="#"><img src="img/paypal.png" alt=""></a></li>
                            <li>Credit / Debit card<a href="#"><img src="img/mastercart.png" alt=""></a></li>
                            <li>Pay when you get the package</li>
                        </ul> -->
                        <button type="submit" class="site-btn submit-order-btn" name="submit">Place Order</button>
                    </form>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="checkout-cart">
                        <h3>Your Cart</h3>
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
                            $query = "SELECT WNAME,PRICE,prod_qty,IMG_NAME1 FROM $table AS C , manufacturing_company_weapon AS mcw, weapons_images as WI,weapons as W WHERE C.prod_name = W.WNAME and W.WID=mcw.WID and mcw.WID=WI.WID and C.user_id= $uid";
                            return $query_run = mysqli_query($conn, $query);
                        }
                        $category = getAll("carts");
                        $name = $item['WNAME'];
                        $total = 0;
                        if (mysqli_num_rows($category) > 0) {
                            while ($item = mysqli_fetch_array($category))
                            //foreach($category as $item)
                            {
                                $total = $total + ((int)$item['PRICE'] * (int)$item['prod_qty']);

                        ?>
                                <ul class="product-list">
                                    <li>
                                        <div class="pl-thumb"><img src="weapons_images/<?= $item['IMG_NAME1']; ?>" alt="<?= $item['WNAME']; ?>"></div>
                                        <h6><?= $item['WNAME']; ?></h6>
                                        <p>$<?= $item['PRICE']; ?></p>
                                        <p>Quantity :<?= $item['prod_qty']; ?></p>
                                    </li>
                                </ul>

                        <?php
                            }
                        } else {
                            echo "No weapons found";
                        }
                        ?>
                        <ul class="price-list">
                            <li>Total<span>$<?php echo $total; ?></span></li>
                            <li>Shipping<span>free</span></li>
                            <li class="total">Total<span>$<?php echo $total; ?></span></li>
                        </ul>
                        <!-- <li>
                            <div class="pl-thumb"><img src="img/cart/2.jpg" alt=""></div>
                            <h6>Animal Print Dress</h6>
                            <p>$45.90</p>
                        </li>
                        <ul class="price-list">
                            <li>Total<span>$99.90</span></li>
                            <li>Shipping<span>free</span></li>
                            <li class="total">Total<span>$99.90</span></li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- checkout section end -->

    <!-- Footer section -->
    <section class="footer-section">
        <div class="container">
            <div class="footer-logo text-center">
                <a href="index.html"><img src="./img/logo-light.png" alt=""></a>
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