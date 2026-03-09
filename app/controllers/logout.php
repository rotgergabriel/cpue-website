<?php
// ==========================================
// ✅ LOGOUT UNIVERSALE (Identico per Mac e SiteGround)
// ==========================================

// 1. Carica la configurazione intelligente (che capisce in che ambiente siamo)
require_once '../../app/config/config.php';

// 2. Avvia la sessione per poterla distruggere
session_start();

// 3. Pulisce tutte le variabili di sessione (es. $_SESSION['admin_logged_in'])
session_unset();

// 4. Distrugge fisicamente la sessione sul server
session_destroy();

// 5. Reindirizzamento dinamico
// Grazie al nuovo config.php, BASE_URL calcolerà in automatico se mandarti
// al login locale del Mac o a quello online su SiteGround. Magia pura!
header("Location: " . BASE_URL . "login");
exit();
?>