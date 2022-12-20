const contenedor = document.querySelector('#contenedor');
const rm = document.querySelector('#rm');
const esp = document.querySelector('#esp');
const vill = document.querySelector('#vill');
var dragableID;

const contenedor2 = document.querySelector('#contenedor2');
const busquets = document.querySelector('#Busquets');
const ivan = document.querySelector('#Ivan');
const sergi = document.querySelector('#Sergi');
var dragableID2;

/*const contenedor3 = document.querySelector('#contenedor3');
const Corner = document.querySelector('#Corner');
const Barrera = document.querySelector('#Barrera');
const Gol = document.querySelector('#Gol');
var dragableID3;*/


//Acción para cuando se comieza a mover el elemento
rm.addEventListener('dragstart', function(event){
  dragableID = event.target;
});

esp.addEventListener('dragstart', function(event){
  dragableID = event.target;
});

vill.addEventListener('dragstart', function(event){
  dragableID = event.target;
});


busquets.addEventListener('dragstart', function(event){
  dragableID2 = event.target;
});

ivan.addEventListener('dragstart', function(event){
  dragableID2 = event.target;
});

sergi.addEventListener('dragstart', function(event){
  dragableID2 = event.target;
});

/*
Gol.addEventListener('dragstart', function(event){
  document.getElementById('p1').innerHTML="ACABAS DE COGER UN ELEMENTO";
  dragableID3 = event.target;
});

Corner.addEventListener('dragstart', function(event){
  document.getElementById('p1').innerHTML="ACABAS DE COGER UN ELEMENTO";
  dragableID3 = event.target;
});

Barrera.addEventListener('dragstart', function(event){
  document.getElementById('p1').innerHTML="ACABAS DE COGER UN ELEMENTO";
  dragableID3 = event.target;
});*/


//Acción para cuando se está un elemento, con otro elemento, con el mouse
contenedor.addEventListener('dragover', function(event){
  event.preventDefault(); //DESACTIVAMOS ESTE COMPORTAMIENTO PARA EL NAVEGADOR
});

contenedor2.addEventListener('dragover', function(event){
  event.preventDefault(); //DESACTIVAMOS ESTE COMPORTAMIENTO PARA EL NAVEGADOR
});

/*contenedor3.addEventListener('dragover', function(event){
  event.preventDefault(); //DESACTIVAMOS ESTE COMPORTAMIENTO PARA EL NAVEGADOR
});*/

//Acción para cuando se ha soltado un elemento
contenedor.addEventListener('drop', function(event){
  event.target.appendChild(dragableID);
  disabledragableID();
});

contenedor2.addEventListener('drop', function(event){
  event.target.appendChild(dragableID2);
  disabledragableID2();
});

/*contenedor3.addEventListener('drop', function(event){
  //contenedor.appendChild(caja);
  document.getElementById('jugada').innerHTML=dragableID3.innerHTML;
  event.target.appendChild(dragableID3);
  disabledragableID3();
});*/


function disabledragableID(){
  if(contenedor != null){
  rm.setAttribute('draggable', false);
  esp.setAttribute('draggable', false);
  vill.setAttribute('draggable', false);
  }
}

function disabledragableID2(){
  if(contenedor2 != null){
  Busquets.setAttribute('draggable', false);
  Ivan.setAttribute('draggable', false);
  Sergi.setAttribute('draggable', false);
  }
}

/*function disabledragableID3(){
  if(contenedor3 != null){
  Gol.setAttribute('draggable', false);
  Barrera.setAttribute('draggable', false);
  Corner.setAttribute('draggable', false);
  }
}*/

function confirm(){
  if(dragableID2 == null){
    nullDragableID2();
    //nullDragableID3();
  }
  if(dragableID == null){
    nullDragableID();
    //nullDragableID3();
  }
  if(dragableID.id == "rm" && dragableID2.id == "Busquets"){
    location.href = "RmBusquets.html";
  }
  if(dragableID.id == "rm" && dragableID2.id == "Ivan"){
    location.href = "RmIvan.html";
  }
  if(dragableID.id == "rm" && dragableID2.id == "Sergi"){
    location.href = "RmSergi.html";
  }
  if(dragableID.id == "esp" && dragableID2.id == "Busquets"){
    location.href = "espBusquets.html";
  }
  if(dragableID.id == "esp" && dragableID2.id == "Ivan"){
    location.href = "espIvan.html";
  }
  if(dragableID.id == "esp" && dragableID2.id == "Sergi"){
    location.href = "espSergi.html";
  }
  if(dragableID.id == "vill" && dragableID2.id == "Busquets"){
    location.href = "villBusquets.html";
  }
  if(dragableID.id == "vill" && dragableID2.id == "Ivan"){
    location.href = "villIvan.html";
  }
  if(dragableID.id == "vill" && dragableID2.id == "Sergi"){
    location.href = "villSergi.html";
  }

}

function nullDragableID(){
  if (dragableID == null){
    contenedor.style.backgroundColor = 'red';
  }else{
    contenedor.style.backgroundColor = 'white';
  }
}

function nullDragableID2(){
  if (dragableID2 == null){
    contenedor2.style.backgroundColor = 'red';
  }else{
    contenedor2.style.backgroundColor = 'white';
  }
  
}

/*function nullDragableID3(){
  if (dragableID3 == null){
    contenedor3.style.backgroundColor = 'red';
  }else{
    contenedor3.style.backgroundColor = 'white';
  }
}*/