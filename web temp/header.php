<header class="header-area d-none d-lg-block" style="padding:0px">
    <div class="header-top" style="padding:0px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="header-top-left">
                        <p class="contact-info"><i class="icon flaticon-phone"></i> Call Us: +777 2345 7885 (FREE)</p>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header-top-right">
                        <div class="top-bar-menu">
                            <ul class="menu-list">
                                <?php if (isset($_SESSION['id'])) { ?>
                                    <li class="menu-item"><a class="menu-link" href="logout.php">Log Out</a></li>
                                <?PHp } ?>
                            </ul>
                        </div>
                        <div class="switcher-lang-currency">
                            <div class="currency-switcher">
                                <span class="flag"><i class="fas fa-rupee-sign"></i></span>
                                <a href="#" class="currency">Rupi </a>
                                <!-- <ul class="currency-list">
                                     <li class="single-currency"><span class="flag"><i class="fas fa-dollar-sign"></i></span><a class="currency-text" href="#">Usd</a></li>
                                     <li class="single-currency"><span class="flag"><i class="fas fa-rupee-sign"></i></span><a class="currency-text" href="#">Rupi</a></li>
                                 </ul> -->
                            </div>
                            <div class="lang-switcher">
                                <span class="flag"><img src="assets/images/india.png" alt="united-states" /></span>
                                <a href="#" class="lang">Hin </a>
                                <!-- <ul class="lang-list">
                                     <li class="single-lang"><span class="flag"><img src="assets/images/united-states.png" alt="united-states" /></span><a class="lang-text" href="#">Eng</a></li>
                                     <li class="single-lang"><span class="flag"><img src="assets/images/india.png" alt="india"></span><a class="lang-text" href="#">Hin</a></li>
                                 </ul> -->
                            </div>
                        </div>

                        <!-- <div class="ht-setting-trigger is-active"><span>Setting</span></div>
                             <li>
                                 <div class="ht-setting-trigger"><span>Setting</span></div>
                                 <div class="setting ht-setting">
                                     <ul class="ht-setting-list">
                                         <li><a href="login-register.html">My Account</a></li>
                                         <li><a href="checkout.html">Checkout</a></li>
                                         <li><a href="login-register.html">Sign In</a></li>
                                     </ul>
                                 </div>
                             </li> -->


                        <a class="account-btn" href="#"><i class="user-icon flaticon-user btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"></i> My Account </a>

                        <?php
                        include "sign-in.php";
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <div class="header-middle-wrap">
                <div class="brand-area">
                    <a class="brand-logo" href="index.php"><img class="brand-image" src="assets/images/zairito.png" alt="zairito" /></a>
                </div>

                <div class="header-right">
                    <?php
                    if (isset($_SESSION['id']) && isset($_SESSION['Email'])) {
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
                        $userId = $_SESSION['id'];

                        $sql = "SELECT count(cart_Id) as ccount , sum(product_description.discount_price * cart_Item.quantity) as pricesum FROM cart_item,product_description where product_description.product_Id=cart_Item.product_Id AND userid=$userId";
                        $result = $conn->query($sql);
                        $sql1 = "SELECT count(list_Id) as idcount FROM wishlist where userid=$userId";
                        $result1 = $conn->query($sql1);

                    ?>

                        <?php if ($result1->num_rows > 0) {
                            // output data of each row
                            while ($row1 = $result1->fetch_assoc()) {
                        ?>

                                <div class="wishlist single-btn">
                                    <a href="wish-list.php" class="wishlist-btn header-btn">
                                        <div class="btn-left">
                                            <i class="btn-icon flaticon-like"></i>
                                            <span class="count"><?php echo $row1['idcount'] ?></span>
                                        </div>
                                        <div class="btn-right">
                                            <span class="btn-text">Wishlist</span>

                                            <span class="item-count"></span>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            }
                        }

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row2 = $result->fetch_assoc()) {
                            ?>




                                <div class="cart single-btn">
                                    <!-- <a data-bs-toggle="offcanvas" href="#cartOffcanvasSidebar" role="button" aria-controls="cartOffcanvasSidebar" class="cart-btn header-btn"> -->
                                    <a href="cart.php" class="cart-btn header-btn">
                                        <div class="btn-left">
                                            <i class="btn-icon flaticon-shopping-bag"></i>
                                            <span class="count"><?php echo $row2['ccount'] ?></span>
                                        </div>
                                        <div class="btn-right">
                                            <span class="btn-text">Your Cart</span>
                                            <span class="price" >Rs. <?php echo $row2['pricesum'] ?></span>
                                        </div>
                                    </a>
                                </div>
                    <?php
                            }
                        }
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <nav class="menu-area">
            <ul class="main-menu" style="height:60px">
                <li class="menu-item menu-item-has-children active">
                    <a class="menu-link" href="index.php">Home</a>
                    <!-- <ul class="sub-menu">
                         <li class="sub-menu-item"><a class="sub-menu-link" href="index.html">Home One</a></li>
                         <li class="sub-menu-item"><a class="sub-menu-link" href="index2.html">Home Two</a></li>
                         <li class="sub-menu-item"><a class="sub-menu-link" href="index3.html">Home Three</a></li>
                     </ul> -->
                </li>
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

                $sql = "SELECT category_Name,category_Id FROM category";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row1 = $result->fetch_assoc()) {
                ?>

                        <!-- echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " . $row["lastname"] . "<br>"; -->
                        <li class="menu-item mega-menu-parent">
                            <a class="menu-link" href="#"><?php echo $row1["category_Name"] ?> <i class="arrow-icon fas fa-angle-down"></i></a>
                            <div class="mega-menu-area">
                                <div class="container">
                                    <ul class="mega-menu">

                                        <li class="mega-menu-item">
                                            <a class="mega-menu-title" href="#">Sub-category</a>
                                            <ul class="menu-items">
                                                <?php
                                                $categoryid = $row1['category_Id'];
                                                $sql2 = "SELECT sub_Category_Name FROM sub_Category where sub_Category.category_Id = $categoryid";
                                                $result2 = $conn->query($sql2);

                                                if ($result2->num_rows > 0) {
                                                    // output data of each row
                                                    while ($row2 = $result2->fetch_assoc()) {
                                                ?>


                                                        <li class="mega-menu-items"><a class="mega-menu-link" href="shop-grid-left-sidebar.php?subcat=<?php echo $row2["sub_Category_Name"] ?>"><?php echo $row2["sub_Category_Name"] ?> </a></li>
                                                        <!-- <li class="mega-menu-items"><a class="mega-menu-link" href="shop-grid-right-sidebar.html">Shop Grid Rightsidebar </a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="shop-grid.html">Shop Grid No Sidebar <span class="menu-item-badge trending">Trending</span></a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="shop-list-left-sidebar.html">Shop List Leftsidebar</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="shop-list-right-sidebar.html">Shop List Rightsidebar</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="shop-list.html">Shop List No Sidebar</a></li> -->

                                                    <?php } ?>
                                            </ul>
                                        </li>
                                    <?php
                                                } else {
                                                    echo "0 results";
                                                }
                                    ?>
                                    <!-- </li> -->
                                    <!-- <li class="mega-menu-item">
                                                <a class="mega-menu-title" href="#">List Layout & Others</a>
                                                <ul class="menu-items">
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="single-product.html">Product Single 1</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="single-product-v2.html">Product Single 2</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="single-product-v3.html">Product Single 3</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="cart.html">Cart Page</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="checkout.html">Checkout Page</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="compare.html">Compare</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="wish-list.html">Wishlist</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="empty-wish-list.html">Empty Wishlist</a></li>
                                                </ul>
                                            </li> -->
                                    <!-- <li class="mega-menu-item">
                                                <a class="mega-menu-title" href="#">List Layout & Others</a>
                                                <ul class="menu-items">
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="single-product.html">Product Single 1</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="single-product-v2.html">Product Single 2</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="single-product-v3.html">Product Single 3</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="cart.html">Cart Page</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="checkout.html">Checkout Page</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="compare.html">Compare</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="wish-list.html">Wishlist</a></li>
                                                    <li class="mega-menu-items"><a class="mega-menu-link" href="empty-wish-list.html">Empty Wishlist</a></li>
                                                </ul>
                                            </li> -->
                                    <li class="mega-menu-item">
                                        <a class="mega-menu-banner" href="shop-grid.html">
                                            <?php if ($row1["category_Name"] == "Men") { ?>
                                                <img class="menu-banner-image" src="uploads/mens_images.webp" alt="mega-menu-banner" />
                                            <?php } else if ($row1["category_Name"] == "Women") { ?>
                                                <img class="menu-banner-image" src="uploads/womens.webp" alt="mega-menu-banner" />
                                            <?php } else { ?>
                                                <img class="menu-banner-image" src="uploads/kids.webp" alt="mega-menu-banner" />
                                            <?Php } ?>
                                        </a>
                                    </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                <?php }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>




                <!-- <li class="menu-item menu-item-has-children">
                        <a class="menu-link" href="#">Pages <i class="arrow-icon fas fa-angle-down"></i></a>
                        <ul class="sub-menu">
                            <li class="sub-menu-item"><a class="sub-menu-link" href="term-conditions.html">Term & Conditions</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="privacy-policy.html">Privacy Policy</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="shipping-return.html">Shipping & Return</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="faq.html">Frequently Asked Questions</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="refund-policy.html">Refund policy</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="error.html">Error Page</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="sign-in.php">Sign In</a></li>
                            <li class="sub-menu-item"><a class="sub-menu-link" href="sign-up.html">Sign Up</a></li>
                        </ul>
                    </li> -->

                <!-- <li class="menu-item"><a class="menu-link" href="about-us.php">about us</a></li>
                 <li class="menu-item menu-item-has-children">
                     <a class="menu-link" href="blog.php">Blog</a>
                     <!-- <ul class="sub-menu">
                         <li class="sub-menu-item"><a class="sub-menu-link" href="blog.php">Blog Grid</a></li>
                         <li class="sub-menu-item"><a class="sub-menu-link" href="single-blog.php">Blog Single</a></li>
                     </ul> -->
                <!-- </li>
                 <li class="menu-item"><a class="menu-link" href="contact.php">Contact</a></li> -->

            </ul>
        </nav>
    </div>
</header>