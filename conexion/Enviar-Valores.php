<?php
		require('../Conexion_BDD.php');

		if(isset($_POST['guardar'])){ // Código cuando se presione el botón de guardado.

			// Recolección de valores en el formulario.

			$Nacionalidad = $_POST['nacionalidad'];
			$Cedula = $_POST['ci'];
			$Nombre = $_POST['nombre'];
			$Edad = $_POST['edad'];
			$Peso = $_POST['peso'];
			$Estatura = $_POST['estatura'];
			$Sexo = $_POST['sexo'];
			$Institucion = $_POST['institucion'];

			$Cedula = $Nacionalidad . "-" . $Cedula;
			$CedulaInstitucion = $Cedula . ":" . $Institucion;


			$Resistencia = $_POST['resistencia'];
			$Salto = $_POST['salto'];
			$Velocidad = $_POST['velocidad'];
			$Flexibilidad = $_POST['flexibilidad'];
			$Abdominales = $_POST['abdominales'];

			if ($Sexo == 1) {
				$Flexores = $_POST['flexoresH'];
			}elseif ($Sexo == 2) {
				$Flexores = $_POST['flexoresM'];
			}

			$sql = "SELECT CI_Institucion FROM Datos_Basicos WHERE CI_Institucion = '$CedulaInstitucion'";
			$consulta = mysqli_query($connect, $sql);
			$aux = mysqli_num_rows($consulta);
			if ($aux > 0) {
				echo "<h3 class=\"campo\" >El número de cédula ya se encuentra registrado en la base de datos bajo esta institución.</h3>";
				echo "<a class=\"opcion1\" href=\"javascript:history.go(-1)\">Ir a la página anterior</a>";
			}else{
				$sql = "SELECT CI FROM Datos_Basicos WHERE CI = '$Cedula'";
				$consulta = mysqli_query($connect, $sql);
				if (mysqli_num_rows($consulta) > 0){

					$sql = "SELECT Nombre,Edad,Peso,Estatura,Cod_Sexo FROM Datos_Basicos WHERE CI = '$Cedula'";
					$consulta = mysqli_query($connect, $sql);
					$datosPermanentes = mysqli_fetch_object($consulta);

					$Nombre = $datosPermanentes->Nombre;
					$Edad = $datosPermanentes->Edad;
					$Peso = $datosPermanentes->Peso;
					$Estatura = $datosPermanentes->Estatura;
					$Sexo = $datosPermanentes->Cod_Sexo;
					
					$sql = "INSERT INTO Datos_Basicos(CI,CI_Institucion,Nombre,Cod_Sexo,Cod_Institucion,Edad,Peso,Estatura/*,Resistencia,Salto,Velocidad,Flexibilidad,Abdominales*/) VALUES('$Cedula','$CedulaInstitucion','$Nombre',$Sexo,$Institucion,$Edad,$Peso,$Estatura)";
					$consulta = mysqli_query($connect, $sql);
					
					echo "<h3 class=\"campo\" >El número de cédula ya se encontraba registrado en la base de datos, se agregó con la nueva institución y los mismos datos básicos.</h3>";
					echo "<a class=\"opcion1\" href=\"../index.html\">Ir al home.</a>";
				}else{
																												
					$sql = "INSERT INTO Datos_Basicos(CI,CI_Institucion,Nombre,Cod_Sexo,Cod_Institucion,Edad,Peso,Estatura/*,Resistencia,Salto,Velocidad,Flexibilidad,Abdominales*/) VALUES('$Cedula','$CedulaInstitucion','$Nombre',$Sexo,$Institucion,$Edad,$Peso,$Estatura)";
					$consulta = mysqli_query($connect, $sql);
				
				
					/*$sql = "SELECT MAX(Resistencia) FROM Datos_Basicos";
					$consulta = mysqli_query($connect, $sql);
					$colummna = mysqli_fetch_array($consulta);
					$PuntajeMax = $colummna[0];


					$sql = "SELECT Resistencia FROM Datos_Basicos ORDER BY Resistencia DESC";
					$consulta = mysqli_query($connect, $sql);
					$Percentil = array();
					$Puntaje = array();
					$i = 0;
					while( $colummna = mysqli_fetch_array($consulta)) {
						$Puntaje[$i] = $colummna['Resistencia'];
						$Percentil[$i] = ($colummna['Resistencia']/$PuntajeMax) * 100;
						$i = $i + 1;
					}
				

					$aux = count($Percentil);
					for ($i=0; $i < $aux; $i++) {
						$auxPercentil = $Percentil[$i];
						$auxPuntaje = $Puntaje[$i]; 
						$sql = "UPDATE Datos_Basicos SET PuntajeResistencia = $auxPercentil WHERE Resistencia = $auxPuntaje AND Cod_Institucion = $Institucion";
						$consulta = mysqli_query($connect, $sql);
					}
					*/

					header("refresh:0; ../index.html");
				}
			}
		}	
?>