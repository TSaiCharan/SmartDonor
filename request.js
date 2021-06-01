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

function addRequest()
{
    var name=document.getElementById("name").value;
    var aadhar=document.getElementById("aadhar").value;
    var hospital=document.getElementById("hospital").value;
    var bloodgroup = document.querySelector('#bloodGroup').value;

    if(!bloodgroup){
        alert("Select valid blood group");
        return;
    }

    var organ=document.querySelector("#Organ").value;
    if(!organ){
        alert("Select valid organ");
        return;
    }
    var req;
    var mail=document.getElementById("mail").innerHTML;
    mail=mail.trim();

    firestore.collection('users').doc(mail).get()
    .then((doc) => {
        req=doc.data().Requests;
        if(req==1)
        {
            alert("You are not allowed to request for more than 1 time.There is already a pending request");
            window.open("./index.php","_self");
        }
        else
        {
            var newreq=[
                Name=name,
                Aadhar=aadhar,
                Hospital=hospital,
                BloodGroup=bloodgroup,
                Organ=organ
            ];
            firestore.collection('users').doc(mail).update({
                Requests:1,
                Request:newreq
            })
            firestore.collection("Active Requests").doc(mail).set({
                Name:name,
                Aadhar:aadhar,
                Hospital:hospital,
                BloodGroup:bloodgroup,
                Organ:organ
            })
            alert("Request successfully placed.");
            window.open("./index.php","_self");
        }
    })
    .catch((error) => {
        console.log(error);
    });
}