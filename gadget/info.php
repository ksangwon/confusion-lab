<?php
echo "=== PackageX Setup Diagnostic (example file) ===\n";
echo "PHP version    : " . phpversion() . "\n";
echo "Document root  : " . $_SERVER['DOCUMENT_ROOT'] . "\n";
echo "Server software: " . $_SERVER['SERVER_SOFTWARE'] . "\n";
echo "Script path    : " . __FILE__ . "\n";
echo "Loaded php.ini : " . php_ini_loaded_file() . "\n";
echo "\n[!] shipped with the package, never meant to be web-reachable\n";
