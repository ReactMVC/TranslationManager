# Translation Manager
DarkPHP a fast Translation Manager for php and laravel powered by google-translate-php

## installation
```
composer require darkphp/translate
```

## Example for json
```php
<?php

require_once __DIR__ . '/vendor/autoload.php';
use DarkPHP\Manager;

$translationManager = new Manager();
$translationManager->translate('fa', 'app.json', 'app.fa.json');
```
## Example for php array
```php
<?php
use DarkPHP\Manager;

require_once __DIR__ . '/vendor/autoload.php';

$app = new Manager();

$app->translateArray('fa', 'app.php', 'app.fa.php');
```