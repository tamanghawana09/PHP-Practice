function email(){
    var email = document.getElementById("email").value;
    var RegEx = /^([a-z A-Z 0-9 \ . _-]+@)([a-z 0-9]+.)([a-z]+)$/;
    if(RegEx.test(email)){
        alert("Valid Email");
    }else{
        alert("Invalid Email");
    }
}
function user(){
    var user = document.getElementById("user").value;
    var userReg = /^([a-z A-Z 0-9 \ . _ -]+)$/;
    if(userReg.test(user)){
        alert("Valid Username");
    }
    else{
        alert("Invalid Username");
    }
}
function pass(){
    var pass = document.getElementById("pass").value;
    var userPass = /^([a-z A-Z 0-9 \ . _ - ! @ # $ ^ % & *]+)$/;
    if(userPass.test(pass)){
        alert("Valid Password");
    }else{
        alert("Invalid Password");
    }
}