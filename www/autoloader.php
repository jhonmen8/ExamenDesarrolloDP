<?php

spl_autoload_register(function($name){
  include_once __DIR__."/classes/{$name}.php";
});