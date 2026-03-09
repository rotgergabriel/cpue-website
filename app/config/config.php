<?php
// ==========================================
// 1. RILEVAMENTO AMBIENTE E PROTOCOLLO
// ==========================================
$domain = $_SERVER['HTTP_HOST'] ?? 'localhost';

$is_dev_env = (
    $domain === 'localhost' ||
    $domain === '127.0.0.1' ||
    strpos($domain, 'ngrok') !== false
);

$is_https = (
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
    (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443) ||
    (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') ||
    strpos($domain, 'ngrok') !== false
);

$protocol = $is_https ? "https://" : "http://";

// ==========================================
// 2. GENERAZIONE BASE_URL DINAMICA
// ==========================================
$script_name = str_replace('\\', '/', $_SERVER['SCRIPT_NAME']);
$path_parts = array_values(array_filter(explode('/', $script_name)));

if ($is_dev_env && !empty($path_parts)) {
    // Su localhost estrae la cartella del progetto (es. /cpue-website/)
    $project_folder = '/' . $path_parts[0] . '/';
} else {
    // Su SiteGround la radice è sempre /
    $project_folder = '/';
}

define('BASE_URL', $protocol . $domain . $project_folder);

// ==========================================
// 3. PERCORSI ASSOLUTI (Più moderni e sicuri)
// ==========================================
// Usiamo __DIR__ al posto di dirname(__FILE__) come nel file SiteGround
define('ROOT_PATH', realpath(__DIR__ . '/../../') . DIRECTORY_SEPARATOR);
define('MODELS_PATH', ROOT_PATH . 'app' . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR);

// ==========================================
// 4. CONNESSIONE AL DATABASE (UNIVERSALE)
// ==========================================
// 🔄 PUNTO MEDIO: Sdoppiamo la connessione in base all'ambiente
if ($is_dev_env) {
    // ✅ CREDENZIALI PER IL TUO MAC (Metodo Rotger salvato)
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'cpue_db');
} else {
    // 🚫 VECCHIE CREDENZIALI ROTGER (COMMENTATE PERCHÉ NON FUNZIONANTI)
    /*
    define('DB_HOST', 'siteground');
    define('DB_USER', 'webcpue@gmail.com');
    define('DB_PASS', 'andreaweb2017');
    define('DB_NAME', 'cpue_db');
    */

    // ✅ CREDENZIALI CORRETTE SITEGROUND (Dal tuo file aggiornato)
    define('DB_HOST', 'localhost'); // Su Siteground l'host corretto è 'localhost'
    define('DB_USER', 'uzbn54argte8i');
    define('DB_PASS', '31b1d#r4%_@5');
    define('DB_NAME', 'dbi2q5anay96yt');
}

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die("Errore di connessione al database: " . mysqli_connect_error());
}

// ✅ [AGGIUNTA DA SITEGROUND - VITALE]
// Imposta la codifica UTF-8. Senza questa riga, le lettere accentate 
// e i caratteri speciali della libreria musicale si romperebbero!
mysqli_set_charset($conn, "utf8mb4");

// ==========================================
// 5. INCLUSIONE MODELLI E COSTANTI
// ==========================================
define('JS_INACTIVITY', BASE_URL . 'public/js/inactivity.js');

$cities = include MODELS_PATH . 'city_models.php';
$comitati = include MODELS_PATH . 'comitati_models.php';
$site_data = include MODELS_PATH . 'site_settings.php';
?>