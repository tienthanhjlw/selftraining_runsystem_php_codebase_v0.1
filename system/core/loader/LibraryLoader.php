<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

/**
 * Class LibraryLoader
 */
class LibraryLoader
{

    /**
     * @param string $library : Ten library
     * @param array $agrs : danh sach cac bien khoi tao
     */
    public function load($library, $agrs = array())
    {
        /**
         * @desc Neu thu vien chua duoc load thi thuc hien load
         */
        if (empty($this->{$library})) {
            $class = ucfirst(strtolower($library)) . 'Library';
            require_once PATH_SYSTEM . '/library/' . $class . '.php';
            $this->{$library} = new $class($agrs);
        }
    }
}
