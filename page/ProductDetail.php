<?php


include '../inc/Header.php';

$cat = new product();
$review = new review();
$cats = new category();
$get = $cats->show_category();
$gets = $cats->show_category();
$catId = $_GET['productid'];
$getcatbyid = $cat->getproductbyid($catId);
$getcatbyidsssa = $cat->getproductbyid($catId);


$getcatbyidssss = $review->getreviewbyproduct($catId);
$getcatbyidssss1 = $review->getreviewbyproduct($catId);
$getcatbyidssss2 = $review->getreviewbyproduct($catId);
$getcatbyidssss3 = $review->getreviewbyproduct($catId);
$getcatbyidssss4 = $review->getreviewbyproduct($catId);
$getcatbyidssss5 = $review->getreviewbyproduct($catId);
$getcatbyidssss7 = $review->getreviewbyproduct($catId);

$code = new cart();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cart'])) {
    $codeinsert = $code->add_cart($_POST);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['review'])) {
    $reviewss = $review->insert_review($_POST);
    $getcatbyidssss = $review->getreviewbyproduct($catId);
    $getcatbyidssss1 = $review->getreviewbyproduct($catId);
    $getcatbyidssss2 = $review->getreviewbyproduct($catId);
    $getcatbyidssss3 = $review->getreviewbyproduct($catId);
    $getcatbyidssss4 = $review->getreviewbyproduct($catId);
    $getcatbyidssss5 = $review->getreviewbyproduct($catId);
    $getcatbyidssss7 = $review->getreviewbyproduct($catId);
}

?>
<!-- Header Area End -->

