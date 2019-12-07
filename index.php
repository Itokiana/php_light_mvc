<?php
// use any variable from index to protect direct reach to system classes
define('SITE_NAME', 'Simple MVC');

spl_autoload_register(function($className){

  if (file_exists('system/'.$className.'.php')) 
  {
    require_once 'system/'.$className.'.php';
  } else if(file_exists('controllers/'.$className.'.php')) 
  {
    require_once 'controllers/'.$className.'.php';
  } else if (file_exists('models/'.$className.'.php')) 
  {
    require_once 'models/'.$className.'.php';
  } else if (file_exists($className.'.php')) 
  {
    require_once $className.'.php';
  }
  
});

new Bootstrap();


?>