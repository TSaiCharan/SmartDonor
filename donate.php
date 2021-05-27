<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DonateOrgan</title>

        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="register.css">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    </head>
    <body>
        <div id="navbar"></div>
        <script>
            $(function() {
                $("#navbar").load("navbar.php");
            });
        </script>

        <div class="formcontainer">
            <div class="container">

                <label for="name"><strong>Name of Donor</strong></label>
                <input type="text" placeholder="Enter Name of Donor" name="name" id="name" required>

                <label for="number"><strong>Family Mobile Number</strong></label>
                <input type="text" placeholder="Enter Family Mobile Number" name="number" id="phoneNumber" pattern="^[0-9]{10}$" required>
                
                <label for="number"><strong>Date of Birth</strong></label>
                <input type="date" name="dob" id="dob" required><br>

                <label for="organ"><strong>Select your blood group</strong></label>
                <select>
                    <option>Blood Group</option>
                    <option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>O+</option>
                    <option>O-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                </select><br>
                
                <label for="organ"><strong>Select organ to donate</strong></label>
                <select>
                    <option>Select Organ</option>
                    <option>Kidney</option>
                    <option>Liver</option>
                    <option>Lungs</option>
                    <option>Heart</option>
                    <option>Pancreas</option>
                    <option>Intestines</option>
                    <option>Hands</option>
                    <option>Face</option>
                </select><br>

                <label for="disease"><strong>Enter all your diseases seperating with ,</strong></label>
                <input type="text" name="diseases" id="diseases">
                <center>
                    <input type="checkbox"  checked="checked" name="remember"> Agree for terms and conditions
                </center>
            </div>
            <button type="submit" onclick="donate()"><strong>DONATE NOW</strong></button>
        </div>
        <script>
            function donate()
            {
                alert("Donor details saved successfully");
                window.open("./index.php","_self");
            }
        </script>
    </body>
</html>