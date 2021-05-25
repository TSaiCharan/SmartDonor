<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <style>
            .profile{
                margin-top: 150px;
                margin-left: 475px;
                margin-right: 530px;
                width: 600px;
                height: 300px;
            }
            .header{
                margin-top:10px;
                color: whitesmoke;
                font-size: 23px;
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: center;
                background-color: rgb(113, 133, 133);
            }
            .data-box{
                height: 70px;
                display: flex;
                align-items: center;
                font-size: 20px;
                margin-top: 10px;
                justify-content: space-around;
                background-color: rgb(204, 226, 219);
            }
            .head_inner{
                text-align: center;
            }
            .data{
                text-align: center;
            }
        </style>
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

        <div class="profile">

            <div class="header">
                <b>USER DATA</b>
            </div>
            <div class="data-box">
                <div class="header_inner">
                    Name
                    <div class="data" id="name">
                        <?php
                            session_start();
                            echo $_SESSION['name'];
                        ?>
                    </div>
                </div>
                <div class="header_inner">
                    Email
                    <div class="data" id="mail"><?php echo $_SESSION['mail']; ?></div>
                </div>
                <div class="header_inner">
                    Mobile
                    <div class="data" id="phone" style="text-align:center;"></div>
                </div>
            </div>

            <div class="header">
                <b>ACTIVITIES</b>
            </div>
            <div class="data-box">
                <div class="header_inner">
                    Donations
                    <div class="data" id="donations"></div>
                </div>
                <div class="header_inner">
                    Requests
                    <div class="data" id="req"></div>
                </div>
            </div>
        </div>

        <script>
            const firebaseConfig = {
                apiKey: "AIzaSyAO2NqJLWnR14aGOQNnLrM-B81Doa8wryk",
                authDomain: "smartdonorcvr.firebaseapp.com",
                projectId: "smartdonorcvr",
                storageBucket: "smartdonorcvr.appspot.com",
                messagingSenderId: "697377586273",
                appId: "1:697377586273:web:4425d029125332449abe20",
                measurementId: "G-QPG80B82N7"
            };

            firebase.initializeApp(firebaseConfig);
            var firestore=firebase.firestore();
            var auth=firebase.auth();

            firestore.collection('users').doc(document.getElementById("mail").innerHTML).get()
            .then((doc) => {
                document.getElementById("phone").innerHTML=doc.data().Mobile;
                document.getElementById("donations").innerHTML=doc.data().Donations;
                document.getElementById("req").innerHTML=doc.data().Requests;
            })
            .catch((error) => {
                console.log(error);
            });

        </script>
    </body>
</html>