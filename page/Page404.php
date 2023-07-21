<?php
include '../inc/Header.php';
?>
<main id="content" class="main-content-wrapper">
    <div class="error-area pt--90 pb--100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 text-center">
                    <div class="error">
                        <h1>404</h1>
                        <h2>OPPS! PAGE NOT BE FOUND</h2>
                        <p>Sorry but the page you are looking for does not exist, have been removed, name changed or is
                            temporarity unavailable.</p>
                        <form action="#" class="search-form search-form--3 mb--60">
                            <input type="text" name="search" id="error_search" placeholder="Search..." class="search-form__input">
                            <button type="submit" class="search-form__submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                        <a href="page/home.php" class="btn btn-4 btn-style-3">Back to home page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php
include '../inc/Footer.php';
?>