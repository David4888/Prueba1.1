<?php $titulo="Inmuebles"; ?>
<?php include 'fragmentos/_config.php';?>
<?php include 'fragmentos/_header.php';?>
<h1>Estos son nuestros <?php echo $titulo ?></h1>
<h2>Inmuebles destacados</h2>
<button onclick="cambiarVista()" id="btn">Cambiar Vista</button>
<h3 id="titulillo">Hola</h3>
<?php
    // Create connection
    $conn = new mysqli($servername, $username, $password, $basename);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    if(!$conn->set_charset("utf8")){ printf("Error"); exit; }

$sql = "SELECT * FROM inmuebles";

$result = $conn->query($sql);
echo '<ul id="lista" class="vista1">';
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $precio =$row["precio"];
    
    echo '<li>';
    echo '<img src="./img/'.$row["foto"].'" alt="'.$row["nombre"].'">';
        echo "<h3>".$row["nombre"]. "</h3>";
      echo '</div>';
    echo "<p>".$row["descripcion"]. "</p>";
    echo "<h4>".$row["precio"]. "€". "</h4>";
    echo "</li>";
  }
  echo '</ul>';

} else {
  echo "0 results";
}

$conn->close();

?>

<script src="js/myscript.js"></script>
<?php include 'fragmentos/_footer.php';?>