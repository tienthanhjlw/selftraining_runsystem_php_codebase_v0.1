<?php

// Dinh nghia duong dan he thong
define('PATH_SYSTEM', __DIR__ . '/system');
define('PATH_APP', __DIR__ . '/app');

// Lay thong so cau hinh
require(PATH_SYSTEM . '/config/config.php');

// Include file common.php, file common chua ham load() chay he thong
include_once PATH_SYSTEM . '/core/common.php';

load();