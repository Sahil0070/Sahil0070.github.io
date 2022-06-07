<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from zairito-html.zainiktheme.com/demo/wish-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jan 2022 16:59:51 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Wishlist - Zairito - eCommerce HTML Template</title>
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
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>


    <?php
    if (isset($_SESSION['id'])) {
    } else { ?>

        <div class="alert alert-primary d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="28" role="img" aria-label="Info:">
                <use xlink:href="#info-fill" />
            </svg>
            <div>
                <b style="font-size: 16px;">You are not login</b>
            </div>
        </div>
    <?Php } ?>
    <!-- Preloader Area Start -->
    <div id="preloader">
        <div id="status">
            <img src="assets/images/preloader.svg" alt="img" />
        </div>
    </div>
    <!-- Preloader Area End -->

    <!-- header area start here  -->

    <!-- header area end here  -->

    <!-- mobile-header-area area start here  -->
    <?php
    if (isset($_GET['proid']) && isset($_SESSION['id'])) {

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

        $proid = $_GET['proid'];
        $userid = $_SESSION['id'];
        $qty = 1;
        $currentdate = date("Y/m/d");

        // Select Query to check whether item exists or not if exists update else insert.
        $sql2 = "Select count(product_Id) as countpro from wishlist where product_Id= $proid";
        $result = $conn->query($sql2);
        // var_dump($result);

        $countval = $result->fetch_assoc();
        // var_dump($countval);
        if ($countval['countpro'] > 0) { ?>
            <div class="alert alert-primary d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="28" role="img" aria-label="Info:">
                    <use xlink:href="#info-fill" />
                </svg>
                <div>
                    <b style="font-size: 16px;">This product is already existing in wish list</b>
                </div>
            </div>
    <?php } else if ($countval['countpro'] == 0) {
            $sql = "INSERT INTO wishlist(product_Id,created_Date,userid ) VALUES ($proid,'" . $currentdate . "',$userid)";
            if ($conn->query($sql) === TRUE) {
                // echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {

            echo "Error: " . $sql . "<br>" . $conn->error;
        }



        $conn->close();
    }
    ?>
    <?php
    include("header.php");
    ?>
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

    <!-- Cart Offcanvas Sidebar Menu area end here  -->

    <!-- breadcrumb area start here  -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="breadcrumb-wrap text-center">
                <h2 class="page-title">Wish List</h2>
                <ul class="breadcrumb-pages">
                    <li class="page-item"><a class="page-item-link" href="index.html">Home</a></li>
                    <li class="page-item">Wish List</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end here  -->

    <!-- wish-list area start here  -->
    <div class="wish-list-area section">
        <div class="container">
            <div class="row">

                <div class="col-12 wish-list-table">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
                                    <th scope="col">Remove</th>
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
                                    $userid = $_SESSION['id'];
                                    $sql = "SELECT wishlist.list_Id,product_description.photo,product_description.product_Id,product_description.product_Name,sub_category.sub_Category_Name,product_description.product_Name,product_description.price,product_description.discount_price from product_description,wishlist,sub_category where product_description.product_Id=wishlist.product_Id AND wishlist.userid=$userid AND product_description.sub_Category_Name=sub_category.sub_Category_Id";
                                    // echo $sql;
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        // var_dump($result);
                                        // die();
                                        while ($row1 = $result->fetch_assoc()) {
                                ?>


                                            <tr>
                                                <td>
                                                    <div class="product-image">
                                                        <a href="single-product.php?proid=<?php echo $row1['product_Id']; ?>"><img class="product-thumbnal" src="\Sleek-v-1-0\Product\uploads\<?php echo $row1['photo'] ?>" alt=" product" /></a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="product-info text-center">
                                                        <h4 class="product-catagory"><?php echo $row1['sub_Category_Name'] ?></h4>
                                                        <h3 class="product-name"><a class="product-link" href="single-product.php?proid=<?php echo $row1['product_Id']; ?>"><?php echo $row1['product_Name'] ?></a></h3>
                                                        <!-- <ul class="product-review">
                                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                                            <li class="review-item active"><i class="flaticon-star"></i></li>
                                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                                            <li class="review-item"><i class="flaticon-star"></i></li>
                                                        </ul> -->
                                                        <div class="variable-single-item color-switch">
                                                            <!-- <div class="product-variable-color">
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
                                                            </div> -->
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
                                                    <div class="action-area">
                                                        <a href="cart.php?proname=<?php echo $row1['product_Name'] ?>" title="Add to cart" class="add-cart action-btn">Add To
                                                            Cart <i class="icon fas fa-plus-circle"></i></a>
                                                        <a class="buy-btn action-btn mt-15" href="checkout.php">Buy Now</a>
                                                    </div>
                                                </td>
                                                <td><button id="deletebtn" class="delet-btn" title="Delete Item" data-id="<?php echo  $row1['list_Id'] ?>"><img src="assets/images/close.svg" alt="close" /></button></td>
                                            </tr>
                                <?php
                                            $proid = $row1['product_Name'];
                                            $_SESSION[$proid] = $row1;
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
        </div>
    </div>
    <!-- wish-list area end here  -->

    <!-- shop map area start here  -->

    <!-- shop map area start here  -->

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

<!-- Mirrored from zairito-html.zainiktheme.com/demo/wish-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Jan 2022 17:00:44 GMT -->

</html>