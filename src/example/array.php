<?php
use DarkPHP\Manager;

require_once __DIR__ . '/vendor/autoload.php';

$app = new Manager();

$app->translateArray('fa', 'app.php', 'app.fa.php');