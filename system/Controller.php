<?php
defined('SITE_NAME') OR exit('access denied');

class Controller
{
  public function __construct()
  {
    $this->view = new View();
  }
}