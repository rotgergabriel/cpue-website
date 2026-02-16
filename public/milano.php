<?php
require_once '../app/config/config.php';

$title = "Milano - Chiesa Pentecostale Unita in Europa";
$meta_description = "Sede di Milano della Chiesa Pentecostale Unita in Europa.";
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
            <section class="milano">
                
                <div class="milano__banner">
                    <a href="https://www.google.com/maps/search/?api=1&query=Via+delle+Camelie,+19,+20095+Cusano+Milanino+MI" target="_blank" class="milano__button">
                        <span class="milano__text">Milano</span>
                    </a>
                </div>

                <div class="milano__social-bar">
                    
                    <a href="https://www.youtube.com/@CpueItalia" target="_blank" class="milano__social-link" title="YouTube">
                        <img src="<?= BASE_URL ?>public/assets/icons/youtube.svg" alt="YouTube" class="milano__social-icon">
                    </a>

                    <a href="https://www.facebook.com/cpueitalia" target="_blank" class="milano__social-link" title="Facebook">
                        <img src="<?= BASE_URL ?>public/assets/icons/facebook.svg" alt="Facebook" class="milano__social-icon">
                    </a>

                    <a href="https://www.instagram.com/cpue_italia" target="_blank" class="milano__social-link" title="Instagram">
                        <img src="<?= BASE_URL ?>public/assets/icons/instagram.svg" alt="Instagram" class="milano__social-icon">
                    </a>

                    <a href="https://wa.me/393494637023" target="_blank" class="milano__social-link" title="WhatsApp">
                        <svg viewBox="0 0 448 512" class="milano__social-icon milano__social-icon--wa">
                            <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.1 0-65.6-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.5-11.3 2.5-2.5 5.6-6.5 8.3-9.7 2.8-3.3 3.7-5.6 5.6-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                        </svg>
                    </a>

                    <a href="https://maps.google.com/?q=INDIRIZZO+DELLA+SEDE" target="_blank" class="milano__social-link" title="Visualizza la Sede Legale su Google Maps">
                        <img src="<?= BASE_URL ?>public/assets/icons/map-icon.svg" alt="Mappa" class="milano__social-icon">
                    </a>

                </div>

                <div class="milano__info">
                    <p class="milano__info-row">
                        <span class="milano__info-label">Luogo di predicazione:</span>
                        <span class="milano__info-value">Via delle Camelie, 19, 20095 Cusano Milanino MI</span>
                    </p>
                    <p class="milano__info-row">
                        <span class="milano__info-label">Servizio di culto:</span>
                        <span class="milano__info-value">Presenziale Sabato 18:00 e Domenica 11:00</span>
                    </p>
                    <p class="milano__info-row">
                        <span class="milano__info-label">Pastore:</span>
                        <span class="milano__info-value">Jair Pedrozo Rinaldy</span>
                    </p>
                </div>

                <div class="milano__quote-container">

                <!-- DOPO SISTEMO QUESTE VIRGOLETTE, NON SONO STATO IN GRADO DI LASCIARNE A POSTO...
                    <div class="milano__quote-icon-wrapper">
                        <img src="<?= BASE_URL ?>public/assets/img/virgolette.svg" alt="Virgolette" class="milano__quote-icon">
                    </div>
                -->    
                    <p class="milano__quote-text">
                        Porte del Cielo aperte per te. Benvenuto!
                    </p>
                </div>


                <div class="milano__services">    
                    <div class="milano__services-header">
                        <h2 class="milano__services-title">Servizi</h2>
                        <p class="milano__services-subtitle">
                            Tutte le domeniche alle 10:30 Devozionale, e alle 11:00 Culto Scuola Domenicale.
                        </p>
                    </div>

                    <div class="milano__services-grid">
                        
                        <div class="milano__service-card">
                            <h3 class="milano__service-title">1 Servizio Giovanile</h3>
                            <p class="milano__service-text">
                                Il primo fine settimana di ogni mese abbiamo i servizi guidati dal comitato di giovani: sabato alle 18 e domenica alle 10:30 (Devozionale) e alle 11 (Culto di giovani).
                            </p>
                        </div>

                        <div class="milano__service-card">
                            <h3 class="milano__service-title">2 Servizio Missionario</h3>
                            <p class="milano__service-text">
                                La seconda domenica di ogni mese svolgiamo il culto missionario.
                            </p>
                        </div>

                        <div class="milano__service-card">
                            <h3 class="milano__service-title">3 Servizio Donne di Grazia</h3>
                            <p class="milano__service-text">
                                La terza domenica del mese il culto è guidato dalle donne.
                            </p>
                        </div>

                        <div class="milano__service-card">
                            <h3 class="milano__service-title">4 Domenica</h3>
                            <p class="milano__service-text">
                                La quarta domenica di ogni mese il Servizio domenicale è guidato dal comitato locale e si svolge un digiuno locale.
                            </p>
                        </div>

                        <div class="milano__service-card">
                            <h3 class="milano__service-title">5 Domenica</h3>
                            <p class="milano__service-text">
                                Nei casi in cui ci sia una quinta domenica, si svolge un culto speciale guidato dalla lode dove ogni famiglia porta il suo speciale a Dio.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="milano__pastor">
                    <div class="milano__pastor-container">
                        
                        <div class="milano__pastor-img-box">
                            <img src="<?= BASE_URL ?>public/assets/img/milan-family.webp" alt="Famiglia Pastorale" class="milano__pastor-img">
                        </div>

                        <div class="milano__pastor-content">
                            
                            <p class="milano__pastor-desc">
                                Se stai cercando un posto dove sentirti al sicuro e in armonia, la nostra congregazione CPUE Milano è la chiesa che predica la parola di Dio per portare un messaggio di salvezza a tutte le persone, e dove la Sua presenza si fa sentire.
                            </p>
                            
                            <p class="milano__pastor-desc">
                                Qua si sente pace, amore e unità. Siamo una famiglia in Cristo con un desiderio di servire e che Milano conosca l’amore e la pace che solo Dio può dare.
                            </p>

                            <h3 class="milano__pastor-name">JAIR PEDROZO</h3>
                            <p class="milano__pastor-role">Pastore</p>

                            <a href="tel:+393494637023" class="milano__phone-link" title="Chiama ora">
                                <img src="<?= BASE_URL ?>public/assets/icons/phone.svg" alt="Telefono" class="milano__phone-icon">
                                <span class="milano__phone-number">+39 349 463 7023</span>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="milano__city">
                    <div class="milano__city-container">
                        
                        <div class="milano__city-img-box">
                            <img src="<?= BASE_URL ?>public/assets/img/milan-map.webp" alt="Mappa Milano" class="milano__city-img">
                        </div>

                        <div class="milano__city-content">
                            
                            <h3 class="milano__city-title">Milano</h3>

                            <p class="milano__city-desc">
                                È un comune italiano di 1.367.788 abitanti, è il capoluogo della regione Lombardia e dell’omonima città metropolitana, centro di una delle più popolose aree metropolitane d’Europa; è inoltre il secondo comune più popoloso d’Italia, dopo Roma.
                            </p>
                            
                            <p class="milano__city-desc">
                                Principale centro economico e finanziario della Repubblica Italiana, Milano ne guidò lo sviluppo industriale, costituendo con Torino e Genova il cosiddetto Triangolo industriale, in particolar modo durante gli anni del boom economico, quando la crescita industriale e urbanistica coinvolse anche le città limitrofe, creando la vasta area metropolitana milanese. In ambito culturale, Milano è il principale centro italiano dell’editoria ed è ai vertici del circuito musicale mondiale grazie alla stagione lirica del Teatro alla Scala e alla sua lunga tradizione operistica.
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