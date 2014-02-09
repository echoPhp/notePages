<?php
// set up autoloader
require ('./../vendor/autoload.php');

//Сменим директорию нашего приложения
chdir(dirname(__DIR__));
//Константа домашней директории приложения, для удоства работы с путями
define('APP_DIR', dirname(__DIR__));
