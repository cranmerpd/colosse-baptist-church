<?php
// Centralized configuration for GoDaddy now and future server migration later.
// Prefer environment variables when available; fall back to local defaults.

define('APP_NAME', 'Colosse Baptist Church');
define('BASE_URL', 'http://localhost/colosse2');

define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_NAME', getenv('DB_NAME') ?: 'colosse_site');
define('DB_USER', getenv('DB_USER') ?: 'colosse_user');
define('DB_PASS', getenv('DB_PASS') ?: '');

define('UPLOAD_DIR', dirname(__DIR__) . '/public/uploads');
define('UPLOAD_URL', BASE_URL . '/uploads');

define('ENVIRONMENT', getenv('APP_ENV') ?: 'development');

if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
} else {
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT);
    ini_set('display_errors', '0');
}
