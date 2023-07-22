<?php
include '../inc/Header.php';


$cat = new blog();
$catId = $_GET['blogid'];
$getcatbyid = $cat->getblogbyid($catId);
?>
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Blog Details</h1>
                <ul class="breadcrumb justify-content-center">
                    <li><a href="page/home.php">Home</a></li>
                    <li class="current"><a href="shop.html">Audio Blog Details</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($getcatbyid)) {
    $result = $getcatbyid->fetch_assoc();
    // echo  print_r($result);

?>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v17.0&appId=827255851653216&autoLogAppEvents=1" nonce="K6wo1X74"></script>
    <div class="main-content-wrapper">
        <div class="single-post-area pt--40 pb--80 pt-md--30 pb-md--60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-lg-2 order-1 mb-md--30">
                        <div class="single-post-wrapper">
                            <article class="post post-details mb--30">
                                <div class="post-media">
                                    <div class="post-gallery nav-vertical-center slick-initialized slick-slider"><span class="slick-btn slick-prev slick-arrow" style=""><i class="fa fa-angle-left"></i></span>
                                        <div class="slick-list draggable">
                                            <div class="slick-track" style="opacity: 1; width: 6020px; transform: translate3d(-860px, 0px, 0px);">
                                                <div class="single-post-gallery slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 840px;" tabindex="-1">
                                                    <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/blog5.jpg" alt="blog">
                                                </div>
                                                <div class="single-post-gallery slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 840px;" tabindex="0">
                                                    <img src="<?php echo 'data:image/png;base64,' . base64_encode($result['blogimg']); ?>" alt="blog">
                                                </div>
                                                <div class="single-post-gallery slick-slide" data-slick-index="1" aria-hidden="true" style="width: 840px;" tabindex="-1">
                                                    <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/blog3.jpg" alt="blog">
                                                </div>
                                                <div class="single-post-gallery slick-slide" data-slick-index="2" aria-hidden="true" style="width: 840px;" tabindex="-1">
                                                    <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/blog5.jpg" alt="blog">
                                                </div>
                                                <div class="single-post-gallery slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" style="width: 840px;" tabindex="-1">
                                                    <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/blog2-1024x613.jpg" alt="blog">
                                                </div>
                                                <div class="single-post-gallery slick-slide slick-cloned" data-slick-index="4" id="" aria-hidden="true" style="width: 840px;" tabindex="-1">
                                                    <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/blog3.jpg" alt="blog">
                                                </div>
                                                <div class="single-post-gallery slick-slide slick-cloned" data-slick-index="5" id="" aria-hidden="true" style="width: 840px;" tabindex="-1">
                                                    <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/blog5.jpg" alt="blog">
                                                </div>
                                            </div>
                                        </div>


                                        <span class="slick-btn slick-next slick-arrow" style=""><i class="fa fa-angle-right"></i></span>
                                    </div>
                                </div>
                                <div class="post-info">
                                    <header class="entry-header">
                                        <div class="entry-meta">
                                            <span class="post-author">
                                                <span class="post-by">Post By:</span>
                                                admin
                                            </span>

                                            <span class="post-date"><?php echo $result['blogdate'] ?></span>
                                        </div>
                                        <h2 class="post-title">Blog Gallery Post</h2>
                                    </header>
                                    <div class="post-content">
                                        <p> <?php echo $result['blogheader'] ?></p>

                                        <blockquote> <?php echo $result['blogdesc'] ?></blockquote>

                                    </div>
                                    <div class="footer-meta">
                                        <a class="comment-count" href="#">0 Comments</a>
                                        <span>/</span>
                                        <p class="post-tags">
                                            Tags:
                                            <a href="#">
                                                <?php
                                                if ($result['blogtagid'] == 1) {
                                                    echo 'SảnPhẩm';
                                                }
                                                ?>
                                                <?php
                                                if ($result['blogtagid'] == 2) {
                                                    echo 'KhuyếnMãi';
                                                }
                                                ?>
                                                <?php
                                                if ($result['blogtagid'] == 3) {
                                                    echo 'MuaSắmOnline';
                                                }
                                                ?>
                                                <?php
                                                if ($result['blogtagid'] == 4) {
                                                    echo 'ThanhToán';
                                                }
                                                ?>
                                                <?php
                                                if ($result['blogtagid'] == 5) {
                                                    echo 'ĐánhGiá';
                                                }
                                                ?>

                                            </a>

                                        </p>
                                    </div>
                                    <div class="social__sharing mb--30">
                                        <h3>SHARE THIS POST</h3>
                                        <ul class="social social-round">
                                            <li class="social__item">
                                                <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" class="social__link"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="social__item">
                                                <a href="https://twitter.com" target="_blank" rel="noopener noreferrer" class="social__link"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="social__item">
                                                <a href="pinterest.com" class="social__link"><i class="fa fa-pinterest"></i></a>
                                            </li>
                                            <li class="social__item">
                                                <a href="google.plus.com" class="social__link"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li class="social__item">
                                                <a href="linkedin.com" class="social__link"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="related-posts-wrap">
                                    <h3>RELATED POSTS</h3>
                                    <div class="row">
                                        <div class="col-lg-4 mb-md--30">
                                            <div class="related-post">
                                                <a href="blog-details-image.html" class="related-post__thumb">
                                                    <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/blog1.jpg" alt="portfolio">
                                                </a>
                                                <h4><a href="">THE LONG WAY TO THE TOP</a></h4>
                                                <span>Sep 01 2018</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 mb-md--30">
                                            <div class="related-post">
                                                <a href="single-portfolio.html" class="related-post__thumb">
                                                    <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/blog2-1024x613.jpg" alt="portfolio">
                                                </a>
                                                <h4><a href="blog-details-image.html">TAKE A RIDE IN A LUXURY CAR</a></h4>
                                                <span>Oct 06 2017</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="related-post">
                                                <a href="blog-details-image.html" class="related-post__thumb">
                                                    <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/blog3.jpg" alt="portfolio">
                                                </a>
                                                <h4><a href="single-portfolio.html">AUGUE LOREM LACINIA</a></h4>
                                                <span>Feb 01 2014</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <div class="comment">
                                <div class="comment-respond">
                                    <h3 class="comment-reply-title">LEAVE A REPLY</h3>
                                    <ul class="comment-list">
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-avatar">
                                                    <img src="https://htmldemo.net/mirora/mirora/assets/img/others/comment-1.jpg" alt="comment">
                                                </div>
                                                <div class="comment-info">
                                                    <div class="comment-meta">
                                                        <h5 class="comment-author"><a href="#">Julia Rebeca</a></h5>
                                                        <span class="comment-date">30 Janurary, 2018</span>
                                                        <a href="" class="reply">Reply</a>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                                            fugit, sed quia cntur magn lores eos qui ratione voluptatem
                                                            sequi nesciunt. Neque porro</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="children">
                                                <li>
                                                    <div class="single-comment">
                                                        <div class="comment-avatar">
                                                            <img src="https://htmldemo.net/mirora/mirora/assets/img/others/comment-2.jpg" alt="comment">
                                                        </div>
                                                        <div class="comment-info">
                                                            <div class="comment-meta">
                                                                <h5 class="comment-author"><a href="#">Admin</a></h5>
                                                                <span class="comment-date">30 Janurary, 2018</span>
                                                                <a href="" class="reply">Reply</a>
                                                            </div>
                                                            <div class="comment-content">
                                                                <p>enim ipsam voluptatem quia voluptas sit aspernatur aut
                                                                    odit aut fugit, sed quia cntur magn lores eos qui
                                                                    ratione voluptatem sequi nesciunt. Neque porro</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="single-comment">
                                                <div class="comment-avatar">
                                                    <img src="https://htmldemo.net/mirora/mirora/assets/img/others/comment-3.jpg" alt="comment">
                                                </div>
                                                <div class="comment-info">
                                                    <div class="comment-meta">
                                                        <h5 class="comment-author"><a href="#">Julia Rebeca</a></h5>
                                                        <span class="comment-date">30 Janurary, 2018</span>
                                                        <a href="" class="reply">Reply</a>
                                                    </div>
                                                    <div class="comment-content">
                                                        <p>enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                                                            fugit, sed quia cntur magn lores eos qui ratione voluptatem
                                                            sequi nesciunt. Neque porro</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <form class="form comment-form">
                                        <p class="comment-notes"><span id="email-notes">Your email address will not be
                                                published.</span> Required fields are marked <span class="required">*</span>
                                        </p>
                                        <div class="form-row mb--20">
                                            <div class="col-12">
                                                <div class="form__group">
                                                    <label class="form__label" for="comment">Comment *</label>
                                                    <textarea name="comment" id="comment" class="form__input form__input--3 form__input--textarea"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mb--20">
                                            <div class="col-md-4 mb-sm--20">
                                                <div class="form__group">
                                                    <label class="form__label" for="comment_name">Name *</label>
                                                    <input type="text" id="comment_name" name="comment_name" class="form__input form__input--3">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-sm--20">
                                                <div class="form__group">
                                                    <label class="form__label" for="comment_email">Email *</label>
                                                    <input type="email" id="comment_email" name="comment_email" class="form__input form__input--3">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form__group">
                                                    <label class="form__label" for="comment_url">Website *</label>
                                                    <input type="url" id="comment_url" name="comment_url" class="form__input form__input--3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12">
                                                <button type="submit" class="form__submit">Post Comment</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 order-lg-1 order-2">
                        <aside class="blog-sidebar">
                            <!-- Search Widget Start -->
                            <div class="sidebar-widget search-widget">
                                <h3 class="widget-title">Search</h3>
                                <div class="widget_conent">
                                    <form action="#" class="searchform">
                                        <input type="text" class="searchform__input" name="search" id="blog_search" placeholder="Search...">
                                        <button class="searchform__submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Search Widget End -->

                            <!-- Archive Widget Start -->
                            <div class="sidebar-widget archive-widget">
                                <h3 class="widget-title">Blog Archives</h3>
                                <div class="widget_conent">
                                    <ul>
                                        <li><a href="single-blog.html">March 2015</a> <span>(1)</span></li>
                                        <li><a href="single-blog.html">April 2015</a> <span>(5)</span></li>
                                        <li><a href="single-blog.html">May 2015</a> <span>(7)</span></li>
                                        <li><a href="single-blog.html">June 2015</a> <span>(10)</span></li>
                                        <li><a href="single-blog.html">July 2015</a> <span>(15)</span></li>
                                        <li><a href="single-blog.html">August 2015</a> <span>(10)</span></li>
                                        <li><a href="single-blog.html">September 2015</a> <span>(8)</span></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Archive Widget Start -->

                            <!-- Recent Post Widget Start -->
                            <div class="sidebar-widget recent-post-widget">
                                <h3 class="widget-title">Recent Posts</h3>
                                <div class="widget_conent">
                                    <div class="recent-post-single">
                                        <div class="recent-post-media">
                                            <div class="image">
                                                <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/post4-370x230.jpg" alt="Blog">
                                            </div>
                                        </div>
                                        <div class="recent-post-content">
                                            <h4><a href="single-blog.html">Gravida luctus lorem accumsan est massa
                                                    mauris.</a></h4>
                                            <p><a href="single-blog.html">26-10-18</a></p>
                                        </div>
                                    </div>
                                    <div class="recent-post-single">
                                        <div class="recent-post-media">
                                            <div class="image">
                                                <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/post3-370x230.jpg" alt="Blog">
                                            </div>
                                        </div>
                                        <div class="recent-post-content">
                                            <h4><a href="single-blog.html">Gravida luctus lorem accumsan est massa
                                                    mauris.</a></h4>
                                            <p><a href="single-blog.html">27-10-18</a></p>
                                        </div>
                                    </div>
                                    <div class="recent-post-single">
                                        <div class="recent-post-media">
                                            <div class="image">
                                                <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/post2-370x230.jpg" alt="Blog">
                                            </div>
                                        </div>
                                        <div class="recent-post-content">
                                            <h4><a href="single-blog.html">Gravida luctus lorem accumsan est massa
                                                    mauris.</a></h4>
                                            <p><a href="single-blog.html">28-10-18</a></p>
                                        </div>
                                    </div>
                                    <div class="recent-post-single">
                                        <div class="recent-post-media">
                                            <div class="image">
                                                <img src="https://htmldemo.net/mirora/mirora/assets/img/blog/post1-370x230.jpg" alt="Blog">
                                            </div>
                                        </div>
                                        <div class="recent-post-content">
                                            <h4><a href="single-blog.html">Gravida luctus lorem accumsan est massa
                                                    mauris.</a></h4>
                                            <p><a href="single-blog.html">26-10-18</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Recent Post Widget End -->

                            <!-- Facebook Like Box Widget Start -->
                            <div class="sidebar-widget widget_fb_like_box">
                                <h3 class="widget-title">Facebook Like Box</h3>
                                <div class="fb-page" data-href="https://www.facebook.com/profile.php?id=100093988191420" data-tabs="timeline" data-width="340" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">

                                </div>
                            </div>
                            <!-- Facebook Like Box Widget End -->

                            <!-- Twitter Feed Widget Start -->
                            <div class="sidebar-widget twitter-feed-widget">
                                <h3 class="widget-title">Latest Twitter Feeds</h3>
                                <ul class="twitter-feed">
                                    <li>
                                        <div class="twitter-feed__avatar">
                                            <img src="https://htmldemo.net/mirora/mirora/assets/img/others/comment-icon.png" alt="avatar">
                                        </div>
                                        <div class="twitter-feed__info">
                                            <div class="twitter-feed__header">
                                                <a href="#"><strong>Keving Sobo</strong></a>
                                                <a href="#">@hastech</a>
                                            </div>
                                            <div class="twitter-feed__content">
                                                <p>Our best WordPress theme for your online store is here
                                                    https://t.co/BYA8Bn8A6f https://t.co/qtVhWOH5PU </p>
                                            </div>
                                            <div class="twitter-feed__footer">
                                                <a href="#">Sep 23</a>
                                                <a href="#">reply</a>
                                                <a href="#">retweet</a>
                                                <a href="#">favorite</a>
                                                <a href="#">2 years ago</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twitter-feed__avatar">
                                            <img src="https://htmldemo.net/mirora/mirora/assets/img/others/comment-icon.png" alt="avatar">
                                        </div>
                                        <div class="twitter-feed__info">
                                            <div class="twitter-feed__header">
                                                <a href="#"><strong>Keving Sobo</strong></a>
                                                <a href="#">@hastech</a>
                                            </div>
                                            <div class="twitter-feed__content">
                                                <p>Our best WordPress theme for your online store is here
                                                    https://t.co/BYA8Bn8A6f https://t.co/qtVhWOH5PU </p>
                                            </div>
                                            <div class="twitter-feed__footer">
                                                <a href="#">Sep 23</a>
                                                <a href="#">reply</a>
                                                <a href="#">retweet</a>
                                                <a href="#">favorite</a>
                                                <a href="#">2 years ago</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="twitter-feed__avatar">
                                            <img src="https://htmldemo.net/mirora/mirora/assets/img/others/comment-icon.png" alt="avatar">
                                        </div>
                                        <div class="twitter-feed__info">
                                            <div class="twitter-feed__header">
                                                <a href="#"><strong>Keving Sobo</strong></a>
                                                <a href="#">@hastech</a>
                                            </div>
                                            <div class="twitter-feed__content">
                                                <p>Our best WordPress theme for your online store is here
                                                    https://t.co/BYA8Bn8A6f https://t.co/qtVhWOH5PU </p>
                                            </div>
                                            <div class="twitter-feed__footer">
                                                <a href="#">Sep 23</a>
                                                <a href="#">reply</a>
                                                <a href="#">retweet</a>
                                                <a href="#">favorite</a>
                                                <a href="#">2 years ago</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Twitter Feed Widget End -->

                            <!-- Tags Widget Start -->
                            <div class="sidebar-widget tags-widget">
                                <h3 class="widget-title">Tags</h3>
                                <div class="widget_conent">
                                    <div class="tagcloud">
                                        <a href="blog.html">chilled</a>
                                        <a href="blog.html">dark</a>
                                        <a href="blog.html">euro</a>
                                        <a href="blog.html">fashion</a>
                                        <a href="blog.html">food</a>
                                        <a href="blog.html">hardware</a>
                                        <a href="blog.html">hat</a>
                                        <a href="blog.html">hipster</a>
                                        <a href="blog.html">holidays</a>
                                        <a href="blog.html">light</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Tags Widget End -->
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
} ?>

<?php
include '../inc/Footer.php';
?>