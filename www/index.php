<?php

include_once 'autoloader.php';
$in = 0;
$nombre	= '';
$in = (isset($_GET['in'])) ? $_GET['in'] : $in;
if ( !User::requireRegistro() )
{
	$in = -1;
}

switch ($in) {
    case 0:
    case 1:
		User::Logx('COLORES');
		echo View::load('home', ['content' => View::load('menu', [
			'tipo' => 'COLORES' ,
			'nombre'=>$nombre
			])
		]);
        break;
	default:
		User::Logx('errorRango');
		echo View::load('home', ['content' => View::load('menu', ['tipo' => 'menuGoogle' ]) ]);
	break;		
}