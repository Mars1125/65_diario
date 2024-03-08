
<?php
require ('fpdf/fpdf.php');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "d_debates";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');


$sql = "SELECT id, materia, punto, texto, visible FROM d_debates.contenido_diario WHERE id='$id' AND (materia LIKE '%<a h%' OR texto LIKE '%<embe%') ORDER BY contenido_diario.id DESC";

class PDF extends FPDF
{

function Header()
{
    // Logo
    $this->Image('logo.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Title',1,0,'C');
    // Line break
    $this->Ln(20);


    $this-> Cell(80,10,'Materia',1,0,'C',0);
    $this-> Cell(80,10,'Punto',1,0,'C',0);
}



}

$pdf->Output();
?>