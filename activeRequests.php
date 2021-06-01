<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-firestore.js"></script>

        <style>
            table , th, td{
                border:10px solid black;
            }
        </style>
    </head>
    <body>
        <h3>Active Requests</h3>

        <div id="display">
            
        </div>
        <!-- <script src="donateRequest.js"></script> -->
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
            
            firestore.collection('Active Requests').get()
            .then((doc) => {

                var table=document.createElement("TABLE");

                snapshot=doc.docs.map(doc => doc.data());
                if(snapshot.length!=0){
                    row=table.insertRow(-1);
                    c1=row.insertCell(-1);
                    c2=row.insertCell(-1);
                    c3=row.insertCell(-1);
                    c1.innerHTML="Blood Group";
                    c2.innerHTML="Organ";
                    c3.innerHTML="Donate";
                    // console.log(snapshot);
                    snapshot.forEach(ele=>{
                        // console.log(ele);
                        blood=ele.BloodGroup;
                        organ=ele.Organ;
                        mail=ele.Mail;
                        var str=`<button type="submit" onclick="navigate(blood,organ,mail)">Donate</button>`;

                        row=table.insertRow(-1);
                        c1=row.insertCell(-1);
                        c2=row.insertCell(-1);
                        c3=row.insertCell(-1);
                        c1.innerHTML=ele.BloodGroup;
                        c2.innerHTML=ele.Organ;
                        c3.innerHTML=str;
                        // console.log(ele);
                    })
                }
                else{
                    row=table.insertRow(-1);
                    c1=row.insertCell(-1);
                    c1.innerHTML="No Active Requests";
                    // console.log("none");
                }
                var div=document.getElementById("display");
                div.append(table);
            })
            .catch((error) => {
                console.log(error);
            });
        </script>
        <script src="bridge.js"></script>
    </body>
</html>