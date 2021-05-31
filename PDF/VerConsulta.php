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
    $this->Cell(70,10,'Reporte De Consultas',0,0,'C');
     // Salto de línea
    $this->Ln(20);
    //Letra color blanco
    $this->SetTextColor(240, 255, 240); 
    
    //Color de fondo dentro de la celdas
    $this->SetFillColor(2,157,116);
    $this->CellFitSpace(20,7,'ID', 1, 0, 'C' ,1);
    $this->CellFitSpace(50,7,'Motivo', 1, 0, 'C' ,1);
    $this->CellFitSpace(30,7,'Fecha', 1, 0, 'C' ,1);
    $this->CellFitSpace(20,7,'Hora', 1, 0, 'C' ,1);
    $this->CellFitSpace(70,7,'Paciente', 1, 1, 'C' ,1);
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


    //***** Aquí comienza código para ajustar texto *************
    //***********************************************************
    function CellFit($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='', $scale=false, $force=true)
    {
        //Get string width
        $str_width=$this->GetStringWidth($txt);
 
        //Calculate ratio to fit cell
        if($w==0)
            $w = $this->w-$this->rMargin-$this->x;
        $ratio = ($w-$this->cMargin*2)/$str_width;
 
        $fit = ($ratio < 1 || ($ratio > 1 && $force));
        if ($fit)
        {
            if ($scale)
            {
                //Calculate horizontal scaling
                $horiz_scale=$ratio*100.0;
                //Set horizontal scaling
                $this->_out(sprintf('BT %.2F Tz ET',$horiz_scale));
            }
            else
            {
                //Calculate character spacing in points
                $char_space=($w-$this->cMargin*2-$str_width)/max($this->MBGetStringLength($txt)-1,1)*$this->k;
                //Set character spacing
                $this->_out(sprintf('BT %.2F Tc ET',$char_space));
            }
            //Override user alignment (since text will fill up cell)
            $align='';
        }
 
        //Pass on to Cell method
        $this->Cell($w,$h,$txt,$border,$ln,$align,$fill,$link);
 
        //Reset character spacing/horizontal scaling
        if ($fit)
            $this->_out('BT '.($scale ? '100 Tz' : '0 Tc').' ET');
    }
 
    function CellFitSpace($w, $h=0, $txt='', $border=0, $ln=0, $align='', $fill=false, $link='')
    {
        $this->CellFit($w,$h,$txt,$border,$ln,$align,$fill,$link,false,false);
    }
 
    //Patch to also work with CJK double-byte text
    function MBGetStringLength($s)
    {
        if($this->CurrentFont['type']=='Type0')
        {
            $len = 0;
            $nbbytes = strlen($s);
            for ($i = 0; $i < $nbbytes; $i++)
            {
                if (ord($s[$i])<128)
                    $len++;
                else
                {
                    $len++;
                    $i++;
                }
            }
            return $len;
        }
        else
            return strlen($s);
    }

}

require 'cn.php';
$idconsulta = $_REQUEST['idconsulta'];
$consulta = "SELECT c.idconsulta AS idconsulta, c.motivo AS motivo, c.fecha AS fecha, c.hora AS hora, 
ex.nombre AS nombre FROM registro_consultas AS c INNER JOIN expediente_paciente AS ex ON c.idexpediente = 
ex.idexpediente WHERE c.estado = 1 AND c.idconsulta = ".$idconsulta;
$resultado = $mysqli->query($consulta);

$pdf = new PDF();
$pdf-> AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
$pdf->SetFillColor(229, 229, 229); //Gris tenue de cada fila
$pdf->SetTextColor(3, 3, 3); //Color del texto: Negro

while($row = $resultado->fetch_assoc()){
 $pdf->CellFitSpace(20,7,$row['idconsulta'], 1, 0, 'C' ,1);
 $pdf->CellFitSpace(50,7,$row['motivo'], 1, 0, 'C' ,1);
 $pdf->CellFitSpace(30,7,$row['fecha'], 1, 0, 'C' ,1);
 $pdf->CellFitSpace(20,7,$row['hora'], 1, 0, 'C' ,1);
 $pdf->CellFitSpace(70,7,$row['nombre'], 1, 1, 'C' ,1);
}
ob_end_clean();
$pdf->Output();
?>