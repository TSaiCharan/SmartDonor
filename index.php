<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- Page Logo -->
        <link rel="shortcut icon" href="./ImageSource/logo.png" type="image/x-icon">

        <!-- Jquery for functional of navigating bar -->
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://www.w3schools.com/lib/w3.js"></script>

        <!-- Firebase Scripts-->
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-database.js"></script>

    </head>
    <body>
        
        <!-- Navigation bar -->
        <div id="navbar"></div>
        <script>
            $(function() {
                $("#navbar").load("navbar.php");
            });
        </script>
        <!-- End of Navigation bar -->
        
        <!-- Static Slide Show of organ donation -->
        <div id="slideshow" style="position: element(#navbar);"></div>
        <script>
            $(function() {
                $("#slideshow").load("slideshow.php");
            });
        </script>
        <!-- End of slide show -->
    </body>
</html>