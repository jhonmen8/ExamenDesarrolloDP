<?php

// Clase para cargar vistas


  class View
  {
    public static function load($name, $data = [])
    {
      $request = __DIR__ . "/../views/{$name}.php";
      if (file_exists($request)) {
        // si el archivo existe lo cargamos al buffer y extraemos las variables contenidas en
        // el segundo parametro
        ob_start();
        //var_dump($data);
        extract($data);
        $allowDisplay = true; //variable para prevenir que las vistas se carguen sin esta clase
        include $request;
        unset($allowDisplay);
        return ob_get_clean();
      }
      return false;
    }
  }