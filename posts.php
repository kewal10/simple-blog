<?php


  session_start();
    ob_start();
    if(isset($_SESSION["first_name"])) {
    }else {
        header('Location: login.php');
    }
    require ("Connections/connection.php");
    require 'header/head.php';

?>

    <div class="container">
        <div class="blog-header">
            <h1 class="blog-title">Your Post</h1>
        </div>
        <div class="row">
               <?php
                $query = $connection->query("SELECT post_title, post_description, post_category, post_date FROM posts");
                while($row = mysqli_fetch_assoc($query)) {

                ?>
            <div class="col-sm-8 blog-main main-content">
            

                    <div class="blog-post">
                        <h2 class="blog-post-title" id="title"><?php echo $row['post_title'] ?></h2>
                        <p class="blog-post-meta"><?php echo $row['post_date'] ?> by <a href="#"><?php echo $_SESSION['first_name'] ?></a></p>
                        <img src="http://placehold.it/550x250">
                        <p><?php echo $row['post_description'] ?></p>
                        <p><a href="#" class="btn btn-primary custom_button" role="button"><i class="fa fa-pencil-square icon"></i>Edit</a></p>

                    </div><!-- 1 /.blog-post -->

            </div><!-- /.blog-main -->
            
            <?php
                }
            ?>
            
            <div class="col-sm-3 col-sm-offset-1 blog-sidebar" style="position: absolute;right: 118px;top: 236px;">
                <div class="sidebar-module sidebar-module-inset">
                    <h4><?php echo $_SESSION['first_name']; ?></h4>
                    <img class="img-circle" src="http://placehold.it/140x140 ">
                    <p>Cum sociis natoque penatibus et magnis nascetur ridiculus mus. Aenean eu </p>
                    <p><a href="logout.php" class="btn btn-primary custom_button" role="button"><i class="fa fa-sign-out icon"></i>logout</a></p>
                </div>
                <div class="sidebar-module">
                    <h4>Categories</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">Computer Science</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Software Development</a></li>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Programming</a></li>

                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Social Media</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ol>
                </div>
            </div><!-- /.blog-sidebar -->
            
        </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="container">
        <div class="row">
            <nav class="page_nav">
                <!-- Page nav -->
                <ul class="pager">
                    <li><a href="#"><i class="fa fa-caret-left fa-2x nav_icon"></i></a></li>
                    <li><a href="#"><i class="fa fa-caret-right fa-2x nav_icon"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>

<?php
require 'header/footer.php';
?>