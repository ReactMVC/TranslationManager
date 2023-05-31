<?php

require_once __DIR__ . '/vendor/autoload.php';
use DarkPHP\Manager;

$translationManager = new Manager();
$translationManager->translate('fa', 'app.json', 'app.fa.json');