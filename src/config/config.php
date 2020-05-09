<?php

//Pasta
define('VIEW_PATH', realpath(dirname(__FILE__,1) . '/../view'));


//Arquivo
require_once(realpath(dirname(__FILE__,1) . '/database.php'));
require_once(realpath(VIEW_PATH . '/home.php'));

?>
