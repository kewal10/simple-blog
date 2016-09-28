<?php
    session_start();
    ob_start();

    if(isset($_SESSION["user_id"])) {
    }else {
        header('Location: login.php');
    }

    require 'Connections/connection.php';
    require 'header/head.php';
?>

<?php
    if(isset($_POST['post'])) {

        $post_title = $_POST['post_title'];
        $post_description = $_POST['post_description'];
        $post_category = $_POST['post_category'];
        $post_media = $_POST['select_media'];

       // $post_id = $_SESSION['user_id'];

        //$query = $connection->query("INSERT INTO posts VALUES ('$post_title', '$post_description', '$post_category', '$post_media')");
        $query = $connection->query(" INSERT INTO posts (post_title, post_description, post_category, post_media)
        VALUES ('$post_title', '$post_description', '$post_category', '$post_media')");

        header('Location: posts.php');

    }
?>

        <div class="container container_custom">
            <form class="form-horizontal" method="post" action="new_post.php" name="new_post" id="new_post">
                <fieldset>
                    <!-- Form Name -->
                    <legend class="center_block">Add New Post</legend>
                    <!-- Title -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="post_title">Title</label>
                        <div class="col-md-4">
                            <input id="post_title" name="post_title" type="text" placeholder="Title" class="form-control input-md">
                        </div>
                    </div>
                    <!-- Select Category -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="post_category">Select Category</label>
                        <div class="col-md-4">
                            <select id="post_category" name="post_category" class="form-control">
                                <option value="Programming">Programming</option>
                                <option value="Development">Web Development</option>
                                <option value="Web Design">Web Design</option>
                                <option value="Software Development">Software Development</option>
                            </select>
                        </div>
                    </div>
                    <!-- Description -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="post_description">Description</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="post_description" name="post_description" placeholder="Description"></textarea>
                        </div>
                    </div>
                    <!-- Post Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="post"></label>
                        <div class="col-md-4">
                            <button id="post" name="post" type="submit" value="Post" class="btn btn-primary custom_button pull-right">Post</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
<?php
    require 'header/footer.php';
?>