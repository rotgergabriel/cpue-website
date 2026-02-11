<?php

require_once '../app/config/config.php';

$title = "Opere in Proiezione - CPUE";
$meta_description = "Visione e missione delle opere in proiezione della Chiesa Pentecostale Unita in Europa.";
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
        <main>
            <section class="projection-hero">
                <div class="projection-hero__container">
                    <h1 class="projection-hero__title projection-hero__title--light">
                        VEDENDO LE FOLLE, NE EBBE
                    </h1>
                    <h2 class="projection-hero__title projection-hero__title--bold">
                        COMPASSIONE
                    </h2>
                    <p class="projection-hero__quote">
                        "Pregate dunque il padrone della messe che mandi operai nella sua messe!"
                    </p>
                    <p class="projection-hero__verse">
                        Matteo 9:38
                    </p>
                    <a href="#scopri-di-piu" class="projection-hero__button">
                        SCOPRI LE OPERE
                    </a>
                </div>
            </section>
            <section class="italy-overview" id="scopri-di-piu">
                <div class="italy-overview__container">
                    <div class="italy-overview__text-col">
                        <h2 class="italy-overview__title">ITALIA</h2>
                        <p class="italy-overview__description">
                            L’Italia, con i suoi circa 60 milioni di abitanti distribuiti in 20 regioni, offre un panorama ampio per l’opera missionaria. Per comprendere al meglio le opportunità e le sfide che questo contesto presenta, è importante considerare alcuni aspetti chiave: È davvero incoraggiante sapere che la Chiesa Pentecostale Unita in Europa (CPUE) è già presente in 9 delle 20 regioni italiane, con un pastore.
                        </p>
                    </div>
                    <div class="italy-overview__img-col">
                        <img src="<?= BASE_URL ?>/public/assets/img/mappa-proiezione.webp" alt="Mappa Proiezione Italia" class="italy-overview__map">
                    </div>
                </div>
            </section>
            <section class="projection-details">
                <div class="projection-details__container">
                    <p class="projection-details__text">
                        Tuttavia, come sottolineato, c’è ancora molto da fare per raggiungere ogni regione e città con la luce del Vangelo. La presenza di 6 gruppi formati da fratelli e amici che si riuniscono per pregare per un pastore è un segno tangibile della fame di Dio presente in queste zone.
                    </p>
                    <p class="projection-details__text">
                        Come affermato da Gesù stesso, «la messe è molta, ma gli operai sono pochi» (Matteo 9:37). La CPUE si trova di fronte a un’opportunità straordinaria di raccogliere un abbondante raccolto di anime, ma necessita di un maggior numero di pastori dedicati per soddisfare questa domanda crescente.
                    </p>
                    <p class="projection-details__text">
                        In questo momento di grande bisogno, è importante che tutti coloro che sentono la chiamata di Dio si uniscano per sostenere l’opera missionaria in Italia. c’è ancora molto da fare per raggiungere ogni regione e città con la luce salvifica del Vangelo.
                    </p>
                </div>
            </section>
            <section class="contribution-header">
                <div class="contribution-header__container">
                    <p class="contribution-header__one">
                        <span>Ec</span>
                    </p>
                    <p class="contribution-header__two">
                        <span>co!</span>
                    </p>
                    <h2 class="contribution-header__main">
                        <span>ALCUNI MODI IN CUI</span>
                        <span>PUOI CONTRIBUIRE</span>
                    </h2>
                </div>
            </section>
            <section class="contribution-cards">
                <div class="contribution-cards__container">
                    <div class="contribution-card">
                        <img src="<?= BASE_URL ?>/public/assets/img/prega.svg" alt="Prega" class="contribution-card__icon">
                        <h3 class="contribution-card__title">PREGA</h3>
                        <p class="contribution-card__text">
                            La preghiera è fondamentale per sostenere il lavoro dei missionari e aprire i cuori al messaggio del Vangelo. Dedica del tempo ogni giorno a pregare per la Chiesa e per le regioni ancora prive di un pastore.
                        </p>
                    </div>
                    <div class="contribution-card">
                        <img src="<?= BASE_URL ?>/public/assets/img/evangelizzare.svg" alt="Evangelizzare" class="contribution-card__icon">
                        <h3 class="contribution-card__title">EVANGELIZZA</h3>
                        <p class="contribution-card__text">
                            Invitare i fratelli e le sorelle a partecipare attivamente all'opera di evangelizzazione. Ognuno di noi ha il dono e la responsabilità di condividere la propria fede con gli altri, testimoniando l'amore e la grazia di Dio.
                        </p>
                    </div>
                    <div class="contribution-card">
                        <img src="<?= BASE_URL ?>/public/assets/img/dona.svg" alt="Dona" class="contribution-card__icon">
                        <h3 class="contribution-card__title">DONA</h3>
                        <p class="contribution-card__text">
                            Le donazioni finanziarie sono essenziali per sostenere il lavoro missionario della Chiesa. Ogni contributo, grande o piccolo, può fare la differenza nel portare il messaggio del Vangelo a più persone.
                        </p>
                    </div>
                </div>
            </section>
            <section class="missionary">
                <div class="missionary__container">
                    <div class="missionary__image-col">
                        <img src="<?= BASE_URL ?>/public/assets/img/misionario.webp" alt="Missionario Jair Pedrozo" class="missionary__img">
                    </div>
                    <div class="missionary__text-col">
                        <p class="missionary__greeting">
                            Dio ti benedica!
                        </p>
                        <h2 class="missionary__name">
                            SONO JAIR PEDROZO
                        </h2>
                        <p class="missionary__role">
                            Missionario in Italia
                        </p>
                        <p class="missionary__description">
                            E ti invito affinché insieme, possiamo contribuire a diffondere la luce del Vangelo in ogni angolo d’Italia e a condurre molte anime a Cristo. Ricordiamo le parole di Gesù:
                            <span class="missionary__highlight">«Andate in tutto il mondo e predicate il vangelo a ogni creatura»</span>
                            (Marco 16:15).
                        </p>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <footer class="footer">
        <?php include ROOT_PATH . 'app/views/includes/footer.php'; ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>public/js/script.js"></script>
</body>

</html>