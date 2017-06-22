<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

/**
 * @desc Function load
 */
function load()
{
    /**
     * @desc Lay phan config khoi tao ban dau
     */
    $config = include_once PATH_APP . '/config/init.php';

    /**
     * @desc Neu khong truyen controller hoac action thi dung controller va action mac dinh
     */
    $controller = empty($_GET['c']) ? $config['CONTROLLER_DEFAULT'] : $_GET['c'];
    $action = empty($_GET['a']) ? $config['ACTION_DEFAULT'] : $_GET['a'];

    /**
     * @desc Chuyen ten controller theo dinh dang {Name}Controller
     */
    $controller = ucfirst(strtolower($controller)) . 'Controller';

    /**
     * @desc Kiem tra file co ton tai hay khong
     */
    if (!file_exists(PATH_APP . '/controller/' . $controller . '.php')) {
        die ('File is not exists');
    }

    /**
     * @desc Include controller chinh de cac controller con ke thua
     */
    require_once PATH_SYSTEM . '/core/Controller.php';

    /**
     * @desc Load BaseController
     */
    if (file_exists(PATH_APP . '/core/BaseController.php')) {
        include_once PATH_APP . '/core/BaseController.php';
    }

    /**
     * @desc Include controller con
     */
    require_once PATH_APP . '/controller/' . $controller . '.php';

    /**
     * @desc Kiem tra class co ton tai hay khong
     */
    if (!class_exists($controller)) {
        die ('Controller is not exists');
    }

    $controllerObject = new $controller();

    /**
     * @desc Kiem tra action co ton tai hay khong
     */
    if (!method_exists($controllerObject, $action)) {
        die ('Action is not exists');
    }

    /**
     * @desc Goi toi action
     */
    $controllerObject->{$action}();

}
