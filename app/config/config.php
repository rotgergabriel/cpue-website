<?php

// 1. Detección dinámica del protocolo y dominio
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domain = $_SERVER['HTTP_HOST'];

// 2. Detección automática de la carpeta del proyecto
$script_name = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$project_folder = '/' . trim(explode('/', $script_name)[1], '/') . '/';

if ($domain !== 'localhost' && $domain !== '127.0.0.1') {
    $project_folder = '/';
}

// Definición de constantes globales
define('BASE_URL', $protocol . $domain . $project_folder);

// Subimos dos niveles (/../../) para salir de app/config/ y llegar a la raíz
define('ROOT_PATH', realpath(dirname(__FILE__) . '/../../') . DIRECTORY_SEPARATOR);

// Configuración de Base de Datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'cpue_db');

// Definimos la ruta absoluta
define('MODELS_PATH', __DIR__ . '/../models/');

// Cambiamos require_once por require para asegurar que devuelva el array
$cities = require MODELS_PATH . 'city_models.php';
$site_data = require MODELS_PATH . 'site_settings.php';