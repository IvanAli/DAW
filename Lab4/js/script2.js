form = document.getElementById("products");
window.alert(form.elements.length);

subTotal = document.getElementById("subtotal");
totalPrice = document.getElementById("total");
btnArray = new Array();
btnAdd = new Array();
btnRemove = new Array();

btnAdd[0] = document.getElementById("add0");
btnAdd[1] = document.getElementById("add1");
btnAdd[2] = document.getElementById("add2");
btnRemove[0] = document.getElementById("remove0");
btnRemove[1] = document.getElementById("remove1");
btnRemove[2] = document.getElementById("remove2");

btnAdd[0].onclick = function() {
    add(0);
}
btnAdd[1].onclick = function() {
    add(1);
}
btnAdd[2].onclick = function() {
    add(2);
}
btnRemove[0].onclick = function() {
    remove(0);
}
btnRemove[1].onclick = function() {
    remove(1);
}
btnRemove[2].onclick = function() {
    remove(2);
}
/*
for(var i = 0; i < form.elements.length; i++) {
    btnArray.push(form.elements[i]);  
    if(i % 2 == 0) btnArray[i].onclick = function() { add(i); }
    else btnArray[i].onclick = function() { remove(i); }
}*/

function add(i) {
    var quantity = document.getElementById("q" + i);
    // window.alert(quantity.innerHTML);
    quantity.innerHTML = quantity.innerHTML * 1 + 1;
    subTotal.innerHTML = subTotal.innerHTML * 1 + document.getElementById("price" + i).innerHTML * 1;
    totalPrice.innerHTML = subTotal.innerHTML * 1.16;
}

function remove(i) {
    // var str = "q" + i;
    // window.alert(i);
    var quantity = document.getElementById("q" + i);
    // window.alert(quantity.innerHTML);
    if(quantity.innerHTML > 0) {
        quantity.innerHTML = quantity.innerHTML * 1 - 1;
        subTotal.innerHTML = subTotal.innerHTML * 1 - document.getElementById("price" + i).innerHTML * 1;
        totalPrice.innerHTML = subTotal.innerHTML * 1.16;
    }
}