<?php
session_start();
 
 
require('../fpdf.php');

class PDF extends FPDF
{
// Cabecera de p�gina
function Header()
{
	$fecha=date("Y-m-d ");
	 
	// Logo
	$this->Image('../../logos/logo.png',20,8,33);
	// Arial bold 15
	$this->SetFont('Arial','B',15);
	// Movernos a la derecha
	 
	 	
	$this->Ln(20);

	$this->Cell(80);
	// T�tulo
	$this->Cell(60,10,'REPORTE GENERAL DE EMPLEADOS',0,0,'C');
	// Salto de l�nea
	 
 



	
	$this->SetFont('Arial','B',10);
	$this->SetFillColor(170, 183, 184);
    $this->SetTextColor(0,0,0); 
		$this->Ln(15);  
	$this->Ln(10);
	$this->Cell(10);
	$this->Cell(12,5,'id_maestro',1,0,"C",1); 
	$this->Cell(15,5,'matricula',1,0,"C",1); 
	$this->Cell(15,5,'nombre',1,0,"L",1);
	$this->Cell(25,5,'oferta educ',1,0,"L",1);
	$this->Cell(37,5,'materia',1,0,"L",1);
	$this->Cell(20,5,'costo_hora',1,0,"L",1);
	$this->Cell(18,5,'sexo',1,0,"L",1);
	$this->Cell(34,5,'edad',1,0,"L",1);
 	$this->Ln(5);	
	
}

// Pie de p�gina
function Footer()
{
	// Posici�n: a 1,5 cm del final
	$this->SetY(-35);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	
	
	 
	// N�mero de p�gina
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
		require_once "../../conexion.php";
	
	
$sql0="select * from maestros_general2 ";
 $result2=mysqli_query($con,$sql0);
 
// Creaci�n del objeto de la clase heredada
$pdf = new PDF('P','mm','letter');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
 
$c=0;    


	
while($ver2=mysqli_fetch_row($result2)){
 $id_venta=$ver2[0];
	$id_cajero=$ver2[1];
	$id_producto=$ver2[2];
	$descripcion=$ver2[3];
	$cantidad=$ver2[4];
	$pu=$ver2[5];
	$total=$ver2[6];
	$notal=$ver2[7];
 
	 
			$pdf->Cell(10);
			$pdf->SetFont('Arial','',8);

	if ($c==0){
	
		$c=$c+1;
		
		$pdf->SetFillColor(255,255,255	);
	}
	else
	{
		$c=0;
	$pdf->SetFillColor(224,235,255);
	}
	  $txt=ltrim($id_cajero);
	 
	$pdf->Cell(15,5,$id_venta,0,0,'',True);	
			$pdf->SetFont('Arial','',8);				
					
	$pdf->Cell(15,5,utf8_decode($txt),0,0,'',True);	
			$pdf->SetFont('Arial','',8);				
			$pdf->Cell(13,5,$id_producto,0,0,'',True);
			$pdf->SetFont('Arial','',8);			
			$pdf->Cell(24,5,$descripcion,0,0,'',True);	
			$pdf->SetFont('Arial','',8);			
			$pdf->Cell(44,5,$cantidad,0,0,'',True);	
			
			$pdf->SetFont('Arial','',8);			
			$pdf->Cell(15,5,$pu,0,0,'',True);	
			$pdf->SetFont('Arial','',8);			
			$pdf->Cell(20,5,$total,0,0,'',True);
			$pdf->SetFont('Arial','',8);			
			$pdf->Cell(30,5,$notal,0,0,'',True);	
	
			$pdf->Ln(5);	
 }

$pdf->Ln(10);
$pdf->Cell(120	); 


$pdf->Output();
?>
