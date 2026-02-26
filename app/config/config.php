<?php

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domain = $_SERVER['HTTP_HOST'];

$script_name = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$project_folder = '/' . trim(explode('/', $script_name)[1], '/') . '/';

if ($domain !== 'localhost' && $domain !== '127.0.0.1') {
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