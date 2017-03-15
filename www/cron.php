<?php
error_reporting(E_ALL);
echo 1;
require_once('config.php');
echo 2;
require_once(CORE_DIR . 'registry.php');
echo 3;
require_once(CORE_DIR . 'autoload.php');
echo 4;
$cron = new cron_class();
echo 5;
$cron->upwork();
echo 6;