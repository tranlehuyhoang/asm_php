<?php
include '../inc/Header.php';
?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Wishlist</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="page/home.php">Home</a></li>
                    <li class="current"><a href="checkout.html">Wishlist</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main-content-wrapper">
    <div class="wishlist-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <!-- Wishlist Area Start -->
            <div class="wishlist-wrapper bg--2">
                <div class="row">
                    <div class="col-12">
                        <form action="#" class="form form--cart">
                            <div class="wishlist-table table-content table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>remove</th>
                                            <th>Images</th>
                                            <th>Product</th>
                                            <th>Unit Price</th>
                                            <th>Stock Status</th>
                                            <th>Add to Cart</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a class="delete" href="#"><i class="fa fa-times"></i></a></td>
                                            <td>
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/1-450x450.jpg" alt="product">
                                                </a>
                                            </td>
                                            <td>
                                                <h3><a href="product-details.html">Integer eget augue</a></h3>
                                            </td>
                                            <td class="cart-product-price"><strong>$28.00</strong></td>
                                            <td>
                                                <span class="in-stock">In Stock</span>
                                            </td>
                                            <td><a href="cart.html" class="btn add-to-cart btn-medium btn-style-2">Add
                                                    to Cart</a></td>
                                        </tr>
                                        <tr>
                                            <td><a class="delete" href="#"><i class="fa fa-times"></i></a></td>
                                            <td>
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/1-450x450.jpg" alt="product">
                                                </a>
                                            </td>
                                            <td>
                                                <h3><a href="product-details.html">Dignissim venenatis</a></h3>
                                            </td>
                                            <td class="cart-product-price"><strong>$28.00</strong></td>
                                            <td>
                                                <span class="out-stock">Out Stock</span>
                                            </td>
                                            <td><a href="cart.html" class="btn disabled add-to-cart btn-medium btn-style-2">Add to
                                                    Cart</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Wishlist Area End -->
        </div>
    </div>
</div>
<?php
include '../inc/Footer.php';
?>