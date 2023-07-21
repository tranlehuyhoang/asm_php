<?php

include __DIR__ .  '/../inc/Header.php';
$class = new cart();
$show = $class->show_cart();


if (isset($_GET['delid'])) {
    $delid = $_GET['delid'];
    $delete = $class->delete_cart($delid);
    $show = $class->show_cart();
}
?>

<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Cart</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
        </div> <!-- Page Header Close -->
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xxl-9">
                <div class="card custom-card" id="cart-container-delete">
                    <div class="card-header">
                        <div class="card-title"> Cart Items </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap">
                                <thead>
                                    <tr>
                                        <th> Product Name </th>
                                        <th> User </th>
                                        <th> Price </th>
                                        <th> Quantity </th>
                                        <th> Total </th>
                                        <th> Date </th>
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (isset($show)) {
                                        if ($show && $show->num_rows > 0) {
                                            $i = 0;
                                            while ($result = $show->fetch_assoc()) {
                                                # code...
                                    ?>

                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="me-3"> <span class="avatar avatar-xxl bg-light"> <img
                                                            src="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>"
                                                            alt=""> </span>
                                                </div>
                                                <div>
                                                    <div class="mb-1 fs-14 fw-semibold"> <a href="javascript:void(0);">
                                                            <?php echo $result['productname']; ?> </a> </div>
                                                    <div class="mb-1"> <span class="me-1">Category:</span><span
                                                            class="fw-semibold text-muted"><?php echo $result['categoryname'] ?></span>
                                                    </div>
                                                    <div class="mb-1"> <span class="me-1">Color:</span><span
                                                            class="fw-semibold text-muted">Grey<span
                                                                class="badge bg-success-transparent ms-3">
                                                                <?php
                                                                            if ($result['cartstatus'] == 1) {
                                                                                echo 'Giỏ hàng';
                                                                            } else {
                                                                                echo 'Đã thanh toán';
                                                                            };  ?></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-semibold fs-14"> <?php echo $result['useremail']; ?> </div>
                                        </td>
                                        <td>
                                            <div class="fw-semibold fs-14"> $<?php echo $result['productprice']; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-semibold fs-14"> <?php echo $result['cartquantity']; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fs-14 fw-semibold">
                                                $<?php echo ($result['productprice']  - ($result['productprice'] * $result['productsale'] / 100))  * $result['cartquantity']?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-semibold fs-14"> <?php echo $result['cartdate']; ?>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <div class="edit">
                                                    <a
                                                        href="../edits/cart.edit.php?editid=<?php echo $result['cartid']; ?>">
                                                        <button class="btn btn-sm btn-success edit-item-btn"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#showModal">Edit</button>
                                                    </a>
                                                </div>
                                                <div class="remove">
                                                    <a onclick="return confirm('Xác nhận xóa')"
                                                        href="?delid=<?php echo $result['cartid']; ?>">
                                                        <button class="btn btn-sm btn-danger remove-item-btn"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteRecordModal">Remove</button>
                                                    </a>
                                                </div>
                                            </div>


                                        </td>
                                    </tr>
                                    <?php
                                                $i++;
                                            }
                                        } else {
                                            ?>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card custom-card d-none" id="cart-empty-cart">
                    <div class="card-header">
                        <div class="card-title"> Empty Cart </div>
                    </div>
                    <div class="card-body">
                        <div class="cart-empty text-center"> <svg xmlns="http://www.w3.org/2000/svg" class="svg-muted"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M18.6 16.5H8.9c-.9 0-1.6-.6-1.9-1.4L4.8 6.7c0-.1 0-.3.1-.4.1-.1.2-.1.4-.1h17.1c.1 0 .3.1.4.2.1.1.1.3.1.4L20.5 15c-.2.8-1 1.5-1.9 1.5zM5.9 7.1 8 14.8c.1.4.5.8 1 .8h9.7c.5 0 .9-.3 1-.8l2.1-7.7H5.9z">
                                </path>
                                <path
                                    d="M6 10.9 3.7 2.5H1.3v-.9H4c.2 0 .4.1.4.3l2.4 8.7-.8.3zM8.1 18.8 6 11l.9-.3L9 18.5z">
                                </path>
                                <path
                                    d="M20.8 20.4h-.9V20c0-.7-.6-1.3-1.3-1.3H8.9c-.7 0-1.3.6-1.3 1.3v.5h-.9V20c0-1.2 1-2.2 2.2-2.2h9.7c1.2 0 2.2 1 2.2 2.2v.4z">
                                </path>
                                <path
                                    d="M8.9 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-1 2.2-2.2 2.2zm0-3.5c-.7 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.8 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3zM18.6 22.2c-1.2 0-2.2-1-2.2-2.2s1-2.2 2.2-2.2c1.2 0 2.2 1 2.2 2.2s-.9 2.2-2.2 2.2zm0-3.5c-.8 0-1.3.6-1.3 1.3 0 .7.6 1.3 1.3 1.3.7 0 1.3-.6 1.3-1.3 0-.7-.5-1.3-1.3-1.3z">
                                </path>
                            </svg>
                            <h3 class="fw-bold mb-1">Your Cart is Empty</h3>
                            <h5 class="mb-3">Add some items to make me happy :)</h5> <a href="#"
                                class="btn btn-primary btn-wave m-3 waves-effect waves-light" data-abc="true">continue
                                shopping <i class="bi bi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3">
                <div class="card custom-card">
                    <div class="p-3 border-bottom d-block">
                        <div class="alert alert-primary text-center" role="alert"> <span class="text-default">Sale Ends
                                in</span> <span class="fw-semibold fs-14 text-primary ms-1">18 Hours : 32 Minutes</span>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="p-3 border-bottom border-block-end-dashed">
                            <p class="mb-2 fw-semibold">Delivery:</p>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group"> <input
                                    type="radio" class="btn-check" name="btnradio" id="btnradio1"> <label
                                    class="btn btn-outline-light text-default" for="btnradio1">Free Delivery</label>
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" checked=""> <label
                                    class="btn btn-outline-light text-default" for="btnradio2">Express Delivery</label>
                            </div>
                            <p class="mb-0 mt-2 fs-12 text-muted">Delivered by 24,Nov 2022</p>
                        </div>
                        <div class="p-3 border-bottom border-block-end-dashed">
                            <div class="input-group"> <input type="text" class="form-control form-control-sm"
                                    placeholder="Coupon Code" aria-label="coupon-code" aria-describedby="coupons">
                                <button class="btn btn-primary input-group-text" id="coupons">Apply</button>
                            </div> <a href="javascript:void(0);" class="fs-12 text-success">10% off on first
                                purchase</a>
                        </div>
                        <div class="p-3 border-bottom border-block-end-dashed">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-muted op-7">Sub Total</div>
                                <div class="fw-semibold fs-14">$1,299</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-muted op-7">Discount</div>
                                <div class="fw-semibold fs-14 text-success">10% - $129</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-muted op-7">Delivery Charges</div>
                                <div class="fw-semibold fs-14 text-danger">- $49</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="text-muted op-7">Service Tax (18%)</div>
                                <div class="fw-semibold fs-14">- $169</div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="text-muted op-7">Total :</div>
                                <div class="fw-semibold fs-14 text-primary"> $1,387</div>
                            </div>
                        </div>
                        <div class="p-3 d-grid"> <a href="checkout.html"
                                class="btn btn-primary btn-wave mb-2 waves-effect waves-light">Proceed To Checkout</a>
                            <a href="products.html" class="btn btn-light btn-wave waves-effect waves-light">Countinue
                                Shopping</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End::row-1 -->
    </div>
</div>
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="input-group"> <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i
                            class="fe fe-search header-link-icon fs-18"></i></a> <input type="search"
                        class="form-control border-0 px-2" placeholder="Search" aria-label="Username"> <a
                        href="javascript:void(0);" class="input-group-text" id="voice-search"><i
                            class="fe fe-mic header-link-icon"></i></a> <a href="javascript:void(0);"
                        class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false"> <i
                            class="fe fe-more-vertical"></i> </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </div>
                <div class="mt-4">
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p><span
                        class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)"
                            class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i
                            class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i
                                class="fe fe-x"></i></a></span> <span class="search-tags"><i
                            class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i
                                class="fe fe-x"></i></a></span> <span class="search-tags"><i
                            class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i
                                class="fe fe-x"></i></a></span>
                </div>
                <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                            href="notifications.html"><span>Notifications</span></a> <a class="ms-auto lh-1"
                            href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                class="fe fe-x text-muted"></i></a> </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                            href="alerts.html"><span>Alerts</span></a> <a class="ms-auto lh-1"
                            href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                class="fe fe-x text-muted"></i></a> </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert"> <a
                            href="mail.html"><span>Mail</span></a> <a class="ms-auto lh-1" href="javascript:void(0);"
                            data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a> </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-group ms-auto"> <button class="btn btn-sm btn-primary-light">Search</button>
                    <button class="btn btn-sm btn-primary">Clear Recents</button>
                </div>
            </div>
        </div>
    </div>
</div> <!-- Footer Start -->

<?php

include __DIR__ .  '/../inc/footer.php';

?>