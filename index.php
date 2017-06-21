<?php

// Dinh nghia duong dan he thong
define('PATH_SYSTEM', __DIR__ . '/system');
define('PATH_APP', __DIR__ . '/app');

// Lay thong so cau hinh
require(PATH_SYSTEM . '/config/config.php');

/* Danh sach tham so gom 2 phan:
	- controller: controller hien tai;
	- action: action hien tai
*/
$segments = array(
    'controller' => '',
    'action' => array()
);

// Neu khong truyen controller hoac action thi dung controller va action mac dinh
$segments['controller'] = empty($_GET['c']) ? CONTROLLER_DEFAULT : $_GET['c'];
$segments['action'] = empty($_GET['a']) ? ACTION_DEFAULT : $_GET['a'];

// Require controller
require_once PATH_SYSTEM . '/core/Controller.php';

// Chay controller
$controller = new Controller();
$controller->load($segments['controller'], $segments['action']);