<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Exportar</title>
	<link rel="stylesheet" href="css/Normalizar.css">
	<link rel="stylesheet" href="css/Estilos.css">
</head>
<body>
	<?php
		require('Conexion_BDD.php');
	?>

	<div class="header">

		<a href="Seleccionar-Exportar.php">
			<svg class="header-buttons-selected" width="25px" height="25px" viewBox="0 -22 512 511" xmlns="http://www.w3.org/2000/svg">
				<path fill="#777777" d="m512 233.820312-212.777344-233.320312v139.203125h-45.238281c-140.273437 0-253.984375 113.710937-253.984375 253.984375v73.769531l20.09375-22.019531c68.316406-74.851562 164.980469-117.5 266.324219-117.5h12.804687v139.203125zm0 0"/>
			</svg>
		</a>
		<a href="index.html">
			<svg class="header-buttons" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			 width="25px" height="25px" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
			    <g>
				    <g>
					    <path fill="#bfbfbf" d="M503.402,228.885L273.684,19.567c-10.083-9.189-25.288-9.188-35.367-0.001L8.598,228.886
						    c-8.077,7.36-10.745,18.7-6.799,28.889c3.947,10.189,13.557,16.772,24.484,16.772h36.69v209.721
						    c0,8.315,6.742,15.057,15.057,15.057h125.914c8.315,0,15.057-6.741,15.057-15.057V356.932h74.002v127.337
						    c0,8.315,6.742,15.057,15.057,15.057h125.908c8.315,0,15.057-6.741,15.057-15.057V274.547h36.697
						    c10.926,0,20.537-6.584,24.484-16.772C514.147,247.585,511.479,236.246,503.402,228.885z"/>
				    </g>
			    </g>
			    <g>
				    <g>
					    <path fill="#bfbfbf" d="M445.092,42.73H343.973l116.176,105.636v-90.58C460.149,49.471,453.408,42.73,445.092,42.73z"/>
				    </g>
			    </g>
			</svg>
		</a>
		<a href="Introducir-Valores.php">
			<svg class="header-buttons" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="25px" height="25px" viewBox="0 0 457.508 457.508" style="enable-background:new 0 0 457.508 457.508;"
				xml:space="preserve">
				<g>
					<path fill="#bfbfbf" d="M199.671,242.677c66.985,0,121.319-54.353,121.319-121.271C320.99,54.363,266.666,0,199.671,0
						C132.638,0,78.38,54.373,78.38,121.406C78.38,188.324,132.628,242.677,199.671,242.677z"/>
					<path fill="#bfbfbf" d="M353.006,275.974c-6.407-13.722-14.478-27.521-24.786-40.688c-5.546-7.057-15.663-14.803-25.445-20.109
						c-25.36,28.419-62.118,46.416-103.104,46.416c-40.956,0-77.705-17.997-103.036-46.35c-9.562,5.432-19.412,13.178-24.776,20.215
						c-17.404,22.711-44.265,66.728-48.549,126.044c-0.899,12.518,5.059,31.633,15.52,38.929
						c19.852,13.895,62.672,31.671,151.833,31.671c30.868,0,56.878-1.903,78.862-4.867c-8.874-14.965-14.066-32.369-14.066-50.997
						C255.449,321.836,298.968,277.504,353.006,275.974z"/>
					<path fill="#bfbfbf" d="M353.006,294.946c-44.887,0-81.281,36.395-81.281,81.281c0,44.886,36.395,81.28,81.281,81.28s81.281-36.395,81.281-81.28
						C434.287,331.341,397.901,294.946,353.006,294.946z M393.13,391.183h-31.355v31.365c0,5.192-4.217,9.399-9.409,9.399
						s-9.41-4.207-9.41-9.399v-31.355l-31.354-0.01c-5.202,0.01-9.41-4.197-9.4-9.391c0-5.201,4.207-9.409,9.4-9.409h31.364v-31.355
						c0-5.192,4.208-9.399,9.4-9.391c5.183,0,9.399,4.198,9.409,9.4v31.346h31.346c5.192,0,9.4,4.208,9.41,9.41
						C402.53,386.976,398.322,391.183,393.13,391.183z"/>
				</g>
			</svg>
		</a>
		<a href="Agregar-Institucion.html">
			<svg class="header-buttons" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				 width="25" height="25" viewBox="0 0 492.536 492.536" style="enable-background:new 0 0 492.536 492.536;" xml:space="preserve">
				<g>
					<path fill="#bfbfbf" d="M218.422,23.931C228.293,14.049,239.381,6.094,251.17,0H111.484c-22.035,0-39.91,17.876-39.91,39.905V483.19
						c0,3.633,2.113,6.949,5.404,8.475c3.318,1.533,7.201,1.014,9.984-1.326l98.756-83.246c3.482-2.941,8.564-2.941,12.064,0
						l98.76,83.246c2.777,2.34,6.66,2.859,9.969,1.326c3.291-1.525,5.414-4.842,5.414-8.475V249.614
						c-33.865,0-67.736-12.893-93.504-38.668C166.851,159.386,166.851,75.489,218.422,23.931z"/>
					<path fill="#bfbfbf" d="M389.057,40.297c-42.525-42.544-111.736-42.551-154.291,0c-42.525,42.525-42.525,111.755,0,154.283
						c42.555,42.525,111.766,42.54,154.291,0C431.598,152.036,431.598,82.815,389.057,40.297z M365.697,171.206
						c-29.664,29.652-77.895,29.652-107.543,0c-29.654-29.666-29.654-77.895,0-107.546c29.648-29.649,77.879-29.649,107.543,0
						C395.346,93.319,395.346,141.55,365.697,171.206z"/>
					<path fill="#bfbfbf" d="M331.752,97.601V72.798c0-10.965-8.865-19.832-19.826-19.842c-10.945-0.015-19.857,8.892-19.826,19.827v24.81h-24.826
						c-10.957,0-19.84,8.889-19.824,19.824c0,5.498,2.223,10.458,5.799,14.044c3.596,3.569,8.561,5.815,14.025,5.798H292.1v24.81
						c-0.031,5.487,2.207,10.448,5.803,14.026c3.576,3.586,8.527,5.815,14.023,5.815c10.94,0.007,19.857-8.882,19.826-19.832v-24.802
						h24.793c10.977,0,19.855-8.892,19.842-19.834c0-10.976-8.865-19.85-19.842-19.842H331.752z"/>
				</g>
			</svg>
		</a>
	</div>
	<div class="pseudoheader">
	</div>

	<form id="form" action="conexion/Exportar.php" method="POST">
		<select name="institucion" class="seleccion invalidcheck2" required>
			<option value="" disabled selected>Seleccione la institución</option>
			<?php
	
				$sql = "SELECT * FROM Instituciones";
				$consulta=mysqli_query($connect,$sql);
				if (mysqli_num_rows($consulta)>0)
				{
					while ($colummna=mysqli_fetch_object($consulta)) 
					{
			?>
				<option value="<?php echo $colummna -> Cod; ?>"><?php echo $colummna -> Institucion;?></option>
			<?php
					}
				}
			?>
		</select> 
	
		<div class="opciones">
			<input type="radio" id="individual" name="exportar" value="1" required>
			<label for="individual" class="opcion">
				<img class="img-eleccion" src="img/002-boss.svg" alt="Exportar individualmente"/>
				<p class="descripcion">Exportar individualmente</p>
			</label>
	
			<input type="radio" id="grupal" name="exportar" value="2">
			<label for="grupal" class="opcion">
				<img class="img-eleccion" src="img/001-network.svg" alt="Exportar por grupo"/>
				<p class="descripcion">Exportar por grupo</p>
			</label>
		</div>
		
		<input class="guardar" type="submit" value="Exportar" name="guardar">
	</form>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/script.js"></script>
</body>
</html>