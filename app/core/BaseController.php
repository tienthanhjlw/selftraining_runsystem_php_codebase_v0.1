<?php

if (!defined('PATH_SYSTEM')) die ('Bad request');

/**
 * Class BaseController
 */
class BaseController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function loadHeader()
    {

    }

    public function loadFooter()
    {

    }

    public function __destruct()
    {
        $this->view->show();
    }
}