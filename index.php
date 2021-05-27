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
        <link rel="stylesheet" href="para.css">

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
        <div id="navbar" style="position:sticky;top:0;z-index: 100;"></div>
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

        <!-- Displaying static data -->
        <div class="data">
            <h3>Organ Donation-A Gift of Life</h3>
            <p>
            Organ Donation Day is observed every year on 13th of August. Due to lack of awareness, there are myths and fears in peoples’mind about organ donation. The aim of this day is to motivate normal human beings to pledge to donate organs after death, and to spread awareness about the importance of organ donation.
            Organ Donation is donating a donor's organs like heart, liver, kidneys, intestines, lungs, and pancreas, after the donor dies, for the purpose of transplanting them into another person who is in need of an organ.<br><br>
            <b style="background-color: rgb(176, 240, 240);">According to a survey In India every year about:</b><br><br>
            500,000 people die because of non-availability of organs, 200,000 people die due to liver disease, and 50,000 people die because of heart disease. Moreover, 150,000 people await a kidney transplant but only 5,000 get among them.
            The organ donor can play a big role in saving others’ life. The organ of the donor can be transplanted to the patient who needs it urgently.<br><br>
            <b style="background-color: rgb(176, 240, 240);">Facts about Organ Donation:</b><br><br>
            <strong>*</strong><em>Anybody can be an organ donor irrespective of their age, caste, religion, community etc.</em><br>
            <strong>*</strong><em>There is no defined age for donating organs. The decision to donate organs is based on strict medical criteria, not age.<br></em>
            <strong>*</strong><em>Tissues such as cornea, heart valves, skin, and bone can be donated in case of natural death but vital organs such as heart, liver, kidneys, intestines, lungs, and pancreas can be donated only in the case of ‘brain death’.<br></em>
            <strong>*</strong><em>Organs such as the heart, pancreas, liver, kidneys and lungs can be transplanted to those recipients whose organs are failing because it allows many recipients to return to a normal lifestyle.</em><br>
            <strong>*</strong><em>Anyone younger than age 18 needs to have the agreement of a parent or guardian to be a donor.</em><br>
            <strong>*</strong><em>Having a serious condition like actively spreading cancer, HIV, diabetes, kidney disease, or heart disease can prevent you from donating as a living donor.</em><br><br>
            <strong>The Ministry of Health & Family Welfare has urged people all of communities to come forth and generously donate organs to help the noble cause of saving precious lives. The Ministry had launched the 6th World and first ever Indian Organ Donation Day and Organ Donation Congress 2010 in New Delhi.
            NOTTO (National Organ Tissue Transplant Organization) is celebrating 6th Indian Organ Donation Day on 27th November 2015. On this day Union Health Ministry has appealed to its officials to take the pledge to donate their organs, thereby saving thousands of lives.</strong></p>
        </div>
        <!-- End of static data -->

        <!-- footer -->
        <div class="footer"></div>
        <script>
            $(function() {
                $(".footer").load("footer.php");
            });
        </script>
        <!-- End of footer -->
    </body>
</html>