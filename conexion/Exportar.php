<?php
	require("../fpdf183/fpdf.php");
	include('../Conexion_BDD.php');


	if(isset($_POST['guardar'])){

		$Institucion = $_POST['institucion'];
		$Exportar = $_POST['exportar'];

		$sql = "SELECT * FROM Datos_Basicos WHERE Cod_Institucion = $Institucion ";
		$consulta = mysqli_query($connect, $sql);

		$pdf = new FPDF('P','mm','Letter');

		if ($Exportar == 1) {
			$aux = array();
			while ($colummna = mysqli_fetch_assoc($consulta)) {
				$aux[] = $colummna;

				$pdf->AddPAge();

				$pdf->SetFont('Times','B',12);
				$pdf->Cell(0,10,"RESULTADOS DE LA PRUEBA",0,1,'C');

				$pdf->Ln();

				$pdf->SetFont('Times','B',12);
				$pdf->Cell(50,10,utf8_decode("Cédula: "),0,0,'L');
				$pdf->SetFont('');
				$pdf->Cell(50,10,$colummna["CI"],0,1);

				$pdf->SetFont('Times','B',12);
				$pdf->Cell(50,10,"Nombre: ",0,0,'L');
				$pdf->SetFont('');
				$pdf->Cell(50,10,utf8_decode($colummna["Nombre"]),0,1);

				$pdf->SetFont('Times','B',12);
				$pdf->Cell(50,10,"Peso: ",0,0,'L');
				$pdf->SetFont('');
				$pdf->Cell(50,10,$colummna["Peso"],0,1);

				$pdf->SetFont('Times','B',12);
				$pdf->Cell(50,10,"Estatura: ",0,0,'L');
				$pdf->SetFont('');
				$pdf->Cell(50,10,$colummna["Estatura"],0,1);

				$pdf->Ln();

				$pdf->SetFont('Times','B',12);
				$pdf->Cell(50,10,"PRUEBA",1,0,'C');
				$pdf->Cell(50,10,"RESULTADOS",1,0,'C');
				$pdf->Cell(47,10,"PERCENTIL",1,0,'C');
				$pdf->Cell(50,10,utf8_decode("APRECIACIÓN"),1,0,'C');
				$pdf->Ln();

				$pdf->SetFont('Times','',10);
				$pdf->Cell(50,15,"1200 metros",1,0,'C');
/* 				$y = $pdf->GetY();
				$x = $pdf->GetX();
				$pdf->MultiCell(40,4,"Medir la velocidad relativa sobre
				una distancia de 1200 metros. El resultado se relaciona
				con la capacidad aeróbica.",1,'C');
				$pdf->SetXY($x + 40,$y); */
				$pdf->Cell(50,15,$colummna["Resistencia"],1,0,'C');
				$pdf->Cell(47,15,$colummna["PuntajeResistencia"],1,0,'C');
				$pdf->Cell(50,15,utf8_decode("ñá¿?!ç "),1,0,'C');
				$pdf->ln();

				$pdf->Cell(50,15,"Salto vertical",1,0,'C');
				/* $y = $pdf->GetY();
				$x = $pdf->GetX();
				$pdf->MultiCell(40,4,"Medir la potencia global explosiva
				de los músculos extensores de caderas, rodillas y tobillos.",1,'C');
				$pdf->SetXY($x + 40,$y); */
				$pdf->Cell(50,15,$colummna["Salto"],1,0,'C');
				$pdf->Cell(47,15,$colummna["PuntajeSalto"],1,0,'C');
				$pdf->Cell(50,15,utf8_decode("ñá¿?!ç "),1,0,'C');
				$pdf->ln();

				$pdf->Cell(50,15,"Velocidad",1,0,'C');
				/* $y = $pdf->GetY();
				$x = $pdf->GetX();
				$pdf->MultiCell(40,4,"Medir la velocidad básica sobre
				distancias cortas. Los resultados de esta prueba se
				relacionan con la potencia anaeróbica.",1,'C');
				$pdf->SetXY($x + 40,$y); */
				$pdf->Cell(50,15,$colummna["Velocidad"],1,0,'C');
				$pdf->Cell(47,15,$colummna["PuntajeVelocidad"],1,0,'C');
				$pdf->Cell(50,15,utf8_decode("ñá¿?!ç "),1,0,'C');
				$pdf->ln();

				$pdf->Cell(50,15,"Flexibilidad",1,0,'C');
				/* $y = $pdf->GetY();
				$x = $pdf->GetX();
				$pdf->MultiCell(40,5,"Medir la amplitud de movimiento
				de las articulaciones, el coxofemoral y la capacidad de 
				elongación de los músculos de la región posterior del muslo.",1,'C');
				$pdf->SetXY($x + 40,$y); */
				$pdf->Cell(50,15,$colummna["Flexibilidad"],1,0,'C');
				$pdf->Cell(47,15,$colummna["PuntajeFlexibilidad"],1,0,'C');
				$pdf->Cell(50,15,utf8_decode("ñá¿?!ç "),1,0,'C');
				$pdf->ln();

				$pdf->Cell(50,15,"Abdominales",1,0,'C');
				/* $y = $pdf->GetY();
				$x = $pdf->GetX();
				$pdf->MultiCell(40,5,"Medir la resistencia local
				dinámica de los músculos de la región abdominal.",1,'C');
				$pdf->SetXY($x + 40,$y); */
				$pdf->Cell(50,15,$colummna["Abdominales"],1,0,'C');
				$pdf->Cell(47,15,$colummna["PuntajeAbdominales"],1,0,'C');
				$pdf->Cell(50,15,utf8_decode("ñá¿?!ç "),1,0,'C');
				$pdf->ln();

				$pdf->Cell(50,15,"Flexores",1,0,'C');
				/* $y = $pdf->GetY();
				$x = $pdf->GetX();
				$pdf->MultiCell(40,5,"Medir la velocidad básica sobre
				distancias cortas. Los resultados de esta prueba se
				relacionan con la potencia anaeróbica.",1,'C');
				$pdf->SetXY($x + 40,$y); */
				$pdf->Cell(50,15,$colummna["Flexores"],1,0,'C');
				$pdf->Cell(47,15,$colummna["PuntajeFlexores"],1,0,'C');
				$pdf->Cell(50,15,utf8_decode("ñá¿?!ç "),1,0,'C');
				$pdf->ln();
			}
		}elseif ($Exportar == 2) {
			$pdf->AddPAge();
			$pdf->SetFont('Times','B',12);
			$pdf->Cell(0,10,"Por hacer",0,1,'C');
		}

		ob_end_clean();
		$pdf->Output("");
	}
?>