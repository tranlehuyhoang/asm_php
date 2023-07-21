  <?php

    include __DIR__ .  '/../inc/Header.php';
    $class = new review();
    $show = $class->show_review();

    if (isset($_GET['delid'])) {
        $delid = $_GET['delid'];
        $delete = $class->delete_review($delid);
        $show = $class->show_review();
    }
    ?>

  <div class="main-content app-content">
      <div class="container-fluid">
          <!-- Page Header -->
          <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
              <h1 class="page-title fw-semibold fs-18 mb-0">Reviews <a href="../creates/review.create.php"><button type="button" class="btn btn-info">Create
                          +</button></a></h1>

              <div class="ms-md-1 ms-0">
                  <nav>
                      <ol class="breadcrumb mb-0">
                          <li class="breadcrumb-item"><a href="#">Pages</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                      </ol>
                  </nav>
              </div>
          </div> <!-- Page Header Close -->
          <div class="container-lg reviews-container">
              <?php
                if (isset($delete)) {
                    echo $delete;
                }
                ?>
              <!-- Start::row-1 -->
              <div class="row justify-content-center">
                  <div class="col-xxl-10 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                      <div class="row gy-4">
                          <?php
                            if (isset($show)) {
                                if ($show && $show->num_rows > 0) {
                                    $i = 0;
                                    while ($result = $show->fetch_assoc()) {
                                        # code...

                            ?>
                                      <div class="col-xxl-4 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                          <style>
                                              .reviews-container .card:before {
                                                  content: attr(data-content);
                                              }
                                          </style>
                                          <div class="card custom-card" data-content="<?php echo $result['reviewid']; ?>">
                                              <div class="card-body">
                                                  <div class="d-flex align-items-center mb-3"> <span class="avatar avatar-md avatar-rounded me-3"> <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['productimg']); ?>" alt=""> </span>
                                                      <div>
                                                          <p class="mb-0 fw-semibold fs-14 text-primary">
                                                              User : <?php echo $result['username']; ?></p>
                                                          <p class="mb-0 fs-10 fw-semibold text-muted">
                                                              Email : <?php echo $result['useremail']; ?></p>
                                                      </div>
                                                  </div>
                                                  <div class="mb-3"> <span class="text-muted">Content :
                                                          <?php echo $result['reviewcontent']; ?> </span> </div>
                                                  <div class="d-flex align-items-center justify-content-between">
                                                      <div class="d-flex align-items-center"> <span class="text-muted">Rating :
                                                          </span> <span class="text-warning d-block ms-1">
                                                              <?php
                                                                for ($i = 0; $i < $result['reviewrating']; $i++) {
                                                                ?>
                                                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="10px" width="10px" version="1.1" id="Capa_1" viewBox="0 0 47.94 47.94" xml:space="preserve">
                                                                      <path style="fill:#ED8A19;" d="M26.285,2.486l5.407,10.956c0.376,0.762,1.103,1.29,1.944,1.412l12.091,1.757  c2.118,0.308,2.963,2.91,1.431,4.403l-8.749,8.528c-0.608,0.593-0.886,1.448-0.742,2.285l2.065,12.042  c0.362,2.109-1.852,3.717-3.746,2.722l-10.814-5.685c-0.752-0.395-1.651-0.395-2.403,0l-10.814,5.685  c-1.894,0.996-4.108-0.613-3.746-2.722l2.065-12.042c0.144-0.837-0.134-1.692-0.742-2.285l-8.749-8.528  c-1.532-1.494-0.687-4.096,1.431-4.403l12.091-1.757c0.841-0.122,1.568-0.65,1.944-1.412l5.407-10.956  C22.602,0.567,25.338,0.567,26.285,2.486z" />
                                                                  </svg>
                                                              <?php
                                                                }
                                                                ?>
                                                          </span> </div>
                                                      <div class="float-end fs-12 fw-semibold text-muted text-end">
                                                          <span><?php echo $result['reviewdate']; ?></span> <span class="d-block fw-normal fs-12 text-success"><i> <a href="../edits/Review.edit.php?editid=<?php echo $result['reviewid']; ?>">
                                                                      <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                                                  </a>
                                                                  <a onclick="return confirm('Xác nhận xóa')" href="?delid=<?php echo $result['reviewid']; ?>">
                                                                      <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                                                                  </a>
                                                              </i></span>
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
                          <ul class="pagination mb-5 justify-content-end">
                              <li class="page-item disabled"> <a class="page-link" href="#"> Prev </a> </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"> <a class="page-link text-primary" href="#"> next </a> </li>
                          </ul>
                      </div>
                  </div>
              </div>
              <!--End::row-1 -->
          </div>
      </div>
  </div>
  <?php

    include __DIR__ .  '/../inc/footer.php';

    ?>