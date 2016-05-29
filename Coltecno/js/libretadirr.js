function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      myFunction(xhttp);
    }
  };
  xhttp.open("GET", "lb_direcciones.xml", true);
  xhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Nombre</th><th>Direccion</th><th>Ciudad</th><th>Departamento</th><th>Pais</th><th>Telefono</th><th>Correo</th><th>Tipo</th><th>Empresa</th></tr>";
  var x = xmlDoc.getElementsByTagName("LB");
  for (i = 0; i <x.length; i++) { 
    table += "<tr><td>" +
    x[i].getElementsByTagName("NOMBRE")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("DIRECCION")[0].childNodes[0].nodeValue +
    "</td><td>" + 
    x[i].getElementsByTagName("CIUDAD")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("DEPARTAMENTO")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("PAIS")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("TELEFONO")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("CORREO")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("TIPO")[0].childNodes[0].nodeValue +
    "</td><td>" +
    x[i].getElementsByTagName("EMPRESA")[0].childNodes[0].nodeValue +
    "</td></tr>";
           
  }
  document.getElementById("demo").innerHTML = table;
}