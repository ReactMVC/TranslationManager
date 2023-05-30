<?php

require_once __DIR__ . '/vendor/autoload.php';
use Translate\Manager;

$translationManager = new Manager();
$translationManager->translate('fa', 'app.json', 'app.fa.json');