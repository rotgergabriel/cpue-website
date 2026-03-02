<?php

$domain = $_SERVER['HTTP_HOST'] ?? 'localhost';

$is_dev_env = (
    $domain === 'localhost' ||
    $domain === '127.0.0.1' ||
    strpos($domain, 'ngrok') !== false
);

$is_https = (
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
    $_SERVER['SERVER_PORT'] == 443 ||
    (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ||
    strpos($domain, 'ngrok') !== false
);

$protocol = $is_https ? "https://" : "http://";

$script_name = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$path_parts = array_values(array_filter(explode('/', $script_name)));

if ($is_dev_env && !empty($path_parts)) {
    $project_folder = '/' . $path_parts[0] . '/';
} else {
    $project_folder = '/';
}

define('BASE_URL', $protocol . $domain . $project_folder);

define('ROOT_PATH', realpath(dirname(__FILE__) . '/../../') . DIRECTORY_SEPARATOR);
define('MODELS_PATH', ROOT_PATH . 'app' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR);

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'cpue_db');

$cities = include MODELS_PATH . 'city_models.php';
$comitati = include MODELS_PATH . 'comitati_models.php';
$site_data = include MODELS_PATH . 'site_settings.php';
