<?php
include '../inc/Header.php';
?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Cart</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="page/home.php">Home</a></li>
                    <li class="current"><a href="cart.html">Cart</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main-content-wrapper">
    <div class="cart-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="cart-wrapper bg--2 mb--80 mb-md--60">
                <div class="row">
                    <div class="col-12">
                        <!-- Cart Area Start -->
                        <form action="#" class="form cart-form">
                            <div class="cart-table table-content table-responsive">
                                <table class="table mb--30">
                                    <thead>
                                        <tr>
                                            <th>remove</th>
                                            <th>Images</th>
                                            <th>Product</th>
                                            <th>Unit Price</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
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
                                            <td class="wide-column">
                                                <h3><a href="product-details.html">Egestas dapibus</a></h3>
                                            </td>
                                            <td class="cart-product-price"><strong>$28.00</strong></td>
                                            <td>
                                                <div class="quantity">
                                                    <input type="number" class="quantity-input" name="qty" id="pro_qty" value="1" min="1">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </td>
                                            <td class="cart-product-price"><strong>$28.00</strong></td>
                                        </tr>
                                        <tr>
                                            <td><a class="delete" href="#"><i class="fa fa-times"></i></a></td>
                                            <td>
                                                <a href="product-details.html">
                                                    <img src="assets/img/products/1-1-450x450.jpg" alt="product">
                                                </a>
                                            </td>
                                            <td class="wide-column">
                                                <h3><a href="product-details.html">Neque porttitor</a></h3>
                                            </td>
                                            <td class="cart-product-price"><strong>$28.00</strong></td>
                                            <td>
                                                <div class="quantity">
                                                    <input type="number" class="quantity-input" name="qty" id="qty1" value="1">
                                                    <div class="dec qtybutton"><i class="fa fa-angle-down"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-angle-up"></i></div>
                                                </div>
                                            </td>
                                            <td class="cart-product-price"><strong>$28.00</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="apply-coupon-wrapper">
                                        <div class="form__group d-flex justify-content-between align-items-center">
                                            <input type="text" name="coupon" id="coupon" class="form__input form__input--2" placeholder="Coupon Code">
                                            <button type="submit" class="btn btn-medium btn-style-3">Apply
                                                Coupon</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 text-md-right">
                                    <div class="cart-btn-group">
                                        <a href="shop.html" class="btn btn-medium btn-style-3">Update Cart</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Cart Area End -->
                    </div>
                </div>
            </div>
            <div class="cart-page-total-wrapper">
                <div class="row justify-content-end">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="cart-page-total bg--dark-3">
                            <h2>Cart Totals</h2>
                            <div class="cart-calculator-table table-content table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Subtotal</th>
                                            <td><span class="price-ammount">$140.00</span></td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>Subtotal</th>
                                            <td>
                                                Flat Rate: <span class="price-ammount">$5.00</span>
                                                <a href="#" class="expand-calculator">Calculate Shipping</a>
                                                <form action="#" id="shipping-calculator" class="form shipping-form hide-in-default">
                                                    <select name="shipping_country" id="shipping_country" class="form__input form__input--2">
                                                        <option value="">Select a country…</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD" selected="selected">Bangladesh</option>
                                                        <option value="BD">Brazil</option>
                                                        <option value="CN">China</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="FR">France</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="KR">South Korea</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom (UK)</option>
                                                        <option value="US">United States (US)</option>
                                                    </select>
                                                    <input type="text" name="shipping_state" id="shipping_state" class="form__input form__input--2" placeholder="State / Country">
                                                    <input type="text" name="shipping_zip" id="shipping_zip" class="form__input form__input--2" placeholder="Postcode / Zip">
                                                    <button type="submit" class="btn btn-medium btn-style-3">Update
                                                        Totals</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <tr class="cart-total">
                                            <th>TOTAL</th>
                                            <td><span class="price-ammount">$145.00</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="checkout.html" class="btn btn-medium btn-style-3">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../inc/Footer.php';
?>