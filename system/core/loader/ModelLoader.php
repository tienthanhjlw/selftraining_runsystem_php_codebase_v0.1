<?php

if (!defined('PATH_SYSTEM')) die ('Bad request');

/**
 * Class ModelLoader
 */
class ModelLoader
{

    public function load($model)
    {
        require_once PATH_SYSTEM . '/core/Model.php';
        if (!file_exists(PATH_APP . '/model/' . $model . '.php')) {
            die (' File is not exists ');
        };
        require_once PATH_APP . '/model/' . $model . '.php';
        $this->{$model} = new $model();
    }

}
