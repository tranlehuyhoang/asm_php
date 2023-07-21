<?php

include __DIR__ .  '/../inc/Header.php';
$class = new wishlist();
$show = $class->show_wishlist();


if (isset($_GET['delid'])) {
    $delid = $_GET['delid'];
    $delete = $class->delete_wishlist($delid);
    $show = $class->show_wishlist();
}

?>

<div class="main-content app-content">

    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Wishlist</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Orders</li>
                    </ol>
                </nav>
            </div>
        </div> <!-- Page Header Close -->
        <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-body d-flex align-items-center flex-wrap">
                        <div class="flex-fill"> <span class="mb-0 fs-14 text-muted">Total number of orders placed upto
                                now : <span class="fw-semibold text-success">28</span></span> </div>
                        <div class="dropdown"> <button class="btn btn-light dropdown-toggle m-1" type="button"
                                id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Sort By
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Date</a></li>
                                <li><a class="dropdown-item" href="#">Price</a></li>
                                <li><a class="dropdown-item" href="#">Category</a></li>
                            </ul>
                        </div>
                        <div class="d-flex align-items-center m-1" role="search"> <input class="form-control"
                                type="search" placeholder="Search" aria-label="Search"> <a
                                href="../creates/wishlist.create.php"><button class="btn btn-light ms-2"
                                    type="submit">Create+</button> </a></div>
                    </div>
                    <?php
                    if (isset($delete)) {
                        echo $delete;
                    }
                    ?>
                </div>
            </div>
            <?php
            if (isset($show)) {
                if ($show && $show->num_rows > 0) {
                    $i = 0;
                    while ($result = $show->fetch_assoc()) {
                        # code...
            ?>

            <div class="col-xl-6 col-xxl-3 col-lg-6 col-md-6 col-sm-12">
                <div class="card custom-card">
                    <div class="card-header d-block">
                        <div class="d-sm-flex d-block align-items-center">
                            <div class="me-2"> <span class="avatar bg-light avatar-md mb-1"> <img
                                        src="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>"
                                        alt=""> </span> </div>
                            <div class="flex-fill"> <a href="javascript:void(0)"> <span
                                        class="fs-14 fw-semibold"><?php echo $result['productname']; ?></span> </a>
                                <span
                                    class="d-block text-success">$<?php echo $result['productprice'] - ($result['productsale'] / 100 * $result['productprice']); ?></span>
                            </div>
                            <div class="text-sm-center"> <span class="fs-14 fw-semibold">Wishlist Id :</span> <span
                                    class="d-sm-block">#<?php echo $result['wishlistid']; ?></span> </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="orders-delivery-address">
                                <p class="mb-1 fw-semibold"><?php echo $result['username']; ?></p>
                                <p class="text-muted mb-0"> <?php echo $result['useremail']; ?> </p>
                            </div>
                            <div class="delivery-date text-center ms-auto"> <span class="fs-18 text-primary fw-bold">
                                    <?php



                                                $date_string = $result['productdate'];
                                                $timestamp = strtotime($date_string);
                                                $formatted_date = date("d", $timestamp);
                                                echo $formatted_date; // Kết quả: 16;

                                                ?></span> <span class="fw-semibold"> <?php

                                                                                        $date_string = $result['productdate'];
                                                                                        $timestamp = strtotime($date_string);
                                                                                        $formatted_month = date("M", $timestamp);
                                                                                        $formatted_month_lower = strtolower($formatted_month);
                                                                                        echo $formatted_month_lower; // Kết quả: dec


                                                                                        ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-sm-flex d-block align-items-center justify-content-between">
                        <div> </div>
                        <div class="mt-sm-0 mt-2">
                            <a onclick="return confirm('Xác nhận xóa')"
                                href="?delid=<?php echo $result['wishlistid']; ?>"><button
                                    class="btn btn-sm btn-danger-light">Delete</button></a>
                        </div>
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
        <!--End::row-1 -->
        <ul class="pagination justify-content-end">
            <li class="page-item disabled"> <a class="page-link">Previous</a> </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
        </ul>
    </div>
</div> <!-- End::app-content -->
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