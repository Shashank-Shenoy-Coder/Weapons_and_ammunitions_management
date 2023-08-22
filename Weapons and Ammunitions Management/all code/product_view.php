<?php

session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

if (isset($_GET['product'])) {
    $product_name = $_GET['product'];
?>
    <?php
    include 'config.php';
    error_reporting(E_ERROR | E_PARSE);
    function getWeapons($table, $name)
    {
        global $conn;
        $wsubcat_query = "SELECT WSUBCATEGORY from $table WHERE WNAME = '$name'";
        $run = mysqli_query($conn, $wsubcat_query);
        $row = mysqli_fetch_array($run);
        $wsubcat_product = $row["WSUBCATEGORY"];
        if ($wsubcat_product == "AIR LAUNCHED BOMBS") {
            $query = "SELECT WNAME,PRICE,IMG_NAME1,IMG_NAME2,IMG_NAME3,IMG_NAME4,WDESC,WGHT,LEN,RNGE,MAX_CAPACITY,WCATEGORY FROM $table AS W , manufacturing_company_weapon AS mcw, weapons_images as WI, air_launched_bombs as ALB WHERE W.WID=mcw.WID and mcw.WID=WI.WID and WI.WID = ALB.WID and WNAME='$name' LIMIT 1";
            return $query_run = mysqli_query($conn, $query);
        } else if ($wsubcat_product == "AIR LAUNCHED ROCKETS") {
            $query = "SELECT WNAME,PRICE,IMG_NAME1,IMG_NAME2,IMG_NAME3,IMG_NAME4,WDESC,WGHT,LEN,RNGE,MAX_CAPACITY,WCATEGORY FROM $table AS W , manufacturing_company_weapon AS mcw, weapons_images as WI, air_launched_rockets as ALR WHERE W.WID=mcw.WID and mcw.WID=WI.WID and WI.WID = ALR.WID and WNAME='$name' LIMIT 1";
            return $query_run = mysqli_query($conn, $query);
        } else if ($wsubcat_product == "MISSILES") {
            $query = "SELECT WNAME,PRICE,IMG_NAME1,IMG_NAME2,IMG_NAME3,IMG_NAME4,WDESC,WGHT,LEN,RNGE,MAX_CAPACITY,WCATEGORY FROM $table AS W , manufacturing_company_weapon AS mcw, weapons_images as WI, missiles as M WHERE W.WID=mcw.WID and mcw.WID=WI.WID and WI.WID = M.WID and WNAME='$name' LIMIT 1";
            return $query_run = mysqli_query($conn, $query);
        } else if ($wsubcat_product == "TORPEDOES") {
            $query = "SELECT WNAME,PRICE,IMG_NAME1,IMG_NAME2,IMG_NAME3,IMG_NAME4,WDESC,WGHT,LEN,RNGE,MAX_CAPACITY,WCATEGORY FROM $table AS W , manufacturing_company_weapon AS mcw, weapons_images as WI, torpedoes as T WHERE W.WID=mcw.WID and mcw.WID=WI.WID and WI.WID = T.WID and WNAME='$name' LIMIT 1";
            return $query_run = mysqli_query($conn, $query);
        } else if ($wsubcat_product == "PISTOLS") {
            $query = "SELECT WNAME,PRICE,IMG_NAME1,IMG_NAME2,IMG_NAME3,IMG_NAME4,WDESC,WGHT,LEN,RNGE,MAX_CAPACITY,WCATEGORY FROM $table AS W , manufacturing_company_weapon AS mcw, weapons_images as WI, pistols as P WHERE W.WID=mcw.WID and mcw.WID=WI.WID and WI.WID = P.WID and WNAME='$name' LIMIT 1";
            return $query_run = mysqli_query($conn, $query);
        } else if ($wsubcat_product == "MACHINE GUN") {
            $query = "SELECT WNAME,PRICE,IMG_NAME1,IMG_NAME2,IMG_NAME3,IMG_NAME4,WDESC,WGHT,LEN,RNGE,MAX_CAPACITY,WCATEGORY FROM $table AS W , manufacturing_company_weapon AS mcw, weapons_images as WI, machine_gun as MG WHERE W.WID=mcw.WID and mcw.WID=WI.WID and WI.WID = MG.WID and WNAME='$name' LIMIT 1";
            return $query_run = mysqli_query($conn, $query);
        }
    }
    $category = getWeapons("weapons", $product_name);
    $product = mysqli_fetch_array($category);
    $cat = $product['WCATEGORY'];
    $cat = strtolower($cat);

    if ($product) {
    ?>
        <!DOCTYPE html>
        <html lang="zxx">

        <head>
            <title>Weapons and Ammunitions Management</title>
            <meta charset="UTF-8">
            <meta name="description" content=" Divisima | eCommerce Template">
            <meta name="keywords" content="divisima, eCommerce, creative, html">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- Favicon -->
            <link href="dealer_icon/favicon.ico" rel="shortcut icon" />
            <script src="https://kit.fontawesome.com/83024f6411.js" crossorigin="anonymous"></script>
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
                    <h4>Category Page</h4>
                    <div class="site-pagination">
                        <a href="dealer_welcome.php">Home</a> /
                        <?php
                        if (!(strcmp($cat, "land"))) {
                        ?>
                            <a href="land.php">Land Weapons /</a>
                        <?php
                            //header("Location: land.php");
                        } else if (!(strcmp($cat, "air"))) {
                        ?>
                            <a href="air.php">Aerial Weapons /</a>
                        <?php
                            //header("Location: air.php");
                        } else if (!(strcmp($cat, "navy"))) {
                        ?>
                            <a href="navy.php">Naval Weapons /</a>
                        <?php
                            //header("Location: navy.php");
                        } ?>
                        <a href="product_view.php?product=<?= $product_name; ?>"><?php echo $product_name; ?></a>
                    </div>
                </div>
            </div>
            <!-- Page info end -->


            <!-- product section -->
            <section class="product-section">
                <div class="container">
                    <div class="back-link">
                        <?php
                        if (!(strcmp($cat, "land"))) {
                        ?>
                            <a href="land.php"> &lt;&lt;Back to Category</a>
                        <?php
                            //header("Location: land.php");
                        } else if (!(strcmp($cat, "air"))) {
                        ?>
                            <a href="air.php"> &lt;&lt;Back to Category</a>
                        <?php
                            //header("Location: air.php");
                        } else if (!(strcmp($cat, "navy"))) {
                        ?>
                            <a href="navy.php"> &lt;&lt;Back to Category</a>
                        <?php
                            //header("Location: navy.php");
                        } ?>

                    </div>
                    <div class="row product_data">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img" src="weapons_images/<?= $product['IMG_NAME1']; ?>" alt="<?= $product['WNAME']; ?>">
                            </div>
                            <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                                <div class="product-thumbs-track">
                                    <div class="pt active" data-imgbigurl="weapons_images/<?= $product['IMG_NAME1']; ?>"><img src="weapons_images/<?= $product['IMG_NAME1']; ?>" alt="<?= $product['WNAME']; ?>"></div>
                                    <div class="pt" data-imgbigurl="weapons_images/<?= $product['IMG_NAME2']; ?>"><img src="weapons_images/<?= $product['IMG_NAME2']; ?>" alt="<?= $product['WNAME']; ?>"></div>
                                    <div class="pt" data-imgbigurl="weapons_images/<?= $product['IMG_NAME3']; ?>"><img src="weapons_images/<?= $product['IMG_NAME3']; ?>" alt="<?= $product['WNAME']; ?>"></div>
                                    <div class="pt" data-imgbigurl="weapons_images/<?= $product['IMG_NAME4']; ?>"><img src="weapons_images/<?= $product['IMG_NAME4']; ?>" alt="<?= $product['WNAME']; ?>"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 product-details">
                            <h2 class="p-title"><?= $product['WNAME']; ?></h2>
                            <h3 class="p-price">$<?= $product['PRICE']; ?></h3>
                            <h4 class="p-stock">Available: <span>In Stock</span></h4>
                            <!-- <div class="p-rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o fa-fade"></i>
                            </div> -->
                            <!-- <div class="p-review">
                            <a href="">3 reviews</a>|<a href="">Add your review</a>
                        </div> -->
                            <!-- <div class="fw-size-choose">
                            <p>Size</p>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="xs-size">
                                <label for="xs-size">32</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="s-size">
                                <label for="s-size">34</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="m-size" checked="">
                                <label for="m-size">36</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="l-size">
                                <label for="l-size">38</label>
                            </div>
                            <div class="sc-item disable">
                                <input type="radio" name="sc" id="xl-size" disabled>
                                <label for="xl-size">40</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" name="sc" id="xxl-size">
                                <label for="xxl-size">42</label>
                            </div>
                        </div> -->


                            <?php
                            $product_name = $product['WNAME'];
                            $user = $_SESSION["user_id"];
                            $query = "SELECT * FROM  users WHERE id='$user'";
                            $res = mysqli_query($conn, $query);
                            $row = mysqli_fetch_array($res);
                            $uid = $row["id"];
                            if (isset($_REQUEST["submit"])) {
                                $check_count_query = "SELECT COUNT(*) FROM carts WHERE user_id = '$uid'";
                                $check_count_query_run = mysqli_query($conn, $check_count_query);
                                $quantity = mysqli_real_escape_string($conn, $_POST["quantity"]);
                                $sql = "INSERT INTO carts (user_id,prod_name,prod_qty) VALUES ('$uid','$product_name','$quantity')";
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    echo "<script>alert('Carts Successfully Updated');</script>";
                                } else {
                                    echo "<script>alert('Carts Failed to Update');</script>";
                                }
                            }
                            ?>
                            <form action="" method="post" autocomplete="off">
                                <div class="input-container">
                                    <input type="number" name="quantity" class="input" value="<?php echo $_POST["quantity"]; ?>" />
                                    <label for="">Quantity</label>
                                    <!-- <span>Quantity</span> -->
                                </div>
                                <input type="submit" name="submit" value="Add to Cart">
                            </form>
                            <br>
                            <a href="#" class="site-btn">SHOP NOW</a>
                            <div id="accordion" class="accordion-area">
                                <div class="panel">
                                    <div class="panel-header" id="headingOne">
                                        <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">information</button>
                                    </div>
                                    <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="panel-body">
                                            <p><?= $product['WDESC']; ?></p>
                                            <!-- <p>Approx length 66cm/26" (Based on a UK size 8 sample)</p>
                                        <p>Mixed fibres</p>
                                        <p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="panel">
                                    <div class="panel-header" id="headingTwo">
                                        <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Specifications </button>
                                    </div>
                                    <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="panel-body">
                                            <img src="./img/cards.png" alt="">
                                            <p>Weight : <?= $product['WGHT']; ?> kg</p>
                                            <p>Length : <?= $product['LEN']; ?> mm</p>
                                            <p>Range : <?= $product['RNGE']; ?> m</p>
                                            <p>Maximum Capacity : <?= $product['MAX_CAPACITY']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="panel">
                                <div class="panel-header" id="headingThree">
                                    <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
                                </div>
                                <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="panel-body">
                                        <h4>7 Days Returns</h4>
                                        <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                                    </div>
                                </div>
                            </div> -->
                            </div>
                            <div class="social-sharing">
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-pinterest"></i></a>
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product section end -->


            <!-- RELATED PRODUCTS section -->
            <!-- <section class="related-product-section">
            <div class="container">
                <div class="section-title">
                    <h2>RELATED PRODUCTS</h2>
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
            <!-- RELATED PRODUCTS section end -->


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
            <script src="quantity.js"></script>

        </body>

        </html>

    <?php
    } else {
        echo "Product Not Found";
    }
    ?>

<?php
} else {
    echo "Something Went Wrong";
}

include 'config.php';
?>