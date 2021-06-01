function navigate(bloodGroup,organ,mail){
    // console.log("here");
    // console.log(mail);
    // checkUser(bloodGroup,organ,mail);
    window.open("./donateRequest.php","_self");
    document.getElementById('bloodgroup').value=bloodGroup;
    setDetails(bloodGroup,organ,mail);
}
function setDetails(bloodGroup,organ,mail){
    alert(mail);
}