<?php
session_start();
$counter = 0;
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zairito-html.zainiktheme.com/demo/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jan 2022 17:05:35 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cart - Zairito - eCommerce HTML Template</title>
    <meta name="description" content="Zairito - eCommerce HTML Template" />
    <meta name="keywords" content="business,eCommerce, Ecommerce, ecommerce, shop, shopify, shopify ecommerce, creative, woocommerce, design, gallery, minimal, modern, html, html5, responsive" />
    <meta name="author" content="Zairito" />

    <!-- fonts file -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allison&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Marcellus&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- css file  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

</head>

<body>
    <!-- Preloader Area Start -->
    <?php
    // var_dump($_SESSION[$_GET['proname']]);

    if (isset($_GET['proname']) && isset($_SESSION['id'])) {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fashion_ecommerce";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $proid = $_SESSION[$_GET['proname']]['product_Id'];
        $userid = $_SESSION['id'];
        $qty = 1;
        $currentdate = date("Y/m/d");

        // Select Query to check whether item exists or not if exists update else insert.
        $sql2 = "Select count(product_Id) as countpro from cart_item where product_Id= $proid";
        $result = $conn->query($sql2);
        // var_dump($result);

        $countval = $result->fetch_assoc();
        // var_dump($countval);
        if ($countval['countpro'] > 0) {

            $sql = "UPDATE cart_item SET quantity = quantity + 1 WHERE product_Id = $proid";
            // echo "New record created successfully";
        } else if ($countval['countpro'] == 0) {
            $sql = "INSERT INTO cart_item(product_Id,quantity,created_Date,userid ) VALUES ($proid,$qty,'" . $currentdate . "',$userid)";
        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;
        }


        if ($conn->query($sql) === TRUE) {
            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    ?>
    <div id="preloader">
        <div id="status">
            <img src="assets/images/preloader.svg" alt="img" />
        </div>
    </div>
    <!-- Preloader Area End -->

    <!-- header area start here  -->
    <?php
    include("header.php");
    ?>
    <!-- header area end here  -->

    <!-- mobile-header-area area start here  -->
    <div class="mobile-header-area d-block d-lg-none">
        <div class="container">
            <div class="menu-wrap">
                <div class="header-left">
                    <a class="brand-logo" href="index.html"><img class="brand-image" src="assets/images/zairito.png" alt="zairito" /></a>
                </div>
                <div class="header-right">
                    <a href="wish-list.html" class="wishlist-btn header-btn">
                        <div class="btn-left">
                            <i class="btn-icon flaticon-like"></i>
                            <span class="count">12</span>
                        </div>
                    </a>
                    <a href="compare.html" class="compare-btn header-btn">
                        <div class="btn-left">
                            <i class="btn-icon flaticon-bar-chart"></i>
                            <span class="count">5</span>
                        </div>
                    </a>
                    <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button" aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn">
                        <div class="btn-left">
                            <i class="btn-icon flaticon-shopping-bag"></i>
                            <span class="count">10</span>
                        </div>
                    </a>
                    <button class="menu-bar" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMobileMenu" aria-controls="offcanvasMobileMenu"><i class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile-header-area area end here  -->

    <!-- mobile-menu-area area start here  -->
    <div class="offcanvas offcanvas-start menu-offcanvas" tabindex="-1" id="offcanvasMobileMenu">
        <div class="mobile-menu-area">
            <div class="offcanvas-header">
                <a class="brand-logo" href="index.html"><img class="brand-image" src="assets/images/zairito.png" alt="zairito" /></a>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="menu-search-form">
                <form>
                    <div class="search-wrap">
                        <select class="form-select">
                            <option selected>Category</option>
                            <option value="1">Health & Beauty</option>
                            <option value="2">Women's Fashion</option>
                            <option value="3">Men's Fashion</option>
                            <option value="4">Electronic</option>
                            <option value="5">Sports </option>
                        </select>
                        <div class="form-group">
                            <input type="text" class="form-control" id="mobilesearch" name="search" placeholder="Search Here" />
                            <button type="button" class="search-btn"><i class="flaticon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <nav class="main-menu">
                <ul class="menu-list">
                    <li class="menu-item">
                        <span class="menu-expand"></span>
                        <a class="menu-link" href="#">Home</a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-link" href="index.html">Home One</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="index2.html">Home Two</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="index3.html">Home Three</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <span class="menu-expand"></span>
                        <a class="menu-link" href="#">Shop</a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-title" href="#">Shop Layout</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-grid-left-sidebar.html">Shop
                                    Grid Leftsidebar <span class="menu-item-badge new">New</span></a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-grid-right-sidebar.html">Shop
                                    Grid Rightsidebar </a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-grid.html">Shop Grid No
                                    Sidebar <span class="menu-item-badge trending">Trending</span></a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-list-left-sidebar.html">Shop
                                    List Leftsidebar</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-list-right-sidebar.html">Shop
                                    List Rightsidebar</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-list.html">Shop List No
                                    Sidebar</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-title" href="#">List Layout & Others</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-product.html">Product Single
                                    1</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-product-v2.html">Product
                                    Single 2</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-product-v3.html">Product
                                    Single 3</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="cart.html">Cart Page</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="checkout.html">Checkout Page</a>
                            </li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="compare.html">Compare</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="wish-list.html">Wishlist</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="empty-wish-list.html">Empty
                                    Wishlist</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <span class="menu-expand"></span>
                        <a class="menu-link" href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-link" href="term-conditions.html">Term &
                                    Conditions </a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="privacy-policy.html">Privacy
                                    Policy</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shipping-return.html">Shipping &
                                    Return</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="faq.html">Frequently Asked
                                    Questions</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="refund-policy.html">Refund
                                    policy</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="error.html">Error Page</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="sign-in.html">Sign In</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="sign-up.html">Sign Up</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="about-us.html">about us</a></li>
                    <li class="menu-item">
                        <span class="menu-expand"></span>
                        <a class="menu-link" href="#">Blog</a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-link" href="blog.html">Blog Grid</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-blog.html">Blog Single</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="contact.html">Contact</a></li>

                </ul>
            </nav>
            <div class="menu-bottom">
                <div class="switcher-lang-currency">
                    <div class="currency-switcher">
                        <span class="flag"><i class="fas fa-dollar-sign"></i></span>
                        <a href="#" class="currency">Usd <i class="fas fa-angle-down"></i></a>
                        <ul class="currency-list">
                            <li class="single-currency"><span class="flag"><i class="fas fa-dollar-sign"></i></span><a class="currency-text" href="#">Usd</a></li>
                            <li class="single-currency"><span class="flag"><i class="fas fa-rupee-sign"></i></span><a class="currency-text" href="#">Rupi</a></li>
                        </ul>
                    </div>
                    <div class="lang-switcher">
                        <span class="flag"><img src="assets/images/united-states.png" alt="united-states" /></span>
                        <a href="#" class="lang">Eng <i class="fas fa-angle-down"></i></a>
                        <ul class="lang-list">
                            <li class="single-lang"><span class="flag"><img src="assets/images/united-states.png" alt="united-states" /></span><a class="lang-text" href="#">Eng</a></li>
                            <li class="single-lang"><span class="flag"><img src="assets/images/india.png" alt="india"></span><a class="lang-text" href="#">Hin</a></li>
                        </ul>
                    </div>
                </div>
                <a class="account-btn" href="sign-in.html"><i class="user-icon flaticon-user"></i> My Account </a>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area area end here  -->

    <!-- Cart Offcanvas Sidebar Menu area Start here  -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="cartOffcanvasSidebar" aria-labelledby="cartOffcanvasSidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="cartOffcanvasSidebarLabel">Shopping Cart</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <div class="cart-product-list">

                <!-- Product item start -->
                <div class="product-item cart-product-item">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="single-product.html"><img class="product-thumbnal" src="assets/images/cart-sidebar-img1.png" alt="cart"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-name-part">
                                <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                <h3 class="product-name"><a class="product-link" href="single-product.html">Premier
                                        Cropped Jean</a></h3>

                                <div class="cart-quantity input-group">
                                    <div class="increase-btn dec qtybutton btn">-</div>
                                    <input class="qty-input cart-plus-minus-box" type="text" name="qtybutton" value="1" readonly />
                                    <div class="increase-btn inc qtybutton btn">+</div>
                                </div>

                                <button class="cart-remove-btn">Remove</button>
                            </div>
                            <div class="product-price">
                                <span class="regular-price">$220.08</span>
                                <span class="price">$150.08</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product item end -->

                <!-- Product item start -->
                <div class="product-item cart-product-item">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="single-product.html"><img class="product-thumbnal" src="assets/images/cart-sidebar-img2.png" alt="cart"></a>
                        </div>
                        <div class="product-info">
                            <div class="product-name-part">
                                <h4 class="product-catagory">New - Collections</h4>
                                <h3 class="product-name"><a class="product-link" href="single-product.html">Premier Bag
                                        Jean</a></h3>

                                <div class="cart-quantity input-group">
                                    <div class="increase-btn dec qtybutton btn">-</div>
                                    <input class="qty-input cart-plus-minus-box" type="text" name="qtybutton" value="1" readonly />
                                    <div class="increase-btn inc qtybutton btn">+</div>
                                </div>

                                <button class="cart-remove-btn">Remove</button>
                            </div>
                            <div class="product-price">
                                <span class="regular-price">$215.08</span>
                                <span class="price">$150.08</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product item end -->
            </div>

            <div class="total-bottom-part">
                <div class="total-count d-flex">
                    <h3>Total</h3>
                    <h4>$567.00</h4>
                </div>
                <a href="checkout.html" class="proceed-to-btn d-block text-center">
                    Proceed To Checkout
                </a>
                <div class="view-cart-go">
                    <a href="cart.html">View Cart</a>
                </div>
            </div>

        </div>
    </div>
    <!-- Cart Offcanvas Sidebar Menu area end here  -->

    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Order Summary</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="index.html">Home</a></li>
                    <li class="page-item">Order Summary</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- wish-list area start here  -->
    <div class="wish-list-area cart-page-area section" style="padding-top: 20px;">

        <div class=" container">
            <div class="row cart-page-bottom-box-wrap">

                <!-- Cart page bottom box -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-4" style="width: 66.333333%;">
                    <!-- <div class="card border-success" style="    height: 296px;">
                        <h5 class=" card-header">Featured</h5>
                        <div class="card-body text-success">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div> -->
                     <?php
                    if (isset($_SESSION['id'])) {
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "fashion_ecommerce";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        // $subcategory = $_GET['subcat'];\
                        $orderid = $_GET['orderid'];
                        $userid = $_SESSION['id'];
                        $sql =
                            "SELECT order_master.currentdate,user_info.name,count(product_description.product_Id) as count1,product_description.product_Name FROM product_description, order_detail,user_Info,order_master WHERE product_description.product_Id = order_detail.product_Id AND order_detail.order_Id = (select order_master.order_Id from order_master where order_master.order_Id=$orderid AND customer_Id=$userid) AND user_info.user_Id = $userid and order_master.order_Id=$orderid";
                        // echo $sql;
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            // var_dump($result);
                            // die();
                            if ($row1 = $result->fetch_assoc()) {
                                $num = $row1['count1'];

                    ?>
                                <div class="card border-success" style="height: 296px;">
                                    <h2 class=" card-header">Order Summary</h2>
                                    <div class="card-body text-success">
                                        <h1 class="card-title">Hey <?php echo $row1['name'] ?>,</h1><br>
                                        <!-- <span class="flag"><img src="assets/images/india.png" alt="united-states" /></span> -->
                                        <span class="card-title" style="font-size: 20px;"><img src=" assets/images/Success-icon-23186.png" width="55px" height="45px"> Your Order is Confirmed !!
                                            <!-- <h2 class="card-title">Your Order is Confirmed !!</h2> -->
                                        </span>


                                        <p class="card-text" style="font-size: 20px;">Thanks for Shopping from Fashion E-Commerce, Your <b> <?php echo $row1['product_Name'] ?> </b> <?php echo $num > 1 ? "and $num More Items " : ""; ?> has been Shipped to you and we have send you an E-mail of Your Invoice.</p>
                                        <p class="card-text" style="font-size: 20px;">Order Id : #<?php echo str_replace("-", "", $row1['currentdate']) ?>-<?php echo $orderid ?> <a href="index.php" class="btn btn-primary" style="font-size: 15px;margin-left: 480px;">Shop More</a></p>

                                    </div>
                               </div>
                </div>
    <?php
                            }
                        }
                    }
    ?>

    <!-- Cart page bottom box -->

    <!-- Cart page bottom box -->
    <!-- <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="cart-page-bottom-box">
                        <h2 class="bottom-box-title">Shipping</h2>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" name="coupon_code" placeholder="Enter your country" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="coupon_code" placeholder="Enter your city" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="coupon_code" placeholder="Enter your zip code" />
                            </div>

                            <div class="form-button text-center">
                                <button type="button" class="form-btn">Apply Now</button>
                            </div>

                        </form>
                    </div>
                </div> -->
    <!-- Cart page bottom box -->

    <!-- Cart page bottom box -->
    <div class="col-12 col-sm-12 col-md-12 col-lg-4" style:"width: 33.333333%;>
        <div class="cart-page-bottom-box cart-page-sub-total-box">

            <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                <h2 class="bottom-box-title m-0">Subtotal :</h2>
                <h2 class="bottom-box-title m-0">Rs.
                    <spam id="totalamtt"><?php echo $_SESSION['totalamt'] ?></spam>
                </h2>
            </div>

            <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                <div class="cart-inner-shipping-title">
                    <span>Shipping</span>
                    <p class="shipping-state m-0">Shipping to India</p>
                </div>
                <h2 class="bottom-box-title m-0">Rs. 50.00</h2>
            </div>

            <div class="sub-total-inner-box d-flex justify-content-between align-items-center">
                <h2 class="bottom-box-title m-0">Total (With 15% GST)</h2>
                <h2 class="bottom-box-title cart-page-final-total m-0" id="total"></h2>
            </div>


        </div>
    </div>
    <!-- Cart page bottom box -->

            </div>

            <div class="row" style="padding-top: 20px;">
                <div class="col-12 wish-list-table">

                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                if (isset($_SESSION['id'])) {
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "fashion_ecommerce";

                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password, $dbname);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }
                                    // $subcategory = $_GET['subcat'];\
                                    $orderid = $_GET['orderid'];
                                    $userid = $_SESSION['id'];
                                    $sql = "SELECT  product_description.photo,order_detail.quantity, product_description.product_Id, sub_category.sub_Category_Name, product_description.product_Name, product_description.price, product_description.discount_price FROM product_description, order_detail, sub_category WHERE product_description.product_Id = order_detail.product_Id AND order_detail.order_Id = (select order_master.order_Id from order_master where order_master.order_Id=$orderid AND customer_Id=$userid) AND product_description.sub_Category_Name = sub_category.sub_Category_Id GROUP by (order_detail.product_Id)";
                                    // echo $sql;
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        // var_dump($result);
                                        // die();
                                        while ($row1 = $result->fetch_assoc()) {
                                ?>

                                            <tr class="cart-page-item">
                                                <td>
                                                    <div class="single-grid-product m-0">
                                                        <div class="product-top">
                                                            <a href="single-product.php?proid=<?php echo $row1['product_Id']; ?>"><img class="product-thumbnal" src="\Sleek-v-1-0\Product\uploads\<?php echo $row1['photo'] ?>"" alt=" cart"></a>
                                                            <!-- <div class="product-flags">
                                                    <span class="product-flag sale">SALE</span>
                                                    <span class="product-flag discount">-15%</span>
                                                </div> -->
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <h4 class="product-catagory"><?php echo $row1['sub_Category_Name'] ?></h4>
                                                            <h3 class="product-name"><a class="product-link" href="single-product.html"><?php echo $row1['product_Name'] ?></a></h3>


                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-price text-center">
                                                        <h4 class="regular-price">Rs. <?php echo $row1['price'] ?></h4>
                                                        <h3 class="price">Rs. <?php echo $row1['discount_price'] ?></h3>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="1">


                                                        <!-- <div class="increase-btn dec qtybutton btn" data-id=<?php echo $a ?> data-price=<?php echo $b ?>>-</div> -->
                                                        <input class="qty-input cart-plus-minus-box" type="text" name="qtybutton" value="<?php echo $row1['quantity']; ?>" readonly />

                                                        <!-- <div class="increase-btn inc qtybutton btn" data-id=<?php echo $a ?> data-price=<?php echo $b ?>>+</div> -->
                                                    </div>

                                                </td>
                                                <td>
                                                    <?php $counter = $counter + ($row1['discount_price'] * $row1['quantity']) ?>
                                                    <h1 class="cart-table-item-total" id="totalprice">Rs. <?php echo $row1['discount_price'] * $row1['quantity']; ?></h1>
                                                </td>
                                                <!-- <td><button class="delet-btn" title="Delete Item" data-id="<?php echo $a ?>"><img src="assets/images/close.svg" alt="close" /></button></td> -->
                                            </tr>

                                <?php

                                        }
                                    } else {
                                    }
                                }
                                ?>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Cart Page Bottom box area Start -->

            <!-- Cart Page Bottom box area End -->

        </div>
    </div>
    <!-- wish-list area end here  -->

    <!-- shop map area start here  -->

    <!-- shop map area start here  -->

    <!-- footer area start here -->
    <?php
    include("footer.php");
    ?>
    <!-- foote r area end here -->

    <!-- Js file  -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>-
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.session.js"></script>
    <script>
        $(document).ready(function() {

            if ($.session.get('totalamount') != 0) {
                var a = ($.session.get('totalamount'));
                console.log(a);
                var b = a;
                $("#totalamtt").html(a);
                b = b * 0.15;
                $("#taxamt").html("Rs. ".concat(b.toFixed(2)));
                a = Number(a) + Number(b) + 50;
                $("#total").html("Rs. ".concat(a));
                $("#totAmount").val(a);
            } else {
                var a = $("#totalamtt").text();
                console.log(a);
                var b = a;
                b = b * 0.15;
                // b= Math.round(b, 2);
                // $("#taxamt").html("Rs. ".concat(b.toFixed(2)));
                a = Number(a) + Number(b) + 50;
                $("#total").html("Rs. ".concat(a));
                $("#totAmount").val(a);
            }
        });
    </script>

    <!-- <script src=https://github.com/AlexChittock/JQuery-Session-Plugin.git></script> -->

</body>

<!-- Mirrored from zairito-html.zainiktheme.com/demo/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jan 2022 17:05:35 GMT -->

</html>