<?php
require_once('config.php');
require_once(CORE_DIR . 'registry.php');
require_once(CORE_DIR . 'autoload.php');
//mail('novichkovv@bk.ru', 'test', 'test');
//echo tools_class::mail('Upwork Feed', 'asss', 'novichkovv@bk.ru');
$cron = new cron_class();
$cron->upwork();