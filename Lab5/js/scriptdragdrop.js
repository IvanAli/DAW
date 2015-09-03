boxObj = document.getElementById("box");
textObj = document.getElementById("text");

textObj.ondragstart = function(e) {
  drag(e);  
};

boxObj.ondrop = function(e) {
  drop(e);  
};

boxObj.ondragover = function(e) {
  allowDrop(e);  
};

function drag(e) {
    e.dataTransfer.setData("text", e.target.id);
}

function drop(e) {
    e.preventDefault();
    var data = e.dataTransfer.getData("text");
    e.target.appendChild(document.getElementById(data));
}

function allowDrop(e) {
    e.preventDefault();   
}
