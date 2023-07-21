<?php
include '../inc/header.php';

$cat = new product();
$cats = new category();
$get = $cats->show_category();
$catId = $_GET['editid'];
$getcatbyid = $cat->getproductbyid($catId);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_GET['editid'])) {
    $updatecat = $cat->update_product($_POST, $_GET['editid']);
    $getcatbyid = $cat->getproductbyid($catId);
    $get = $cats->show_category();
}
?>


<!--APP-CONTENT START-->
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="catlist.php">Product</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div> <!-- Page Header Close -->
        <!-- Start:: row-1 -->
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card custom-card">
                        <div class="card-header justify-content-between">
                            <div class="card-title"> Create Product Form </div>

                            <?php
                            if (isset($updatecat)) {
                                echo $updatecat;
                            }
                            ?>
                        </div>




                        <?php
                        if (isset($getcatbyid)) {
                            $result = $getcatbyid->fetch_assoc();
                            // echo  print_r($result);

                        ?>


                            <div class="card-body">
                                <div class="mb-3"> <label for="form-text" class="form-label fs-14 text-dark">Nhập tên sản
                                        phẩm
                                    </label> <input value="<?php echo $result['productname'] ?>" name="productname" type="text" class="form-control" id="form-text" placeholder="">
                                </div>
                                <div class="mb-3">
                                    <img style="width: 300px;" src="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>" class="img-thumbnail" alt="Responsive image">

                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label fs-14 text-dark">Chọn ảnh sản phẩm
                                    </label>
                                    <input class="form-control" name="image" type="file" id="formFile">

                                </div>
                                <div class="mb-3"> <label for="form-text" class="form-label fs-14 text-dark">Nhập giá
                                    </label> <input value="<?php echo $result['productprice'] ?>" name="productprice" type="number" class="form-control" id="form-text" placeholder="">
                                </div>
                                <div class="mb-3"> <label for="form-text" class="form-label fs-14 text-dark">Nhập sale
                                    </label> <input value="<?php echo $result['productsale'] ?>" name="productsale" type="number" class="form-control" id="form-text" placeholder="">
                                </div>
                                <div class="mb-3"> <label for="form-text" class="form-label fs-14 text-dark">Nhập tồn kho
                                        mục
                                    </label> <input value="<?php echo $result['productstock'] ?>" name="productstock" type="number" class="form-control" id="form-text" placeholder="">
                                </div>
                                <div class="mb-3"> <label for="form-text" class="form-label fs-14 text-dark">Chọn danh mục
                                    </label> <select class="form-select" name="productcat" id="selectform">
                                        <?php
                                        if (isset($get)) {
                                            if ($get && $get->num_rows > 0) {
                                                $i = 0;
                                                while ($results = $get->fetch_assoc()) {
                                                    # code...
                                        ?>
                                                    <option <?php
                                                            if ($results['categoryid'] == $result['productcat']) {
                                                                echo 'selected';
                                                            }

                                                            ?> value="<?php echo $results['categoryid'] ?>">
                                                        <?php echo $results['categoryname'] ?></option>
                                                <?php
                                                    $i++;
                                                }
                                            } else {
                                                ?>
                                        <?php
                                            }
                                        }
                                        ?>

                                    </select>
                                </div>
                                <div class="mb-3"> <label for="form-text" class="form-label fs-14 text-dark">Nhập số lượng
                                        đã bán
                                    </label> <input value="<?php echo $result['productquantitysell'] ?>" name="productquantitysell" type="number" class="form-control" id="form-text" placeholder="">
                                </div>

                                <div class="mb-3"> <label for="form-text" class="form-label fs-14 text-dark">Nhập mô tả
                                    </label>

                                    <textarea name="productdesc" rows="" cols="80" required>
                                <?php echo $result['productdesc'] ?>
                            </textarea>
                                    <script>
                                        CKEDITOR.replace('productdesc');
                                    </script>
                                </div>

                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        <?php
                        } ?>

                    </div>
                </div>

            </div>
        </form>

    </div>
</div>
<!--APP-CONTENT CLOSE-->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="input-group"> <a href="javascript:void(0);" class="input-group-text" id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a> <input type="search" class="form-control border-0 px-2" placeholder="Search" aria-label="Username"> <a href="javascript:void(0);" class="input-group-text" id="voice-search"><i class="fe fe-mic header-link-icon"></i></a> <a href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown" aria-expanded="false"> <i class="fe fe-more-vertical"></i> </a>
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
                    <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p><span class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i class="fe fe-x"></i></a></span>
                </div>
                <div class="my-4">
                    <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a href="notifications.html"><span>Notifications</span></a> <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a> </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a href="alerts.html"><span>Alerts</span></a> <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a> </div>
                    <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert"> <a href="mail.html"><span>Mail</span></a> <a class="ms-auto lh-1" href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i class="fe fe-x text-muted"></i></a> </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-group ms-auto"> <button class="btn btn-sm btn-primary-light">Search</button>
                    <button class="btn btn-sm btn-primary">Clear Recents</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../inc/footer.php';
?>