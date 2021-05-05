<?php

	// putenv("CLEARDB_DATABASE_URL=mysql://b0cc1049d026d1:da2394e8@eu-cdbr-west-03.cleardb.net/heroku_3b61f10a737bcca?reconnect=true");

	$cleardb_server = 'localhost';
	$cleardb_username = 'root';
	$cleardb_password = 'root';
	$cleardb_db = 'Evaluaciones_Fisicas';

	if(getenv("CLEARDB_DATABASE_URL")){
		$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
		$cleardb_server = $cleardb_url["host"];
		$cleardb_username = $cleardb_url["user"];
		$cleardb_password = $cleardb_url["pass"];
		$cleardb_db = substr($cleardb_url["path"],1);
	}

	$connect = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password); //Conexión mediante usuario de phpMyAdmin.
	if (!$connect) {
		die("Database connection failed.");
	}
	$seleccion = mysqli_select_db($connect, $cleardb_db); // Selección de la base de datos.
	if (!$seleccion) {
		die("Database selection failed: " . mysqli_error($connect));
	}
?>