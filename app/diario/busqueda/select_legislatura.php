<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "d_debates";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


function arabic_to_roman($num) {
    $roman_numerals = array(
        1 => 'I',
        2 => 'II',
        3 => 'III',
    );
    return isset($roman_numerals[$num]) ? $roman_numerals[$num] : 'N/A';  
}

$sql_query = "SELECT DISTINCT id, legislatura
    CASE 
        WHEN legislatura = 53 THEN 'I'
        WHEN legislatura = 54 THEN 'II'
        WHEN legislatura = 3 THEN 'III'
    END AS legislatura
FROM diario";
$result = $conn->query($query);

$options = '';
while ($row = $result->fetch_assoc()) {
    $options .= "<option value='" .  "'>" .  'Legislatura ' . "</option>";
}

$conn->close();
?>

<select class="form-select" name="legislatura" id="legislatura">
    <?php echo $options; ?>
</select>
