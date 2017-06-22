<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

/**
 * Class HelperLoader
 */
class HelperLoader
{
    /**
     * @param $helper
     * @desc Load helper
     */
    public function load($helper)
    {
        $helper = ucfirst(strtolower($helper)) . 'Helper';
        if (!file_exists(PATH_SYSTEM . '/helper/' . $helper . '.php')) {
            die ('File helper ' . $helper . 'is not exists');
        }
        require_once PATH_SYSTEM . '/helper/' . $helper . '.php';
    }
} 