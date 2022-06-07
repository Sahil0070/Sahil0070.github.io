<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zairito-html.zainiktheme.com/demo/shop-grid-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jan 2022 17:02:55 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Shop Grid Leftsidebar - Zairito - eCommerce HTML Template</title>
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
                <h2 class="page-title">Product Collections</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="index.html">Home</a></li>
                    <li class="page-item">Product Collections</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- Product Area Start -->
    <div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-widget-area mobile-sidebar">
                        <div class="sidebar-widget-header d-block d-lg-none">
                            <div class="widget-header-wrap">
                                <h5 class="offcanvas-title">Filter</h5>
                                <button type="button" class="btn-close text-reset sidebar-close"></button>
                            </div>
                        </div>

                        <!-- <div class="single-widget search-widget">
                            <h3 class="widget-title">Search Here</h3>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="searchwidget" name="searchwidget" placeholder="Product Store" />
                                    <button type="button" class="search-btn"><i class="flaticon-search"></i></button>
                                </div>
                            </form>
                        </div> -->

                        <!-- <div class="single-widget categories-widget">
                            <h3 class="widget-title">Categories</h3>
                            <div class="categories-list">
                                <div class="single-categorie">
                                    <div class="categorie-left">
                                        <input class="form-check-input" type="checkbox" id="Tshirts">
                                        <label class="form-check-label" for="Tshirts">T-shirts & shirts</label>
                                    </div>
                                    <span class="categories-count">16</span>
                                </div>
                                <div class="single-categorie">
                                    <div class="categorie-left">
                                        <input class="form-check-input" type="checkbox" id="Jackets">
                                        <label class="form-check-label" for="Jackets">Jackets</label>
                                    </div>
                                    <span class="categories-count">6</span>
                                </div>
                                <div class="single-categorie">
                                    <div class="categorie-left">
                                        <input class="form-check-input" type="checkbox" id="Sports">
                                        <label class="form-check-label" for="Sports">Sports & Active Wear</label>
                                    </div>
                                    <span class="categories-count">8</span>
                                </div>
                                <div class="single-categorie">
                                    <div class="categorie-left">
                                        <input class="form-check-input" type="checkbox" id="Blazers">
                                        <label class="form-check-label" for="Blazers">Blazers & Coats</label>
                                    </div>
                                    <span class="categories-count">10</span>
                                </div>
                                <div class="single-categorie">
                                    <div class="categorie-left">
                                        <input class="form-check-input" type="checkbox" id="Overshirts">
                                        <label class="form-check-label" for="Overshirts">Overshirts</label>
                                    </div>
                                    <span class="categories-count">3</span>
                                </div>
                                <div class="single-categorie">
                                    <div class="categorie-left">
                                        <input class="form-check-input" type="checkbox" id="Coats">
                                        <label class="form-check-label" for="Coats">Coats & Jackets</label>
                                    </div>
                                    <span class="categories-count">25</span>
                                </div>
                            </div>
                        </div> -->

                        <div class="single-widget price-widget">
                            <h3 class="widget-title">Price</h3>
                            <form>
                                <div class="price-wrap">
                                    <div class="price-wrap-left">
                                        <div class="single-price">
                                            <input type="number" class="form-control" id="minprice" name="minprice" placeholder="$Min" min=1 />
                                        </div>
                                        <div class="single-price">
                                            <input type="hidden" value=<?php echo $_GET['subcat'] ?> id="sub">
                                            <input type="number" class="form-control" id="maxprice" name="maxprice" placeholder="$Max" min=1 />
                                        </div>
                                    </div>
                                    <button type="button" class="price-submit" id="mxbtn"><i class="fas fa-play"></i></button>
                                </div>
                            </form>
                        </div>

                        <!-- <div class="single-widget colors-widget">
                            <h3 class="widget-title">Colors</h3>
                            <div class="colors-list">
                                <div class="single-colors">
                                    <div class="colors-left">
                                        <input class="form-check-input green" type="checkbox" id="Jungle">
                                        <label class="form-check-label" for="Jungle">Jungle Green</label>
                                    </div>
                                    <span class="colors-count">15</span>
                                </div>
                                <div class="single-colors">
                                    <div class="colors-left">
                                        <input class="form-check-input cerise" type="checkbox" id="Cerise">
                                        <label class="form-check-label" for="Cerise">Cerise</label>
                                    </div>
                                    <span class="colors-count">18</span>
                                </div>
                                <div class="single-colors">
                                    <div class="colors-left">
                                        <input class="form-check-input magi-mint" type="checkbox" id="MagicMint">
                                        <label class="form-check-label" for="MagicMint">Magic Mint</label>
                                    </div>
                                    <span class="colors-count">9</span>
                                </div>
                                <div class="single-colors">
                                    <div class="colors-left">
                                        <input class="form-check-input pink-sherbet" type="checkbox" id="PinkSherbet">
                                        <label class="form-check-label" for="PinkSherbet">Pink Sherbet</label>
                                    </div>
                                    <span class="colors-count">26</span>
                                </div>
                                <div class="single-colors">
                                    <div class="colors-left">
                                        <input class="form-check-input vivid-tangerine" type="checkbox" id="VividTangerine">
                                        <label class="form-check-label" for="VividTangerine">Vivid Tangerine</label>
                                    </div>
                                    <span class="colors-count">6</span>
                                </div>
                                <div class="single-colors">
                                    <div class="colors-left">
                                        <input class="form-check-input hot-magenta" type="checkbox" id="HotMagenta">
                                        <label class="form-check-label" for="HotMagenta">Hot Magenta</label>
                                    </div>
                                    <span class="colors-count">11</span>
                                </div>
                            </div>
                        </div> -->



                        <!-- <div class="single-widget brand-widget">
                            <h3 class="widget-title">Brand</h3>
                            <div class="brand-list">
                                <div class="single-brand">
                                    <div class="brand-left">
                                        <input class="form-check-input" type="checkbox" id="Renuar">
                                        <label class="form-check-label" for="Renuar">Renuar</label>
                                    </div>
                                    <span class="brand-count">55</span>
                                </div>
                                <div class="single-brand">
                                    <div class="brand-left">
                                        <input class="form-check-input" type="checkbox" id="Zara">
                                        <label class="form-check-label" for="Zara">Zara</label>
                                    </div>
                                    <span class="brand-count">64</span>
                                </div>
                                <div class="single-brand">
                                    <div class="brand-left">
                                        <input class="form-check-input" type="checkbox" id="Bershka">
                                        <label class="form-check-label" for="Bershka">Bershka</label>
                                    </div>
                                    <span class="brand-count">81</span>
                                </div>
                                <div class="single-brand">
                                    <div class="brand-left">
                                        <input class="form-check-input" type="checkbox" id="HM">
                                        <label class="form-check-label" for="HM">H&M</label>
                                    </div>
                                    <span class="brand-count">77</span>
                                </div>
                                <div class="single-brand">
                                    <div class="brand-left">
                                        <input class="form-check-input" type="checkbox" id="Stradivarius">
                                        <label class="form-check-label" for="Stradivarius">Stradivarius</label>
                                    </div>
                                    <span class="brand-count">75</span>
                                </div>
                            </div>
                        </div> -->

                        <!-- <div class="single-widget tags-widget">
                            <h3 class="widget-title">Tags</h3>
                            <ul class="tags-list">
                                <li class="tag-item"><a class="tag-link active" href="shop-grid-left-sidebar.html">Fashion</a></li>
                                <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Hats</a></li>
                                <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Vagabond</a></li>
                                <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Sandal</a></li>
                                <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Beachwear</a></li>
                                <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Sunglasses</a></li>
                                <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Denim</a></li>
                                <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Magenta</a></li>
                                <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">leather</a></li>
                                <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Vagabond</a></li>
                            </ul>
                        </div> -->

                        <!-- <div class="single-widget rating-widget">
                            <h3 class="widget-title">Rating</h3>
                            <ul class="rating-list">
                                <li class="rating-item">
                                    <a class="rating-link" href="#">
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star active"></i>
                                    </a>
                                </li>
                                <li class="rating-item">
                                    <a class="rating-link" href="#">
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star"></i>
                                        <span class="and-up-text">And Up</span>
                                    </a>
                                </li>
                                <li class="rating-item">
                                    <a class="rating-link" href="#">
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <span class="and-up-text">And Up</span>
                                    </a>
                                </li>
                                <li class="rating-item">
                                    <a class="rating-link" href="#">
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <span class="and-up-text">And Up</span>
                                    </a>
                                </li>
                                <li class="rating-item">
                                    <a class="rating-link" href="#">
                                        <i class="flaticon-star active"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <span class="and-up-text">And Up</span>
                                    </a>
                                </li>
                            </ul>
                        </div> -->

                    </div>
                </div>

                <div class="col-xl-9 col-lg-8">
                    <div class="product-section-top">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <div class="product-section-top-left">
                                    <button class="sidebar-filter d-block d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                                        Filter <img src="assets/images/angle-down.svg" alt="angle-down" />
                                    </button>
                                    <div class="list-grid-view">
                                        <a href="shop-list-left-sidebar.html" class="view-btn list-view"><img class="view-icon" src="assets/images/view-list.svg" alt="view-list" /></a>
                                        <a href="shop-grid-left-sidebar.html" class="view-btn grid-view active"><img class="view-icon" src="assets/images/view-grid.svg" alt="view-grid" /></a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-md-9">
                                <div class="product-filter">
                                    <p class="shoing-result">Showing 1 - 9 of 9 result</p>
                                    <form>
                                        <select class="form-select">
                                            <option selected>Default Sorting</option>
                                            <option value="1">Categories</option>
                                            <option value="2">Colors</option>
                                            <option value="3">Tags</option>
                                        </select>
                                    </form>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="product-list">
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
                            $subcategory = $_GET['subcat'];
                            if (isset($_GET['subcat']) && isset($_GET['max']) && isset($_GET['min'])) {
                                $minval = $_GET['min'];
                                $maxval = $_GET['max'];
                                $sql = "SELECT * FROM product_description  where product_description.discount_Price between $minval and $maxval And  product_description.sub_Category_Name =(Select sub_Category.sub_Category_Id from sub_Category where sub_category.sub_Category_Name='" . $subcategory . "')  ";
                            } else {
                                $sql = "SELECT product_description.product_Id,product_description.sub_Category_Name,product_description.product_Name,product_description.price,product_description.discount,product_description.discount_Price,product_description.photo,product_description.description,stock.total_qty FROM product_description,stock where product_description.sub_Category_Name =(Select sub_Category.sub_Category_Id from sub_Category where sub_category.sub_Category_Name='" . $subcategory . "') AND stock.p_Id=product_description.product_Id;";
                            }
                            // echo $sql;
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                // var_dump($result);
                                // die();
                                while ($row1 = $result->fetch_assoc()) {
                            ?>

                                    <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                        <div class="single-grid-product">
                                            <div class="product-top">
                                                <a href="single-product.php?proid=<?php echo $row1['product_Id']; ?>"><img class="product-thumbnal" src="\Sleek-v-1-0\Product\uploads\<?php echo $row1['photo'] ?>" alt="product" /></a>
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
                                                <h2 class="product-catagory"><b><?php echo str_replace('_', ' ', $_GET['subcat']) ?></b></h2>
                                                <h4 class="product-catagory"><?php echo $row1['product_Name'] ?></h4>
                                                <h3 class="product-name"><a class="product-link" href="single-product.html"></a></h3>
                                                <!-- <ul class="product-review">
                                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                                    <li class="review-item active"><i class="flaticon-star"></i></li>
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                    <li class="review-item"><i class="flaticon-star"></i></li>
                                                </ul> -->
                                                <div class="product-price">
                                                    <span class="regular-price">&#8377;<?php echo $row1['price'] ?></span>
                                                    <span class="price">&#8377;<?php echo $row1['discount_Price'] ?></span>
                                                </div>
                                                <!-- <div class="variable-single-item color-switch">
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
                                                </div> -->
                                                <!-- <ul class="size-switch">
                                                    <li class="single-size active">XL</li>
                                                    <li class="single-size">LARGE</li>
                                                    <li class="single-size">SMALL</li>
                                                </ul> -->

                                                <a href="cart.php?proname=<?php echo $row1['product_Name']; ?>" title="Add to cart" class="add-cart">Add To Cart <i class="icon fas fa-plus-circle"></i></a>
                                            </div>
                                        </div>
                                    </div>

                            <?php
                                    $proid = $row1['product_Name'];
                                    $_SESSION[$proid] = $row1;
                                    // var_dump($_SESSION[$proid]);
                                }
                            } else {
                                echo "0 results";
                            }
                            ?>
                            <!-- <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                                        <h4 class="product-catagory">Fashion - Collection</h4>
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

                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                                        <h4 class="product-catagory">Hot - HALOTHEMES</h4>
                                        <h3 class="product-name"><a class="product-link" href="single-product.html">Black T-Shirt For Woman</a></h3>
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

                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
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
                                        <h3 class="product-name"><a class="product-link" href="single-product.html">Blue Dress For Woman</a></h3>
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

                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="single-product.html"><img class="product-thumbnal" src="assets/images/product-image-5.png" alt="product" /></a>
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

                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="single-product.html"><img class="product-thumbnal" src="assets/images/product-image-6.png" alt="product" /></a>
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

                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="single-product.html"><img class="product-thumbnal" src="assets/images/product-image-7.png" alt="product" /></a>
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
                                        <h3 class="product-name"><a class="product-link" href="single-product.html">V-Neck Dress</a></h3>
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

                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="single-product.html"><img class="product-thumbnal" src="assets/images/product-image-2.png" alt="product" /></a>
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
                                        <h4 class="product-catagory">ELLA - HALOTHEMES</h4>
                                        <h3 class="product-name"><a class="product-link" href="single-product.html">Maxi Dress</a></h3>
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

                            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                <div class="single-grid-product">
                                    <div class="product-top">
                                        <a href="single-product.html"><img class="product-thumbnal" src="assets/images/product-image-8.png" alt="product" /></a>
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
                            </div> -->
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- For Mobile Filter Sidebar Start -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Filter</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="sidebar-widget-area">
                <div class="single-widget search-widget p-0 bg-transparent">
                    <h3 class="widget-title">Search Here</h3>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" class="form-control bg-color" id="searchwidget1" name="searchwidget1" placeholder="Product Store" />
                            <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="single-widget categories-widget p-0 bg-transparent">
                    <h3 class="widget-title">Categories</h3>
                    <div class="categories-list">
                        <div class="single-categorie">
                            <div class="categorie-left">
                                <input class="form-check-input" type="checkbox" id="Tshirts1">
                                <label class="form-check-label" for="Tshirts1">T-shirts & shirts</label>
                            </div>
                            <span class="categories-count">16</span>
                        </div>
                        <div class="single-categorie">
                            <div class="categorie-left">
                                <input class="form-check-input" type="checkbox" id="Jackets1">
                                <label class="form-check-label" for="Jackets1">Jackets</label>
                            </div>
                            <span class="categories-count">6</span>
                        </div>
                        <div class="single-categorie">
                            <div class="categorie-left">
                                <input class="form-check-input" type="checkbox" id="Sports1">
                                <label class="form-check-label" for="Sports1">Sports & Active Wear</label>
                            </div>
                            <span class="categories-count">8</span>
                        </div>
                        <div class="single-categorie">
                            <div class="categorie-left">
                                <input class="form-check-input" type="checkbox" id="Blazers1">
                                <label class="form-check-label" for="Blazers1">Blazers & Coats</label>
                            </div>
                            <span class="categories-count">10</span>
                        </div>
                        <div class="single-categorie">
                            <div class="categorie-left">
                                <input class="form-check-input" type="checkbox" id="Overshirts1">
                                <label class="form-check-label" for="Overshirts1">Overshirts</label>
                            </div>
                            <span class="categories-count">3</span>
                        </div>
                        <div class="single-categorie">
                            <div class="categorie-left">
                                <input class="form-check-input" type="checkbox" id="Coats1">
                                <label class="form-check-label" for="Coats1">Coats & Jackets</label>
                            </div>
                            <span class="categories-count">25</span>
                        </div>
                    </div>
                </div>
                <div class="single-widget price-widget p-0 bg-transparent">
                    <h3 class="widget-title">Price</h3>
                    <form action="#">
                        <div class="price-wrap">
                            <div class="price-wrap-left">
                                <div class="single-price">
                                    <input type="number" class="form-control" id="minprice1" name="minprice1" placeholder="$ Min" />
                                </div>
                                <div class="single-price">
                                    <input type="number" class="form-control" id="maxprice1" name="maxprice1" placeholder="$ Max" />
                                </div>
                            </div>
                            <button type="submit" class="price-submit"><i class="fas fa-play"></i></button>
                        </div>
                    </form>
                </div>
                <div class="single-widget colors-widget p-0 bg-transparent">
                    <h3 class="widget-title">Colors</h3>
                    <div class="colors-list">
                        <div class="single-colors">
                            <div class="colors-left">
                                <input class="form-check-input green" type="checkbox" id="Jungle1">
                                <label class="form-check-label" for="Jungle1">Jungle Green</label>
                            </div>
                            <span class="colors-count">15</span>
                        </div>
                        <div class="single-colors">
                            <div class="colors-left">
                                <input class="form-check-input cerise" type="checkbox" id="Cerise1">
                                <label class="form-check-label" for="Cerise1">Cerise</label>
                            </div>
                            <span class="colors-count">18</span>
                        </div>
                        <div class="single-colors">
                            <div class="colors-left">
                                <input class="form-check-input magi-mint" type="checkbox" id="MagicMint1">
                                <label class="form-check-label" for="MagicMint1">Magic Mint</label>
                            </div>
                            <span class="colors-count">9</span>
                        </div>
                        <div class="single-colors">
                            <div class="colors-left">
                                <input class="form-check-input pink-sherbet" type="checkbox" id="PinkSherbet1">
                                <label class="form-check-label" for="PinkSherbet1">Pink Sherbet</label>
                            </div>
                            <span class="colors-count">26</span>
                        </div>
                        <div class="single-colors">
                            <div class="colors-left">
                                <input class="form-check-input vivid-tangerine" type="checkbox" id="VividTangerine1">
                                <label class="form-check-label" for="VividTangerine1">Vivid Tangerine</label>
                            </div>
                            <span class="colors-count">6</span>
                        </div>
                        <div class="single-colors">
                            <div class="colors-left">
                                <input class="form-check-input hot-magenta" type="checkbox" id="HotMagenta1">
                                <label class="form-check-label" for="HotMagenta1">Hot Magenta</label>
                            </div>
                            <span class="colors-count">11</span>
                        </div>
                    </div>
                </div>
                <div class="single-widget size-widget p-0 bg-transparent">
                    <h3 class="widget-title">Size</h3>
                    <div class="size-list">
                        <div class="single-size">
                            <input class="form-check-input" type="checkbox" id="SMALL1">
                            <label class="form-check-label" for="SMALL1">SMALL</label>
                        </div>
                        <div class="single-size">
                            <input class="form-check-input" type="checkbox" id="MEDIUM1">
                            <label class="form-check-label" for="MEDIUM1">MEDIUM</label>
                        </div>
                        <div class="single-size">
                            <input class="form-check-input" type="checkbox" id="LARGE1">
                            <label class="form-check-label" for="LARGE1">LARGE</label>
                        </div>
                        <div class="single-size">
                            <input class="form-check-input" type="checkbox" id="XL1">
                            <label class="form-check-label" for="XL1">XL</label>
                        </div>
                        <div class="single-size">
                            <input class="form-check-input" type="checkbox" id="XXL1">
                            <label class="form-check-label" for="XXL1">XXL</label>
                        </div>
                        <div class="single-size">
                            <input class="form-check-input" type="checkbox" id="XXXL1">
                            <label class="form-check-label" for="XXXL1">XXXL</label>
                        </div>
                    </div>
                </div>
                <div class="single-widget brand-widget p-0 bg-transparent">
                    <h3 class="widget-title">Brand</h3>
                    <div class="brand-list">
                        <div class="single-brand">
                            <div class="brand-left">
                                <input class="form-check-input" type="checkbox" id="Renuar1">
                                <label class="form-check-label" for="Renuar1">Renuar</label>
                            </div>
                            <span class="brand-count">55</span>
                        </div>
                        <div class="single-brand">
                            <div class="brand-left">
                                <input class="form-check-input" type="checkbox" id="Zara1">
                                <label class="form-check-label" for="Zara1">Zara</label>
                            </div>
                            <span class="brand-count">64</span>
                        </div>
                        <div class="single-brand">
                            <div class="brand-left">
                                <input class="form-check-input" type="checkbox" id="Bershka1">
                                <label class="form-check-label" for="Bershka1">Bershka</label>
                            </div>
                            <span class="brand-count">81</span>
                        </div>
                        <div class="single-brand">
                            <div class="brand-left">
                                <input class="form-check-input" type="checkbox" id="HM1">
                                <label class="form-check-label" for="HM1">H&M</label>
                            </div>
                            <span class="brand-count">77</span>
                        </div>
                        <div class="single-brand">
                            <div class="brand-left">
                                <input class="form-check-input" type="checkbox" id="Stradivarius1">
                                <label class="form-check-label" for="Stradivarius1">Stradivarius</label>
                            </div>
                            <span class="brand-count">75</span>
                        </div>
                    </div>
                </div>
                <div class="single-widget tags-widget p-0 bg-transparent">
                    <h3 class="widget-title">Tags</h3>
                    <ul class="tags-list">
                        <li class="tag-item"><a class="tag-link active" href="shop-grid-left-sidebar.html">Fashion</a></li>
                        <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Hats</a></li>
                        <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Vagabond</a></li>
                        <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Sandal</a></li>
                        <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Beachwear</a></li>
                        <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Sunglasses</a></li>
                        <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Denim</a></li>
                        <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Magenta</a></li>
                        <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">leather</a></li>
                        <li class="tag-item"><a class="tag-link" href="shop-grid-left-sidebar.html">Vagabond</a></li>
                    </ul>
                </div>
                <div class="single-widget rating-widget p-0 bg-transparent">
                    <h3 class="widget-title">Rating</h3>
                    <ul class="rating-list">
                        <li class="rating-item">
                            <a class="rating-link" href="#">
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star active"></i>
                            </a>
                        </li>
                        <li class="rating-item">
                            <a class="rating-link" href="#">
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star"></i>
                                <span class="and-up-text">And Up</span>
                            </a>
                        </li>
                        <li class="rating-item">
                            <a class="rating-link" href="#">
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <span class="and-up-text">And Up</span>
                            </a>
                        </li>
                        <li class="rating-item">
                            <a class="rating-link" href="#">
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <span class="and-up-text">And Up</span>
                            </a>
                        </li>
                        <li class="rating-item">
                            <a class="rating-link" href="#">
                                <i class="flaticon-star active"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <i class="flaticon-star"></i>
                                <span class="and-up-text">And Up</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- For Mobile Filter Sidebar End -->

    <!-- Product Area End -->

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

<!-- Mirrored from zairito-html.zainiktheme.com/demo/shop-grid-left-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jan 2022 17:02:57 GMT -->

</html>