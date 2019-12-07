<?php

defined('SITE_NAME') OR exit('access denied');

class Users  extends Controller
{
  public function index()
  {
    echo 'view all users';
  }

  public function delete()
  {
    var_dump(func_get_arg(0));
    echo 'delete user';
  }
}

?>