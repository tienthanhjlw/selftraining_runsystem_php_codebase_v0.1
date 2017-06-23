<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

/**
 * @param $str
 * @return string
 */
function stringToInt($str)
{
    return sprintf("%u", crc32($str));
}
