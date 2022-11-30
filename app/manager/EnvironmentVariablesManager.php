<?php

namespace App\manager;

class EnvironmentVariablesManager
{
    /**
     * Method responsible for loading the project's environment variables
     */
    public static function loadVariablesManager(string $dir)
    {
        if (!file_exists($dir . '/.env')) {
            return;
        }

        $lines = file($dir . '/.env');
        foreach ($lines as $line) {
            putenv(trim($line));
        }
    }
}