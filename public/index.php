<?php

defined( "APPLICATION_PATH") || define("APPLICATION_PATH", realpath(path: dirname(path: __FILE__) . "/../app"));

const DS = DIRECTORY_SEPARATOR;

require APPLICATION_PATH . DS . 'config' . DS . 'config.php';

echo "<pre>";
print_r($config);

// index.php?page=home
$page = get(name: 'page', def: 'home');
$model = $config['MODEL_PATH'] . $page . '.php';
$view = $config['VIEW_PATH'] . $page . '.phtml';
$_404 = $config['VIEW_PATH'] . '404.phtml';

if(file_exists($model)){
    require $model;
}

if(file_exists($view)){
    require $view;
}else {
    require $_404;
}