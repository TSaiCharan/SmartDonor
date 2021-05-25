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
var auth=firebase.auth();
var firestore=firebase.firestore();

function createUser()
{
    var name=document.getElementById("name").value;
    var mail=document.getElementById("mail").value;
    var phone=document.getElementById("phoneNumber").value;
    var pass=document.getElementById("password").value;
    firestore.collection("users").doc(mail).set({
        Name:name,
        Email:mail,
        Mobile:phone,
        Donations:0,
        Requests:0
    })
    .then(() => {
        auth.createUserWithEmailAndPassword(mail,pass)
        .then(cred=>{
            alert("User successfully registerd. Now login using same credentials.");
            window.open("./login.php","_self");
        })
        .catch((error)=>{
            alert(error);
        })
    })
    .catch((error) => {
        alert(error);
        console.error("Error writing document: ", error);
    });
}
function validatePassword()
{
    var pass=document.getElementById("password").value;
    var conPass=document.getElementById("confirmPassword").value;
    if(pass==""){
        alert("Password cannot be empty");
    }
    else if(conPass==""){
        alert("Confirm password cannot be empty");
    }
    else if(pass==conPass){
        console.log("her");
        createUser();
    }
    else {
        alert("Password and Confirm Password not matching");
        return false;
    }
}