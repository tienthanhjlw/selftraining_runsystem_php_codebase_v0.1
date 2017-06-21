<?php

if ( ! defined('PATH_SYSTEM')) die ('Bad request');

class LibraryController extends Controller
{

	public function index()
	{
		$this->library->load('upload');
		$this->library->upload->upload();
	}
}