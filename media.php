<?php

    session_start();
    if(isset($_SESSION["user_id"])) {
    }else {
        header('Location: login.php');
    }
    require 'Connections/connection.php';
    require 'header/head.php';

?>


        <div class="container container_custom">
            <div class="row">

            <div class="col-lg-12">
                <h1 class="page-header center_block">Your Images and Videos</h1>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="http://placehold.it/400x300" data-lightbox="image-1"><img class="img-responsive" src="http://placehold.it/400x300" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="http://placehold.it/400x300" data-lightbox="image-1"><img class="img-responsive" src="http://placehold.it/400x300" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="http://placehold.it/400x300" data-lightbox="image-1"><img class="img-responsive" src="http://placehold.it/400x300" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="http://placehold.it/400x300" data-lightbox="image-1"><img class="img-responsive" src="http://placehold.it/400x300" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="http://placehold.it/400x300" data-lightbox="image-1"><img class="img-responsive" src="http://placehold.it/400x300" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="http://placehold.it/400x300" data-lightbox="image-1"><img class="img-responsive" src="http://placehold.it/400x300" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="http://placehold.it/400x300" data-lightbox="image-1"><img class="img-responsive" src="http://placehold.it/400x300" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="http://placehold.it/400x300" data-lightbox="image-1"><img class="img-responsive" src="http://placehold.it/400x300" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="http://placehold.it/400x300" data-lightbox="image-1"><img class="img-responsive" src="http://placehold.it/400x300" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="http://placehold.it/400x300" data-lightbox="image-1"><img class="img-responsive" src="http://placehold.it/400x300" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="http://placehold.it/400x300" data-lightbox="image-1"><img class="img-responsive" src="http://placehold.it/400x300" alt=""></a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
               <a href="http://placehold.it/400x300" data-lightbox="image-1"><img class="img-responsive" src="http://placehold.it/400x300" alt=""></a>
            </div>
        </div>
        </div>

        <div class="container">
            <div class="row">
                <nav class="page_nav_right">
                    <ul class="pagination">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                    </ul>
                </nav>
            </div>
        </div>
<?php
    require 'header/footer.php';
?>