<?php

if(! defined('PATH_SYSTEM')) die ('Bad request');

function stringToInt($str)
{
	return crc32($str);
}