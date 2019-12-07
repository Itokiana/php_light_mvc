<?php
defined('SITE_NAME') OR exit('access denied');

class HomeController extends Controller
{
  public function index() 
  {
    $this->view->render('home');
  }
}