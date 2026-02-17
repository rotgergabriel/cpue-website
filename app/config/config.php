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

// 3. Definición de constantes globales
define('BASE_URL', $protocol . $domain . $project_folder);

// CORRECCIÓN AQUÍ: Subimos dos niveles (/../../) para salir de app/config/ y llegar a la raíz
define('ROOT_PATH', realpath(dirname(__FILE__) . '/../../') . DIRECTORY_SEPARATOR);

// 4. Configuración de Base de Datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root'); // Recuerda que en XAMPP Windows suele ser '' (vacío)
define('DB_NAME', 'cpue_db');

// Incluimos el modelo para tener acceso a $cities

// Definimos la ruta absoluta
define('MODELS_PATH', __DIR__ . '/../models/');

// Cambiamos require_once por require para asegurar que devuelva el array
$cities = require MODELS_PATH . 'city_models.php';