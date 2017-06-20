<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

class UploadLibrary
{
    public $alpha = 7;

    public function __construct()
    {
        echo '<h3> Class UploadLibrary was instance </h3>';
    }

    public function upload()
    {
        echo '<h3>call to Method Upload</h3>';
    }
}