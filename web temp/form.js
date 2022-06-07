function validateForm() {
    var returnval = true;
    var email = document.getElementById("email").value;
    if (email == "") {
        document.getElementById("sm_email").innerHTML = "Email Required";
        document.getElementById("sm_email").style.textAlign = "left";
        returnval = false;
    }
    var pass = document.getElementById("pass").value;
    if (pass == "") {
        document.getElementById("sm_pass").innerHTML = "Password Required";
        document.getElementById("sm_pass").style.textAlign = "left";

        returnval = false;
    }
    if (pass.length > 8) {
        document.getElementById("sm_pass").innerHTML = "Password Too long only 8characters allowed";
        returnval = false;
    }
    var cpass = document.getElementById("Cpass").value;
    if (cpass == "") {
        document.getElementById("sm_cpass").innerHTML = "Confirm password Required";
        document.getElementById("sm_cpass").style.textAlign = "left";
        returnval = false;
    }
    if (cpass != pass) {
        document.getElementById("sm_cpass").innerHTML = "password mismatch";
        returnval = false;
    }


    // returnval = false;
    return returnval;
}

function validateLoginForm() {
    var returnval = true;
    var email = document.getElementById("in_email").value;
    if (email == "") {
        document.getElementById("sl_email").innerHTML = "Email Required";
        document.getElementById("sl_email").style.textAlign = "left";
        returnval = false;
    }
    var pass = document.getElementById("in_pass").value;
    if (pass == "") {
        document.getElementById("sl_pass").innerHTML = "Password Required";
        returnval = false;
    }
    return returnval;
}
// document.getElementById("Cpass").onkeyup(function() {
//     var cpass = document.getElementById("Cpass").value;
//     if (cpass != pass) {
//         console.log("hell");
//         document.getElementById("sm_cpass").innerHTML = "Password Mismatch";
//         return false;
//     }
// });