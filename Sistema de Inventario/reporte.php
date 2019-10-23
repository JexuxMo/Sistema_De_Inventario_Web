<?php
    
    include 'plantilla.php';
    require 'conexionPHP.php';

    session_start();
    $idCajero = $_POST["dynamic_data"];
    //echo $idCajero;
    //$idCajero= $_SESSION["id_user"];
    $nombreCajero= $_SESSION["Nombre"];


    $query = "SELECT * from ventas where IdCajero = ".$idCajero;

    $resultado = $mysqli->query($query);

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();

    $pdf->SetFillColor(232,232,232);

    $pdf->SetFont('Arial','B',15);
    $pdf->Cell(30);
    $pdf->Cell(120,10,'Cajero:'.$nombreCajero,0,0,'C');

    $pdf->SetFont('Arial','B',8);
    

    $pdf->Ln();
    $pdf->Cell(20,6,'ID',1,0,'C',1);
    $pdf->Cell(20,6,'CAJERO',1,0,'C',1);
    $pdf->Cell(20,6,'PRODUCTO',1,0,'C',1);
    $pdf->Cell(20,6,'DESCRIPCION',1,0,'C',1);
    $pdf->Cell(20,6,'CANTIDAD',1,0,'C',1);
    $pdf->Cell(20,6,'PRECIO',1,0,'C',1);
    $pdf->Cell(20,6,'TOTAL',1,0,'C',1);
    $pdf->Cell(20,6,'FECHA',1,0,'C',1);
    $pdf->Cell(20,6,'STATUS',1,0,'C',1);
    $pdf->Cell(20,6,'FOLIO',1,0,'C',1);


    $pdf->SetFont('Arial','',8);
    while($row = $resultado->fetch_assoc())
    {
        $pdf->Ln();
        $pdf->Cell(20,6,$row['Id'],1,0,'C',1);
        $pdf->Cell(20,6,$row["IdCajero"],1,0,'C',1);
        $pdf->Cell(20,6,$row["IdProducto"],1,0,'C',1);
        $pdf->Cell(20,6,utf8_decode($row["Descripcion"]),1,0,'C',1);
        $pdf->Cell(20,6,$row["Cantidad"],1,0,'C',1);
        $pdf->Cell(20,6,$row["Precio_unitario"],1,0,'C',1);
        $pdf->Cell(20,6,$row["Total"],1,0,'C',1);
        $pdf->Cell(20,6,$row["Fecha"],1,0,'C',1);
        $pdf->Cell(20,6,$row["Status"],1,0,'C',1);
        $pdf->Cell(20,6,$row["IdOperacion"],1,0,'C',1);
        
    }

    $pdf->Ln();
    $sqlT="SELECT SUM(total) AS total_apagar FROM ventas where IdCajero=".$idCajero;
    $result2=$mysqli->query($sqlT);
    $row1 = $result2->fetch_assoc(); 
	$total=$row1['total_apagar'];

    $pdf->Ln();
    $pdf->Cell(120,10,'TOTAL: '.$total,0,0,'C');

    $pdf->Output();
    //$pdf->Output('D');
    //$pdf->Output('F','Reporte.pdf');
?>