<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

function stringToInt($str)
{
    return sprintf("%u", crc32($str));
}