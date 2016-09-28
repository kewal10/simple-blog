<?php
    ob_start();
    session_start();
    require 'Connections/connection.php';
    require 'header/head.php';

?>
<?php
//$password_match = '';
if(isset($_POST['login'])) {

    $user_name = $_POST['username'];
    $password = $_POST['password'];

    $result = $connection->query("SELECT * FROM users WHERE user_name='$user_name' AND password='$password'");

    $row = $result->fetch_array(MYSQLI_BOTH);

    $_SESSION["user_id"] = $row["user_id"];

    $_SESSION["first_name"] = $row["first_name"];

    header('Location: posts.php');

}

?>

<div class="container center-blocker container_custom">
    <form class="form-signin has-feedback mybox" id="userForm" method="post" action="login.php">
        <h2 class="form-signin-heading">Please sign in</h2>
        <div class="form-group has-feedback">
            <label for="inputEmail" class="sr-only">UserName</label>
            <input type="text" id="inputEmail" class="form-control" name="username" placeholder="User Name" autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" >
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button id="sign_in_btn logon" name="login" class="btn btn-primary logon" value="login"><i class="fa fa-sign-in icon"></i>login</button>
            <span class="help-block text-left1"><a href="register.php">I don't have an account</a></span>
        </div>
    </form>
</div>

<?php
    require 'header/footer.php';
?>




