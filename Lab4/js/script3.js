submitBtn = document.getElementById("submit");
submitBtn.onclick = prediction;
personalData = new Array();

form = document.getElementById("personal_data");

function getInfo() {
    for(var i = 0; i < form.elements.length; i++) {
        personalData[i] = form.elements.item(i);
    }
}

function prediction() {
    // getInfo();
    // var age = personalData[1].value * 1;
    var name = document.getElementById("name").value;
    var age = document.getElementById("age").value * 1;
    var salary = 0;
    
    if(age < 20) {
        salary = Number(Math.floor(Math.random() * 15000));
    }
    else if(age < 25) {
        salary = Number(Math.floor(Math.random() * 21000));
    }
    else if(age < 35) {
        salary = Number(Math.floor(Math.random() * 25000));  
    }
    var major = document.getElementById("major").value;
    if(major == "ISC") salary *= 3;
    else salary /= 3;
   
    window.alert("Estimado " + name + ". Tendras un salario de $" + truncate(salary, 2) + " dls anuales.");
}

function truncate(n, d) {
    var multiplier = Math.pow(10, d);
    var num = n * multiplier;
    return Math.floor(num) / multiplier;
}