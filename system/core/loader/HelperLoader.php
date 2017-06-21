<?php

class HelperLoader
{
	// Load helper
    public function load($helper)
	{
		$helper = ucfirst(strtolower($helper));
		require_once(PATH_SYSTEM . '/helper/' . $helper . '.php');
	}
}