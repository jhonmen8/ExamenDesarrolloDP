<?php require 'require.php';

switch ($tipo) {
    case 'COLORES':
		User::Logx("Menu " . $tipo);
        echo View::load('consultarColor',[
			'nombre'=>$nombre
		]);
        break;
	case 'menuGoogle':
		User::Logx("Menu " . $tipo);
		header('Location: http://www.google.com/');
        break;
	default:
		User::Logx("Menu " . $tipo);
		echo View::load('errorPermiso', ['mensaje' => 'Eror al cargar la paguina']);
	break;		
}
?>