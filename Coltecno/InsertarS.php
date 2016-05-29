<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coltecno";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$Id = $_POST["Id"];
$Nit= $_POST["Nit"];
$Nombre = $_POST["Nombre"];
$tipo = $_POST["Tipo"];
$Email = $_POST["Email"];
$Celular = $_POST["Celular"];
$Mensaje = $_POST["Mensaje"];


$sql = "INSERT INTO colsolicitudes (Id, SolNit, NumRegistro, SolNombre, SolMail, SolCelular, solObservaciones) 
VALUES ('$Id','$Nit','$Nombre','$tipo','$Email','$Celular','$Mensaje')";

mysql_query($sql);


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("location:acercade.html");
return;

$conn->close();

?>

