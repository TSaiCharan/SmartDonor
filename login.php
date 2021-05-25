<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <link rel="shortcut icon" href="../ImageSource/logo.png" type="image/x-icon">

        <link rel="stylesheet" href="login.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-firestore.js"></script>
    </head>
    <body>
        <div id="navbar"></div>
        <script>
            $(function() {
                $("#navbar").load("navbar.php");
            });
        </script>

        <div class="form">
            <h1>Login</h1>
            <div class="formcontainer">
                <div class="container">
                    
                    <label for="number"><strong>E-mail</strong></label>
                    <input type="text" placeholder="Enter E-mail" name="number" id="mail" required>
                    
                    <label for="psw"><strong>Password</strong></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="password" required>
                    <center>
                        <input type="checkbox"  checked="checked" name="remember"> Keep me login
                    </center>
                </div>
                <button type="submit" onclick="validateLogin()"><strong>Login</strong></button>
        </div>
        <script src="userLogin.js"></script>
    </body>
</html>