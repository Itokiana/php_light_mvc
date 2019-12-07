<?php
defined('SITE_NAME') OR exit('access denied');

// header

include('components/header.php');

// end header

require_once($this->view. '.php');

// footer

include('components/footer.php');

// end footer