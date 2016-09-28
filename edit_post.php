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
    if(isset($_POST['update'])) {
        $post_title = $_POST['post_title'];
        $post_category = $_POST['post_category'];
        $post_description = $_POST['post_description'];
        $select_media = $_POST['select_media'];
        //$password = $_POST['password'];
        $sql = $connection->query("UPDATE posts SET post_title = '$post_title', post_description = '$post_description' ,post_category = '$post_category'");

    header("location: posts.php");

    die();
}
    $user_id = $_SESSION["user_id"];
    $result = $connection->query("SELECT * FROM posts WHERE post_id = '$user_id'");
    $row = $result->fetch_array(MYSQLI_BOTH);

    $post_title = $row['post_title'];
    $post_category = $row['post_category'];
    $post_description = $row['post_description'];
    //$select_media = $row['select_media'];

?>

<div class="container container_custom">
    <form class="form-horizontal" action="edit_post.php" method="post" name="edit_post">
        <fieldset>
            <!-- Form Name -->
            <legend class="center_block">Update your post</legend>
            <!-- Title -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="post_title">Title</label>
                <div class="col-md-4">
                    <input id="post_title" name="post_title" type="text" value="<?php echo $post_title; ?>" placeholder="Title" class="form-control input-md">
                </div>
            </div>
            <!-- Select Category -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="post_category">Select Category</label>
                <div class="col-md-4">
                    <select id="post_category" name="post_category" class="form-control">
                        <option value="<?php echo $post_category; ?>">Programming</option>
                        <option value="<?php echo $post_category; ?>">Web Development</option>
                        <option value="<?php echo $post_category; ?>">Web Design</option>
                        <option value="<?php echo $post_category; ?>">Software Development</option>
                    </select>
                </div>
            </div>
            <!-- Description -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="post_description">Description</label>
                <div class="col-md-4">
                    <textarea class="form-control" id="post_description"  name="post_description" placeholder="Description"><?php echo $post_description; ?></textarea>
                </div>
            </div>
            
            <!-- Image or Video -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="select_media">Image or Video</label>
                <div class="col-md-4">
                    <input id="select_media" name="select_media" value="" class="select_media" type="file">
                </div>
            </div>
            <!-- Post Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="update"></label>
                <div class="col-md-4">
                    <button id="update" name="update"  class="btn btn-primary custom_button pull-right">Update</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<?php
//session_start();
//require 'Connections/connection.php';
require 'header/footer.php';
?>