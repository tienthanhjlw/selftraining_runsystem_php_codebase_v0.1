<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

class ConfigLoader
{
    // Danh sach config
    protected $config = array();

    /*
    Load config
    @param string
    @desc
    */
    public function load($config)
    {
        if (file_exists(PATH_APP . '/config/' . $config . '.php')) {
            $config = include_once PATH_APP . '/config/' . $config . '.php';
            if (!empty($config)) {
                foreach ($config as $key => $item) {
                    $this->config[$key] = $item;
                }
            }
            return true;
        }
        return false;
    }

    /*
    Ham get config item, tham so truyen vao la ten cua item va tham so mac dinh
    */
    public function item($key, $default_val = '')
    {
        return isset($this->config[$key]) ? $this->config[$key] : $default_val;
    }

    public function setItem($key, $val)
    {
        $this->config[$key] = $val;
    }
}