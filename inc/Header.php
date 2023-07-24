<?php
include_once __DIR__ . '/../config/config.php';
$host = HOST;
session_start();
include_once __DIR__ .  '/../classes/About.class.php';
include_once __DIR__ .  '/../classes/Banner.class.php';
include_once __DIR__ .  '/../classes/Blog.class.php';
include_once __DIR__ .  '/../classes/Cart.class.php';
include_once __DIR__ .  '/../classes/Category.class.php';
include_once __DIR__ .  '/../classes/Code.class.php';
include_once __DIR__ .  '/../classes/Compare.class.php';
include_once __DIR__ .  '/../classes/Contact.class.php';
include_once __DIR__ .  '/../classes/Order.class.php';
include_once __DIR__ .  '/../classes/Product.class.php';
include_once __DIR__ .  '/../classes/Review.class.php';
include_once __DIR__ .  '/../classes/User.class.php';
include_once __DIR__ .  '/../classes/Wishlist.class.php';
$logout = new user();
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $logout->logout();
}

$class = new cart();
if (isset($_SESSION['userid'])) {
    $show = $class->show_cart_user($_SESSION['userid']);
    $show1 = $class->show_cart_user($_SESSION['userid']);
    $show2 = $class->show_cart_user($_SESSION['userid']);
    $show3 = $class->show_cart_user($_SESSION['userid']);
}

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="meta description">
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo $host ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo $host ?>assets/img/icon.png">

    <!-- Title -->
    <title>PS26819 - Luxury Store </title>

    <!-- ************************* CSS Files ************************* -->

    <!-- Bootstrap CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="<?php echo $host ?>assets/css/bootstrap.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo $host ?>assets/css/font-awesome.min.css">

    <!-- Elegent Icon CSS -->
    <link rel="stylesheet" href="<?php echo $host ?>assets/css/elegent-icons.css">

    <!-- All Plugins CSS css -->
    <link rel="stylesheet" href="<?php echo $host ?>assets/css/plugins.css">

    <!-- style css -->
    <link rel="stylesheet" href="<?php echo $host ?>assets/css/main.css">

    <!-- modernizr JS
    ============================================ -->
    <script src="<?php echo $host ?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


    <!-- Main Wrapper Start -->
    <div class="wrapper bg--shaft">
        <!-- Header Area Start -->
        <!-- Header Area Start -->
        <header class="header headery-style-1">
            <div class="header-top header-top-1">
                <div class="container">
                    <div class="row no-gutters align-items-center">
                        <div class="col-lg-8 d-flex align-items-center flex-column flex-lg-row">
                            <ul class="social social-round mr--20">
                                <li class="social__item">
                                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="social__link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://plus.google.com" target="_blank" rel="noopener noreferrer" class="social__link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social__link">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://youtube.com" target="_blank" rel="noopener noreferrer" class="social__link">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                                <li class="social__item">
                                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" class="social__link">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                            <p class="header-text">Free shipping on all domestic orders with coupon code
                                <span>“Watches2018”</span>
                            </p>
                        </div>
                        <div class="col-lg-4">
                            <div class="header-top-nav d-flex justify-content-lg-end justify-content-center">
                                <div class="language-selector header-top-nav__item">
                                    <div class="dropdown header-top__dropdown">
                                        <a class="dropdown-toggle" id="languageID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            EN-GB
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="languageID">
                                            <a class="dropdown-item" href="<?php echo $host ?>page/Home.php"><img src="<?php echo $host ?>assets/img/header/1.jpg" alt="English">
                                                English</a>
                                            <a class="dropdown-item" href="<?php echo $host ?>page/Home.php"><img src="<?php echo $host ?>assets/img/header/2.jpg" alt="Français">
                                                Français</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="currency-selector header-top-nav__item">
                                    <div class="dropdown header-top__dropdown">

                                        <a class="dropdown-toggle" id="currencyID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            USD
                                            <i class="fa fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="currencyID">
                                            <a class="dropdown-item" href="<?php echo $host ?>page/Home.php">&euro;
                                                Uro</a>
                                            <a class="dropdown-item" href="<?php echo $host ?>page/Home.php">&pound;
                                                Pound Sterling</a>
                                            <a class="dropdown-item" href="<?php echo $host ?>page/Home.php">&dollar; Us
                                                Dollar</a>
                                        </div>
                                    </div>
                                </div>

                                <?php
                                if (isset($_SESSION['userid'])) {
                                ?>
                                    <div class="user-info header-top-nav__item">
                                        <div class="dropdown header-top__dropdown">
                                            <a class="dropdown-toggle" href="<?php echo $host ?>page/myaccount.php" id="userID">
                                                My Account

                                            </a>

                                        </div>
                                    </div>
                                <?php
                                } else {

                                ?>
                                    <div class="user-info header-top-nav__item">
                                        <div class="dropdown header-top__dropdown">
                                            <a class="dropdown-toggle" id="userID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                My Account
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="userID">
                                                <a class="dropdown-item" href="<?php echo $host ?>page/register_login.php">Register</a>
                                                <a class="dropdown-item" href="<?php echo $host ?>page/register_login.php">Log In</a>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle header-top-1">
                <div class="container">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-5 col-sm-6 order-lg-1 order-2">
                            <div class="contact-info">
                                <img src="<?php echo $host ?>assets/img/icons/icon_phone.png" alt="Phone Icon">
                                <p>Call us <br> Free Support: (012) 800 456 789</p>
                            </div>
                        </div>
                        <div class="col-lg-2 col-12 order-lg-2 order-1 text-center">
                            <a href="<?php echo $host ?>page/Home.php" class="logo-box mb-md--30">
                                <img src="<?php echo $host ?>assets/img/logo/logo.png" alt="logo">
                            </a>
                        </div>
                        <div class="col-lg-5 col-md-7 col-sm-6 order-lg-3 order-3">
                            <div class="header-toolbar">
                                <div class="search-form-wrapper search-hide">
                                    <form action="#" class="search-form">
                                        <input type="text" name="search" id="search" class="search-form__input" placeholder="Search entire store here..">
                                        <button type="submit" class="search-form__submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                                <ul class="header-toolbar-icons">

                                    <li class="wishlist-icon">
                                        <a href="Wishlist.php" class="bordered-icon"><i class="fa fa-heart"></i></a>
                                    </li>
                                    <li class="mini-cart-icon">
                                        <div class="mini-cart mini-cart--1">
                                            <a class="mini-cart__dropdown-toggle bordered-icon" id="cartDropdown">
                                                <?php
                                                if (isset($show2)) {
                                                    if ($show2 && $show2->num_rows > 0) {
                                                        $i = 0;
                                                        $z = 0;
                                                        while ($result = $show2->fetch_assoc()) {
                                                            $z++;
                                                        }
                                                        # code...
                                                ?>
                                                        <span class="mini-cart__count"> <?php echo ($z) ?></span>
                                                    <?php
                                                        $i++;
                                                    } else {
                                                    ?>
                                                <?php
                                                    }
                                                }
                                                ?>
                                                <i class=" fa fa-shopping-cart mini-cart__icon"></i>
                                                <?php
                                                if (isset($show1)) {
                                                    if ($show1 && $show1->num_rows > 0) {
                                                        $i = 0;
                                                        $z = 0;
                                                        while ($result = $show1->fetch_assoc()) {
                                                            $z +=  (($result['productprice']  - ($result['productprice'] * $result['productsale'] / 100))  * $result['cartquantity']);
                                                        }
                                                        # code...
                                                ?>

                                                        <span class="mini-cart__ammount">$
                                                            <?php echo number_format($z) ?>.00 <i class="fa fa-angle-down"></i></span>

                                                    <?php
                                                        $i++;
                                                    } else {
                                                    ?>
                                                <?php
                                                    }
                                                }
                                                ?>
                                            </a>
                                            <div class="mini-cart__dropdown-menu">
                                                <div class="mini-cart__content" id="miniCart">
                                                    <div class="mini-cart__item">

                                                        <?php
                                                        if (isset($show)) {
                                                            if ($show && $show->num_rows > 0) {
                                                                $i = 0;
                                                                while ($result = $show->fetch_assoc()) {
                                                                    # code...
                                                        ?>
                                                                    <div class="mini-cart__item--single">
                                                                        <div class="mini-cart__item--image">
                                                                            <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>" alt="product">
                                                                        </div>
                                                                        <div class="mini-cart__item--content">
                                                                            <h4 class="mini-cart__item--name"><a href="product-details.html"><?php echo $result['productname'] ?></a>
                                                                            </h4>
                                                                            <p class="mini-cart__item--quantity">
                                                                                x<?php echo $result['cartquantity'] ?></p>
                                                                            <p class="mini-cart__item--price">
                                                                                $<?php echo number_format($result['productprice']  - ($result['productprice'] * $result['productsale'] / 100)) ?>.00
                                                                            </p>
                                                                        </div>

                                                                    </div>

                                                                <?php
                                                                    $i++;
                                                                }
                                                            } else {
                                                                ?>
                                                        <?php
                                                            }
                                                        }
                                                        ?>

                                                    </div>
                                                    <div class="mini-cart__calculation">
                                                        <p>
                                                            <span class="mini-cart__calculation--item">Sub-Total
                                                                :</span>
                                                            <span class="mini-cart__calculation--ammount">$1,070.00</span>
                                                        </p>
                                                        <p>
                                                            <span class="mini-cart__calculation--item">Eco Tax (-2.00)
                                                                :</span>
                                                            <span class="mini-cart__calculation--ammount">$4.00</span>
                                                        </p>
                                                        <p>
                                                            <span class="mini-cart__calculation--item">Eco VAT (20%)
                                                                :</span>
                                                            <span class="mini-cart__calculation--ammount">$214.00</span>
                                                        </p>
                                                        <p>
                                                            <span class="mini-cart__calculation--item">Eco Total
                                                                :</span>
                                                            <span class="mini-cart__calculation--ammount">
                                                                $1,288.00</span>
                                                        </p>
                                                    </div>
                                                    <div class="mini-cart__btn">
                                                        <a href="<?php echo $host ?>page/cart.php" class="btn btn-fullwidth btn-style-1">View
                                                            Cart</a>
                                                        <a href="<?php echo $host ?>page/checkout.php" class="btn btn-fullwidth btn-style-1">Checkout</a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-top-1 position-relative navigation-wrap fixed-header">
                <div class="container position-static">
                    <div class="row">
                        <div class="col-12 position-static text-center">
                            <nav class="main-navigation">
                                <ul class="mainmenu">
                                    <li class="mainmenu__item active  ">
                                        <a href="<?php echo $host ?>page/Home.php" class="mainmenu__link">Home</a>

                                    </li>



                                    <li class="mainmenu__item">
                                        <a href="<?php echo $host ?>page/Shop.php" class="mainmenu__link">Shop</a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="<?php echo $host ?>page/Blog.php" class="mainmenu__link">Blog</a>
                                    </li>

                                    <li class="mainmenu__item">
                                        <a href="<?php echo $host ?>page/Aboutus.php" class="mainmenu__link">About
                                            Us</a>
                                    </li>
                                    <li class="mainmenu__item">
                                        <a href="<?php echo $host ?>page/Contact.php" class="mainmenu__link">contact
                                            Us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-12">
                            <div class="mobile-menu"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>