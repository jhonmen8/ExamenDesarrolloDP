<?php

class Consultas
{
	public static function buscarColor($nombre)
	{
		$tabla 		= '';
		
		try 
		{
			header ('Content-type: text/html; charset=utf-8');
			$urlServicio = 'https://my-json-server.typicode.com/dp-danielortiz/dptest_jsonplaceholder/items'; 
			$response = file_get_contents($urlServicio);
			$response = json_decode($response);
			
			$tabla = $response;
			$i=0;
			foreach ($tabla as $m) {
				if($m->color == $nombre)
				{
					$tablas[$i] =$m;
					$i++;
				}
			}
		}
		catch (Exception $e) 
		{
			User::Logx($error);
			echo View::load('errorPermiso', ['mensaje' =>  $error]);
		}
		
		return $tablas;
	}
	
	


}