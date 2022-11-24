<?php

// clase con utilidades simples

class User
{
	public static function requireRegistro() {
		// Checar si es un ip Resgistrada, si no es, irse a la pagina de error
		$IPs = array('127.0.0.1', '10.44.64.60', '10.44.64.254', '10.26.148.40', '::1', '10.44.65.144', '10.28.116.188', '10.28.116.200', '10.28.116.180', '192.168.0.13','192.168.0.10');
		if (!in_array($_SERVER['REMOTE_ADDR'], $IPs))
		{
			echo View::load('errorPermiso', ['mensaje' => 'Esta Pagina Requiere un Usuario Autorizado']);
			User::Logx('errorPermiso -> requireRegistro()');
		}
		else
		{
			return true;
		}
	}
	
	public static function requireUsuarioLocal() {
		$IPs = array('127.0.0.1', '::1', '10.26.148.40','192.168.0.13','192.168.0.10');
		if (!in_array($_SERVER['REMOTE_ADDR'], $IPs)){
		
		}
		else
		{
			return true;
		}
	}
	public static function requireUsuarioLocalMenu() {
		$IPs = array('127.0.0.1', '::1');
		if (!in_array($_SERVER['REMOTE_ADDR'], $IPs)){
		
		}
		else
		{
			Logx('errorPermiso');
			return true;
		}
	}
	
	public static function requireUsuarioLocalIndex() {
		$IPs = array('127.0.0.1', '10.44.64.60', '::1', '10.26.148.40', '10.28.116.188', '10.28.116.200', '10.28.116.180');
		$valor = 0;
		if (!in_array($_SERVER['REMOTE_ADDR'], $IPs)){
			$valor = 1;
		}
		else
		{
			$valor = 0;
		}
		
		switch ($valor) {
			case 0:
				return true;
				break;
			case 1:
				Logx('errorPermiso');
				echo View::load('errorPermiso', ['mensaje' => 'Esta Pagina Requiere un Usuario Regisrtado']);
				break;
		}
	}
	
	public static function Logx($_Texto)
	{
		try
		{
			$conten = $_Texto.' IP-> '.$_SERVER['REMOTE_ADDR'].';';
			date_default_timezone_set('America/Mazatlan');
			$handle=fopen("/wamp64/www/log/LogUsuartios ".date("d-m-y").".txt", "a+");
			$sTexto=sprintf("%s: %s\n",date("d/m/y H:i:s"),$conten);
			
			fwrite($handle, $sTexto);
			fclose($handle);
		}
		catch(Exception $e)
		{
			echo View::load('errorPermiso', ['mensaje' =>  $e]);
		}
	}	
}
