<?php
// ==========================================
// ✅ 1. AVVIO SESSIONE (Da SiteGround - FONDAMENTALE)
// ==========================================
// Spostato qui per evitare l'errore che rompeva il login di taurinarum21.
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ==========================================
// ✅ 2. INIZIALIZZAZIONE (Condivisa)
// ==========================================
require_once __DIR__ . '/../app/config/config.php';

// ==========================================
// ✅ 3. RECUPERO ROTTA (Condivisa)
// ==========================================
$view = $_GET['view'] ?? 'index';
$id = $_GET['id'] ?? null;

// ==========================================
// 🔄 4. ADATTAMENTO LOCALHOST / METODO ROTGER
// ==========================================
if ($view === 'index' && empty($_GET['view'])) {

    // 🚫 CODICE ORIGINALE ROTGER (COMMENTATO PERCHÉ NON COMPATIBILE/BUGGATO)
    // Motivo 1: Cercava forzatamente la parola '/cpue-website/' (che su SiteGround non esiste).
    // Motivo 2: C'era un bug alla riga 2 ($parts[0] veniva usato prima di esistere).
    /*
    $uri = str_replace('/cpue-website/', '', $_SERVER['REQUEST_URI']);
    $parts = explode('/', trim($parts[0], '/'));
    if (count($parts) > 1) {
        $view = $parts[0];
        $id = $parts[1];
    }
    */

    // ✅ NUOVO CODICE UNIVERSALE (Sostituisce quello sopra)
    // Trova da solo la cartella base (che sia /cpue-website/ sul Mac o / su SiteGround)
    // e legge l'URL dinamicamente senza mai andare in crash.
    $basePath = dirname($_SERVER['SCRIPT_NAME']);
    $uri = str_replace($basePath, '', $_SERVER['REQUEST_URI']);
    $uri = parse_url($uri, PHP_URL_PATH); // Pulisce l'URL
    $parts = explode('/', trim($uri, '/'));

    if (!empty($parts[0])) {
        $view = $parts[0];
        $id = $parts[1] ?? null;
    }
}

// ==========================================
// 🛡️ 5. SICUREZZA (Da SiteGround)
// ==========================================
// SCUDO ANTI-HACKER (Local File Inclusion)
// basename() impedisce a utenti maligni di navigare nelle cartelle del server.
$view = basename($view);
if (empty($view)) {
    $view = 'index'; // Ritorno sicuro
}

// ==========================================
// ✅ 6. CARICAMENTO PAGINA (Condiviso)
// ==========================================
$viewPath = ROOT_PATH . 'app/views/' . $view . '.php';

if (file_exists($viewPath)) {
    require_once $viewPath;
} else {
    http_response_code(404);

    // Logica di SiteGround: ha un "paracadute" in più nel caso manchi la pagina 404.php
    $errorPage = ROOT_PATH . 'app/views/404.php';
    if (file_exists($errorPage)) {
        include $errorPage;
    } else {
        echo "<h1>404 - Pagina non trovata</h1><p>La risorsa richiesta non esiste.</p>";
    }
}
?>