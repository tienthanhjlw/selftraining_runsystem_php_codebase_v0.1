<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

function redirect($url, $permanent = false)
{
    header('Location: ' . $url, true, $permanent ? 301 : 302);

    exit();
}