<!-- Breadcumb area Start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Product Detalis</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a>Home</a></li>
                    <li><a>Shop</a></li>
                    <li class="current"><a>Product Detalis Tab Style One</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($codeinsert)) {
    echo $codeinsert;
}
?>
<!-- Breadcumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="single-products-area section-padding section-md-padding">
        <div class="container">
            <!-- Single Product Start -->
            <?php
            if (isset($getcatbyid)) {
                $result = $getcatbyid->fetch_assoc();
                // echo  print_r($result);

            ?>
            <section class="mirora-single-product pb--80 pb-md--60">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Tab Content Start -->
                        <div class="tab-content product-details-thumb-large" id="myTabContent-3">
                            <div class="tab-pane fade show active" id="product-large-one">
                                <div class="product-details-img easyzoom">
                                    <a class="popup-btn"
                                        href="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>">
                                        <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>"
                                            alt="product">
                                    </a>
                                </div>
                            </div>

                        </div>
                        <!-- Tab Content End -->

                        <!-- Product Thumbnail Carousel Start -->

                        <!-- Product Thumbnail Carousel End -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Single Product Content Start -->
                        <div class="product-details-content">
                            <div class="product-details-top">
                                <h2 class="product-details-name"><?php echo $result['productname'] ?></h2>
                                <div class="ratings-wrap">
                                    <div class="ratings">

                                        <?php
                                            if (isset($getcatbyidssss3)) {
                                                if ($getcatbyidssss3 && $getcatbyidssss3->num_rows > 0) {
                                                    $i = 0;
                                                    $x = 0;
                                                    $z = 0;
                                                    while ($results = $getcatbyidssss3->fetch_assoc()) {
                                                        $x += $results['reviewrating'];

                                            ?>

                                        <?php
                                                        $i++;
                                                    };
                                                    $z = $x / $i;
                                                    echo ceil($z);
                                                } else {
                                                    ?>
                                        <?php
                                                }
                                            }
                                            ?>

                                        <?php
                                            if (isset($getcatbyidssss4)) {
                                                if ($getcatbyidssss4 && $getcatbyidssss4->num_rows > 0) {
                                                    $i = 0;
                                                    $x = 0;
                                                    $z = 0;
                                                    while ($results = $getcatbyidssss4->fetch_assoc()) {
                                                        $x += $results['reviewrating'];


                                                        $i++;
                                                    };
                                                    $z = $x / $i;


                                            ?>

                                        <?php
                                                    for ($is = 0; $is < 5; $is++) {
                                                        if ($is < $z) {
                                                    ?>
                                        <i class="fa fa-star rated"></i>
                                        <?php
                                                        } else {
                                                        ?>
                                        <i class="fa fa-star"></i>
                                        <?php
                                                        }
                                                        ?>

                                        <?php
                                                    }
                                                    ?>
                                        <?php
                                                } else {
                                                }
                                            }
                                            ?>



                                    </div>
                                    <span>
                                        <a class="review-btn" href="#singleProductTab">
                                            <?php
                                                if (isset($getcatbyidssss7)) {
                                                    if ($getcatbyidssss7 && $getcatbyidssss7->num_rows > 0) {
                                                        $i = 0;
                                                        $x = 0;
                                                        while ($results = $getcatbyidssss7->fetch_assoc()) {
                                                            $x += $results['reviewrating'];

                                                ?>

                                            <?php
                                                            $i++;
                                                        };

                                                        echo  $i;
                                                    } else {
                                                        ?>
                                            <?php
                                                    }
                                                }
                                                ?>
                                            Reviews</a>
                                        <a class="review-btn" href="#singleProductTab">write a review</a>
                                    </span>
                                </div>
                                <ul class="product-details-list list-unstyled">
                                    <li>Category: <a href="">
                                            <?php
                                                if (isset($get)) {
                                                    if ($get && $get->num_rows > 0) {
                                                        $i = 0;
                                                        while ($results = $get->fetch_assoc()) {
                                                            # code...
                                                ?>
                                            <?php
                                                            if ($results['categoryid'] == $result['productcat']) {
                                                                echo $results['categoryname'];
                                                            }

                                                            ?>

                                            <?php
                                                            $i++;
                                                        }
                                                    } else {
                                                        ?>
                                            <?php
                                                    }
                                                }
                                                ?>
                                        </a></li>
                                    <li>Stock: <?php echo $result['productstock'] ?></li>
                                    <li>Selled: <?php echo $result['productquantitysell'] ?></li>
                                </ul>
                                <div class="product-details-price-wrapper">
                                    <span
                                        class="money">$<?php echo number_format($result['productprice'] - ($result['productsale'] / 100 * $result['productprice'])); ?>.00</span>
                                    <span class="product-price-old">
                                        <span
                                            class="money">$<?php echo number_format($result['productprice']); ?>.00</span>
                                    </span>
                                </div>
                            </div>

                            <div class="product-details-bottom">

                                <p class="product-details-availability"><i
                                        class="fa fa-check-circle"></i><?php echo $result['productstock'] ?> In
                                    Stock</p>
                                <form action="" method="post">

                                    <div class="product-details-action-wrapper mb--20">
                                        <div class="product-details-action-top d-flex align-items-center mb--20">
                                            <div class="quantity">
                                                <span>Qty: </span>
                                                <input type="number" class="quantity-input" name="cartquantity"
                                                    id="pro_qty" value="1" min="1">
                                            </div>
                                            <button type="submit" name="cart" value="<?php echo $result['productid'] ?>"
                                                class="btn btn-medium btn-style-2 add-to-cart">
                                                Add To Cart
                                            </button>
                                        </div>
                                        <div class="product-details-action-bottom">
                                            <a href="wishlist.html">+Add to wishlist</a>
                                            <a href="compare.html">+Add to compare</a>
                                        </div>
                                    </div>
                                </form>
                                <p class="product-details-tags">
                                    Tags: <a href="shop.html">Sport</a>,
                                    <a href="shop.html">Luxury</a>
                                </p>
                                <div class="social-share">
                                    <a href="https://facebook.com" target="_blank" rel="noopener noreferrer"
                                        class="facebook share-button">
                                        <i class="fa fa-facebook"></i>
                                        <span>Like</span>
                                    </a>
                                    <a href="https://twitter.com" target="_blank" rel="noopener noreferrer"
                                        class="twitter share-button">
                                        <i class="fa fa-twitter"></i>
                                        <span>Tweet</span>
                                    </a>
                                    <a href="#" class="share share-button">
                                        <i class="fa fa-plus-square"></i>
                                        <span>Share</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product Content End -->
                    </div>
                </div>
            </section>
            <!-- Single Product End -->
            <?php
            } ?>
            <!-- Single Product Tab Start -->
            <section class="product-details-tab bg--dark-4 ptb--80 ptb-md--60">
                <div class="row">
                    <div class="col-12">
                        <ul class="product-details-tab-head nav nav-tab" id="singleProductTab" role="tablist">
                            <li class="nav-item product-details-tab-item">
                                <a class="nav-link product-details-tab-link active" id="nav-desc-tab"
                                    data-bs-toggle="tab" href="#nav-desc" role="tab" aria-controls="nav-desc"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item product-details-tab-item">
                                <a class="nav-link product-details-tab-link" id="nav-details-tab" data-bs-toggle="tab"
                                    href="#nav-details" role="tab" aria-controls="nav-details"
                                    aria-selected="true">Additional Information</a>
                            </li>

                            <li class="nav-item product-details-tab-item">
                                <a class="nav-link product-details-tab-link" id="nav-review-tab" data-bs-toggle="tab"
                                    href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="true">review
                                    (

                                    <?php
                                    if (isset($getcatbyidssss2)) {
                                        if ($getcatbyidssss2 && $getcatbyidssss2->num_rows > 0) {
                                            $i = 0;
                                            while ($results = $getcatbyidssss2->fetch_assoc()) {
                                                # code...

                                    ?>

                                    <?php
                                                $i++;
                                            };
                                            echo $i;
                                        } else {
                                            ?>
                                    <?php
                                        }
                                    }
                                    ?>
                                    )</a>
                            </li>
                        </ul>
                        <div class="product-details-tab-content tab-content">
                            <div class="tab-pane fade show active" id="nav-desc" role="tabpanel"
                                aria-labelledby="nav-desc-tab">
                                <?php echo $result['productdesc'] ?>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="nav-details" aria-labelledby="nav-details-tab">
                                <div class="product-details-additional-info">
                                    <h3>Additional Information</h3>
                                    <div class="table-content table-responsive">
                                        <table class="shop_attributes">
                                            <tr>
                                                <th>Name: </th>
                                                <td>
                                                    <p><?php

                                                        echo $result['productname'] ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Category: </th>
                                                <td>
                                                    <p>
                                                        <?php
                                                        if (isset($gets)) {
                                                            if ($gets && $gets->num_rows > 0) {
                                                                $i = 0;
                                                                while ($results = $gets->fetch_assoc()) {
                                                                    # code...
                                                        ?>
                                                        <?php
                                                                    if ($results['categoryid'] == $result['productcat']) {
                                                                        echo $results['categoryname'];
                                                                    }

                                                                    ?>

                                                        <?php
                                                                    $i++;
                                                                }
                                                            } else {
                                                                ?>
                                                        <?php
                                                            }
                                                        }
                                                        ?>
                                                    </p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Price: </th>
                                                <td>
                                                    <p><?php echo $result['productprice'] ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Stock: </th>
                                                <td>
                                                    <p><?php echo $result['productstock'] ?></p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Selled: </th>
                                                <td>
                                                    <p><?php echo $result['productquantitysell'] ?></p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="nav-review" aria-labelledby="nav-review-tab">
                                <div class="product-details-review-wrap">
                                    <h2 class="mb--20">
                                        <?php
                                        if (isset($getcatbyidssss1)) {
                                            if ($getcatbyidssss1 && $getcatbyidssss1->num_rows > 0) {
                                                $i = 0;
                                                while ($results = $getcatbyidssss1->fetch_assoc()) {
                                                    # code...

                                        ?>

                                        <?php
                                                    $i++;
                                                };
                                                echo $i;
                                            } else {
                                                ?>
                                        <?php
                                            }
                                        }
                                        ?>
                                        REVIEWS FOR ALIQUAM LOBORTIS</h2>
                                    <div class="review mb--40">


                                        <?php
                                        if (isset($getcatbyidssss)) {
                                            if ($getcatbyidssss && $getcatbyidssss->num_rows > 0) {
                                                $i = 0;
                                                while ($results = $getcatbyidssss->fetch_assoc()) {
                                                    # code...
                                        ?>

                                        <div class="review__single">
                                            <div class="review__meta">
                                                <p class="review__author"><?php echo $results['username'] ?></p>
                                                <p class="review__date"><?php echo $results['reviewdate'] ?></p>
                                            </div>
                                            <div class="review__content">
                                                <p class="review__text">
                                                    <?php echo $results['reviewcontent'] ?>
                                                </p>
                                                <div class="ratings">
                                                    <?php
                                                                for ($i = 0; $i < $results['reviewrating']; $i++) {
                                                                ?>
                                                    <i class="fa fa-star rated"></i>
                                                    <?php
                                                                }
                                                                ?>
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
                                    <h2 class="mb--20">Add a Review</h2>
                                    <form class="form form--review" method="post">
                                        <div class="form__group clearfix mb--20">
                                            <label class="form__label d-block">Your Ratings</label>
                                            <div class="rating">
                                                <input type="radio" id="star5" name="reviewrating" value="5" />
                                                <label class="full" for="star5" title="Awesome - 5 stars">
                                                </label>

                                                </label>
                                                <input type="radio" id="star4" name="reviewrating" value="4" />
                                                <label class="full" for="star4" title="Pretty good - 4 stars">
                                                </label>

                                                </label>
                                                <input type="radio" id="star3" name="reviewrating" value="3" />
                                                <label class="full" for="star3" title="Meh - 3 stars">
                                                </label>

                                                </label>
                                                <input type="radio" id="star2" name="reviewrating" value="2" />
                                                <label class="full" for="star2" title="Kinda bad - 2 stars">
                                                </label>

                                                </label>
                                                <input type="radio" id="star1" name="reviewrating" value="1" />
                                                <label class="full" for="star1" title="Sucks big time - 1 star">
                                                </label>

                                                </label>
                                            </div>
                                        </div>
                                        <div class="form__group clearfix mb--20" style="display: none;">
                                            <label class="form__label d-block" for="review_name">Name
                                                <sup>*</sup></label>
                                            <input id="review_name" name="reviewuserid"
                                                value="<?php echo $_SESSION['userid'] ?>" class="form__input">
                                        </div>
                                        <div class="form__group clearfix mb--20" style="display: none;">
                                            <label class="form__label d-block" for="review_email">Email
                                                <sup>*</sup></label>
                                            <input id="review_email" name="reviewproductid" value="<?php echo $catId ?>"
                                                class="form__input">
                                        </div>
                                        <div class="form__group clearfix mb--20">
                                            <label class="form__label d-block" for="review">Your Review
                                                <sup>*</sup></label>
                                            <textarea id="review" name="reviewcontent"
                                                class="form__input form__input--textarea"></textarea>
                                            <div class="help-block">
                                                <span>Note: </span>
                                                HTML is not translated!
                                            </div>
                                        </div>
                                        <div class="form__group text-right">
                                            <button type="submit" name="review" value="1"
                                                class="btn btn-medium btn-style-1">Continue</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Single Product Tab End -->

            <!-- Related Product Start -->
            <section class="related-products-area pt--80 pb--20 pb-md--15 pt-md--60">
                <div class="row">
                    <div class="col-12 mb--20">
                        <div class="section-title">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-carousel nav-top js-product-carousel-2">
                            <?php
                            if (isset($getcatbyidsssa)) {
                                $result = $getcatbyidsssa->fetch_assoc();
                                $getproductbycat = $cat->getproductbycat($result['productcat']);
                                if (isset($getproductbycat)) {
                                    if ($getproductbycat && $getproductbycat->num_rows > 0) {
                                        $i = 0;
                                        while ($result = $getproductbycat->fetch_assoc()) {


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
                            } ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Related Product End -->
        </div>
    </div>
</div>
<!-- Main Content Wrapper End -->


<!-- Footer Start -->
<?php
include '../inc/Footer.php';
?>