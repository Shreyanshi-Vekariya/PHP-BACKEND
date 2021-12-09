function validation(){
    var email = document.getElementById("email").value;
    var password = document.getElementById("pwd").value;
    var name = document.getElementById("name").value;
    var cpass = document.getElementById("cpwd").value;
    var mno = document.getElementById("mobno").value;
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var passformat =/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;

    if(name == ""){
        document.getElementById('name1').innerHTML = "please fill the field";
        
        return false;
    }
    if(!isNaN(name)){
        document.getElementById('name1').innerHTML = "please enter only character";
        return false;
    }
    if(email == ""){
        document.getElementById('mail').innerHTML = "please fill the field";
        
        return false;
    }
    if(!(email.match(mailformat))){
        document.getElementById('mail').innerHTML = "You have entered an invalid email address!";
    
        return false;
        
    }
    if(password == ""){
        document.getElementById('pass').innerHTML = "please fill the field";
        
        return false;
    }
    if(!(password.match(passformat))){
        document.getElementById('pass').innerHTML = "Minimum eight characters, at least one letter, one number and one special character";
    
        return false;
        
    }
    
    if(cpass == ""){
        document.getElementById('cpass').innerHTML = "please fill the field";
        
        return false;
    }
    if(password !=cpass){
        document.getElementById('cpass').innerHTML = "Password and confirm password are not match";
        return false;
    }
    if(mno == ""){
        document.getElementById('mno').innerHTML = "please fill the field";
        
        return false;
    }
    if(isNaN(mno)){
        document.getElementById('mno').innerHTML = "enter only number";
        
        return false;
    }
    if(mno.length != 10){
        document.getElementById('mno').innerHTML = "contact number must be 10 digits";
     
        return false;
    }

}