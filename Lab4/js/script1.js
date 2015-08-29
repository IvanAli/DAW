/*validBtn = document.getElementById("validate");
validBtn.onclick = validate;*/
pw2 = document.getElementById("pw2");
pw2.oninput = validate;

function validate() {
    var pw1 = document.getElementById("pw1");
    // var pw2 = document.getElementById("pw2");
    var text = document.getElementById("text");
    if(pw1.value === pw2.value) text.innerHTML = "Aceptado";
    else text.innerHTML = "Passwords diferentes";
    
}


