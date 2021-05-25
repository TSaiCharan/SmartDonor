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

function validateLogin()
{
    var mail=document.getElementById("mail").value;
    var pass=document.getElementById("password").value;
    auth.signInWithEmailAndPassword(mail,pass).then(cred=>{
        var name="";
        firestore.collection('users').doc(mail).get()
        .then((doc) => {
            if (doc.exists)
            {
                name=doc.data().Name;
                alert("Welcome "+name);
                var details={
                    name:name,
                    mail:mail
                };
                $.ajax({
                    url:"setUser.php",
                    method:"post",
                    data: details,
                    success:function(res){
                        console.log(res);
                    }
                })
                window.open("./index.php","_self");
            }
            else
            {
                alert("No user");
            }
        })
        .catch((error) => {
            console.log(error);
        });
    })
    .catch((error)=>{
        alert(error);
    });
}