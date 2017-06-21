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
        // Load cho config
        require_once PATH_SYSTEM . '/core/loader/ConfigLoader.php';
        $this->config = new ConfigLoader();
        $this->config->load('config');
    }
}