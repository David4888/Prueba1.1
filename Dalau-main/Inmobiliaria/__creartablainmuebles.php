<?php $titulo='Creación de la tabla Inmuebles'?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>



<? 

// Create connection
$conn = new mysqli($servername, $username, $password,$basename);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Crear Tabla
$sql = "CREATE TABLE IF NOT EXISTS `inmuebles` (
  `id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nombre` varchar(255) NOT NULL,
  `descripcion` longtext,
  `foto` varchar(255),
  `precio` decimal NOT NULL,
  `tipo` int(11),
  `latitud` float,
  `longitud` float
);";
if ($conn->query($sql) === TRUE){
  echo "Se ha creado ";
} else {
  echo "Error: " . $conn->error;
}

// cierre de conexión
$conn->close();



?>

<p> Se acaba de crear la tabla: Inmuebles</p>

<!-- <a href="--tablaConfig.php">crear tabla config</a> -->



<a href="__instalacion.php">Volver a Instalador</a>