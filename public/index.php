<?php
// 1. CONFIGURAZIONE GENERALE
// Carichiamo le costanti come BASE_URL
require_once '../app/config/config.php';

// 2. VARIABILI DI PAGINA
// Definiamo i dati specifici per questa pagina (Home)
// $pageTitle = "Chiesa Pentecostale Unita in Europa";
// $bodyClass = "home-page";
// $pageDescription = "Associazione Chiesa Pentecostale Unita in Europa - Promuoviamo la fede cristiana e l'unità tra le chiese pentecostali in Europa.";
// $canonicalUrl = "https://cpue.it/"; // O usa BASE_URL se preferisci dinamismo

// 3. CONNESSIONE AL DATABASE
// Il percorso esce da 'public' ed entra in 'app/views/includes'
include '../app/views/includes/db_connect.php';
?>

<?php include '../app/views/includes/head.php'; ?>

<?php include '../app/views/includes/header.php'; ?>

<main>
    <?php include '../app/views/includes/content.php'; ?>
</main>

<?php include '../app/views/includes/footer.php'; ?>

<?php include '../app/views/includes/end.php'; ?>