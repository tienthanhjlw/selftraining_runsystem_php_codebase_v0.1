<?php
// Gan duong dan thu muc SYSTEM, va thu muc APPLICATION
define('PATH_SYSTEM', __DIR__ . '/system');
define('PATH_APPLICATION', __DIR__ . '/app');

require(PATH_SYSTEM . '/config/env.php');

require_once(PATH_SYSTEM . '/core/common.php');

load();