formF = document.getElementById("dynamic");
nameTxt = formF.name;
hobbyTxt = formF.hobby;
languageTxt = formF.language;

nameMessage = document.getElementById("nameMessage");
hobbyMessage = document.getElementById("hobbyMessage");
languageMessage = document.getElementById("languageMessage");

nameTxt.onmouseover = function() {
    showMessage(nameMessage);
};
hobbyTxt.onmouseover = function() {
    showMessage(hobbyMessage);
};
languageTxt.onmouseover = function() {
    showMessage(languageMessage);
};
nameTxt.onmouseout = function() {
    hideMessage(nameMessage);
};
hobbyTxt.onmouseout = function() {
    hideMessage(hobbyMessage);
};
languageTxt.onmouseout = function() {
    hideMessage(languageMessage);
};
// s.onmousemover = derp;
// derp();
// s.onmouseover = derp;

function showMessage(msg) {
    // window.alert(msg.innerHTML);
    msg.style.visibility = "visible";
}

function hideMessage(msg) {
    msg.style.visibility = "hidden";
}
