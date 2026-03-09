<?php
// ==========================================
// ✅ CONTROLLO AUTENTICAZIONE (Identico per Mac e SiteGround)
// ==========================================

// 1. Assicura che la sessione sia attiva senza duplicati
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// 2. Controllo di sicurezza: Se non sei loggato come admin, ti sbatte fuori
// Grazie al config.php universale, BASE_URL sa esattamente dove rimandarti.
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: " . BASE_URL . "login");
    exit();
}

// 3. Timeout di inattività (15 minuti * 60 secondi)
$inactivity_limit = 15 * 60;

// 4. Controllo del tempo trascorso
if (isset($_SESSION['last_activity'])) {
    $elapsed_time = time() - $_SESSION['last_activity'];

    // Se sono passati più di 15 minuti di inattività, distrugge la sessione
    if ($elapsed_time > $inactivity_limit) {
        session_unset();
        session_destroy();
        // Aggiunge "?timeout=1" all'URL così puoi mostrare un messaggio tipo "Sessione scaduta"
        header("Location: " . BASE_URL . "login?timeout=1");
        exit();
    }
}

// 5. Aggiorna il "timer" ogni volta che ricarichi una pagina protetta
$_SESSION['last_activity'] = time();
?>