<?php

http_response_code(404);

require_once '../app/config/config.php';

$title = "Pagina non trovata - Errore 404";
$meta_description = "Pagina non trovata. Torna alla home page della Chiesa Pentecostale Unita in Europa.";
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <?php include ROOT_PATH . 'app/views/includes/head.php'; ?>
</head>

<body>

    <header>
        <?php include ROOT_PATH . 'app/views/includes/navbar.php'; ?>
    </header>

    <main class="not-found">
        
        <div class="not-found__container">            
            <img src="<?= BASE_URL ?>public/assets/img/404.svg" class="not-found__img" alt="Errore 404">

            <h1 class="not-found__title">Non siamo nel luogo che aspettavamo...</h1>
            
            <a href="<?= BASE_URL ?>" class="contact__button not-found__button">
                <span class="contact__button-text">TORNIAMO ALLA HOME</span>
            </a>
        </div>
    </main>

    <footer class="footer">
        <?php include ROOT_PATH . 'app/views/includes/footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>public/js/script.js"></script>
</body>

</html>