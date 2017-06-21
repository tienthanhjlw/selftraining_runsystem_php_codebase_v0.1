<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

class HelperLoader
{
    public function load($helper)
    {
        $helper = ucfirst(strtolower($helper)) . 'Helper';
        if (!file_exists(PATH_SYSTEM . '/helper/' . $helper . '.php')) {
            die ('File helper ' . $helper . 'is not exists');
        }
        require_once PATH_SYSTEM . '/helper/' . $helper . '.php';
    }
} 