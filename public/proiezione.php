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
                            La pace del Signore!
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

            <section class="comments-header">
                <div class="comments-header__container">
                    <p class="comments-header__sub">Alcuni <span>commenti</span></p>
                    <h2 class="comments-header__main">
                        <span>ESPRESSE</span>
                        <span>DAI LEADER</span>
                    </h2>
                </div>
            </section>


            <section class="leader-quote">
                <div class="leader-quote__container">
                    
                    <div class="leader-quote__icon-wrapper">
                        <img src="<?= BASE_URL ?>/public/assets/img/virgolette.svg" alt="Virgolette" class="leader-quote__icon">
                    </div>

                    <img src="<?= BASE_URL ?>/public/assets/img/leader.webp" alt="Jhon Pedrozo" class="leader-quote__image">

                    <div class="leader-quote__text-content">
                        <p class="leader-quote__text">
                            "Spesso, quando parliamo di proiezioni, pensiamo a un futuro possibile, a qualcosa
                            che potrebbe accadere. Ma Gesù Cristo, rivolgendosi ai suoi discepoli (Luca 9:1), ha
                            offerto loro una prospettiva diversa: un piano già definito per la salvezza
                            dell'umanità. Egli ha conferito loro il potere di scacciare i demoni, guarire le malattie
                            e predicare il regno di Dio. Questo piano non solo era già stato concepito, ma era
                            anche in fase di attuazione. Toccava ai discepoli, e ora tocca a noi, portare a termine
                            l'opera iniziata da Gesù. A Torino, Alessandria e altri luoghi, la gloria di Dio si è
                            manifestata. Questo ci ricordano il potere del piano di salvezza di Dio e la nostra
                            responsabilità di condividerlo.”
                        </p>
                    </div>

                    <div class="leader-quote__author">
                        <h3 class="leader-quote__name">JHON PEDROZO</h3>
                        <p class="leader-quote__role">Leader dell'evangelizzazione di Milano</p>
                    </div>

                </div>
            </section>

            <section class="works-header">
                <div class="works-header__container">
                    <h2 class="works-header__main">
                        <span>LE OPERE</span>
                        <span>IN PROIEZIONE</span>
                    </h2>
                    <p class="works-header__text">
                        Non esitare a contattarci per qualsiasi domanda o necessità. <br> 
                        Siamo sempre felici di accoglierti e di pregare per te.
                    </p>        
                </div>
            </section>

            <section class="city-work">
                <div class="city-work__container">
                    
                     <h3 class="city-work__title">Alessandria</h3>

                    <div class="city-work__social-list">
                        <a href="https://www.facebook.com/cpueitalia" target="_blank" class="city-work__social-item" title="Contattaci su Facebook">
                            <img src="<?= BASE_URL ?>public/assets/icons/facebook.svg" alt="Facebook" class="city-work__social-icon">
                        </a>

                        <a href="https://www.instagram.com/cpue_italia" target="_blank" class="city-work__social-item" title="Contattaci su Instagram">
                            <img src="<?= BASE_URL ?>public/assets/icons/instagram.svg" alt="Instagram" class="city-work__social-icon">
                        </a>
                        
                        <a href="https://wa.me/393494637023" target="_blank" class="city-work__social-item" title="Contattaci su WhatsApp">
                            <svg viewBox="0 0 448 512" class="city-work__social-icon city-work__svg">
                                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.1 0-65.6-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.5-11.3 2.5-2.5 5.6-6.5 8.3-9.7 2.8-3.3 3.7-5.6 5.6-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg>
                        </a>

                        <a href="tel:+393494637023" class="city-work__social-item" title="Chiama ora">
                            <img src="<?= BASE_URL ?>/public/assets/icons/phone.svg" alt="Telefono" class="city-work__social-icon">
                        </a>
                    </div>

                    <div class="city-work__image-wrapper">
                        <img src="<?= BASE_URL ?>/public/assets/img/alessandria.webp" alt="Alessandria" class="city-work__main-image">
                        <span class="city-work__image-text">Alessandria</span>
                    </div>

                </div>
            </section>



            <section class="cities-row">

                <div class="city-work city-work--napoli">
                    <div class="city-work__container city-work__container--card">
                        
                        <h3 class="city-work__title">Napoli</h3>
                        
                        <div class="city-work__social-list">
                            <a href="https://www.facebook.com/cpueitalia" target="_blank" class="city-work__social-item">
                                <img src="<?= BASE_URL ?>public/assets/icons/facebook.svg" class="city-work__social-icon">
                            </a>
                            <a href="https://www.instagram.com/cpue_italia" target="_blank" class="city-work__social-item">
                                <img src="<?= BASE_URL ?>public/assets/icons/instagram.svg" class="city-work__social-icon">
                            </a>
                            <a href="https://wa.me/393494637023" target="_blank" class="city-work__social-item">
                                <svg viewBox="0 0 448 512" class="city-work__social-icon city-work__svg">
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.1 0-65.6-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.5-11.3 2.5-2.5 5.6-6.5 8.3-9.7 2.8-3.3 3.7-5.6 5.6-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </a>
                            <a href="tel:+393494637023" class="city-work__social-item">
                                <img src="<?= BASE_URL ?>/public/assets/icons/phone.svg" alt="Telefono" class="city-work__social-icon">
                            </a>
                        </div>

                        <div class="city-work__image-wrapper city-work__image-wrapper--card">
                            <img src="<?= BASE_URL ?>/public/assets/img/napoli.webp" alt="Napoli" class="city-work__main-image city-work__main-image--card">
                            <span class="city-work__image-text">Napoli</span>
                        </div>
                    </div>
                </div>

                <div class="city-work city-work--conegliano">
                    <div class="city-work__container city-work__container--card">
                        
                        <h3 class="city-work__title">Conegliano</h3>
                        
                        <div class="city-work__social-list">
                            <a href="https://www.facebook.com/cpueitalia" target="_blank" class="city-work__social-item">
                                <img src="<?= BASE_URL ?>public/assets/icons/facebook.svg" class="city-work__social-icon">
                            </a>
                            <a href="https://www.instagram.com/cpue_italia" target="_blank" class="city-work__social-item">
                                <img src="<?= BASE_URL ?>public/assets/icons/instagram.svg" class="city-work__social-icon">
                            </a>
                            <a href="https://wa.me/393494637023" target="_blank" class="city-work__social-item">
                                <svg viewBox="0 0 448 512" class="city-work__social-icon city-work__svg">
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.1 0-65.6-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.5-11.3 2.5-2.5 5.6-6.5 8.3-9.7 2.8-3.3 3.7-5.6 5.6-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </a>
                            <a href="tel:+393494637023" class="city-work__social-item">
                                <img src="<?= BASE_URL ?>/public/assets/icons/phone.svg" alt="Telefono" class="city-work__social-icon">
                            </a>
                        </div>

                        <div class="city-work__image-wrapper city-work__image-wrapper--card">
                            <img src="<?= BASE_URL ?>/public/assets/img/conegliano.webp" alt="Conegliano" class="city-work__main-image city-work__main-image--card">
                            <span class="city-work__image-text">Conegliano</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cities-row">
                <div class="city-work city-work--roma-est">
                    <div class="city-work__container city-work__container--card">
                        
                        <h3 class="city-work__title">Roma Est</h3>
                        
                        <div class="city-work__social-list">
                            <a href="https://www.facebook.com/cpueitalia" target="_blank" class="city-work__social-item">
                                <img src="<?= BASE_URL ?>public/assets/icons/facebook.svg" class="city-work__social-icon">
                            </a>
                            <a href="https://www.instagram.com/cpue_italia" target="_blank" class="city-work__social-item">
                                <img src="<?= BASE_URL ?>public/assets/icons/instagram.svg" class="city-work__social-icon">
                            </a>
                            <a href="https://wa.me/393494637023" target="_blank" class="city-work__social-item">
                                <svg viewBox="0 0 448 512" class="city-work__social-icon city-work__svg">
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.1 0-65.6-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.5-11.3 2.5-2.5 5.6-6.5 8.3-9.7 2.8-3.3 3.7-5.6 5.6-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </a>
                            <a href="tel:+393494637023" class="city-work__social-item">
                                <img src="<?= BASE_URL ?>/public/assets/icons/phone.svg" alt="Telefono" class="city-work__social-icon">
                            </a>
                        </div>

                        <div class="city-work__image-wrapper city-work__image-wrapper--card">
                            <img src="<?= BASE_URL ?>/public/assets/img/roma-est.webp" alt="Roma Est" class="city-work__main-image city-work__main-image--card">
                            <span class="city-work__image-text">Roma Est</span>
                        </div>
                    </div>
                </div>

                <div class="city-work city-work--acquila">
                    <div class="city-work__container city-work__container--card">
                        <h3 class="city-work__title">L'Aquila</h3>
                        
                        <div class="city-work__social-list">
                            <a href="https://www.facebook.com/cpueitalia" target="_blank" class="city-work__social-item">
                                <img src="<?= BASE_URL ?>public/assets/icons/facebook.svg" class="city-work__social-icon">
                            </a>
                            <a href="https://www.instagram.com/cpue_italia" target="_blank" class="city-work__social-item">
                                <img src="<?= BASE_URL ?>public/assets/icons/instagram.svg" class="city-work__social-icon">
                            </a>
                            <a href="https://wa.me/393494637023" target="_blank" class="city-work__social-item">
                                <svg viewBox="0 0 448 512" class="city-work__social-icon city-work__svg">
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.1 0-65.6-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.5-11.3 2.5-2.5 5.6-6.5 8.3-9.7 2.8-3.3 3.7-5.6 5.6-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </a>
                            <a href="tel:+393494637023" class="city-work__social-item">
                                <img src="<?= BASE_URL ?>/public/assets/icons/phone.svg" alt="Telefono" class="city-work__social-icon">
                            </a>
                        </div>

                        <div class="city-work__image-wrapper city-work__image-wrapper--card">
                            <img src="<?= BASE_URL ?>/public/assets/img/acquila.webp" alt="L'Aquila" class="city-work__main-image city-work__main-image--card">
                            <span class="city-work__image-text">L'Aquila</span>
                        </div>
                    </div>
                </div>
            </section>

            <section class="city-work">
                <div class="city-work__container">
                    
                     <h3 class="city-work__title">Trieste</h3>

                    <div class="city-work__social-list">
                        <a href="https://www.facebook.com/cpueitalia" target="_blank" class="city-work__social-item" title="Contattaci su Facebook">
                            <img src="<?= BASE_URL ?>public/assets/icons/facebook.svg" alt="Facebook" class="city-work__social-icon">
                        </a>

                        <a href="https://www.instagram.com/cpue_italia" target="_blank" class="city-work__social-item" title="Contattaci su Instagram">
                            <img src="<?= BASE_URL ?>public/assets/icons/instagram.svg" alt="Instagram" class="city-work__social-icon">
                        </a>
                        
                        <a href="https://wa.me/393494637023" target="_blank" class="city-work__social-item" title="Contattaci su WhatsApp">
                            <svg viewBox="0 0 448 512" class="city-work__social-icon city-work__svg">
                                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.1 0-65.6-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.5-11.3 2.5-2.5 5.6-6.5 8.3-9.7 2.8-3.3 3.7-5.6 5.6-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg>
                        </a>

                        <a href="tel:+393494637023" class="city-work__social-item" title="Chiama ora">
                            <img src="<?= BASE_URL ?>/public/assets/icons/phone.svg" alt="Telefono" class="city-work__social-icon">
                        </a>
                    </div>
                    <div class="city-work__image-wrapper">
                        <img src="<?= BASE_URL ?>/public/assets/img/trieste.webp" alt="Trieste" class="city-work__main-image">
                        <span class="city-work__image-text">Trieste</span>
                    </div>
                </div>
            </section>
            
            
            <section class="info-request">
                <div class="info-request__container">
                    
                    <div class="info-request__card">
                        <div class="info-request__content-front">
                            <h3 class="info-request__title">
                                PER RICEVERE MAGGIORI INFORMAZIONI SULLA PROGRAMMAZIONE
                            </h3>
                        </div>
                        <div class="info-request__content-back">
                            <p class="info-request__text">
                                Contattandoci tramite uno dei metodi sopra elencati in ogni luogo.
                            </p>
                        </div>
                    </div>

                    <div class="info-request__card">
                        <div class="info-request__content-front">
                            <h3 class="info-request__title">
                                PER RICEVERE UN ACCOMPAGNAMENTO O UN CONSIGLIO SPIRITUALE
                            </h3>
                        </div>
                        <div class="info-request__content-back">
                            <p class="info-request__text">
                                Prendi un appuntamento con un membro del nostro staff. Puoi farlo contattandoci tramite uno dei metodi sopra elencati. Partecipa a un gruppo di studio biblico o a un altro evento della nostra comunità. Inviaci un messaggio o chiamaci per parlare con un membro del nostro staff. Siamo qui per ascoltarti e offrirti il nostro sostegno.
                            </p>
                        </div>
                    </div>

                    <div class="info-request__card">
                        <div class="info-request__content-front">
                            <h3 class="info-request__title">
                                PER RICEVERE UNA VISITA O UNA PREGHIERA
                            </h3>
                        </div>
                        <div class="info-request__content-back">
                            <p class="info-request__text">
                                Contattaci per richiedere una visita da parte di un membro del nostro staff. Vieni a trovarci durante i nostri orari di apertura. Siamo sempre felici di accoglierti e di pregare con te. Siamo qui per te. Non esitare a contattarci per qualsiasi domanda o necessità.
                            </p>
                        </div>
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