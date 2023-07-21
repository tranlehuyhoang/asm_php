 <?php

    include __DIR__ .  '/../inc/Header.php';
    $class = new contact();
    $show = $class->show_contact();


    if (isset($_GET['delid'])) {
        $delid = $_GET['delid'];
        $delete = $class->delete_contact($delid);
        $show = $class->show_contact();
    }
    ?>

 <div class="main-content app-content">
     <div class="container-fluid">
         <!-- Start::row-1 -->
         <div class="row">
             <div class="col-xl-12">
                 <div class="card custom-card mt-4">
                     <div class="card-body">
                         <div class="contact-header">
                             <div class="d-sm-flex d-block align-items-center justify-content-between">
                                 <div class="h5 fw-semibold mb-0">Contacts</div>
                                 <div class="d-flex mt-sm-0 mt-2 align-items-center">
                                     <div class="input-group"> <input type="text" class="form-control bg-light border-0"
                                             placeholder="Search Contact" aria-describedby="search-contact-member">
                                         <button class="btn btn-light" type="button" id="search-contact-member"><i
                                                 class="fa fa-search" aria-hidden="true"></i>
                                         </button>
                                     </div>
                                     <div class="dropdown ms-2"> <button
                                             class="btn btn-icon btn-primary-light btn-wave waves-effect waves-light"
                                             type="button" data-bs-toggle="dropdown" aria-expanded="false"> <i
                                                 class="ti ti-dots-vertical"></i> </button>
                                         <ul class="dropdown-menu">
                                             <li><a class="dropdown-item" href="#">Delete All</a></li>
                                             <li><a class="dropdown-item" href="#">Copy All</a></li>
                                             <li><a class="dropdown-item" href="#">Move To</a></li>
                                         </ul>
                                     </div> <a href="../creates/Contact.create.php"">
                                         <button class=" btn btn-icon btn-secondary-light ms-2"
                                         data-bs-toggle="tooltip" data-bs-placement="top"
                                         data-bs-title="Add Contact">+</button>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <?php
                if (isset($delete)) {
                    echo $delete;
                }
                ?>
             <?php
                if (isset($show)) {
                    if ($show && $show->num_rows > 0) {
                        $i = 0;
                        while ($result = $show->fetch_assoc()) {
                            # code...
                ?>
             <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                 <div class="card custom-card">
                     <div class="card-body contact-action">
                         <div class="contact-overlay"></div>
                         <div class="d-flex align-items-top ">
                             <div class="d-flex flex-fill flex-wrap gap-2">
                                 <div class="avatar avatar-xl avatar-rounded me-3"> <img
                                         src="https://spruko.com/demo/ynex/dist/assets/images/faces/4.jpg" alt="">
                                 </div>
                                 <div>
                                     <h6 class="mb-1 fw-semibold"> <?php echo $result['username']; ?></h6>
                                     <p class="fw-semibold fs-11 mb-0 text-primary">
                                         <?php echo $result['contactdate']; ?>
                                     </p>
                                     <p class="mb-1 text-muted contact-mail text-truncate">
                                         <?php echo $result['contactdesc']; ?></p>
                                     <p class="fw-semibold fs-11 mb-0 text-primary"> <?php echo $result['useremail']; ?>
                                     </p>
                                 </div>
                             </div>
                             <div> <i class="  text-danger"><?php echo $result['contactid']; ?></i> </div>
                         </div>
                         <div class="d-flex align-items-center justify-content-center gap-2 contact-hover-buttons">
                             <a href="../edits/contact.edit.php?editid=<?php echo $result['contactid']; ?>">

                                 <button type="button" class="btn btn-sm btn-light contact-hover-btn"> Edit Contact
                             </a>
                             </button>
                             <div class="dropdown contact-hover-dropdown">
                                 <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="#"><i
                                                 class="ri-share-line me-2 align-middle d-inline-block"></i>Share</a>
                                     </li>
                                     <li><a class="dropdown-item" href="#"><i
                                                 class="ri-phone-line me-2 align-middle d-inline-block"></i>Call</a>
                                     </li>
                                     <li><a class="dropdown-item" href="#"><i
                                                 class="ri-chat-2-line me-2 align-middle d-inline-block"></i>Message</a>
                                     </li>
                                     <li><a class="dropdown-item" href="#"><i
                                                 class="ri-video-chat-line me-2 align-middle d-inline-block"></i>Video
                                             Call</a></li>
                                     <li><a class="dropdown-item" href="#"><i
                                                 class="ri-delete-bin-5-line me-2 align-middle d-inline-block"></i>Delete</a>
                                     </li>
                                     <li><a class="dropdown-item" href="#"><i
                                                 class="ri ri-heart-3-line me-2 align-middle d-inline-block"></i>Favourite</a>
                                     </li>
                                 </ul>
                             </div>
                             <a onclick="return confirm('Xác nhận xóa')"
                                 href="?delid=<?php echo $result['contactid']; ?>">
                                 <button type="button" class="btn btn-sm btn-light contact-hover-btn"> Delete Contact
                             </a>
                             </button>
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
             <nav aria-label="Page navigation">
                 <ul class="pagination justify-content-end">
                     <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                     <li class="page-item"><a class="page-link" href="#">1</a></li>
                     <li class="page-item"><a class="page-link" href="#">2</a></li>
                     <li class="page-item"><a class="page-link" href="#">Next</a></li>
                 </ul>
             </nav>
         </div>
         <!--End::row-1 -->
     </div>
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