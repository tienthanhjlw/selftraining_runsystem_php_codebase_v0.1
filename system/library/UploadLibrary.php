<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

/**
 * Class UploadLibrary
 */
class UploadLibrary
{
    public function __construct()
    {
        echo '<h3>Class UploadLibrary was instance';
    }

    public function upload()
    {
        echo '<h3>Call to method upload</h3>';
    }
}