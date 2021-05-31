<!--eh subido los archivos nuevamente-->
<?php
require('fpdf\fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    //Color para celdas
    $this->SetDrawColor(6, 13, 64 );
     // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Reporte De Embarazos',0,0,'C');
     // Salto de línea
    $this->Ln(20);
    //Letra color blanco
    $this->SetTextColor(240, 255, 240); 
    
    //Color de fondo dentro de la celdas
    $this->SetFillColor(2,157,116);
    $this->Cell(15,10,'ID', 1, 0, 'C' ,1);
    $this->Cell(65,10,'Nombre', 1, 0, 'C' ,1);
    $this->Cell(50,10,'Fecha Nacimiento', 1, 0, 'C' ,1);
    $this->Cell(45,10,'Gestacion Actual', 1, 0, 'C' ,1);
    $this->Cell(20,10,'Partos', 1, 1, 'C' ,1);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagina ').$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'cn.php';
$idembarazo = $_REQUEST['idembarazo'];
$consulta = "SELECT * FROM registro_embarazos WHERE idembarazo = ".$idembarazo;
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(229, 229, 229); //Gris tenue de cada fila
$pdf->SetTextColor(3, 3, 3); //Color del texto: Negro

while($row = $resultado->fetch_assoc()){
 $pdf->Cell(15,10,$row['idembarazo'], 1, 0, 'C' ,1);
 $pdf->Cell(65,10,$row['nombre'], 1, 0, 'C' ,1);
 $pdf->Cell(50,10,$row['fechanacimiento'], 1, 0, 'C' ,1);
 $pdf->Cell(45,10,$row['gestacionactual'], 1, 0, 'C' ,1);
 $pdf->Cell(20,10,$row['partos'], 1, 0, 'C' ,1);
}
ob_end_clean();
$pdf->Output();
?>