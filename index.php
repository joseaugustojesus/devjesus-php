<?php

use app\core\Router;

require './vendor/autoload.php';
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

if (empty($_SESSION) or $_SESSION === null) {
    session_start();
}

Router::run();