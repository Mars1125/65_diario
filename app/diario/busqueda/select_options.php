<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "d_debates";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


$query = "SELECT id_categoria, nombre FROM categoria";
$result = $conn->query($query);

$options = '';
while ($row = $result->fetch_assoc()) {
    $options .= "<option value='" . $row['id_categoria'] . "'>" . $row['nombre'] . "</option>";
}

$conn->close();
?>
<select class="form-control form-select" name="category" id="category">
    <option value="all">Todas las categorías</option>
    <?php echo $options; ?>
</select>