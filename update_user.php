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

    $first_name = $_POST['firstName'];
    $last_name = $_POST['lastName'];
    $email = $_POST['email'];
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    $sql = $connection->query("UPDATE users SET first_name = '$first_name', last_name = '$last_name' ,email = '$email', user_name = '$user_name', password = '$password'");

    header("location: posts.php");

    die();
}

    $user_id = $_SESSION["user_id"];

   $result = $connection->query("SELECT * FROM users WHERE user_id = '$user_id'");

    $row = $result->fetch_array(MYSQLI_BOTH);



    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $email = $row['email'];
    $user_name = $row['user_name'];
    $password = $row['password'];
?>


        <div class="container container_custom">
            <form id="userForm" class="form-horizontal" action="update_user.php" method="post" name="Update_user">
                <fieldset>
                    <!-- Form Name -->
                    <legend class="center_block">Update User</legend>
                    <div class="form-group has-feedback">
                        <label class="col-xs-3 control-label">Full Name</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" value="<?php echo $first_name; ?>" name="firstName" placeholder="Please enter First Name" />
                        </div>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" value="<?php echo $last_name; ?>" name="lastName" placeholder="Please enter Last Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email address</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" value="<?php echo $email; ?>" name="email" placeholder="Please enter a Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Username</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" value="<?php echo $user_name; ?>" name="username" placeholder="Please enter user name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-3">
                            <input type="password" class="form-control" id="password" value="<?php echo $password; ?>" name="password" placeholder="Please enter a password" />
                        </div>
                        <div class="col-xs-3">
                            <input type="password" class="form-control" name="password2" value="<?php echo $password; ?>" placeholder="Please Re-enter a same password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 col-xs-offset-3">
                            <button type="submit" name="update" value="update" class="btn btn-primary pull-right">Update</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>

<?php
    require 'header/footer.php';
?>