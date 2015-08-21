document.write("Hola de nuevo");
function ejercicio1() {
    var p = prompt("Dame un número mayor a 0", "");
    document.write("Cuadrados de 1 a " + p + "\n");
    for(var i = 1; i <= p; i++) {
        if(i > 1) document.write(" ");
        document.write(i + ":");
        document.write(i * i);
    }
    document.write("\n");
    document.write("Cubos de 1 a " + p + "\n");
    for(var i = 1; i <= p; i++) {
        if(i > 1) document.write(" ");
        document.write(i + ":");
        document.write(i * i * i);
    }
    document.write("\n");
}

function ejercicio2() {
    var a = 2, b = 3;
    var p = prompt("Cuánto es la suma de " + a + " y " + b + "?", "");
    if(a + b == p) {
        document.write("Correcto!");
    }
    else {
        document.write("Incorrecto");
    }
}

function ejercicio3(A) {
    var neg = 0, zero = 0; pos = 0;
    for(var i = 0; i < A.length; i++) {
        if(A[i] < 0) neg++;
        else if(A[i] > 0) pos++;
        else zero++;
    }
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
    document.write(arr);
    // return arr;
}

function ejercicio5(n) {
    nstr = n.toString();
    rstr = '';
    for(var i = 0; i < nstr.length; i++) 
        rstr += nstr[nstr.length - i - 1];
    return rstr;
}
