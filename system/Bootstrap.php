<?php

defined('SITE_NAME') OR exit('access denied');

class Bootstrap 
{
  public function __construct() 
  {
    $flag = false;
    // 1. router
    if (isset($_GET['path'])) {
      $tokens = explode('/', rtrim($_GET['path'], '/'));
      // 2. dispatcher
      $controllerName = ucfirst(array_shift($tokens));
      if (file_exists('controllers/'. $controllerName .'.php')) {
        $controller = new $controllerName();
        // run an action
        if(!empty($tokens)) {
          $actionName = array_shift($tokens);
          if(method_exists($controller, $actionName)){
            // Passing parameters if exists or null if not
            $controller->{$actionName}(@$tokens);
          } else {
            // if action not found error page
            $flag = true;
          }
        } else {
          // default action index
          $controller->index();
        }
      }
      else {
        // if controller not found render an error page
        $flag = true;
      }
    } else {
      // if no controller entered
      // name a unique name controller that can be in a system and cannot  named in controller
      $controllerName = 'HomeController';
      $controller = new $controllerName();
      $controller->index();
    }

    // Error page
    if($flag) {
      $controllerName = 'Error404PageNotFoundController';
      $controller = new $controllerName();
      $controller->index();
    }
  }
}


?>