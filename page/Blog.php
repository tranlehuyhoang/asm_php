<?php
include '../inc/Header.php';
$class = new blog();
$show = $class->show_blog();

?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Blog List</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="page/home.php">Home</a></li>
                    <li class="current"><a href="blog-list.html">Blog List</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main-content-wrapper">
    <div class="blog-area pt--40 pb--80 pt-md--30 pb-md--60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <?php
                        if (isset($show)) {
                            if ($show && $show->num_rows > 0) {
                                $i = 0;
                                while ($result = $show->fetch_assoc()) {
                                    # code...
                        ?>
                                    <div class="col-12 mb--30">
                                        <article class="post listview sticky single-post format-image">
                                            <div class="post-media">
                                                <div class="image">
                                                    <a href="page/blogdetail.php?blogid=<?php echo  $result['blogid']; ?>">
                                                        <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['blogimg']); ?>" alt="blog">
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="post-info">
                                                <header class="entry-header">
                                                    <div class="entry-meta">
                                                        <span class="post-author">
                                                            <span class="post-by">Post By:</span>
                                                            admin
                                                        </span>

                                                        <span class="post-date"><?php echo  $result['blogdate']; ?></span>
                                                    </div>
                                                    <h2 class="post-title"><a href="page/blogdetail.php?blogid=<?php echo  $result['blogid']; ?>"><?php echo  $result['blogtitle']; ?></a>
                                                    </h2>
                                                </header>
                                                <div class="post-content">
                                                    <p><?php echo  $result['blogheader']; ?></p>
                                                </div>
                                                <a href="page/blogdetail.php?blogid=<?php echo  $result['blogid']; ?>" class="btn btn-read-more btn-style-2">Continue
                                                    Reading</a>
                                            </div>
                                        </article>
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
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination-wrap">
                                <p class="page-ammount">Showing 1 to 8 of 15 (2 Pages)</p>
                                <ul class="pagination">
                                    <li><a href="" class="first">|&lt;</a></li>
                                    <li><a href="" class="prev">&lt;</a></li>
                                    <li><a href="" class="current">1</a></li>
                                    <li><a href="">2</a></li>
                                    <li><a href="" class="next">&gt;</a></li>
                                    <li><a href="" class="next">&gt;|</a></li>
                                </ul>
                            </div>
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