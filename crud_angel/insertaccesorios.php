<?php
$nombre = $_POST['nombre'];
$proveedor = $_POST['proveedor'];
$descripcion = $_POST ['descripcion'];
$precio = $_POST ['precio'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO accesorios (nombre, proveedor, descripcion, precio)
VALUES ('".$nombre."','".$proveedor."','".$descripcion."','".$precio."')";

if ($conn->query($sql) === TRUE) {
  header("location:./index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>