<?php
include __DIR__ . '/../inc/Header.php';
$class = new banner();
$show = $class->show_banner();

$classs = new blog();
$shows = $classs->show_blog();


$cat = new category();
$get = $cat->show_category();

$gets = $cat->show_category();

$classsss = new product();
$showssss = $classsss->show_product();




?>

<!-- Header Area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <!-- Slider area Start -->

    <div class="slider-area">
        <div class="homepage-slider">
            <?php
            if (isset($show)) {
                if ($show && $show->num_rows > 0) {
                    $i = 0;
                    while ($result = $show->fetch_assoc()) {

            ?>
            <!-- Single Slide Start -->
            <div class="single-slider content-v-center"
                style="background-image: url(<?php echo 'data:image/png;base64,' . base64_encode($result['bannerimg']); ?>)">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider-content">
                                <h5 data-animation="rollIn" data-duration=".8s" data-delay=".5s">Exclusive Offer
                                    -<?php echo $result['productsale']; ?>% Off This Week</h5>
                                <h1 data-animation="fadeInDown" data-duration=".8s" data-delay=".2s">
                                    <?php echo $result['productname']; ?></h1>
                                <p class="mb--30 mb-sm--20" data-animation="fadeInDown" data-duration=".8s"
                                    data-delay=".2s">H-Vault Watches Are A Lot Like Classic American Muscle Cars
                                    - Expect For The American Part That Is. </p>
                                <p class="mb--50 mb-sm--20" data-animation="fadeInDown" data-duration=".8s"
                                    data-delay=".2s">Starting At
                                    <strong>$<?php echo number_format($result['productprice'] - ($result['productsale'] / 100 * $result['productprice'])); ?>.00</strong>
                                </p>
                                <div class="slide-btn-group" data-animation="fadeInUp" data-duration="1s"
                                    data-delay=".3s">
                                    <a href="page/ProductDetail.php?productid=<?php echo  $result['productid']; ?>"
                                        class="btn btn-bordered btn-style-1">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide End -->
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
    </div>

    <!-- Slider area End -->

    <!-- Promo Box area Start -->

    <div class="promo-box-area border-bottom ptb--80 ptb-md--60">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-sm--30">
                    <div class="promo promo-1">
                        <a href="page/shop.php" class="promo__box">
                            <img src="assets/img/banner/img1-top-mirora1.jpg" alt="Product Category">
                            <span class="promo__content">
                                <span class="promo__label">Design Creative</span>
                                <span class="promo__name">Modern and Clean</span>
                                <span class="promo__price">From $60.99 - Sale 20%</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 mb-sm--30">
                    <div class="promo promo-1">
                        <a href="page/shop.php" class="promo__box">
                            <img src="assets/img/banner/img2-top-mirora1.jpg" alt="Product Category">
                            <span class="promo__content">
                                <span class="promo__label">Bestselling Products</span>
                                <span class="promo__name">Jewelry and Diamonds</span>
                                <span class="promo__price">Only from $89.00</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="promo promo-1">
                        <a href="page/shop.php" class="promo__box">
                            <img src="assets/img/banner/img3-top-mirora1.jpg" alt="Product Category">
                            <span class="promo__content">
                                <span class="promo__label">Onsale Products</span>
                                <span class="promo__name">Perfect Rider Watch</span>
                                <span class="promo__price">Selling Off 30%</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row mt--40 mt-md--30">
                <div class="col-12 text-center">
                    <p class="tweet"><i class="fa fa-twitter"></i> Check out "Alice - Multipurpose Responsive
                        #Magento #Theme" on #Envato by @Plazathemes #Themeforest <a href="#">https://t.co/DNdhAwzm88</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Promo Box area End -->

    <!-- Products Tab area Start -->

    <div class="product-tab pt--80 pb--60 pt-md--60 pb-md--45">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <ul class="nav nav-tabs product-tab__head" id="product-tab" role="tablist">
                        <li class="product-tab__item nav-item active">
                            <a class="product-tab__link nav-link active" id="nav-featured-tab" data-bs-toggle="tab"
                                href="#nav-featured" role="tab" aria-selected="true">Mới nhất</a>
                        </li>
                        <?php
                        if (isset($get)) {
                            if ($get && $get->num_rows > 0) {
                                $i = 0;
                                while ($result = $get->fetch_assoc()) {
                                    # code...
                        ?>
                        <li class="product-tab__item nav-item">
                            <a class="product-tab__link nav-link" id="nav-new-tab" data-bs-toggle="tab"
                                href="#nav-<?php echo $result['categoryid'] ?>" role="tab"
                                aria-selected="false"><?php echo $result['categoryname'] ?></a>
                        </li>
                        <?php
                                    $i++;
                                }
                            } else {
                                ?>
                        <?php
                            }
                        }
                        ?>

                    </ul>
                    <div class="tab-content product-tab__content" id="product-tabContent">
                        <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                            <div class="product-carousel js-product-carousel">
                                <?php
                                if (isset($showssss)) {
                                    if ($showssss && $showssss->num_rows > 0) {
                                        $i = 0;
                                        while ($result = $showssss->fetch_assoc()) {
                                            # code...
                                ?>
                                <div class="mirora-product">
                                    <div class="product-img">
                                        <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>"
                                            alt="Product" class="primary-image" />
                                        <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>"
                                            alt="Product" class="secondary-image" />
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -<?php echo $result['productsale']; ?>%
                                            </span>
                                            <a href="page/ProductDetail.php?productid=<?php echo $result['productid']; ?>"
                                                class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                                View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span><?php echo  $result['categoryname']; ?></span>
                                        <h4><a
                                                href="page/ProductDetail.php?productid=<?php echo $result['productid']; ?>"><?php echo  $result['productname']; ?></a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$
                                                <?php echo  number_format($result['productprice'] - ($result['productsale'] / 100 * $result['productprice'])); ?>.00</span>
                                            <span class="product-price-old">
                                                <span
                                                    class="money">$<?php echo number_format($result['productprice']) ?>.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mirora_product_action text-center position-absolute">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <p>
                                            Tồn kho : <?php echo  $result['productstock']; ?>
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html"
                                                title="wishlist"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-bs-toggle="modal"
                                                data-bs-target="#productModal" href="compare.html">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
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
                        </div>
                        <?php
                        if (isset($gets)) {
                            if ($gets && $gets->num_rows > 0) {
                                $i = 0;
                                while ($result = $gets->fetch_assoc()) {
                                    # code...
                        ?>



                        <div class="tab-pane fade" id="nav-<?php echo $result['categoryid'] ?>" role="tabpanel">
                            <div class="product-carousel js-product-carousel">
                                <?php
                                            $getbycat = $classsss->getproductbycat($result['categoryid']);
                                            ?>
                                <?php
                                            if (isset($getbycat)) {
                                                if ($getbycat && $getbycat->num_rows > 0) {
                                                    $i = 0;
                                                    while ($result = $getbycat->fetch_assoc()) {
                                                        # code...
                                            ?>
                                <div class="mirora-product">
                                    <div class="product-img">
                                        <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>"
                                            alt="Product" class="primary-image" />
                                        <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>"
                                            alt="Product" class="secondary-image" />
                                        <div class="product-img-overlay">
                                            <span class="product-label discount">
                                                -<?php echo $result['productsale']; ?>%
                                            </span>
                                            <a href="page/ProductDetail.php?productid=<?php echo $result['productid']; ?>"
                                                class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                                View</a>
                                        </div>
                                    </div>
                                    <div class="product-content text-center">
                                        <span>Cartier</span>
                                        <h4><a
                                                href="page/ProductDetail.php?productid=<?php echo $result['productid']; ?>"><?php echo  $result['productname']; ?></a>
                                        </h4>
                                        <div class="product-price-wrapper">
                                            <span class="money">$
                                                <?php echo  number_format($result['productprice'] - ($result['productsale'] / 100 * $result['productprice'])); ?>.00</span>
                                            <span class="product-price-old">
                                                <span
                                                    class="money">$<?php echo number_format($result['productprice']) ?>.00</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="mirora_product_action text-center position-absolute">
                                        <div class="product-rating">
                                            <span>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star theme-star"></i>
                                                <i class="fa fa-star"></i>
                                            </span>
                                        </div>
                                        <p>
                                            Tồn kho : <?php echo  $result['productstock']; ?>
                                        </p>
                                        <div class="product-action">
                                            <a class="same-action" href="wishlist.html" title="wishlist">
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                            <a class="add_cart cart-item action-cart" href="cart.html"
                                                title="wishlist"><span>Add to cart</span></a>
                                            <a class="same-action compare-mrg" data-bs-toggle="modal"
                                                data-bs-target="#productModal" href="compare.html">
                                                <i class="fa fa-sliders fa-rotate-90"></i>
                                            </a>
                                        </div>
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
                </div>
            </div>
        </div>
    </div>

    <!-- Products Tab area End -->

    <!-- Banner area Start -->

    <section class="banner-area banner-bg-1 ptb--80 ptb-md--60">
        <div class="banner-box text-center">
            <h5 class="banner__label">Sale Off 20% All Products</h5>
            <h2 class="banner__name">New Trending Collection</h2>
            <p class="banner__text mb--50 mb-md--20">We Believe That Good Design is Always in Season</p>
            <a href="page/shop.php" class="btn btn-bordered btn-style-1">Shop Now</a>
        </div>
    </section>

    <!-- Banner area End -->

    <!-- Most Viewed Product area Start -->

    <section class="mostviewed-product-area border-bottom pt--80 pb--60 pt-md--60 pb-md--50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb--15">
                        <h2 class="color--white">Mostviewed Products</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="product-carousel nav-top js-product-carousel-2">
                        <div class="mirora-product">
                            <div class="product-img">
                                <img src="assets/img/products/2-450x450.jpg" alt="Product" class="primary-image" />
                                <img src="assets/img/products/2-2-450x450.jpg" alt="Product" class="secondary-image" />
                                <div class="product-img-overlay">
                                    <span class="product-label discount">
                                        -7%
                                    </span>
                                    <a data-bs-toggle="modal" data-bs-target="#productModal"
                                        class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                        View</a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <span>Cartier</span>
                                <h4><a href="page/ProductDetail.php?productid=<?php echo $result['productid']; ?>">Acer
                                        Aspire E 15</a></h4>
                                <div class="product-price-wrapper">
                                    <span class="money">$550.00</span>
                                    <span class="product-price-old">
                                        <span class="money">$700.00</span>
                                    </span>
                                </div>
                            </div>
                            <div class="mirora_product_action text-center position-absolute">
                                <div class="product-rating">
                                    <span>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content...
                                </p>
                                <div class="product-action">
                                    <a class="same-action" href="wishlist.html" title="wishlist">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="add_cart cart-item action-cart" href="cart.html"
                                        title="wishlist"><span>Add to cart</span></a>
                                    <a class="same-action compare-mrg" data-bs-toggle="modal"
                                        data-bs-target="#productModal" href="compare.html">
                                        <i class="fa fa-sliders fa-rotate-90"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mirora-product">
                            <div class="product-img">
                                <img src="assets/img/products/4-450x450.jpg" alt="Product" class="primary-image" />
                                <img src="assets/img/products/4-4-450x450.jpg" alt="Product" class="secondary-image" />
                                <div class="product-img-overlay">
                                    <span class="product-label discount">
                                        -7%
                                    </span>
                                    <a data-bs-toggle="modal" data-bs-target="#productModal"
                                        class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                        View</a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <span>Cartier</span>
                                <h4><a href="page/ProductDetail.php?productid=<?php echo $result['productid']; ?>">Acer
                                        Aspire E 15</a></h4>
                                <div class="product-price-wrapper">
                                    <span class="money">$550.00</span>
                                    <span class="product-price-old">
                                        <span class="money">$700.00</span>
                                    </span>
                                </div>
                            </div>
                            <div class="mirora_product_action text-center position-absolute">
                                <div class="product-rating">
                                    <span>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content...
                                </p>
                                <div class="product-action">
                                    <a class="same-action" href="wishlist.html" title="wishlist">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="add_cart cart-item action-cart" href="cart.html"
                                        title="wishlist"><span>Add to cart</span></a>
                                    <a class="same-action compare-mrg" data-bs-toggle="modal"
                                        data-bs-target="#productModal" href="compare.html">
                                        <i class="fa fa-sliders fa-rotate-90"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mirora-product">
                            <div class="product-img">
                                <img src="assets/img/products/6-450x450.jpg" alt="Product" class="primary-image" />
                                <img src="assets/img/products/6-6-450x450.jpg" alt="Product" class="secondary-image" />
                                <div class="product-img-overlay">
                                    <span class="product-label discount">
                                        -7%
                                    </span>
                                    <a data-bs-toggle="modal" data-bs-target="#productModal"
                                        class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                        View</a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <span>Cartier</span>
                                <h4><a href="page/ProductDetail.php?productid=<?php echo $result['productid']; ?>">Acer
                                        Aspire E 15</a></h4>
                                <div class="product-price-wrapper">
                                    <span class="money">$550.00</span>
                                    <span class="product-price-old">
                                        <span class="money">$700.00</span>
                                    </span>
                                </div>
                            </div>
                            <div class="mirora_product_action text-center position-absolute">
                                <div class="product-rating">
                                    <span>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content...
                                </p>
                                <div class="product-action">
                                    <a class="same-action" href="wishlist.html" title="wishlist">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="add_cart cart-item action-cart" href="cart.html"
                                        title="wishlist"><span>Add to cart</span></a>
                                    <a class="same-action compare-mrg" data-bs-toggle="modal"
                                        data-bs-target="#productModal" href="compare.html">
                                        <i class="fa fa-sliders fa-rotate-90"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mirora-product">
                            <div class="product-img">
                                <img src="assets/img/products/8-450x450.jpg" alt="Product" class="primary-image" />
                                <img src="assets/img/products/8-8-450x450.jpg" alt="Product" class="secondary-image" />
                                <div class="product-img-overlay">
                                    <span class="product-label discount">
                                        -7%
                                    </span>
                                    <a data-bs-toggle="modal" data-bs-target="#productModal"
                                        class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                        View</a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <span>Cartier</span>
                                <h4><a href="page/ProductDetail.php?productid=<?php echo $result['productid']; ?>">Acer
                                        Aspire E 15</a></h4>
                                <div class="product-price-wrapper">
                                    <span class="money">$550.00</span>
                                    <span class="product-price-old">
                                        <span class="money">$700.00</span>
                                    </span>
                                </div>
                            </div>
                            <div class="mirora_product_action text-center position-absolute">
                                <div class="product-rating">
                                    <span>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content...
                                </p>
                                <div class="product-action">
                                    <a class="same-action" href="wishlist.html" title="wishlist">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="add_cart cart-item action-cart" href="cart.html"
                                        title="wishlist"><span>Add to cart</span></a>
                                    <a class="same-action compare-mrg" data-bs-toggle="modal"
                                        data-bs-target="#productModal" href="compare.html">
                                        <i class="fa fa-sliders fa-rotate-90"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mirora-product">
                            <div class="product-img">
                                <img src="assets/img/products/10-450x450.jpg" alt="Product" class="primary-image" />
                                <img src="assets/img/products/10-10-450x450.jpg" alt="Product"
                                    class="secondary-image" />
                                <div class="product-img-overlay">
                                    <span class="product-label discount">
                                        -7%
                                    </span>
                                    <a data-bs-toggle="modal" data-bs-target="#productModal"
                                        class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                        View</a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <span>Cartier</span>
                                <h4><a href="page/ProductDetail.php?productid=<?php echo $result['productid']; ?>">Acer
                                        Aspire E 15</a></h4>
                                <div class="product-price-wrapper">
                                    <span class="money">$550.00</span>
                                    <span class="product-price-old">
                                        <span class="money">$700.00</span>
                                    </span>
                                </div>
                            </div>
                            <div class="mirora_product_action text-center position-absolute">
                                <div class="product-rating">
                                    <span>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content...
                                </p>
                                <div class="product-action">
                                    <a class="same-action" href="wishlist.html" title="wishlist">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="add_cart cart-item action-cart" href="cart.html"
                                        title="wishlist"><span>Add to cart</span></a>
                                    <a class="same-action compare-mrg" data-bs-toggle="modal"
                                        data-bs-target="#productModal" href="compare.html">
                                        <i class="fa fa-sliders fa-rotate-90"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mirora-product">
                            <div class="product-img">
                                <img src="assets/img/products/12-450x450.jpg" alt="Product" class="primary-image" />
                                <img src="assets/img/products/12-12-450x450.jpg" alt="Product"
                                    class="secondary-image" />
                                <div class="product-img-overlay">
                                    <span class="product-label discount">
                                        -7%
                                    </span>
                                    <a data-bs-toggle="modal" data-bs-target="#productModal"
                                        class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                        View</a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <span>Cartier</span>
                                <h4><a href="page/ProductDetail.php?productid=<?php echo $result['productid']; ?>">Acer
                                        Aspire E 15</a></h4>
                                <div class="product-price-wrapper">
                                    <span class="money">$550.00</span>
                                    <span class="product-price-old">
                                        <span class="money">$700.00</span>
                                    </span>
                                </div>
                            </div>
                            <div class="mirora_product_action text-center position-absolute">
                                <div class="product-rating">
                                    <span>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content...
                                </p>
                                <div class="product-action">
                                    <a class="same-action" href="wishlist.html" title="wishlist">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="add_cart cart-item action-cart" href="cart.html"
                                        title="wishlist"><span>Add to cart</span></a>
                                    <a class="same-action compare-mrg" data-bs-toggle="modal"
                                        data-bs-target="#productModal" href="compare.html">
                                        <i class="fa fa-sliders fa-rotate-90"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mirora-product">
                            <div class="product-img">
                                <img src="assets/img/products/14-450x450.jpg" alt="Product" class="primary-image" />
                                <img src="assets/img/products/14-14-450x450.jpg" alt="Product"
                                    class="secondary-image" />
                                <div class="product-img-overlay">
                                    <span class="product-label discount">
                                        -7%
                                    </span>
                                    <a data-bs-toggle="modal" data-bs-target="#productModal"
                                        class="btn btn-transparent btn-fullwidth btn-medium btn-style-1">Quick
                                        View</a>
                                </div>
                            </div>
                            <div class="product-content text-center">
                                <span>Cartier</span>
                                <h4><a href="page/ProductDetail.php?productid=<?php echo $result['productid']; ?>">Acer
                                        Aspire E 15</a></h4>
                                <div class="product-price-wrapper">
                                    <span class="money">$550.00</span>
                                    <span class="product-price-old">
                                        <span class="money">$700.00</span>
                                    </span>
                                </div>
                            </div>
                            <div class="mirora_product_action text-center position-absolute">
                                <div class="product-rating">
                                    <span>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star theme-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                </div>
                                <p>
                                    It is a long established fact that a reader will be distracted by the
                                    readable content...
                                </p>
                                <div class="product-action">
                                    <a class="same-action" href="wishlist.html" title="wishlist">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                    <a class="add_cart cart-item action-cart" href="cart.html"
                                        title="wishlist"><span>Add to cart</span></a>
                                    <a class="same-action compare-mrg" data-bs-toggle="modal"
                                        data-bs-target="#productModal" href="compare.html">
                                        <i class="fa fa-sliders fa-rotate-90"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Most Viewed Product area End -->

    <!-- Blog area Start -->

    <section class="blog-area pt--80 pb--40 pt-md--60 pb-md--30">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title mb--30">
                        <h2>Form Our Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="blog-carousel nav-top slick-item-gutter">
                        <?php
                        if (isset($shows)) {
                            if ($shows && $shows->num_rows > 0) {
                                $i = 0;
                                while ($results = $shows->fetch_assoc()) {
                                    # code...
                        ?>

                        <article class="blog">
                            <a href="page/blogdetail.php?blogid=<?php echo  $results['blogid']; ?>" class="blog__thumb">
                                <img src="<?php echo 'data:image/png;base64,' . base64_encode($results['blogimg']); ?>"
                                    alt="Blog">
                            </a>
                            <div class="blog__content">
                                <div class="blog__meta">
                                    <p class="blog__author">Post By: <a href="blog.html">Admin</a></p>
                                    <p class="blog__date"><a href="blog.html"><?php echo  $results['blogdate']; ?></a>
                                    </p>
                                </div>

                                <h3 class="blog__title"><a
                                        href="page/blogdetail.php?blogid=<?php echo  $results['blogid']; ?>"><?php echo  $results['blogtitle']; ?></a>
                                </h3>
                                <div class="blog__text">
                                    <p><?php echo  $results['blogheader']; ?></p>
                                    <a class="read-more"
                                        href="page/blogdetail.php?blogid=<?php echo  $results['blogid']; ?>">Read
                                        More</a>
                                </div>

                            </div>
                        </article>
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
                </div>
            </div>
            <div class="row mt--35 mt-md--25">
                <div class="col-12 text-center">
                    <a href="https://instagram.com" target="_blank" rel="noopener noreferrer"
                        class="btn btn-medium btn-style-2"><i class="fa fa-instagram"></i>Instagram</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog area End -->

    <!-- Newsletter area End -->

    <div class="newsletter-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-10">
                    <div class="newsletter text-center">
                        <h3 class="color--white">Join Our Newsletters Now!</h3>
                        <p>Typi non habent claritatem insitam est usus legentis in qui facit eorum claritatem,
                            investigationes demonstraverunt lectores legere me lius quod legunt saepius.</p>

                        <form class="newsletter-form validate mt--40"
                            action="https://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&id=05d85f18ef"
                            method="post" id="mc-embedded-newsletter-form" name="mc-embedded-newsletter-form"
                            target="_blank" novalidate="">
                            <input type="email" name="email" id="sub_email"
                                placeholder="Enter your email address here.." class="newsletter-form__input">
                            <input type="submit" value="Subscribe" class="btn newsletter-btn btn-style-1">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter area End -->

    <!-- Promo Box area Start -->

    <div class="promo-box-area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-6 mb-sm--20">
                    <div class="promo">
                        <a href="page/shop.php" class="promo__box promo__box-2">
                            <img src="assets/img/banner/img1-bottom-mirora1.jpg" alt="Product Category">
                            <span class="promo__content promo__content-2">
                                <span class="promo__label">New Arrivals 2018</span>
                                <span class="promo__name">Luxury Perfume 2018</span>
                                <span class="promo__price">Men's and Woman's Accessories</span>
                                <span class="promo__link">Discover Now</span>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="promo">
                        <a href="page/shop.php" class="promo__box promo__box-2">
                            <img src="assets/img/banner/img2-bottom-mirora1.jpg" alt="Product Category">
                            <span class="promo__content promo__content-2">
                                <span class="promo__label">Trending Products 2018</span>
                                <span class="promo__name">Maurice Lacroix Watch</span>
                                <span class="promo__price">Only from $162.00 - Sale 20% Off</span>
                                <span class="promo__link">Discover Now</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Promo Box area End -->
</div>
<!-- Main Content Wrapper Start -->

<!-- Footer Start -->
<?php
include __DIR__ .  '/../inc/Footer.php';
?>