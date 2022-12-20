function countChars() {
    let strLength = document.getElementById("nombre").value.length;
    let email = document.getElementById("email").value.length;
    let telefono = document.getElementById("telefono").value.length;
    let mensaje = document.getElementById("mensaje").value.length;
    console.log(strLength);
    if (strLength >= 30) {
        document.getElementById("nombret").innerHTML = "No puedes escribir mas caracteres";
    } else if (strLength <= 1) {
        document.getElementById("nombret").innerHTML = "No puedes poner solo un carcater o no poner nada";
    } else {
        document.getElementById("nombret").innerHTML = "";
    }

    if (email >= 30) {
        document.getElementById("emailt").innerHTML = "No puedes escribir mas caracteres";
    } else if (email <= 1) {
        document.getElementById("emailt").innerHTML = "No puedes poner solo un carcater o no poner nada";
    } else {
        document.getElementById("emailt").innerHTML = "";
    }

    if (telefono >= 13) {
        document.getElementById("telefonot").innerHTML = "No puedes escribir mas caracteres";
    } else {
        document.getElementById("telefonot").innerHTML = "El numero es incorrecto";
    }

    if (mensaje >= 300) {
        document.getElementById("mensajet").innerHTML = "No puedes escribir mas caracteres";
    } else {
        document.getElementById("mensajet").innerHTML = "";
    }
}

function myFunction() {
  var x = document.getElementById("inicio");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
