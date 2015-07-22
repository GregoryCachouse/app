<?php 

//verbo post

$app->post('/citas', function() use($app) {

	$request = $app->request();

	$nombre = $request->post('nombre');
	$fecha = $request->post('fecha');
	$malestar = $request->post('malestar');

	if (!$nombre) {
		
			echo "El campo nombre es requirido";
			exit();

	}
	echo "valores a grabar en la base de datos";
	echo "<br>";
	echo $nombre;
	echo "<br>";
	echo $fecha;
	echo "<br>";
	echo $malestar;
	echo "<br>";

	echo "datos guardados";

});