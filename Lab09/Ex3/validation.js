function formValidation(){
    if(user_val() && pass_val() && email_val() && phone_val()){
        alert("Form submitted successfully");
        return true;
    }
}

function user_val(username){
    var username = document.getElementById("username");
    if(username.value == ""){
        alert("Username is required");
        username.focus();
        return false;
    }
    return true;
}

function pass_val(password){
    var password = document.getElementById("password");
    if(password.value == ""){
        alert("Password is required");
        password.focus();
        return false;
    }
    if(password.value.length < 6){
        alert("Password must be at least 6 characters long");
        password.focus();
        return false;
    }
    return true;
}

function email_val(email){
    var email = document.getElementById("email");
    if(email.value == ""){
        alert("Email is required");
        email.focus();
        return false;
    }
    if(email.value.indexOf("@", 0) < 0){
        alert("Please enter a valid email address");
        email.focus();
        return false;
    }
    return true;
}

function phone_val(phone){
    var phone = document.getElementById("telephone");
    if(phone.value == ""){
        alert("Phone is required");
        phone.focus();
        return false;
    }
    if(phone.value.length < 10){
        alert("Phone must be at least 10 characters long");
        phone.focus();
        return false;
    }
    return true;
}