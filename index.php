<?php
    require ("Connections/connection.php");
    require 'header/head.php';
?>

    <div class="container clearfix">

        <div class="row">
        <?php
                $query = $connection->query("SELECT post_title, post_description, post_category, post_date FROM posts");
                while($row = mysqli_fetch_assoc($query)) {

            ?>
            <div class="col-sm-8 blog-main main-content boxsize">
            
            <div class="blog-post">
                        <h2 class="blog-post-title"><?php echo $row['post_title'] ?></h2>
                        <p class="blog-post-meta"><?php echo $row['post_date'] ?></a></p>
                        <img src="http://placehold.it/550x250">
                        <p><?php echo $row['post_description'] ?></p>
                        <p><a href="#" class="btn btn-primary custom_button" role="button"><i class="fa fa-pencil-square icon"></i>Edit</a></p>

                    </div><!-- 1 /.blog-post -->

            </div>
            <?php
                }
            ?>
            
        </div>
        
    </div>
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