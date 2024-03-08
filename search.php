<?php
// Configurar la conexión a la base de datos (reemplazar con tus propios datos)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "d_debates";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
define('URL', "/65_diario/");

// Página actual, si no se establece, la establecemos en 1


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedCategory = $_POST["category"];
    $startDate = $_POST["start_date"];
    $endDate = $_POST["end_date"];
    $searchText = $_POST["search_text"];
    $categoryQuery = "";
    $page = isset($_POST['page']) ? intval($_POST['page']) : 1;
    $page = max(1, $page); // Asegurar que $page sea al menos 1
    $per_page = 25;

    $searchTextQuery = "";
    if (!empty($searchText)) {
        $searchWords = explode(" ", $searchText);
        $searchWordsEscaped = array_map(function ($word) use ($conn) {
            return mysqli_real_escape_string($conn, $word);
        }, $searchWords);

        $searchConditions = [];
        foreach ($searchWordsEscaped as $word) {
            $searchConditions[] = "(cd.materia LIKE '%$word%' OR cd.punto LIKE '%$word%')";
        }

        // Unir todas las condiciones con el operador AND
        $searchTextQuery = "(" . implode(" AND ", $searchConditions) . ")";
    }



    if (!empty($selectedCategory)) {
        if ($selectedCategory != 'all') { // Si no se selecciona "Todas las categorías"
            $categoryQuery = "AND c.id_categoria = '$selectedCategory'";
        }
    }


    // Cálculo del número total de páginas
    $resultCount = $conn->query("SELECT COUNT(*) AS count
    FROM diario d
    INNER JOIN contenido_diario cd ON d.id = cd.id_diario
    INNER JOIN categoria c ON cd.id_categoria = c.id_categoria
    WHERE $searchTextQuery
    $categoryQuery
    AND d.fecha BETWEEN '$startDate' AND '$endDate'");

    $row = $resultCount->fetch_assoc();
    $numberData = isset($row['count']) ? $row['count'] : 0;
    $total_pages = ceil($numberData / $per_page);

    // Calcular el desplazamiento (offset) para la consulta SQL
    $offset = ($page - 1) * $per_page;

    $result = $conn->query("SELECT cd.id_diario,cd.punto, d.fecha, cd.materia, c.nombre,
     CONCAT(SUBSTRING_INDEX(cd.punto, ' ', 50), '...') AS punto_resumido
     FROM diario d
     INNER JOIN contenido_diario cd ON d.id = cd.id_diario
     INNER JOIN categoria c ON cd.id_categoria = c.id_categoria
     WHERE $searchTextQuery
     $categoryQuery
     AND d.fecha BETWEEN '$startDate' AND '$endDate'
     ORDER BY cd.id DESC
     LIMIT $offset, $per_page;");



    if ($result->num_rows > 0) {
        ?>

        <div class="panel panel-default panel-table" style="margin-bottom: 0px;">
            <div class="panel-heading">
                <p><em>Página
                        <?php echo $page; ?> de
                        <?php echo $total_pages; ?>,
                        <?php echo $result->num_rows; ?> Registros de
                        <?php echo $numberData; ?>
                    </em></p>
                <?php
                echo 'Total de páginas: ' . $total_pages . '<br>';
                echo '<script>console.log("Número total de páginas: ' . $total_pages . '");</script>';
                if ($total_pages > 0) {
                    echo '<div class="pagination">';
                    for ($i = 1; $i <= $total_pages; $i++) {
                        echo '<button class="page-btn page-item" data-page="' . $i . '">' . $i . '</button>';
                    }
                    echo '</div>';
                }
                ?>
                <div class="panel-body" style="padding: 0;">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-list-search" style="margin-bottom: 0;">
                            <thead>
                                <tr>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $num = 0;
                                while ($row = $result->fetch_assoc()) {
                                    $searchWords = explode(" ", $searchText);
                                    $materia = $row['materia'];

                                    $resumido = $row['punto_resumido'];
                                    foreach ($searchWords as $word) {
                                        $word = trim($word);
                                        if (!empty($word)) {
                                            $materia = preg_replace("/\b($word)\b/iu", "<span style='background-color: yellow;'>$1</span>", $materia);
                                        }
                                    }
                                    $num++;
                                    ?>
                                    <tr>
                                        <td class="text-center">
                                            <?php echo $num; ?>
                                        </td>
                                        <td class="text-justify">
                                            <p class="list-group-item-heading">
                                                <?php echo $materia; ?>
                                            </p>
                                            <?php
                                            foreach ($searchWords as $word) {
                                                $word = trim($word);
                                                if (!empty($word)) {
                                                    $resumido = preg_replace("/\b($word)\b/i", "<span style='background-color: yellow;'>$1</span>", $resumido);
                                                }
                                            }
                                            echo "<p class='justify link-text'><a class='link-text' href='".URL."diario_de_los_debates/documento/".$row['id_diario']."'>".$resumido . "</a></p>";?>                                      

                                            <p class="list-group-item-text">
                                                <?php
                                                echo 'Fecha de Publicacion:'.convertirFecha($row['fecha']);
                                                ?>
                                            </p>
                                            <p>
                                                <?php echo 'Categoria: ' . $row['nombre']; ?>
                                            </p>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <?php
    } else {
        ?>
            <div class="alert alert-success alert-dismissable">
                <h4>Aviso!!!</h4> No hay datos que mostrar por el momento.
            </div>
            <?php
    }

}


$conn->close();
function convertirFecha($fecha)
{
    $dias_semana = array('Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado');
    $meses = array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');

    $timestamp = strtotime($fecha);
    $dia_semana = $dias_semana[date('w', $timestamp)];
    $dia_mes = date('d', $timestamp);
    $mes = $meses[date('n', $timestamp) - 1];
    $anio = date('Y', $timestamp);

    return $dia_semana . ', ' . $dia_mes . ' de ' . $mes . ' de ' . $anio;
}
?>