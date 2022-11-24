<?php
include_once 'autoloader.php';
set_time_limit(0);
$tabla = '';
$nombre = '';
$descarga = '';
$respuesta 	= new stdClass();

function between($beg, $end, $str) {
    $a = explode($beg, $str, 2);
    $b = explode($end, $a[1]);
    return $beg . $b[0] . $end;
}

$nombre = (isset($_GET['nombre'])) ? (($_GET['nombre'] == '') ? $nombre : $_GET['nombre']) : $nombre;
$descarga= (isset($_GET['descarga'])) ? (($_GET['descarga'] == '') ? $descarga : $_GET['descarga']) : $descarga;

User::Logx("Consultar " . $nombre);

if($nombre != '')
{
	$tabla = Consultas::buscarColor($nombre);
	if($descarga == 1)
	{
					$json_string = json_encode($tabla);
			$file = 'Respuesta1.json';
			$archi = file_put_contents($file, $json_string); 
		
	}
	echo View::load('home', [
		'content2'	=>	'consultarColor',
		'content'	=> 	View::load('consultarColor', [
			'tabla'		=>	$tabla
		])
	]);
}else{
echo View::load('home', [
	'content2'	=>	'consultarColor',
	'content'	=> 	View::load('consultarColor', [
	'tabla'		=>	$tabla
	])
]);
}

/*
*/