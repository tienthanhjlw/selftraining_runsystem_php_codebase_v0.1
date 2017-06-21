<?php

if (!defined('PATH_SYSTEM')) die ('Bad request');

class Controller
{
    protected $view = NULL;

    protected $model = NULL;

    protected $library = NULL;

    protected $helper = NULL;

    protected $config = NULL;

    /*
    Load cac thu vien can thiet
    */
    public function __construct()
    {

    }

    /*
    Ham chay ung dung
    */
    public function load($controller, $action)
    {
        // Chuyen ten controller theo dinh dang {Name}Controller
        $controller = ucfirst(strtolower($controller)) . 'Controller';

        // Kiem tra file co ton tai hay khong
        if (!file_exists(PATH_APP . '/controller/' . $controller . '.php')) {
            die ('File is not exists');
        }

        require_once PATH_APP . '/controller/' . $controller . '.php';

        // Kiem tra class co ton tai hay khon
        if (!class_exists($controller)) {
            die ('Controller is not exists');
        }

        $controllerObject = new $controller();

        // Kiem tra action co ton tai hay khong
        if (!method_exists($controllerObject, $action)) {
            die ('Action is not exists');
        }

        // Goi toi action
        $controllerObject->{$action}();
    }

}