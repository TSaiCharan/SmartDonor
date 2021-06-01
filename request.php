<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SmartDonor</title>
        <link rel="stylesheet" href="register.css">
        <style>
            #mail{
                display: none;
            }
        </style>

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

                    <div id="mail"><?php session_start();echo $_SESSION['mail'];?></div>

                    <label for="name"><strong>Patient Name</strong></label>
                    <input type="text" placeholder="Enter Patient Name" name="name" id="name" required>
                    
                    <label for="aadhar"><strong>Aadhar Number of patient</strong></label>
                    <input type="text" placeholder="Enter Aadhar Number" name="aadhar" id="aadhar" required>

                    <label for="hospital"><strong>Hospital details where patient is taking treatment</strong></label>
                    <input type="text" placeholder="Enter Hospital Name with complete address" name="hospital" id="hospital" required>

                    <label for="bloodgroup">Choose patients blood group:</label>
                    <input list="bloodgroup" name="bloodGroup" id="bloodGroup">
                    <datalist id="bloodgroup">
                        <option value="A+">
                        <option value="A-">
                        <option value="B+">
                        <option value="B-">
                        <option value="O+">
                        <option value="O-">
                        <option value="AB+">
                        <option value="AB-">
                    </datalist><br>

                    <label for="organ">Choose an organ required:</label>
                    <input list="organ" name="Organ" id="Organ">
                    <datalist id="organ">
                        <option value="Kidney">
                        <option value="Liver">
                        <option value="Lungs">
                        <option value="Heart">
                        <option value="Pancreas">
                        <option value="Intestines">
                    </datalist>
                    <center>
                        <input type="checkbox"  checked="checked" name="remember"> Agree for terms and conditions
                    </center>
                </div>
                <button type="submit" onclick="addRequest()"><strong>REQUEST ORGAN</strong></button>
            </div>
        </div>
        <script src="request.js"></script>
    </body>
</html>