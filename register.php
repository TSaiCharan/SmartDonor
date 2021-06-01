<!doctype html>
<html lang="en">
    <head>
        <title>Register</title>

        <link rel="stylesheet" href="register.css">

        <link rel="shortcut icon" href="../ImageSource/logo.png" type="image/x-icon">

        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-firestore.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

    </head>
    <body>
        <div id="navbar"></div>
        <script>
            $(function() {
                $("#navbar").load("navbar.php");
            });
        </script>

        <div class="form">
            <h1>SIGN UP</h1>
            <div class="formcontainer">
                <div class="container">

                    <label for="name"><strong>Name</strong></label>
                    <input type="text" placeholder="Enter Name" name="name" id="name" required>
                    
                    <label for="mail"><strong>E-mail</strong></label>
                    <input type="text" placeholder="Enter E-mail" name="mail" id="mail" required>
                    
                    <label for="number"><strong>Phone Number</strong></label>
                    <input type="text" placeholder="Enter Phone Number" name="number" id="phoneNumber" pattern="^[0-9]{10}$" required>
                    
                    <label for="psw"><strong>Password</strong></label>
                    <input type="password" placeholder="Enter Password" name="psw" id="password" required>

                    <label for="con_psw"><strong>Confirm Password</strong></label>
                    <input type="password" placeholder="Enter Confirm Password" name="con_psw" id="confirmPassword" required>

                    <center>
                        <input type="checkbox"  checked="checked" name="remember"> Agree for terms and conditions
                    </center>
                </div>
                <button type="submit" onclick="validatePassword()"><strong>SIGN UP</strong></button>
            </div>

        <script src="userRegister.js"></script>
    </body>
</html>