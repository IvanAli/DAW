// h3 = document.getElementById("h11");
h31 = document.getElementById("h31");
h32 = document.getElementById("h32");
h33 = document.getElementById("h33");
/*
for(var i = 0; i < h3.length; i++) {
    var index = i;
    // window.alert();
    // h3[i].onmouseover = function() { changeFontStyle(i); }
    h3[i].addEventListener("mouseover", function() { changeFontStyle(); });
}

*/
h31.onmouseover = over1;
h32.onmouseover = over2;
h33.onmouseover = over3;

function over1() {
    h31.style.color = "#AFAFAF";
}

function over2() {
    h32.style.color = "#AFAFAF";
}

function over3() {
    h33.style.color = "#AFAFAF";
}
// h3.addEventListener('mouseover', dosomething, false);
/*                    
function changeFontStyle(e) {
    var thiz = e.target();
    // console.log(index);
    thiz.style.color = "#AFAFAF";
}*/