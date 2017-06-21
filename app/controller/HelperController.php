<?php

if ( ! defined('PATH_SYSTEM')) die ('Bad request');

class HelperController extends Controller
{
	public function index()
	{
		$this->helper->load('string');

		echo stringToInt('iloveyou');
	}
}