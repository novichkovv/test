<?php
/**
 * Created by PhpStorm.
 * User: novichkov
 * Date: 06.03.15
 * Time: 19:20
 */
session_start();
//print_r($_COOKIE);
//print_r($_SESSION);exit;
require_once('config.php');
require_once(CORE_DIR . 'registry.php');
require_once(CORE_DIR . 'autoload.php');
require_once(CORE_DIR . 'router.php');

