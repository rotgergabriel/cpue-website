<?php
// ====================================================
// 1. RILEVAMENTO AMBIENTE (Locale vs Online)
// ====================================================

// Rileva protocollo (http o https)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$domainName = $_SERVER['HTTP_HOST'];

// LOGICA INTELLIGENTE:
// Se siamo su localhost (o 127.0.0.1), aggiungiamo la cartella del progetto.
// Se siamo online (cpue.it), la cartella è la radice (vuota).
if ($domainName == 'localhost' || $domainName == '127.0.0.1') {
    // SVILUPPO LOCALE
    define('APP_FOLDER', '/cpue-website/'); 
} else {
    // PRODUZIONE (ONLINE)
    define('APP_FOLDER', '/'); 
}

// Costruzione URL
define('BASE_URL', $protocol . $domainName . APP_FOLDER);

// ====================================================
// 2. DATABASE CONFIG (Placeholder)
// ====================================================
// Definisci qui le costanti anche se per ora sono spente
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_NAME', 'cpue_db'); 
?>