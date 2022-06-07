<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zairito-html.zainiktheme.com/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jan 2022 16:47:22 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Zairito - eCommerce HTML Template</title>
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
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-grid-left-sidebar.html">Shop Grid Leftsidebar <span class="menu-item-badge new">New</span></a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-grid-right-sidebar.html">Shop Grid Rightsidebar </a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-grid.html">Shop Grid No Sidebar <span class="menu-item-badge trending">Trending</span></a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-list-left-sidebar.html">Shop List Leftsidebar</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-list-right-sidebar.html">Shop List Rightsidebar</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shop-list.html">Shop List No Sidebar</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-title" href="#">List Layout & Others</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-product.html">Product Single 1</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-product-v2.html">Product Single 2</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-product-v3.html">Product Single 3</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="cart.html">Cart Page</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="checkout.html">Checkout Page</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="compare.html">Compare</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="wish-list.html">Wishlist</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="empty-wish-list.html">Empty Wishlist</a></li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <span class="menu-expand"></span>
                        <a class="menu-link" href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-link" href="term-conditions.html">Term & Conditions </a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="privacy-policy.html">Privacy Policy</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shipping-return.html">Shipping & Return</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="faq.html">Frequently Asked Questions</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="refund-policy.html">Refund policy</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="error.html">Error Page</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="sign-in.php">Sign In</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="sign-up.html">Sign Up</a></li>
                        </ul>
                    </li>
                    <li class="menu-item"><a class="menu-link" href="about-us.html">about us</a></li>
                    <li class="menu-item">
                        <span class="menu-expand"></span>
                        <a class="menu-link" href="#">Blog</a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-link" href="blog.html">Blog Grid</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="single-blog.html">Blog Single</a></li>
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
                <a class="account-btn" href="sign.php"><i class="user-icon flaticon-user"></i> My Account </a>
                <?php
                include "sign.php";
                ?>
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
                                <h3 class="product-name"><a class="product-link" href="single-product.html">Premier Cropped Jean</a></h3>

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
                                <h3 class="product-name"><a class="product-link" href="single-product.html">Premier Bag Jean</a></h3>

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

    <!-- hero-section area start here  -->
    <div class="hero-section">
        <div class="hero-slider">
            <div class="signle-slide" style="background-image: url('assets/images/hero-banner-bg.png');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">Summer Sale</h2>
                                <h1 class="slider-title">The Summer!!</h1>
                                <p class="slider-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed</p>
                                <div class="slider-btn">
                                    <a href="shop-grid-left-sidebar.php?subcat=Topwear" class="primary-btn">Shop Now!</a>
                                    <a href="shop-grid-left-sidebar.php?subcat=IFW" class="secondary-btn">See Colections <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-6">
                            <div class="hero-slider-image text-center">
                                <img class="hero-image img-fluid" src="assets/images/hero-banner-image-1.png" alt="hero-banner-image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signle-slide" style="background-image: url('assets/images/hero-banner-bg-2.png');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">New Collection</h2>
                                <h1 class="slider-title">The Winter!!</h1>
                                <p class="slider-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed</p>
                                <div class="slider-btn">
                                    <a href="shop-grid-left-sidebar.php?subcat=Western_wear" class="secondary-btn">See Colections <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-6">
                            <div class="hero-slider-image text-center">
                                <img class="hero-image img-fluid" src="assets/images/hero-banner-image-2.png" alt="hero-banner-image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="signle-slide" style="background-image: url('assets/images/hero-banner-bg-3.png');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-6">
                            <div class="hero-slider-content text-center">
                                <h2 class="slider-sub-title">New Collection</h2>
                                <h1 class="slider-title">The New autmn</h1>
                                <p class="slider-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed</p>
                                <div class="slider-btn">
                                    <a href="shop-grid-left-sidebar.php?subcat=Boys_wear" class="secondary-btn">See Colections <i class="iocn flaticon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1 col-6">
                            <div class="hero-slider-image text-center">
                                <img class="hero-image img-fluid" src="assets/images/hero-banner-image-3.png" alt="hero-banner-image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-section area end here  -->

    <!-- brads area start here  -->
    <div class="brads-area">
        <div class="container">
            <div class="brads-slide">
                <div class="sigle-brad">
                    <img src="assets/images/treva.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="assets/images/zoo-tv.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="assets/images/circle.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="assets/images/code-lab.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="assets/images/hex-lab.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="assets/images/kanba.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="assets/images/circle.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="assets/images/zoo-tv.png" alt="brad image" />
                </div>
                <div class="sigle-brad">
                    <img src="assets/images/circle.png" alt="brad image" />
                </div>
            </div>
        </div>
    </div>
    <!-- brads area start here  -->

    <!-- Popular Categories area start here  -->
    <div class="popular-categories-area section-bg section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">Many Goods</h3>
                        <h2 class="section-title">Popular Categories</h2>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a class="single-categorie" href="shop-grid-left-sidebar.php?subcat=Bottomwear">
                        <div class="categorie-wrap">
                            <div class="categorie-icon">
                                <i class="icon flaticon-pants"></i>
                            </div>
                            <div class="categorie-info">
                                <h3 class="categorie-name">Jeans Collections</h3>
                                <h4 class="categorie-subtitle">Dress For Man</h4>
                            </div>
                        </div>
                        <i class="arrow flaticon-right-arrow"></i>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="single-categorie" href="shop-grid-left-sidebar.php?subcat=Topwear">
                        <div class="categorie-wrap">
                            <div class="categorie-icon">
                                <i class="icon flaticon-blazer"></i>
                            </div>
                            <div class="categorie-info">
                                <h3 class="categorie-name">Shirt/t-shirt Collection</h3>
                                <h4 class="categorie-subtitle">Dress For Man</h4>
                            </div>
                        </div>
                        <i class="arrow flaticon-right-arrow"></i>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="single-categorie" href="shop-grid-left-sidebar.php?subcat=Boys_wear">
                        <div class="categorie-wrap">
                            <div class="categorie-icon">
                                <i class="icon flaticon-hoodie"></i>
                            </div>
                            <div class="categorie-info">
                                <h3 class="categorie-name">Boys Collection</h3>

                            </div>
                        </div>
                        <i class="arrow flaticon-right-arrow"></i>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="single-categorie" href="shop-grid-left-sidebar.php?subcat=Girls_wear">
                        <div class="categorie-wrap">
                            <div class="categorie-icon">
                                <i class="icon flaticon-long-sleeve"></i>
                            </div>
                            <div class="categorie-info">
                                <h3 class="categorie-name">Girls Collection</h3>

                            </div>
                        </div>
                        <i class="arrow flaticon-right-arrow"></i>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="single-categorie" href="shop-grid-left-sidebar.php?subcat=IFW">
                        <div class="categorie-wrap">
                            <div class="categorie-icon">
                                <i class="icon flaticon-waistcoat"></i>
                            </div>
                            <div class="categorie-info">
                                <h3 class="categorie-name">Indian fashion Collection</h3>
                                <h4 class="categorie-subtitle">Dress Women</h4>
                            </div>
                        </div>
                        <i class="arrow flaticon-right-arrow"></i>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="single-categorie" href="shop-grid-left-sidebar.php?subcat=Western_wear">
                        <div class="categorie-wrap">
                            <div class="categorie-icon">
                                <i class="icon flaticon-mini-skirt"></i>
                            </div>
                            <div class="categorie-info">
                                <h3 class="categorie-name">Wester Collection</h3>
                                <h4 class="categorie-subtitle">Dress Women</h4>
                            </div>
                        </div>
                        <i class="arrow flaticon-right-arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Categories area end here  -->

    <!-- Featured Products area start here  -->
    <div class="featured-productss-area section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">New Products</h3>
                        <h2 class="section-title">Featured Products</h2>
                    </div>

                </div>
            </div>

            <div class="row">
                <?php
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

                $sql = "SELECT product_description.photo,product_description.product_Id,product_description.product_Name,sub_category.sub_category_Name,product_description.price,product_description.discount_price FROM product_description,sub_category where product_description.sub_Category_Name=sub_category.sub_Category_Id AND product_description.product_Id order by product_description.product_Id DESC LIMIT 4; ";

                // echo $sql;
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    // output data of each row
                    // var_dump($result);
                    // die();
                    while ($row1 = $result->fetch_assoc()) {
                ?>
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <div class="single-grid-product">
                                <div class="product-top">
                                    <a href=" single-product.php?proid=<?php echo $row1['product_Id']; ?>"><img class="product-thumbnal" src="\Sleek-v-1-0\Product\uploads\<?php echo $row1['photo'] ?>" alt="product" /></a>
                                    <ul class="prdouct-btn-wrapper">
                                        <li class="single-product-btn">
                                            <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                        </li>
                                        <li class="single-product-btn">
                                            <a class="addCompare product-btn" href="wish-list.php?proid=<?php echo $row1['product_Id']; ?>" title=" Add to wishlist"><i class="icon flaticon-like"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="product-info text-center">
                                    <h4 class="product-catagory"><?php echo $row1['sub_category_Name'] ?></h4>
                                    <h3 class="product-name"><a class="product-link" href="single-product.html"><?php echo $row1['product_Name'] ?></a></h3>

                                    <div class="product-price">
                                        <span class="regular-price">&#8377;<?php echo $row1['price'] ?></span>
                                        <span class="price">&#8377;<?php echo $row1['discount_price'] ?></span>
                                    </div>




                                    <a href="cart.php?proname=<?php echo $row1['product_Name']; ?>" title="Add to cart" class="add-cart">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                </div>
                            </div>
                        </div>

                <?php
                        $proid = $row1['product_Name'];
                        $_SESSION[$proid] = $row1;
                    }
                } ?>

            </div>
        </div>
    </div>

    <!-- footer area start here -->
    <?php
    include("footer.php");
    ?>
    <!-- footer area end here -->

    <!-- Page Load Popup Modal End -->
    <div class="modal fade bd-example-modal-lg theme-modal" id="popUpModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body modal1 modal-bg">
                    <div class="row">


                        <div class="col-12">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-7 col-md-12">
                                    <div class="offer_modal_left">
                                        <img src="assets/images/zairito.png" alt="logo">
                                        <h3>SUBSCRIBE TO NEWSLETTER</h3>
                                        <p class="m-0">Subscribe to the Zairito mailing list to receive updates
                                            on new arrivals, special offers and our promotions.</p>
                                        <form>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Your email">
                                                <div class="input-group-append">
                                                    <button class="theme-btn-one btn-black-overlay btn_sm border-0">Subscribe</button>
                                                </div>
                                            </div>
                                            <div class="check_boxed_modal">
                                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                                <label for="vehicle1">Don't show this popup again</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-12">
                                    <div class="offer_modal_img d-none d-lg-flex">
                                        <img src="assets/images/hero-banner-image-1.png" alt="img">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Load Popup Modal End -->

    <!-- Js file  -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from zairito-html.zainiktheme.com/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jan 2022 16:53:30 GMT -->

</html>