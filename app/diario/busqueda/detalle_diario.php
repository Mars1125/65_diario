<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "d_debates";

$conn = new mysqli($servername, $username, $password, $dbname);

if(isset($_GET['id'])) {
    // Obtener el ID del diario desde la URL
    $id_diario = intval($_GET['id']);
    
    $result = $conn->query("SELECT * FROM contenido_diario WHERE id_diario = $id_diario");
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<p>Texto del diario: " . $row['texto'] . "</p>";
        }
    } else {
        echo "No se encontraron registros para este diario.";
    }
} else {
    echo "ID de diario no proporcionado en la URL.";
}
?>

