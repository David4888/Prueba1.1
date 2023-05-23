<?php $titulo='Creación de base de datos'?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>



<? 

// Create connection
$conn = new mysqli($servername, $username, $password, $basename);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(!$conn->set_charset("utf8")){
  printf("Error");
  exit;
}
// Create Tabla Tipos
$sql = "INSERT INTO `inmuebles` (`nombre`, `descripcion`, `foto`, `precio`, `tipo`, `latitud`, `longitud`)
VALUES ('Piso en calle la Argandona,2, Centro-Puerto, Gijón', 'En el principio de la calle Argandona, a tan solo cien metros de la Plaza de Europa tienes este fantástico piso en el que puedes entrar y reformarlo a tu gusto poco a poco.', 'Foto001.png', '145000', '2', '43.53693538658361', ' 5.66447'),
       ('Casa Chalet independiente en camino de las Prímulas, 180, Somió, Gijón', 'En la mejor zona de SOMIÓ, chalet unifamiliar con parcela llana, en perfecto estado y muy soleada.', 'Foto002.png', '690000', '1', '43.529548454953094', ' -5.614361764417683'),
       (' Terreno en Camín de Granda a Contrueces, Granda, Gijón', '3 únicas y exclusivas parcelas edificables en la mejor zona de Granda!', 'Foto003.png', '155000', '3', '43.5067379852188847', '-5.66171'),
       ('Piso en calle San Bernardo, 15, Centro-Puerta, Gijón', 'EXCLUSIVO, a un paso de la PLAYA, céntrico, completamente reformado, exterior, un auténtico lujo!', 'Foto004.png', '588000', '2', '40.4236', ' -3.70815'),
       ('Casa chalet independiente en carretera de Lavandera, Vega, Gijón', 'Vivienda independiente de 186m2 útiles, en Vega situada en un entorno rural y con vistas despejadas.', 'Foto005.png', '375000', '1', '43.48090336768237', ' -5.647639935582318')
      ;";
if ($conn->query($sql) === TRUE){
  echo "Se ha creado ";
} else {
  echo "Error: " . $conn->error;
}
// cierre de conexión
$conn->close();



?>

<p> Se acaban de insertar inmuebles en la tabla de datos: inmuebles</p>

<a href="__instalacion.php">Volver a Instalador</a>