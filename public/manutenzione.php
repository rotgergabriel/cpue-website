<?php
// 1. CARICAMENTO CONFIGURAZIONE
// Fondamentale: se apri questo file direttamente, deve sapere cos'è BASE_URL.
// Usiamo __DIR__ per essere sicuri di trovare la cartella app uscendo da public.
require_once __DIR__ . '/../app/config/config.php';

// ====================================================
// IMPOSTAZIONI MANUTENZIONE
// ====================================================
$in_manutenzione = false; // TRUE = Sito bloccato | FALSE = Sito visibile

// Tuo IP (per lavorare mentre il sito è chiuso)
$ip_autorizzati = ['123.456.789.000', '::1']; 

// Rilevamento dati utente
$user_ip = $_SERVER['REMOTE_ADDR'];
$pagina_corrente = basename($_SERVER['PHP_SELF']);

// LOGICA DI REINDIRIZZAMENTO
// Se manutenzione attiva E utente non autorizzato E non siamo già nella pagina di avviso
if ($in_manutenzione && !in_array($user_ip, $ip_autorizzati) && $pagina_corrente != 'manutenzione.php') {
    // Usa BASE_URL invece di $path
    header("Location: " . BASE_URL . "manutenzione.php");
    exit();
}

// SICUREZZA INVERSA
// Se la manutenzione è SPENTA, ma qualcuno prova ad aprire "manutenzione.php", via a casa!
if (!$in_manutenzione && $pagina_corrente == 'manutenzione.php') {
    header("Location: " . BASE_URL . "index.php");
    exit();
}

// Se lo script arriva qui, significa che DOBBIAMO mostrare la pagina di manutenzione.
// Impostiamo l'header 503 per Google (SEO friendly)
http_response_code(503);
header('Retry-After: 3600');
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sito in Manutenzione - CPUE</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/reset.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">
    <style>
        /* Stili specifici di emergenza (inline così funzionano anche se il CSS fallisce) */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            background-color: #f4f4f4;
            font-family: 'Inter', sans-serif;
            padding: 20px;
        }
        .maintenance-box {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            max-width: 600px;
        }
        h1 { color: #333; margin-bottom: 20px; font-size: 2rem; }
        p { color: #666; font-size: 1.1rem; line-height: 1.6; }
        .logo { max-width: 150px; margin-bottom: 20px; }
    </style>
</head>
<body>

    <div class="maintenance-box">
        <img src="<?= BASE_URL ?>public/assets/img/logo-main.webp" alt="Logo CPUE" class="logo">
        <h1>Sito in Manutenzione</h1>
        <p>Stiamo effettuando un aggiornamento programmato per migliorare la tua esperienza.</p>
        <p>Torneremo online a breve. Grazie per la pazienza!</p>
        <p style="margin-top: 20px; font-size: 0.9rem;"><em>Chiesa Pentecostale Unita in Europa</em></p>
    </div>

</body>
</html>