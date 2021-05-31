<?php
// require('https://clinicadelamujer.000webhostapp.com\public_html\PDF\fpdf\fpdf.php');
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
    $this->Cell(70,10,'Reporte De Pacientes',0,0,'C');
     // Salto de línea
    $this->Ln(20);
    //Letra color blanco
    $this->SetTextColor(240, 255, 240); 
    
    //Color de fondo dentro de la celdas
    $this->SetFillColor(2,157,116);
    $this->Cell(15,10,'ID', 1, 0, 'C' ,1);
    $this->Cell(65,10,'Nombre', 1, 0, 'C' ,1);
    $this->Cell(15,10,'Edad', 1, 0, 'C' ,1);
    $this->Cell(20,10,'Peso', 1, 0, 'C' ,1);
    $this->Cell(80,10,'Motivo', 1, 1, 'C' ,1);
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
$consulta = "SELECT * FROM expediente_paciente";
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(229, 229, 229); //Gris tenue de cada fila
$pdf->SetTextColor(3, 3, 3); //Color del texto: Negro

while($row = $resultado->fetch_assoc()){
 $pdf->Cell(15,10,$row['idexpediente'], 1, 0, 'C' ,1);
 $pdf->Cell(65,10,$row['nombre'], 1, 0, 'C' ,1);
 $pdf->Cell(15,10,$row['edad'], 1, 0, 'C' ,1);
 $pdf->Cell(20,10,$row['peso'], 1, 0, 'C' ,1);
 $pdf->MultiCell(80,10,$row['motivo'], 1, 'C' ,1);
 
}
ob_end_clean();
$pdf->Output();
?>