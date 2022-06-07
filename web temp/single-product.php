<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zairito-html.zainiktheme.com/demo/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jan 2022 17:03:03 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Single Product - Zairito - eCommerce HTML Template</title>
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
                    <!-- <li class="menu-item"><a class="menu-link" href="shop-grid.html">Shop</a></li> -->
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

    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Product Single Page</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="index.html">Home</a></li>
                    <li class="page-item">Product Single Page</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- product-single-area start here  -->
    <div class="product-single-area section-top">
        <div class="container">
            <div class="product-single-details">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-single-left">
                            <div class="product-thumbnail-image">
                                <!-- <ul class="product-thumb-silide slider slider-nav">
                                    <li class="single-item"><img class="single-item-image" src="assets/images/single-product-image1.png" alt="product" /></li>
                                    <li class="single-item"><img class="single-item-image" src="assets/images/single-product-image2.png" alt="product" /></li>
                                    <li class="single-item"><img class="single-item-image" src="assets/images/single-product-image3.png" alt="product" /></li>
                                    <li class="single-item"><img class="single-item-image" src="assets/images/single-product-image4.png" alt="product" /></li>
                                    <li class="single-item"><img class="single-item-image" src="assets/images/single-product-image2.png" alt="product" /></li>
                                </ul> -->
                            </div>
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
                            $proId = $_GET['proid'];

                            // $userid = $_SESSION['id'];
                            $sql = "SELECT product_description.product_Id,product_description.photo,sub_category.sub_Category_Name,product_description.product_Name,product_description.price,product_description.discount_price from product_description,sub_category where product_description.product_Id=$proId AND product_description.sub_Category_Name=sub_category.sub_Category_Id";
                            // echo $sql;
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                // var_dump($result);
                                // die();
                                while ($row1 = $result->fetch_assoc()) {
                            ?>
                                    <div class="product-slier-big-image">
                                        <div class="product-priview-slide slider slider-for">
                                            <div class="single-slide">
                                                <img class="slide-image" src="\Sleek-v-1-0\Product\uploads\<?php echo $row1['photo'] ?>" alt="product" />
                                            </div>
                                            <!-- <div class="single-slide">
                                        <img class="slide-image" src="assets/images/single-product-image2.png" alt="product" />
                                    </div>
                                    <div class="single-slide">
                                        <img class="slide-image" src="assets/images/single-product-image3.png" alt="product" />
                                    </div>
                                    <div class="single-slide">
                                        <img class="slide-image" src="assets/images/single-product-image4.png" alt="product" />
                                    </div>
                                    <div class="single-slide">
                                        <img class="slide-image" src="assets/images/single-product-image2.png" alt="product" />
                                    </div> -->

                                        </div>
                                    </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="product-single-right">
                            <div class="product-info">
                                <h4 class="product-catagory"><?php echo $row1['sub_Category_Name'] ?></h4>
                                <h3 class="product-name"><?php echo $row1['product_Name'] ?></h3>
                                <!-- <ul class="product-review">
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul> -->

                                <div class="product-price">
                                    <span class="regular-price">$<?php echo $row1['price'] ?></span>
                                    <span class="price">$<?php echo $row1['discount_price'] ?></span>
                                </div>

                                <p class="note-text">Please note: We have this product in India warehouse. If destination means you can receive the parcel faster and earlier than expected.</p>

                                <!-- <div class="product-color-area">
                                            <h4 class="color-title">COLOR: WHITE</h4>
                                            <div class="variable-single-item color-switch">
                                                <div class="product-variable-color">
                                                    <label>
                                                        <input name="modal-product-color" class="color-select" type="radio" checked="">
                                                        <span class="product-color-black"></span>
                                                    </label>
                                                    <label>
                                                        <input name="modal-product-color" class="color-select" type="radio">
                                                        <span class="product-color-tomato"></span>
                                                    </label>

                                                    <label>
                                                        <input name="modal-product-color" class="color-select" type="radio">
                                                        <span class="product-color-gray"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> -->

                                <div class="product-size-area">
                                    <h4 class="size-title">SIZE : XL</h4>
                                    <ul class="size-switch">
                                        <li class="single-size active">XL</li>
                                        <li class="single-size">LARGE</li>
                                        <li class="single-size">SMALL</li>
                                    </ul>
                                </div>

                                <div class="prdouct-btn-wrapper d-flex align-items-center">
                                    <div class="cart-plus-minus">
                                        <div class="dec qtybutton btn">-</div>
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" readonly />
                                        <div class="inc qtybutton btn">+</div>
                                    </div>
                                    <a class="addCompare product-btn" href="wish-list.php?proid=<?php echo $row1['product_Id']; ?>" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                    <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </div>
                                <div class="product-bottom-button d-flex">
                                    <a href="checkout.php" class="primary-btn">Buy Now</a>
                                    <a href="cart.php?proname=<?php echo $row1['product_Name']; ?>" title="Add to cart" class="add-cart">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                </div>
                            </div>
                            <div class="product-right-bottom">
                                <ul class="features">
                                    <li class="single-feature"><img class="icon" src="assets/images/delivery-van-icon.svg" alt="icon" /><strong class="feature-title">Estimated Delivery:</strong><span class="feature-text">Sep 13 - Sep 17</span></li>
                                    <li class="single-feature"><img class="icon" src="assets/images/shipping-return.svg" alt="icon" /><strong class="feature-title">Free Shipping & Returns:</strong><span class="feature-text">On all orders over $75</span></li>
                                </ul>
                                <div class="guarantee-checkout-area">
                                    <h3 class="guarantee-title">Guarantee safe & secure checkout</h3>
                                    <img src="assets/images/payment-method-image.png" alt="payment-method-image" />
                                </div>
                                <!-- <div class="share-area mt-30">
                                    <h3 class="share-title">SHARE:</h3>
                                    <ul class="social-media">
                                        <li class="media-item"><a class="media-link facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                        <li class="media-item"><a class="media-link twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                        <li class="media-item"><a class="media-link linkedin" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li class="media-item"><a class="media-link pinterest" href="javascript:void(0)"><i class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
            <?php

                                }
                            } else {
                            }

            ?>
                </div>
            </div>

            <div class="product-bottom-info mt-50">
                <div class="nav-tabs-menu">
                    <ul class="nav nav-tabs" id="ProductTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="Description-tab" data-bs-toggle="tab" data-bs-target="#Description" type="button" role="tab" aria-controls="Description" aria-selected="true">Description</button>
                        </li>
                        <!-- <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Reviews-tab" data-bs-toggle="tab" data-bs-target="#Reviews" type="button" role="tab" aria-controls="Reviews" aria-selected="false">Reviews</button>
                        </li> -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Shipping-Return-tab" data-bs-toggle="tab" data-bs-target="#Shipping-Return" type="button" role="tab" aria-controls="Shipping-Return" aria-selected="false">Shipping & Return</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="Additional-Information-tab" data-bs-toggle="tab" data-bs-target="#Additional-Information" type="button" role="tab" aria-controls="Additional-Information" aria-selected="false">Additional Information</button>
                        </li>
                    </ul>
                </div>

                <div class="tab-content" id="ProductTabContent">

                    <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                        <div class="product-description">
                            <p class="description-text">Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur Vivamus magna justo,egestas non nisi. Curabitur non nulla sit amet nisl emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies porta </p>
                            <p class="description-text">Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                            <p class="description-text">Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. emper magna ultrices non. Sed ac elit viverra eros fermentum commodo. Nunc et congue enim. Nulla ultricies</p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                        <div class="product-reviews">
                            <div class="review-top">
                                <div class="review-top-left">
                                    <span class="review-point">4.5</span>
                                    <ul class="review-list">
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item active"><i class="flaticon-star"></i></li>
                                        <li class="review-item"><i class="flaticon-star"></i></li>
                                    </ul>
                                    <span class="review-count">4 reviews</span>
                                </div>
                                <div class="review-top-right">
                                    <a href="javascript:void(0)" class="write-review-btn">Write A Review</a>
                                </div>
                            </div>

                            <div class="reviews-list">
                                <div class="single-review">
                                    <div class="reviewer">
                                        <div class="reviewer-wrap">
                                            <img class="reviewer-image" src="assets/images/reviewer-image-1.png" alt="reviewer-image" />
                                            <h4 class="reviewer-name">Cameron Williamson</h4>
                                        </div>
                                    </div>
                                    <div class="review-middle">
                                        <ul class="review-list">
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <span class="remiew-time">3 months ago</span>
                                    </div>
                                    <h3 class="review-title">Beautiful And Easy Use</h3>
                                    <h4 class="review-meta"><span class="time">25th Sep 2021 </span> by <a class="author" href="javascript:void(0)">Angelo Mathews</a></h4>
                                    <p class="review-text">Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel</p>
                                </div>
                                <div class="single-review">
                                    <div class="reviewer">
                                        <div class="reviewer-wrap">
                                            <img class="reviewer-image" src="assets/images/reviewer-image-1.png" alt="reviewer-image" />
                                            <h4 class="reviewer-name">Leslie Alexander</h4>
                                        </div>
                                    </div>
                                    <div class="review-middle">
                                        <ul class="review-list">
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                        </ul>
                                        <span class="remiew-time">3 months ago</span>
                                    </div>
                                    <h3 class="review-title">Beautiful And Easy Use</h3>
                                    <h4 class="review-meta"><span class="time">25th Sep 2021 </span> by <a class="author" href="javascript:void(0)">John Mathews</a></h4>
                                    <p class="review-text">Vivamus suscipit tortor eget felis porttitor volutpat. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Shipping-Return" role="tabpanel" aria-labelledby="Shipping-Return-tab">
                        <div class="shipping-return-area">
                            <div class="single-return-policy">
                                <h3 class="return-title">RETURNS POLICY</h3>
                                <p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>
                            </div>
                            <div class="single-return-policy">
                                <h3 class="return-title">RETURNS POLICY</h3>
                                <p class="return-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ut blandit risus. Donec mollis nec tellus et rutrum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut consequat quam a purus faucibus scelerisque. Mauris ac dui ante. Pellentesque congue porttitor tempus. Donec sodales dapibus urna sed dictum. Duis congue posuere libero, a aliquam est porta quis.</p>
                                <p class="return-text">Donec ullamcorper magna enim, vitae fermentum turpis elementum quis. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                                <p class="return-text">Curabitur vel sem mi. Proin in lobortis ipsum. Aliquam rutrum tempor ex ac rutrum. Maecenas nunc nulla, placerat at eleifend in, viverra etos sem. Nam sagittis lacus metus, dignissim blandit magna euismod eget. Suspendisse a nisl lacus. Phasellus eget augue tincidunt, sollicitudin lectus sed, convallis desto. Pellentesque vitae dui lacinia, venenatis erat sit amet, fringilla felis. Nullam maximus nisi nec mi facilisis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="Additional-Information" role="tabpanel" aria-labelledby="Additional-Information-tab">
                        <div class="additional-information-area">
                            <p class="additional-information-text">Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla quis lorem ut libero malesuada feugiat. </p>
                            <ul class="additional-feature">
                                <li class="single-feature">
                                    <h3 class="feature-title">Comodous:</h3>
                                    <p class="feature-text">Comodous in tempor ullamcorper miaculis</p>
                                </li>
                                <li class="single-feature">
                                    <h3 class="feature-title">Mattis laoreet:</h3>
                                    <p class="feature-text">Pellentesque vitae neque mollis urna mattis laoreet.</p>
                                </li>
                                <li class="single-feature">
                                    <h3 class="feature-title">Divamus de ametos:</h3>
                                    <p class="feature-text">Divamus sit amet purus justo</p>
                                </li>
                                <li class="single-feature">
                                    <h3 class="feature-title">Molestie:</h3>
                                    <p class="feature-text">Proin molestie egestas orci ac suscipit risus posuere loremous</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product-single-area end here  -->

    <!-- Featured Products area start here  -->
    <!-- <div class="featured-productss-area section-top pb-100">
        <div class="container">
            <div class="section-header-area">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="sub-title">Similar Products</h3>
                        <h2 class="section-title">Related Products</h2>
                    </div>
                    <div class="col-md-6 align-self-end text-md-end">
                        <a href="shop-grid-left-sidebar.html" class="see-btn">See All</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="single-product.html"><img class="product-thumbnal" src="assets/images/product-image-1.png" alt="product" /></a>
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                            <h3 class="product-name"><a class="product-link" href="single-product.html">Rosmo Namino Milancelos</a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price">$770.18</span>
                                <span class="price">$700.08</span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio" checked="">
                                        <span class="product-color-black"></span>
                                    </label>
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-tomato"></span>
                                    </label>

                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-gray"></span>
                                    </label>
                                </div>
                            </div>
                            <ul class="size-switch">
                                <li class="single-size active">XL</li>
                                <li class="single-size">LARGE</li>
                                <li class="single-size">SMALL</li>
                            </ul>
                            <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="single-product.html"><img class="product-thumbnal" src="assets/images/product-image-2.png" alt="product" /></a>
                            <div class="product-flags">
                                <span class="product-flag sale">SALE</span>
                                <span class="product-flag discount">-15%</span>
                            </div>
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                            <h3 class="product-name"><a class="product-link" href="single-product.html">Tailored Fit Mesh-Panel Polo</a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price">$220.08</span>
                                <span class="price">$200.08</span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio" checked="">
                                        <span class="product-color-black"></span>
                                    </label>
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-tomato"></span>
                                    </label>

                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-gray"></span>
                                    </label>
                                </div>
                            </div>
                            <ul class="size-switch">
                                <li class="single-size">XL</li>
                                <li class="single-size">LARGE</li>
                                <li class="single-size">SMALL</li>
                            </ul>
                            <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="single-product.html"><img class="product-thumbnal" src="assets/images/product-image-3.png" alt="product" /></a>
                            <div class="product-flags">
                                <span class="product-flag discount">-15%</span>
                            </div>
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            <h4 class="product-catagory">Fashion - Collection</h4>
                            <h3 class="product-name"><a class="product-link" href="single-product.html">Midi Dress</a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price">$748.08</span>
                                <span class="price">$730.08</span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio" checked="">
                                        <span class="product-color-black"></span>
                                    </label>
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-tomato"></span>
                                    </label>

                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-gray"></span>
                                    </label>
                                </div>
                            </div>
                            <ul class="size-switch">
                                <li class="single-size">XL</li>
                                <li class="single-size">LARGE</li>
                                <li class="single-size">SMALL</li>
                            </ul>
                            <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-grid-product">
                        <div class="product-top">
                            <a href="single-product.html"><img class="product-thumbnal" src="assets/images/product-image-4.png" alt="product" /></a>
                            <div class="product-flags">
                                <span class="product-flag sale">SALE</span>
                            </div>
                            <ul class="prdouct-btn-wrapper">
                                <li class="single-product-btn">
                                    <a class="addToWishlist product-btn" href="compare.html" title="Add to compare"><i class="icon flaticon-bar-chart"></i></a>
                                </li>
                                <li class="single-product-btn">
                                    <a class="addCompare product-btn" href="wish-list.html" title="Add to wishlist"><i class="icon flaticon-like"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product-info text-center">
                            <h4 class="product-catagory">New - Collection</h4>
                            <h3 class="product-name"><a class="product-link" href="single-product.html">Fit-Flare Dress</a></h3>
                            <ul class="product-review">
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item active"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                                <li class="review-item"><i class="flaticon-star"></i></li>
                            </ul>
                            <div class="product-price">
                                <span class="regular-price">$709.08</span>
                                <span class="price">$600.08</span>
                            </div>
                            <div class="variable-single-item color-switch">
                                <div class="product-variable-color">
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio" checked="">
                                        <span class="product-color-black"></span>
                                    </label>
                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-tomato"></span>
                                    </label>

                                    <label>
                                        <input name="modal-product-color" class="color-select" type="radio">
                                        <span class="product-color-gray"></span>
                                    </label>
                                </div>
                            </div>
                            <ul class="size-switch">
                                <li class="single-size">XL</li>
                                <li class="single-size">LARGE</li>
                                <li class="single-size">SMALL</li>
                            </ul>
                            <a href="cart.html" title="Add to cart" class="add-cart">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Featured Products area end here  -->

    <!-- shop map area start here -->
    <!-- <div class="shop-map-area">
        <div class="shop-info">
            <div class="shop-info-left">
                <h2 class="shop-info-title">Local Pickup Available</h2>
                <p class="shop-info-sub-title">301 Front St Toronto, Canada</p>
                <ul class="shop-opaing-time">
                    <li class="open-time">Mon - Fri, 8:30am - 10:30pm,</li>
                    <li class="open-time">Sunday, 8:30am - 10:30pm</li>
                </ul>
            </div>
            <div class="shop-info-right">
                <span class="label">Shops Image</span>
            </div>
        </div>
        <div id="gmap" class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1839.0179632416985!2d89.5538504127622!3d22.801132631062536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff8f2b1098bf95%3A0xbce09c90b98f8380!2sJust%20Orders%20Khulna!5e0!3m2!1sen!2sbd!4v1636005141952!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div> -->
    <!-- shop map area start here -->

    <!-- footer area start here -->
    <?php
    include("footer.php");
    ?>
    <!-- footer area end here -->

    <!-- Js file  -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from zairito-html.zainiktheme.com/demo/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jan 2022 17:03:11 GMT -->

</html>