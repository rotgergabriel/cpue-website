<?php
// Data Base Connection
// $user = '';
// $password = 'root';
// $server_name = 'localhost';
// $db_name = '';

// Protocolo es HTTP o HTTPS
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'];

// BASE_URL
define('BASE_URL', $protocol . $domainName . '/cpue-website/');

// Output examples
// http: //localhost/cpue-website/
// https: //localhost/cpue-website/
?>