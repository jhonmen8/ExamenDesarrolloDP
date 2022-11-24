
<?php 
		$json = (isset($_GET['json'])) ? (($_GET['json'] == '') ? $json : $_GET['json']) : $json;

		//Creamos el JSON
			$json_string = json_encode($json);
			$file = 'Respuesta1.json';
			file_put_contents($file, $json_string); 
			
			fwrite($file, $json_string);
			fclose($file);
			
			header("Content-disposition: attachment; filename=".$file);
			header("Content-type: application/json");
			readfile($file);
?>