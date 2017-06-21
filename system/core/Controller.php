<?php

if (!defined('PATH_SYSTEM')) die ('Bad request');

class Controller
{
    protected $view = NULL;

    protected $model = NULL;

    protected $helper = NULL;

    protected $config = NULL;

    protected $library = NULL;

    public function __construct()
    {
    	// Load config
    	require_once PATH_SYSTEM . '/core/loader/ConfigLoader.php';
    	$this->config = new ConfigLoader();
    	$this->config->load('config');
    	// Load library
    	require_once PATH_SYSTEM . '/core/loader/LibraryLoader.php';
    	$this->library = new LibraryLoader();
    	// Load helper
    	require_once PATH_SYSTEM . '/core/loader/HelperLoader.php';
    	$this->helper = new HelperLoader();
    }

}