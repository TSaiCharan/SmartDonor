<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/af7db6028f.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="user.css">
    </head>
    <body>
        <div class="menu-bar">
            <ul>
                <li class="space">
                    <a href="#">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <?php
                            echo $_SESSION['name'];
                        ?>
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <div class="sub-menu-1">
                        <ul>
                            <li>
                                <a href="profile.php">Profile</a>
                            </li>
                            <li>
                                <a href="#">FAQ's</a>
                            </li>
                            <li>
                                <a href="logout.php">
                                    Logout
                                    <i class="fas fa-sign-out-alt"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </body>
</html>