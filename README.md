# Translation Manager
DarkPHP is a fast Translation Manager for php and laravel powered by google-translate-php

## installation
```
composer require darkphp/translate
```

## Example
```php
<?php

require_once __DIR__ . '/vendor/autoload.php';
use DarkPHP\Manager;

$translationManager = new Manager();
$translationManager->translate('fa', 'app.json', 'app.fa.json');
```
