<?php

  // checa si la vista se esta cargando apropiadamente envez de una solicitud directa
  if(!isset($allowDisplay)) {
    header('HTTP/1.0 403 Forbidden');
    die('<h1>403</h1>');
  }
