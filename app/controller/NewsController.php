<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

class NewsController extends Controller
{
    public function index()
    {
        echo '<h1>Hello<h1>';
        echo '<pre>';
        print_r($this);
        echo '</pre>';
    }

    public function show()
    {
        echo '<h1>Show</h1>';
    }
}