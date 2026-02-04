<?php

// 1. Detección dinámica del protocolo y dominio
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domain = $_SERVER['HTTP_HOST'];

// 2. Detección automática de la carpeta del proyecto
// Esto evita el IF de localhost y funciona tanto en Mac como en Windows
$script_name = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$project_folder = '/' . trim(explode('/', $script_name)[1], '/') . '/';

// Si estamos en producción (dominio real), la carpeta es la raíz
if ($domain !== 'localhost' && $domain !== '127.0.0.1') {
    $project_folder = '/';
}

// 3. Definición de constantes globales
define('BASE_URL', $protocol . $domain . $project_folder);
define('ROOT_PATH', realpath(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

// 4. Configuración de Base de Datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'cpue_db');
