 <?php

    include __DIR__ .  '/../inc/Header.php';
    $class = new banner();
    $show = $class->show_banner();


    if (isset($_GET['delid'])) {
        $delid = $_GET['delid'];
        $delete = $class->delete_banner($delid);
        $show = $class->show_banner();
    }

    ?>

 <div class="main-content app-content">
     <div class="">
         <!-- Start::row-1 -->
         <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
             <h1 class="page-title fw-semibold fs-18 mb-0">Data Tables</h1>
             <div class="ms-md-1 ms-0">
                 <nav>
                     <ol class="breadcrumb mb-0">
                         <li class="breadcrumb-item"><a href="Home.php">Tables</a></li>
                         <li class="breadcrumb-item active" aria-current="page">Blog Tables</li>
                     </ol>
                 </nav>
             </div>
         </div>
         <div class="row">

             <div class="col-xl-12">
                 <div class="card custom-card">
                     <div class="card-body d-flex align-items-center justify-content-between">
                         <div class="fs-15 mb-0">Total <span class="badge bg-success">12</span> products are wishlisted
                             <a href="../creates/banner.create.php"><button type="button" class="btn btn-info">Create
                                     +</button></a>
                         </div>
                         <div class="d-flex" role="search"> <input class="form-control form-control-sm me-2" type="search" placeholder="Search" aria-label="Search"> <button class="btn btn-sm btn-light" type="submit">Search</button> </div>
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

                ?>
                         <div class="col-xxl-6 col-xl-12 ">

                             <div class="card custom-card overflow-hidden">
                                 <div class="card-body p-0">
                                     <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                         <div class="carousel-inner">
                                             <div class="carousel-item active" data-bs-interval="2000"> <a href="javascript:void(0);">
                                                     <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['bannerimg']); ?>" class="d-block w-100" alt="...">
                                                     <div class="carousel-caption blog-caption text-start">
                                                         <div class="d-flex gap-2">
                                                             <div class="edit">
                                                                 <a href="../edits/banner.edit.php?editid=<?php echo $result['bannerid']; ?>">
                                                                     <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                                                 </a>
                                                             </div>
                                                             <div class="remove">
                                                                 <a onclick="return confirm('Xác nhận xóa')" href="?delid=<?php echo $result['bannerid']; ?>">
                                                                     <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                                                                 </a>
                                                             </div>
                                                         </div>
                                                         <p class="mb-2"><?php echo  $result['productdesc']; ?></p>
                                                         <h7 class="fw-semibold mb-2">Id : <?php echo  $result['bannerid']; ?>
                                                         </h7>
                                                         <h6 class="fw-semibold mb-2">Sale : <?php echo  $result['productsale']; ?>%
                                                         </h6>
                                                         <div class="d-flex align-items-center"> <span class="avatar avatar-sm avatar-rounded me-2"> <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>" alt=""> </span>
                                                             <div class="fw-semibold"> <?php echo  $result['productname']; ?>- <span class="fs-11 op-7 fw-normal"><?php echo $result['productdate']; ?>


                                                                 </span>
                                                             </div>

                                                         </div>
                                                     </div>
                                                 </a> </div>
                                         </div>

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
         <!-- Start: pagination -->
         <div class="float-end mb-4">
             <nav aria-label="Page navigation" class="">
                 <ul class="pagination mb-0">
                     <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);"> Prev </a> </li>
                     <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                     <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                     <li class="page-item"> <a class="page-link" href="javascript:void(0);"> <i class="bi bi-three-dots"></i> </a> </li>
                     <li class="page-item"><a class="page-link" href="javascript:void(0);">17</a></li>
                     <li class="page-item"> <a class="page-link text-primary" href="javascript:void(0);"> next </a>
                     </li>
                 </ul>
             </nav>
         </div> <!-- End: pagination -->
     </div>
 </div>
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