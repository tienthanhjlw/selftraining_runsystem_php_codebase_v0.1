<?php
// 
if (!defined('PATH_SYSTEM')) die ('Bad Request!');

function load()
{
    // Lay cac bien he thong vao $config
    $config = include_once PATH_SYSTEM . '/config/const.php';
    // Kiem tra tham so controller va action
    $controller = empty($_GET['c']) ? $config['CONTROLLER_DEFAULT'] : $_GET['c'];
    $action = empty($_GET['a']) ? $config['ACTION_DEFAULT'] : $_GET['a'];
    // Doi ten tham so controller cho giong voi ten he thong
    $controller = ucfirst(strtolower($controller)) . 'Controller';
    // Kiem tra ton tai file controller
    if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')) {
        die('Controller ' . $controller . ' not found');
    }

    include_once PATH_SYSTEM . '/core/Controller.php';

    require_once PATH_APPLICATION . '/controller/' . $controller . '.php';
    //
    if (!class_exists($controller)) {
        die ('Controller is not found');
    }

    $controllerObject = new $controller();

    if (!method_exists($controllerObject, $action)) {
        die('Action is not found');
    }

    $controllerObject->{$action}();
}