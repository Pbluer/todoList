<?php

//Pasta

define('VIEW_PATH', realpath(dirname(__FILE__,1) . '/../view'));
define('STYLE_PATH', realpath(dirname(__FILE__,2) . '/../public/style'));

//Arquivo
require_once(realpath(dirname(__FILE__,1) . '/database.php'));
$estiliPadrao = require_once(realpath(dirname(__FILE__,1) . '/index.css'));
