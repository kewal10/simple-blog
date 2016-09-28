<?php
    ob_start();
    session_start();
    require 'Connections/connection.php';
    require 'header/head.php';
?>

<?php
if(isset($_POST['Register'])) {
    $email = $_POST['email'];
    $user_name = $_POST['username'];


    $check_email = "SELECT * FROM users WHERE email='$email' or user_name='$user_name'";
    //$check_username = "SELECT * FROM users WHERE user_name='$user_name'";
    $run = $connection->query($check_email);

    if(mysqli_num_rows($run)>0){
      echo "<script>alert('$user_name or $email is already exixt. Try with another User Name and Email')</script>";
      //echo "<script>alert('User Name $user_name is already exist. Try with another User Name')</script>";
    } else {


        $first_name = $_POST['firstName'];
        $last_name = $_POST['lastName'];

        $password = $_POST['password'];

        $query = $connection->query(" INSERT INTO users ( first_name, last_name, email, user_name, password )
        VALUES ( '$first_name', '$last_name', '$email', '$user_name', '$password') ");

        header('Location: login.php');

        die();
    }
    }

?>


        <div class="container container_custom">
            <form id="userForm" class="form-horizontal" method="post" action="register.php">
                <fieldset>
                    <!-- Form Name -->
                    <legend class="center_block">Create an Account</legend>
                    <div class="form-group has-feedback">
                        <label class="col-xs-3 control-label">Full Name</label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="firstName" placeholder="Please enter First Name" />
                        </div>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="lastName" placeholder="Please enter Last Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Email address</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="email" placeholder="Please enter a Email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Username</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="username" placeholder="Please enter user name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Please enter a password" />
                        </div>
                        <div class="col-xs-3">
                            <input type="password" class="form-control" name="password2" placeholder="Please Re-enter password" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 col-xs-offset-3">
                            <button id="register_button" name="Register" type="submit" value="Register" class="btn btn-primary">Register</button>
                            <span class="help-block text-left"><a href="login.php">I have an Account</a></span>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
<?php
    require 'header/footer.php';
?>