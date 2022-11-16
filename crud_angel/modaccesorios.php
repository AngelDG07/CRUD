<?php
$id = $_GET['id'];
$nombre = $_GET['nombre'];
$proveedor = $_GET['proveedor'];
$descripcion = $_GET ['descripcion'];
$precio = $_GET ['precio'];

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

$sql = "UPDATE accesorios SET nombre='".$nombre."', proveedor='".$proveedor."', descripcion='".$descripcion."', precio='".$precio."' WHERE id='".$id."'";

if ($conn->query($sql) === TRUE) {
  header("location:./index.php");
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>