<?php
class LibraryLoader
{
	public function load( $library, $agrs = array())
	{
        // Load library
		if ( empty($this->{$library}) ) {
			$class = ucfirst(strtolower($library)) . 'Library';
			require_once(PATH_SYSTEM . '/library/' . $class . '.php');
			$this->{$library} = new $class($agrs);
		}
	}
}