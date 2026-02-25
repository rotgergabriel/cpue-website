<?php
require_once '../app/config/config.php';

// Personalizza questi due campi per ogni pagina statica che crei
$head_title = "Evangelismo - CPUE Italia";
$meta_description = "Pagina ufficiale del comitato Evangelismo della CPUE Italia.";
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

    <div class="layout">
        <main class="comitato-page">

         <h1 class="comitato__title">Evangelismo</h1>

            <div class="comitato__intro">
                <img src="<?= BASE_URL ?>public/assets/img/evangelismo.webp" alt="Evangelismo" class="comitato__intro-img">
                
                <p class="comitato__desc">
                    Questa è la buona notizia, un atto d’amore per condividere la grazia di Dio. Il comitato si dedica a portare speranza nelle strade e nelle case tramite la predicazione e la testimonianza. Ogni membro è chiamato a riflettere l'amore del Signore, organizzando incontri e campagne per dimostrare la potenza trasformatrice e restauratrice del Vangelo.
                </p>
            </div>

            <div class="comitato__events">
                <h3 class="comitato__events-title">I Nostri Eventi</h3>
                
                <div class="comitato__events-grid">
                                        
                    <div class="comitato__event-card">
                        <h4>Eventi Nazionali</h4>
                        <ul>
                            <li>Organizziamo riunioni virtuali per coordinare le direttive locali e raggiungere chi abita lontano dai nostri luoghi di culto. Attraverso il digitale, superiamo ogni distanza per condividere la Parola di Dio.</li>
                        </ul>
                    </div>
                    
                    <div class="comitato__event-card">
                        <h4>Eventi Locali</h4>
                        <ul>
                            <li>Attraverso la distribuzione di trattati e incontri nelle case di amici o di chi apre il proprio cuore, portiamo il Vangelo ovunque. Un impegno costante per condividere speranza e salvezza.</li>
                        </ul>
                    </div>

                </div>
            </div>


            <div class="comitato__director-box">
                <p class="comitato__greeting">
                    Il Vangelo è la bussola spirituale del nostro comitato: non diffondiamo parole, ma la potenza di una Grazia che salva, guarisce e ridona dignità a ogni creatura nel nome di Gesù.                <p class="comitato__director-name">
                </p>
                <p class="comitato__director-name">
                    Manuel Lopez
                </p>
                <p class="comitato__director-a">
                    Direttore Nazionale
                </p>
            </div>

            <div class="comitato__contact">
                <a href="https://wa.me/393932724244" target="_blank" class="comitato__contact-btn">
                    <svg viewBox="0 0 448 512" class="comitato__wa-icon">
                        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.1 0-65.6-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.5-11.3 2.5-2.5 5.6-6.5 8.3-9.7 2.8-3.3 3.7-5.6 5.6-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>
                    <span>Chiamaci</span>
                </a>
            </div>

        </main>
    </div>

    <footer class="footer">
        <?php include ROOT_PATH . 'app/views/includes/footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>public/js/script.js"></script>
</body>
</html>