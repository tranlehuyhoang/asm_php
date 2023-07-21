<?php
include '../inc/Header.php';
?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">My Account</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="page/home.php">Home</a></li>
                    <li class="current"><a href="my-account.html">My Account</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="main-content-wrapper">
    <div class="account-wrapper pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="user-dashboard-tab">
                <div class="row">
                    <div class="col-lg-4 mb-md--30">
                        <div class="user-dashboard-tab__head nav flex-column" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" data-bs-toggle="pill" role="tab" href="#dashboard" aria-controls="dashboard" aria-selected="true">Dashboard</a>
                            <a class="nav-link" data-bs-toggle="pill" role="tab" href="#orders" aria-controls="orders" aria-selected="false">Orders</a>
                            <a class="nav-link" data-bs-toggle="pill" role="tab" href="#downloads" aria-controls="downloads" aria-selected="true">Downloads</a>
                            <a class="nav-link" data-bs-toggle="pill" role="tab" href="#addresses" aria-controls="addresses" aria-selected="true">Addresses</a>
                            <a class="nav-link" data-bs-toggle="pill" role="tab" href="#accountdetails" aria-controls="accountdetails" aria-selected="true">Account Details</a>
                            <a class="nav-link" href="?action=logout">Logout</a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="user-dashboard-tab__content tab-content">
                            <div class="tab-pane fade active show" id="dashboard">
                                <p>Hello <strong>John</strong> (not <strong>John</strong>? <a href="login.html">Log
                                        out</a>)</p>
                                <p>From your account dashboard. you can easily check &amp; view your <a href="">recent
                                        orders</a>, manage your <a href="">shipping and billing addresses</a> and <a href="">edit your password and account details</a>.</p>
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <div class="account-table table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Order</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Total</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td class="wide-column">September 19, 2018</td>
                                                <td>Processing</td>
                                                <td class="wide-column">$25.00 for 1 item</td>
                                                <td><a href="" class="btn btn-medium btn-style-1">View</a></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td class="wide-column">September 19, 2018</td>
                                                <td>Processing</td>
                                                <td class="wide-column">$25.00 for 1 item</td>
                                                <td><a href="" class="btn btn-medium btn-style-1">View</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="downloads">
                                <div class="account-table table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Downloads</th>
                                                <th>Expires</th>
                                                <th>Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="wide-column">Volga - Ecommerce Bootstrap Template</td>
                                                <td class="wide-column">August 10, 2018</td>
                                                <td>Never</td>
                                                <td><a href="" class="btn btn-medium btn-style-1">Download File</a></td>
                                            </tr>
                                            <tr>
                                                <td class="wide-column">Volga - Ecommerce Bootstrap Template</td>
                                                <td class="wide-column">September 19, 2018</td>
                                                <td>Never</td>
                                                <td><a href="" class="btn btn-medium btn-style-1">Download File</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="addresses">
                                <div class="billing-address mb--20">
                                    <p>The following addresses will be used on the checkout page by default.</p>
                                    <h4>BILLING ADDRESS</h4>
                                    <a href="#" data-attr="#billing_address" class="btn btn-medium btn-style-1 expand_action">Edit</a>
                                    <div class="address-form bg--2 mt--20 hide-in-default" id="billing_address">
                                        <form action="#" class="form">
                                            <div class="form-row mb--20">
                                                <div class="form__group col-md-6 mb-sm--30">
                                                    <label for="billing_fname" class="form__label">First Name
                                                        <span>*</span></label>
                                                    <input type="text" name="billing_fname" id="billing_fname" class="form__input form__input--2">
                                                </div>
                                                <div class="form__group col-md-6">
                                                    <label for="billing_lname" class="form__label">Last Name
                                                        <span>*</span></label>
                                                    <input type="text" name="billing_lname" id="billing_lname" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="billing_company" class="form__label">Company</label>
                                                    <input type="text" name="billing_company" id="billing_company" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="billing_country" class="form__label">Country</label>
                                                    <select name="billing_country" id="billing_country" class="form__input form__input--2 nice-select" style="display: none;">
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
                                                    <div class="nice-select form__input form__input--2" tabindex="0">
                                                        <span class="current">Bangladesh</span>
                                                        <div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search...">
                                                        </div>
                                                        <ul class="list">
                                                            <li data-value="" class="option">Select a country…</li>
                                                            <li data-value="AF" class="option">Afghanistan</li>
                                                            <li data-value="AL" class="option">Albania</li>
                                                            <li data-value="DZ" class="option">Algeria</li>
                                                            <li data-value="AR" class="option">Argentina</li>
                                                            <li data-value="AM" class="option">Armenia</li>
                                                            <li data-value="AU" class="option">Australia</li>
                                                            <li data-value="AT" class="option">Austria</li>
                                                            <li data-value="AZ" class="option">Azerbaijan</li>
                                                            <li data-value="BH" class="option">Bahrain</li>
                                                            <li data-value="BD" class="option selected">Bangladesh</li>
                                                            <li data-value="BD" class="option">Brazil</li>
                                                            <li data-value="CN" class="option">China</li>
                                                            <li data-value="EG" class="option">Egypt</li>
                                                            <li data-value="FR" class="option">France</li>
                                                            <li data-value="DE" class="option">Germany</li>
                                                            <li data-value="HK" class="option">Hong Kong</li>
                                                            <li data-value="HU" class="option">Hungary</li>
                                                            <li data-value="IS" class="option">Iceland</li>
                                                            <li data-value="IN" class="option">India</li>
                                                            <li data-value="ID" class="option">Indonesia</li>
                                                            <li data-value="IR" class="option">Iran</li>
                                                            <li data-value="IQ" class="option">Iraq</li>
                                                            <li data-value="IE" class="option">Ireland</li>
                                                            <li data-value="IT" class="option">Italy</li>
                                                            <li data-value="JP" class="option">Japan</li>
                                                            <li data-value="KW" class="option">Kuwait</li>
                                                            <li data-value="MY" class="option">Malaysia</li>
                                                            <li data-value="MV" class="option">Maldives</li>
                                                            <li data-value="MX" class="option">Mexico</li>
                                                            <li data-value="MC" class="option">Monaco</li>
                                                            <li data-value="NP" class="option">Nepal</li>
                                                            <li data-value="RU" class="option">Russia</li>
                                                            <li data-value="KR" class="option">South Korea</li>
                                                            <li data-value="SS" class="option">South Sudan</li>
                                                            <li data-value="ES" class="option">Spain</li>
                                                            <li data-value="LK" class="option">Sri Lanka</li>
                                                            <li data-value="SD" class="option">Sudan</li>
                                                            <li data-value="SZ" class="option">Swaziland</li>
                                                            <li data-value="SE" class="option">Sweden</li>
                                                            <li data-value="CH" class="option">Switzerland</li>
                                                            <li data-value="TN" class="option">Tunisia</li>
                                                            <li data-value="TR" class="option">Turkey</li>
                                                            <li data-value="UA" class="option">Ukraine</li>
                                                            <li data-value="AE" class="option">United Arab Emirates</li>
                                                            <li data-value="GB" class="option">United Kingdom (UK)</li>
                                                            <li data-value="US" class="option">United States (US)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="billing_streetAddress" class="form__label">Street
                                                        Address</label>
                                                    <input type="text" name="billing_streetAddress" id="billing_streetAddress" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="billing_apartment" class="form__label">Apartment, suite,
                                                        unit etc. (optional)</label>
                                                    <input type="text" name="billing_apartment" id="billing_apartment" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="billing_city" class="form__label">Town/City
                                                        <span>*</span></label>
                                                    <input type="text" name="billing_city" id="billing_city" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="billing_district" class="form__label">District
                                                        <span>*</span></label>
                                                    <select name="billing_district" id="billing_district" class="form__input form__input--2 nice-select" style="display: none;">
                                                        <option value="">Select a District…</option>
                                                        <option>BARISAL</option>
                                                        <option>BHOLA</option>
                                                        <option>BANDARBAN</option>
                                                        <option>BRAHMANBARIA</option>
                                                        <option>CHANDPUR</option>
                                                        <option>CHITTAGONG</option>
                                                        <option>COMILLA</option>
                                                        <option>COX'S BAZAR</option>
                                                        <option>DHAKA</option>
                                                        <option>FARIDPUR</option>
                                                        <option>FENI</option>
                                                        <option>GAZIPUR</option>
                                                        <option>GOPALGANJ</option>
                                                        <option>JAMALPUR</option>
                                                        <option>KHAGRACHHARI</option>
                                                        <option>KISHOREGONJ</option>
                                                        <option>LAKSHMIPU</option>
                                                        <option>RMADARIPUR</option>
                                                        <option>MUNSHIGANJ</option>
                                                        <option>MYMENSINGH</option>
                                                        <option>NARAYANGANJ</option>
                                                        <option>NARSINGDI</option>
                                                        <option>NETRAKONA</option>
                                                        <option>NOAKHALI</option>
                                                        <option>RANGAMATI </option>
                                                        <option>RAJBARI</option>
                                                        <option>SHARIATPUR</option>
                                                        <option>SHERPUR</option>
                                                        <option>TANGAIL</option>
                                                    </select>
                                                    <div class="nice-select form__input form__input--2" tabindex="0">
                                                        <span class="current">Select a District…</span>
                                                        <div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search...">
                                                        </div>
                                                        <ul class="list">
                                                            <li data-value="" class="option selected">Select a District…
                                                            </li>
                                                            <li data-value="BARISAL" class="option">BARISAL</li>
                                                            <li data-value="BHOLA" class="option">BHOLA</li>
                                                            <li data-value="BANDARBAN" class="option">BANDARBAN</li>
                                                            <li data-value="BRAHMANBARIA" class="option">BRAHMANBARIA
                                                            </li>
                                                            <li data-value="CHANDPUR" class="option">CHANDPUR</li>
                                                            <li data-value="CHITTAGONG" class="option">CHITTAGONG</li>
                                                            <li data-value="COMILLA" class="option">COMILLA</li>
                                                            <li data-value="COX'S BAZAR" class="option">COX'S BAZAR</li>
                                                            <li data-value="DHAKA" class="option">DHAKA</li>
                                                            <li data-value="FARIDPUR" class="option">FARIDPUR</li>
                                                            <li data-value="FENI" class="option">FENI</li>
                                                            <li data-value="GAZIPUR" class="option">GAZIPUR</li>
                                                            <li data-value="GOPALGANJ" class="option">GOPALGANJ</li>
                                                            <li data-value="JAMALPUR" class="option">JAMALPUR</li>
                                                            <li data-value="KHAGRACHHARI" class="option">KHAGRACHHARI
                                                            </li>
                                                            <li data-value="KISHOREGONJ" class="option">KISHOREGONJ</li>
                                                            <li data-value="LAKSHMIPU" class="option">LAKSHMIPU</li>
                                                            <li data-value="RMADARIPUR" class="option">RMADARIPUR</li>
                                                            <li data-value="MUNSHIGANJ" class="option">MUNSHIGANJ</li>
                                                            <li data-value="MYMENSINGH" class="option">MYMENSINGH</li>
                                                            <li data-value="NARAYANGANJ" class="option">NARAYANGANJ</li>
                                                            <li data-value="NARSINGDI" class="option">NARSINGDI</li>
                                                            <li data-value="NETRAKONA" class="option">NETRAKONA</li>
                                                            <li data-value="NOAKHALI" class="option">NOAKHALI</li>
                                                            <li data-value="RANGAMATI" class="option">RANGAMATI </li>
                                                            <li data-value="RAJBARI" class="option">RAJBARI</li>
                                                            <li data-value="SHARIATPUR" class="option">SHARIATPUR</li>
                                                            <li data-value="SHERPUR" class="option">SHERPUR</li>
                                                            <li data-value="TANGAIL" class="option">TANGAIL</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="billing_zip" class="form__label">Post/Zip Code
                                                        <span>*</span></label>
                                                    <input type="text" name="billing_zip" id="billing_zip" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-md-6 mb-sm--30">
                                                    <label for="billing_phone" class="form__label">Phone</label>
                                                    <input type="text" name="billing_phone" id="billing_phone" class="form__input form__input--2">
                                                </div>
                                                <div class="form__group col-md-6">
                                                    <label for="billing_email" class="form__label">Email Address
                                                        <span>*</span></label>
                                                    <input type="email" name="billing_email" id="billing_email" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form__group col-12">
                                                    <button type="submit" class="btn btn-medium btn-style-1">Save
                                                        Address</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="shipping-address">
                                    <p>The following addresses will be used on the checkout page by default.</p>
                                    <h4>Shipping ADDRESS</h4>
                                    <a href="#" data-attr="#shipping_address" class="btn btn-medium btn-style-1 expand_action">Edit</a>
                                    <div class="address-form bg--2 mt--20 hide-in-default" id="shipping_address">
                                        <form action="#" class="form">
                                            <div class="form-row mb--20">
                                                <div class="form__group col-md-6 mb-sm--30">
                                                    <label for="shipping_fname" class="form__label">First Name
                                                        <span>*</span></label>
                                                    <input type="text" name="shipping_fname" id="shipping_fname" class="form__input form__input--2">
                                                </div>
                                                <div class="form__group col-md-6">
                                                    <label for="shipping_lname" class="form__label">Last Name
                                                        <span>*</span></label>
                                                    <input type="text" name="shipping_lname" id="shipping_lname" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_company" class="form__label">Company</label>
                                                    <input type="text" name="shipping_company" id="shipping_company" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_country" class="form__label">Country</label>
                                                    <select id="shipping_country" name="shipping_country" class="form__input form__input--2 nice-select" style="display: none;">
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
                                                    <div class="nice-select form__input form__input--2" tabindex="0">
                                                        <span class="current">Bangladesh</span>
                                                        <div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search...">
                                                        </div>
                                                        <ul class="list">
                                                            <li data-value="" class="option">Select a country…</li>
                                                            <li data-value="AF" class="option">Afghanistan</li>
                                                            <li data-value="AL" class="option">Albania</li>
                                                            <li data-value="DZ" class="option">Algeria</li>
                                                            <li data-value="AR" class="option">Argentina</li>
                                                            <li data-value="AM" class="option">Armenia</li>
                                                            <li data-value="AU" class="option">Australia</li>
                                                            <li data-value="AT" class="option">Austria</li>
                                                            <li data-value="AZ" class="option">Azerbaijan</li>
                                                            <li data-value="BH" class="option">Bahrain</li>
                                                            <li data-value="BD" class="option selected">Bangladesh</li>
                                                            <li data-value="BD" class="option">Brazil</li>
                                                            <li data-value="CN" class="option">China</li>
                                                            <li data-value="EG" class="option">Egypt</li>
                                                            <li data-value="FR" class="option">France</li>
                                                            <li data-value="DE" class="option">Germany</li>
                                                            <li data-value="HK" class="option">Hong Kong</li>
                                                            <li data-value="HU" class="option">Hungary</li>
                                                            <li data-value="IS" class="option">Iceland</li>
                                                            <li data-value="IN" class="option">India</li>
                                                            <li data-value="ID" class="option">Indonesia</li>
                                                            <li data-value="IR" class="option">Iran</li>
                                                            <li data-value="IQ" class="option">Iraq</li>
                                                            <li data-value="IE" class="option">Ireland</li>
                                                            <li data-value="IT" class="option">Italy</li>
                                                            <li data-value="JP" class="option">Japan</li>
                                                            <li data-value="KW" class="option">Kuwait</li>
                                                            <li data-value="MY" class="option">Malaysia</li>
                                                            <li data-value="MV" class="option">Maldives</li>
                                                            <li data-value="MX" class="option">Mexico</li>
                                                            <li data-value="MC" class="option">Monaco</li>
                                                            <li data-value="NP" class="option">Nepal</li>
                                                            <li data-value="RU" class="option">Russia</li>
                                                            <li data-value="KR" class="option">South Korea</li>
                                                            <li data-value="SS" class="option">South Sudan</li>
                                                            <li data-value="ES" class="option">Spain</li>
                                                            <li data-value="LK" class="option">Sri Lanka</li>
                                                            <li data-value="SD" class="option">Sudan</li>
                                                            <li data-value="SZ" class="option">Swaziland</li>
                                                            <li data-value="SE" class="option">Sweden</li>
                                                            <li data-value="CH" class="option">Switzerland</li>
                                                            <li data-value="TN" class="option">Tunisia</li>
                                                            <li data-value="TR" class="option">Turkey</li>
                                                            <li data-value="UA" class="option">Ukraine</li>
                                                            <li data-value="AE" class="option">United Arab Emirates</li>
                                                            <li data-value="GB" class="option">United Kingdom (UK)</li>
                                                            <li data-value="US" class="option">United States (US)</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_streetAddress" class="form__label">Street
                                                        Address</label>
                                                    <input type="text" name="shipping_streetAddress" id="shipping_streetAddress" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_apartment" class="form__label">Apartment,
                                                        suite, unit etc. (optional)</label>
                                                    <input type="text" name="shipping_apartment" id="shipping_apartment" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_city" class="form__label">Town/City
                                                        <span>*</span></label>
                                                    <input type="text" name="shipping_city" id="shipping_city" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_district" class="form__label">Distring
                                                        <span>*</span></label>
                                                    <select name="shipping_district" id="shipping_district" class="form__input form__input--2 nice-select" style="display: none;">
                                                        <option value="">Select a District…</option>
                                                        <option>BARISAL</option>
                                                        <option>BHOLA</option>
                                                        <option>BANDARBAN</option>
                                                        <option>BRAHMANBARIA</option>
                                                        <option>CHANDPUR</option>
                                                        <option>CHITTAGONG</option>
                                                        <option>COMILLA</option>
                                                        <option>COX'S BAZAR</option>
                                                        <option>DHAKA</option>
                                                        <option>FARIDPUR</option>
                                                        <option>FENI</option>
                                                        <option>GAZIPUR</option>
                                                        <option>GOPALGANJ</option>
                                                        <option>JAMALPUR</option>
                                                        <option>KHAGRACHHARI</option>
                                                        <option>KISHOREGONJ</option>
                                                        <option>LAKSHMIPU</option>
                                                        <option>RMADARIPUR</option>
                                                        <option>MUNSHIGANJ</option>
                                                        <option>MYMENSINGH</option>
                                                        <option>NARAYANGANJ</option>
                                                        <option>NARSINGDI</option>
                                                        <option>NETRAKONA</option>
                                                        <option>NOAKHALI</option>
                                                        <option>RANGAMATI </option>
                                                        <option>RAJBARI</option>
                                                        <option>SHARIATPUR</option>
                                                        <option>SHERPUR</option>
                                                        <option>TANGAIL</option>
                                                    </select>
                                                    <div class="nice-select form__input form__input--2" tabindex="0">
                                                        <span class="current">Select a District…</span>
                                                        <div class="nice-select-search-box"><input type="text" class="nice-select-search" placeholder="Search...">
                                                        </div>
                                                        <ul class="list">
                                                            <li data-value="" class="option selected">Select a District…
                                                            </li>
                                                            <li data-value="BARISAL" class="option">BARISAL</li>
                                                            <li data-value="BHOLA" class="option">BHOLA</li>
                                                            <li data-value="BANDARBAN" class="option">BANDARBAN</li>
                                                            <li data-value="BRAHMANBARIA" class="option">BRAHMANBARIA
                                                            </li>
                                                            <li data-value="CHANDPUR" class="option">CHANDPUR</li>
                                                            <li data-value="CHITTAGONG" class="option">CHITTAGONG</li>
                                                            <li data-value="COMILLA" class="option">COMILLA</li>
                                                            <li data-value="COX'S BAZAR" class="option">COX'S BAZAR</li>
                                                            <li data-value="DHAKA" class="option">DHAKA</li>
                                                            <li data-value="FARIDPUR" class="option">FARIDPUR</li>
                                                            <li data-value="FENI" class="option">FENI</li>
                                                            <li data-value="GAZIPUR" class="option">GAZIPUR</li>
                                                            <li data-value="GOPALGANJ" class="option">GOPALGANJ</li>
                                                            <li data-value="JAMALPUR" class="option">JAMALPUR</li>
                                                            <li data-value="KHAGRACHHARI" class="option">KHAGRACHHARI
                                                            </li>
                                                            <li data-value="KISHOREGONJ" class="option">KISHOREGONJ</li>
                                                            <li data-value="LAKSHMIPU" class="option">LAKSHMIPU</li>
                                                            <li data-value="RMADARIPUR" class="option">RMADARIPUR</li>
                                                            <li data-value="MUNSHIGANJ" class="option">MUNSHIGANJ</li>
                                                            <li data-value="MYMENSINGH" class="option">MYMENSINGH</li>
                                                            <li data-value="NARAYANGANJ" class="option">NARAYANGANJ</li>
                                                            <li data-value="NARSINGDI" class="option">NARSINGDI</li>
                                                            <li data-value="NETRAKONA" class="option">NETRAKONA</li>
                                                            <li data-value="NOAKHALI" class="option">NOAKHALI</li>
                                                            <li data-value="RANGAMATI" class="option">RANGAMATI </li>
                                                            <li data-value="RAJBARI" class="option">RAJBARI</li>
                                                            <li data-value="SHARIATPUR" class="option">SHARIATPUR</li>
                                                            <li data-value="SHERPUR" class="option">SHERPUR</li>
                                                            <li data-value="TANGAIL" class="option">TANGAIL</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-12">
                                                    <label for="shipping_zip" class="form__label">Post/Zip Code
                                                        <span>*</span></label>
                                                    <input type="text" name="shipping_zip" id="shipping_zip" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row mb--20">
                                                <div class="form__group col-md-6 mb-sm--30">
                                                    <label for="shipping_phone" class="form__label">Phone</label>
                                                    <input type="text" name="shipping_phone" id="shipping_phone" class="form__input form__input--2">
                                                </div>
                                                <div class="form__group col-md-6">
                                                    <label for="shipping__email" class="form__label">Email Address
                                                        <span>*</span></label>
                                                    <input type="email" name="shipping__email" id="shipping__email" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form__group col-12">
                                                    <button type="submit" class="btn btn-5 btn-style-2">Save
                                                        Address</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="accountdetails">
                                <div class="account-form bg--2">
                                    <form action="#" class="form">
                                        <div class="form-row mb--20">
                                            <div class="col-md-6 mb-sm--20">
                                                <div class="form__group">
                                                    <label for="account_fname" class="form__label">First Name</label>
                                                    <input type="text" name="account_fname" id="account_fname" class="form__input form__input--2">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form__group">
                                                    <label for="account_lname" class="form__label">First Name</label>
                                                    <input type="text" name="account_lname" id="account_lname" class="form__input form__input--2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label for="user_email" class="form__label">Email Address</label>
                                                    <input type="email" name="user_email" id="user_email" class="form__input form__input--2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12">
                                                <h4>PASSWORD CHANGE</h4>
                                            </div>
                                        </div>
                                        <div class="form-row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label for="cur_password" class="form__label">Current Password
                                                        (leave blank to leave unchanged)</label>
                                                    <input type="password" name="cur_password" id="cur_password" class="form__input form__input--2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label for="new_password" class="form__label">New Password (leave
                                                        blank to leave unchanged)</label>
                                                    <input type="password" name="new_password" id="new_password" class="form__input form__input--2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label for="new_password" class="form__label">Confirm
                                                        Password</label>
                                                    <input type="password" name="confirm_password" id="confirm_password" class="form__input form__input--2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-medium btn-style-2">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include '../inc/Footer.php';
?>