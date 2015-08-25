document.write("Ejercicios:");
function ejercicio1() {
    var p = prompt("Dame un número mayor a 0", "");
    document.write("Cuadrados de 1 a " + p + "\n");
    for(var i = 1; i <= p; i++) {
        if(i > 1) document.write(", ");
        document.write(i + "^2 = ");
        document.write(i * i);
    }
    document.write(".\n");
    document.write("Cubos de 1 a " + p + "\n");
    for(var i = 1; i <= p; i++) {
        if(i > 1) document.write(", ");
        document.write(i + "^3 = ");
        document.write(i * i * i);
    }
    document.write("\n");
}

function ejercicio2() {
    var a = parseInt(Math.random() * 15), b = parseInt(Math.random() * 15);
    var p = prompt("Cuánto es la suma de " + a + " y " + b + "?", "");
    if(a + b == p) {
        document.write("Correcto!");
    }
    else {
        document.write("Incorrecto. La suma es " + (a + b));
    }
}

function ejercicio3(A) {
    var neg = 0, zero = 0; pos = 0;
    for(var i = 0; i < A.length; i++) {
        if(A[i] < 0) neg++;
        else if(A[i] > 0) pos++;
        else zero++;
    }
    document.write("<0, ==0, >0: ");
    document.write(new Array(neg, zero, pos));
    // return new Array(neg, zero, pos);
}

function ejercicio4(M) {
    var arr = new Array();
    for(var i = 0; i < M.length; i++) {
        var avg = 0;
        for(var j = 0; j < M[i].length; j++) {
            avg += M[i][j];
        }
        arr[i] = avg /= M[i].length;
    }
    document.write("Promedios: ");
    document.write(arr);
    // return arr;
}

function ejercicio5(n) {
    nstr = n.toString();
    rstr = '';
    for(var i = 0; i < nstr.length; i++) 
        rstr += nstr[nstr.length - i - 1];
    document.write("Al revés: ");
    document.write(rstr);
    // return rstr;
}

function ejercicio6(link) {
    window.open(link);
}