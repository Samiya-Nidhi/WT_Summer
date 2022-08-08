function checkfName() {
    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    var nameLen = document.getElementById("fname").value;
    if (format.test(nameLen)) {
        document.getElementById("fnameError").innerHTML = "First name is valid";
        document.getElementById("fnameError").style.color = "green";
        return false;
    }
    else {

        document.getElementById("fnameError").innerHTML = "First name should contain at least one numeric and special character";
        document.getElementById("fnameError").style.color = "red";
        return true;
    }
}


function checklName() {
    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;
    var nameLen = document.getElementById("lname").value;
    if (format.test(nameLen)) {
        document.getElementById("lnameError").innerHTML = "Last name is valid";
        document.getElementById("lnameError").style.color = "green";
        return false;
    }
    else {

        document.getElementById("lnameError").innerHTML = "First name should contain at least one numeric and special character";
        document.getElementById("lnameError").style.color = "red";
        return true;
    }
}
function checkAge() {
    var ageLen = document.getElementById("age").value;
    if (ageLen.length < 2) {
        document.getElementById("ageError").innerHTML = "Age should be at least two digit";
        document.getElementById("ageError").style.color = "red";
        return false;
    }
    else {

        document.getElementById("ageError").innerHTML = "valid";
        document.getElementById("ageError").style.color = "green";
        return true;
    }

}

function checkDes() {
    if (document.getElementById("jp").checked == true || document.getElementById("sp").checked == true || document.getElementById("pl").checked == true) {
        
        document.getElementById("desError").innerHTML = "Selected";
        document.getElementById("desError").style.color = "green";
        return true;
    }
    else {
        document.getElementById("desError").innerHTML = "Please check a radio";
        document.getElementById("desError").style.color = "red";
        return false;
    }
}

function checkEmail() {
    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+student.aiub.edu/;
    var validation = "student.aiub.edu";
    var email = document.getElementById("mail").value;
    if ((format.test(email))) {

        document.getElementById("mailError").innerHTML = "Email  is valid";
        document.getElementById("mailError").style.color = "green";
        return true;
    }
    else {
        document.getElementById("mailError").innerHTML = "Email  is not valid";
        document.getElementById("mailError").style.color = "red";
        return false;

    }
}



function checkPass() {
    var format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+([a-z].*[A-Z])|([A-Z].*[a-z])/;

    var pass = document.getElementById("pass").value;

    if ((format.test(pass) && pass.length > 8)) {

        document.getElementById("passError").innerHTML = "password  is valid";
        document.getElementById("passError").style.color = "green";
        return true;
    }
    else {
        document.getElementById("passError").innerHTML = "password  is not valid";
        document.getElementById("passError").style.color = "red";
        return false;

    }
}


function formcheck() {

    if (checkDes() == true && checkEmail() == true && checkPass() == true && checkAge() == true && checkfName()==true &&checklName()==true ) {
        
        return true;
    }
    else
    {

        return false;

    }
}