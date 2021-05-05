<?php		
	require('../Conexion_BDD.php');

	if(isset($_POST['guardar'])){ // Código cuando se presione el botón de guardado.

		// Recolección de valores en el formulario.

		$Institucion = $_POST['institucion'];

		$sql = "INSERT INTO Instituciones(Institucion) VALUES('$Institucion')";
		$consulta = mysqli_query($connect, $sql);

		header("refresh:0; ../index.html");
		}
?>