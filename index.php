<?php

use App\manager\EnvironmentVariablesManager;

require __DIR__ . '/vendor/autoload.php';

EnvironmentVariablesManager::loadVariablesManager(__DIR__);

echo getenv('DB_HOST') . PHP_EOL;
echo getenv('DB_USER') . PHP_EOL;
echo getenv('DB_PASS') . PHP_EOL;
echo getenv('DB_NAME') . PHP_EOL;
