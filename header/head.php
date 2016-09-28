

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simple Blog</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="css/lightbox.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><i class="fa fa-code logo"></i>Simple Blog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
               
               <?php
                if(isset($_SESSION['first_name']))
                {
               
               
                echo '<li><a href="posts.php">Home</a></li>';
                echo '<li><a href="new_post.php">New Post</a></li>';
                echo '<li><a href="media.php">Media</a></li>';
                echo '<li><a href="update_user.php">Update</a></li>';
                echo '<li><a href="logout.php"><i class="fa fa-sign-out icon"></i>logout</a></li>';
                
                } else {
                    echo '<li><a href="index.php">Home</a></li>';
                    echo '<li><a href="register.php"><i class="fa fa-user-plus icon"></i>Sign Up</a></li>';
                    echo '<li><a href="login.php"><i class="fa fa-sign-in icon"></i>Login</a></li>';
                }
            ?>    
            </ul>
        </div> 
    </div>
</nav>
<!--/.nav-end -->
</body>
</html>