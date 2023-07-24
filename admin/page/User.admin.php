<?php

include __DIR__ .  '/../inc/Header.php';

$class = new user();
$show = $class->show_user();


if (isset($_GET['delid'])) {
    $delid = $_GET['delid'];
    $delete = $class->delete_user($delid);
    $show = $class->show_user();
}
?>
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Page Header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Data Tables</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="<?php echo $host ?>page/Home.php">Tables</a></li>
                        <li class="breadcrumb-item active" aria-current="page">User Tables</li>
                    </ol>
                </nav>
            </div>
        </div> <!-- Page Header Close -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header">
                        <div class="card-title"> User Datatable
                            <a href="../creates/User.create.php"><button type="button" class="btn btn-info">Create
                                    +</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <?php
                                if (isset($delete)) {
                                    echo $delete;
                                }
                                ?>
                                <tr>
                                    <th>ID</th>
                                    <th>Roles</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Pass</th>
                                    <th>Date</th>
                                    <th>Action</th>
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
                                                <td><?php echo $result['userid'] ?> </td>
                                                <td><?php
                                                    switch ($result['userroles']) {
                                                        case  1:
                                                            echo 'USER</';
                                                            break;
                                                        case  2:
                                                            echo 'ADMIN';
                                                            break;
                                                        case  3:
                                                            echo 'GUEST';
                                                            break;

                                                            break;

                                                            // Thêm các trường hợp khác nếu cần thiết
                                                        default:
                                                            // Hành động mặc định nếu biến không trùng với bất kỳ giá trị nào
                                                            break;
                                                    }


                                                    ?> </td>
                                                <td><?php echo $result['username'] ?></td>
                                                <td><?php echo $result['useremail'] ?> </td>
                                                <td><?php echo $result['userpass'] ?> </td>
                                                <td><?php echo $result['userdate'] ?></td>
                                                <td>
                                                    <div class="d-flex gap-2">
                                                        <div class="edit">
                                                            <a href="../edits/User.edit.php?editid=<?php echo $result['userid']; ?>">
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                                            </a>
                                                        </div>
                                                        <div class="remove">
                                                            <a onclick="return confirm('Xác nhận xóa')" href="?delid=<?php echo $result['userid']; ?>">
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                                                            </a>
                                                        </div>
                                                    </div>


                                                </td>
                                            <?php
                                            $i++;
                                        }
                                    } else {
                                            ?>
                                    <?php
                                    }
                                }
                                    ?>

                                            </tr>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div> <!-- End::app-content -->
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
</div> <!-- Footer Start -->


<?php

include __DIR__ .  '/../inc/footer.php';

?>