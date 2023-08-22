<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");

    if (isset($_POST['scope'])) {
        $scope = $_POST['scope'];
        switch ($scope) {
            case "add":
                $prod_name = $_POST['prod_name'];
                $prod_qty = $_POST['prod_qty'];

                $user = $_SESSION["user_id"];
                $query = "SELECT * FROM  users WHERE id='$user'";
                $res = mysqli_query($conn, $query);
                $row = mysqli_fetch_array($res);
                $uid = $row["id"];

                $insert_query = "INSERT INTO carts(user_id, prod_name, prod_qty) VALUES ('$uid','$prod_name','$prod_qty')";
                $insert_query_run = mysqli_query($conn, $insert_query);

                if ($insert_query_run) {
                    echo 201;
                } else {
                    echo 500;
                }


                break;

            default:
                echo 500;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Divisima | eCommerce Template</title>
    <meta charset="UTF-8">
    <meta name="description" content=" Divisima | eCommerce Template">
    <meta name="keywords" content="divisima, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="dealer_icon/favicon.ico" rel="shortcut icon" />
    <script src="https://kit.fontawesome.com/83024f6411.js" crossorigin="anonymous"></script>

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
                                <a href="#">Shopping</a>
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
                <a href="">Your cart</a>
            </div>
        </div>
    </div>
    <!-- Page info end -->


    <!-- cart section end -->
    <section class="cart-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table">
                        <h3>Your Cart</h3>
                        <div class="cart-table-warp">
                            <table>
                                <thead>
                                    <tr>
                                        <th class="product-th">Weapon Image and Name</th>
                                        <!-- <th class="wpn-th">Weapon Name</th> -->
                                        <th class="quy-th">Quantity</th>
                                        <!-- <th class="size-th">SizeSize</th> -->
                                        <!-- <th class="total-th">Price</th> -->
                                        <th class="size-th">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                    if (isset($_POST['delete_weapon_btn'])) {
                                        $weapon_name = mysqli_real_escape_string($conn, $_POST['weapon_name']);

                                        $delete_query = "DELETE from carts WHERE prod_name = '$weapon_name'";
                                        $delete_query_run = mysqli_query($conn, $delete_query);
                                        if ($delete_query_run) {
                                            echo "<script>alert('Weapon Deletion is Successful');</script>";
                                        } else {
                                            echo "<script>alert('Weapon Deletion Failed');</script>";
                                        }
                                    }
                                    $category = getAll("carts");
                                    if (mysqli_num_rows($category) > 0) {
                                        while ($item = mysqli_fetch_array($category))
                                        //foreach($category as $item)
                                        {
                                            $total = $total + ((int)$item['PRICE'] * (int)$item['prod_qty']);
                                            /*$price_query = "SELECT PRICE,PRICE*prod_qty AS new_price from carts AS C, weapons AS W, manufacturing_company_weapon AS mcw WHERE C.prod_name = W.WNAME and W.WID = mcw.WID";
                                            $price_query_run = mysqli_query($conn, $price_query);
                                            $item2 = mysqli_fetch_array($price_query_run);*/
                                    ?>
                                            <tr>
                                                <td class="product-col">
                                                    <img src="weapons_images/<?= $item['IMG_NAME1']; ?>" alt="<?= $item['WNAME']; ?>">
                                                    <div class="pc-title">
                                                        <h4><?= $item['WNAME']; ?></h4>
                                                        <p>$<?= $item['PRICE']; ?></p>
                                                    </div>
                                                </td>
                                                <td class="quy-col">
                                                    <p><?= $item['prod_qty']; ?></p>
                                                    <!-- <div class="quantity">
                                                        <div class="pro-qty">
                                                            
                                                            <input type="number" value="">
                                                        </div>
                                                    </div> -->
                                                </td>
                                                <!-- <td class="size-col">
                                                    <h4>Size M</h4>
                                                </td> -->
                                                <!-- <td class="total-col">
                                                    <h4>$/*= $item2['new_price']; ?>*/</h4>
                                                </td> -->
                                                <form action="" method="POST">
                                                    <td class="size-col">
                                                        <input type="hidden" name="weapon_name" value="<?= $item['WNAME']; ?>">
                                                        <button type="submit" class="site-btn" name="delete_weapon_btn">Remove</button>
                                                    </td>
                                                </form>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "No weapons found";
                                    }
                                    ?>
                                    <!-- <tr>
                                        <td class="product-col">
                                            <img src="img/cart/2.jpg" alt="">
                                            <div class="pc-title">
                                                <h4>Ruffle Pink Top</h4>
                                                <p>$45.90</p>
                                            </div>
                                        </td>
                                        <td class="quy-col">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-col">
                                            <h4>Size M</h4>
                                        </td>
                                        <td class="total-col">
                                            <h4>$45.90</h4>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-col">
                                            <img src="img/cart/3.jpg" alt="">
                                            <div class="pc-title">
                                                <h4>Skinny Jeans</h4>
                                                <p>$45.90</p>
                                            </div>
                                        </td>
                                        <td class="quy-col">
                                            <div class="quantity">
                                                <div class="pro-qty">
                                                    <input type="text" value="1">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="size-col">
                                            <h4>Size M</h4>
                                        </td>
                                        <td class="total-col">
                                            <h4>$45.90</h4>
                                        </td>
                                    </tr> -->
                                </tbody>
                            </table>
                        </div>
                        <div class="total-cost">
                            <h6>Total <span>$<?php echo $total; ?></span></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 card-right">
                    <!-- <form class="promo-code-form">
                        <input type="text" placeholder="Enter promo code">
                        <button>Submit</button>
                    </form> -->
                    <a href="checkout.php" class="site-btn">Proceed to checkout</a>
                    <a href="dealer_welcome.php" class="site-btn sb-dark">Continue shopping</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cart section end -->

    <!-- Related product section -->
    <!-- <section class="related-product-section">
        <div class="container">
            <div class="section-title text-uppercase">
                <h2>Continue Shopping</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
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
                </div>
                <div class="col-lg-3 col-sm-6">
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
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
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
                            <p>Flamboyant Pink Top </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
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
            </div>
        </div>
    </section> -->
    <!-- Related product section end -->



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