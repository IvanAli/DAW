timeObj = document.getElementById("time");

setInterval(function() {
    var d = new Date();
    timeObj.innerHTML = d.toLocaleTimeString();
}, 1000);

holaBtn = document.getElementById("clickme");
holaBtn.onclick = popup;

function popup() {
    setTimeout(function() {
        window.alert("Hola!");
    }, 2200);
}
