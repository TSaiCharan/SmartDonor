<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/af7db6028f.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" href="navbar.css">
    </head>
    <body>
        <nav class="navbar navbar-inverse temp" syle="position:fixed;">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="website navbar-brand" href="./index.php">Smart Donor</a>
                </div>
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="checkDonor.php">
                            DONATE ORGAN
                            <i class="fas fa-hands-helping"></i>
                            <i class="fas fa-gift"></i>
                        </a>
                    </li>
                    <li>
                        <a href="checkPatient.php">
                            REQUEST ORGAN
                            <i class="fa fa-hand-holding-heart"></i>
                        </a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                        session_start();
                        if(isset($_SESSION['name'])){
                            include 'user.php';
                        }
                        else{
                            include 'noUser.php';
                        }
                    ?>
                </ul>
            </div>
        </nav>
    </body>
</html>