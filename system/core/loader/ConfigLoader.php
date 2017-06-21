<?php

class ConfigLoader
{
	protected $config = array();
    // Load config
	public function load($config)
	{
		if (file_exists(PATH_APPLICATION . '/config/' . $config . '.php')) {
			$config = include_once PATH_APPLICATION . '/config/' . $config . '.php';
			if ( ! empty($config)) {
				foreach ($config as $key => $item) {
					$this->config[$key] = $item;
				}	
			}
			return true;
		}
		return false;
	}
    // Get value item config
	public function item( $key, $default_val = '')
	{
		return isset($this->config[$key]) ? $this->config[$key] : $default_val;
	}
    // Set value item config
	public function setItem( $key, $val) {
		$this->config[$key] = $val;
	}
}