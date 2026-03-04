<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: " . BASE_URL . "login");
    exit();
}

$inactivity_limit = 15 * 60;

if (isset($_SESSION['last_activity'])) {
    $elapsed_time = time() - $_SESSION['last_activity'];

    if ($elapsed_time > $inactivity_limit) {
        session_unset();
        session_destroy();
        header("Location: " . BASE_URL . "login?timeout=1");
        exit();
    }
}

$_SESSION['last_activity'] = time();
