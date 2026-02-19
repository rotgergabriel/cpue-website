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
    
    <main class="not-found">
        
        <div class="not-found__container">            
            <img src="<?= BASE_URL ?>public/assets/img/404.svg" class="not-found__img" alt="Errore 404">

            <h1 class="not-found__title">Non siamo nel luogo che aspettavamo...</h1>
            
            <a href="<?= BASE_URL ?>" class="contact__button not-found__button">
                <span class="contact__button-text">TORNIAMO ALLA HOME</span>
            </a>
        </div>

    </main>

    <footer class="footer footer-404">
 

        <div class="footer__bottom">

            <div class="footer__section footer__accordion-item footer__section--social">

                <div class="footer__desktop-logo">
                    <a href="<?= BASE_URL ?>" title="Torna alla Home">
                    <img src="<?= BASE_URL ?>public/assets/img/logo-main.webp" class="footer__img" alt="Logo CPUE">
                    </a>
                </div>
                </div>        

            <p class="footer__bottom-text">© 2024 Associazione Chiesa Pentecostale Unita in Europa. Tutti i diritti riservati.</p>
            <p class="footer__credits">
                Sviluppato da: <strong><a href="https://github.com/rotgergabriel/cpue-website" target="_blank" rel="noopener noreferrer">Gabriel Augusto Rotger</a></strong> & <strong><a href="https://github.com/jonhtorresgarcia/cpue-website" target="_blank" rel="noopener noreferrer">Jonh Torres Garcia</a></strong><br>
                Basato sul design originale di: <strong>Andrea Perez Sanchez</strong> (Graphic Designer)
            </p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>public/js/script.js"></script>
</body>

</html>