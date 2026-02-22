<?php
http_response_code(503);
header('Retry-After: 3600');

require_once '../app/config/config.php';

$head_title = $site_config['head']['503']['title'];
$meta_description = $site_config['head']['503']['meta-description'];
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <?php include ROOT_PATH . 'app/views/includes/head.php'; ?>
    
    <style>
        .maintenance-page * {
            box-sizing: border-box;
        }

        .maintenance-page body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .maintenance {
            width: 100%;
            flex: 1;
            background: linear-gradient(to bottom, #ffffff 0%, #ededed 100%);
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
            text-align: center;
        }

        .maintenance__container {
            width: 100%;
            max-width: 1200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .maintenance__img {
            width: 100%;
            max-width: 300px; 
            height: auto;
            display: block;
            margin-bottom: 10px;
        }

        .maintenance__title {
            font-size: 28px;
            font-weight: 700;
            color: #0B0E92;
            margin: 0;
            line-height: 1.2;
        }

        .maintenance__logo {
            width: 150px;
            height: auto;
            display: block;
            margin: 10px 0 20px 0;
        }

        .maintenance__text {
            font-size: 18px;
            color: #546373;
            max-width: 600px;
            line-height: 1.5;
            margin: 0;
        }

        .maintenance__social-bar {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
            width: 100%;
            max-width: 400px;
        }

        .maintenance__social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            flex: 0 0 calc(33.333% - 15px); 
        }

        .maintenance__social-link:hover {
            transform: scale(1.2);
        }

        .maintenance__social-icon {
            display: block;
            height: 40px;
            width: auto;
        }

        .maintenance__social-icon--wa {
            fill: #0B0E92;
        }

        .emergency-contacts {
            width: 100%;
            margin-top: 40px;
            border-top: 1px solid #e0e0e0;
            padding-top: 40px;
        }

        .emergency-contacts__title {
            font-size: 20px;
            font-weight: 600;
            color: #1d2548;
            margin-bottom: 30px;
            text-transform: uppercase;
        }

        .emergency-contacts__grid {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            width: 100%;
        }

        .contact-card {
            background-color: #ffffff;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: transform 0.2s ease;
            border: 1px solid #f0f0f0;
        }

        .contact-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-color: #0B0E92;
        }

        .contact-card__info {
            display: flex;
            align-items: center;
            gap: 15px;
            text-align: left;
        }

        .contact-card__icon {
            width: 30px;
            height: 30px;
            flex-shrink: 0;
        }

        .contact-card__details {
            display: flex;
            flex-direction: column;
        }

        .contact-card__city {
            font-size: 18px;
            font-weight: 600;
            color: #002347;
            margin: 0;
            font-family: serif;
        }

        .contact-card__role {
            font-size: 10px;
            font-weight: 700;
            color: #c09a5b;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin: 2px 0;
        }

        .contact-card__name {
            font-size: 14px;
            color: #546373;
            margin: 0;
        }

        .contact-card__action {
            margin-left: 10px;
        }

        .contact-card__phone-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #f0f7ff;
            border-radius: 50%;
            transition: background 0.3s;
            text-decoration: none;
        }

        .contact-card__phone-btn:hover {
            background-color: #0B0E92;
        }
        
        .contact-card__phone-icon {
            width: 20px;
            height: 20px;
            fill: #0B0E92;
            transition: fill 0.3s;
        }

        .contact-card__phone-btn:hover .contact-card__phone-icon {
            fill: #ffffff;
        }

        .maintenance-footer {
            width: 100%;
            background: linear-gradient(to bottom, #ededed 0%, #ffffff 100%);
            padding: 30px 20px;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            text-align: center;
            color: #666;
            font-size: 0.85rem;
            line-height: 1.6;
        }

        .maintenance-footer__credits {
            margin-top: 10px;
        }

        .maintenance-footer__credits a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
        }

        .maintenance-footer__credits a:hover {
            color: #0B0E92;
        }

        
        /* Tablet (769px +) */
        @media (min-width: 769px) {
            .maintenance__title {
                font-size: 40px;
            }

            .maintenance__text {
                font-size: 20px;
            }

            .emergency-contacts__grid {
                justify-content: flex-start;
            }

            .contact-card {
                width: calc(50% - 10px); 
            }

            .maintenance__social-bar {
                max-width: none;
                gap: 30px;
            }

            .maintenance__social-link {
                flex: 0 0 auto; 
            }
        }

        /* Desktop (1024px +) */
        @media (min-width: 1024px) {
            .maintenance {
                padding-top: 60px;
            }

            .maintenance__container {
                gap: 30px;
            }

            .maintenance__img {
                max-width: 400px;
            }

            .maintenance__logo {
                width: 200px;
            }

            .contact-card {
                width: calc(33.333% - 14px); 
            }
        }
    </style>
</head>

<body class="maintenance-page">
    
    <main class="maintenance">
        
        <div class="maintenance__container">            
            <img src="<?= BASE_URL ?>public/assets/img/503.svg" class="maintenance__img" alt="Servizio Manutenzione">

            <h1 class="maintenance__title">Stiamo aggiornando la nostra casa</h1>
            
            <img src="<?= BASE_URL ?>public/assets/img/logo-main.webp" class="maintenance__logo" alt="Logo CPUE">

            <p class="maintenance__text">
                Il sito è momentaneamente offline per una manutenzione programmata. 
                Stiamo lavorando per migliorare la tua esperienza. Torneremo online a breve.
            </p>
            
            <p class="maintenance__text" style="font-size: 14px; margin-top: -10px;">
                Ci scusiamo per il disagio.
            </p>

            <div class="maintenance__social-bar">
                <a href="https://www.youtube.com/@CpueItalia" target="_blank" class="maintenance__social-link" title="YouTube">
                    <img src="<?= BASE_URL ?>public/assets/icons/youtube.svg" alt="YouTube" class="maintenance__social-icon">
                </a>
                <a href="https://www.facebook.com/cpueitalia" target="_blank" class="maintenance__social-link" title="Facebook">
                    <img src="<?= BASE_URL ?>public/assets/icons/facebook.svg" alt="Facebook" class="maintenance__social-icon">
                </a>
                <a href="https://www.instagram.com/cpue_italia" target="_blank" class="maintenance__social-link" title="Instagram">
                    <img src="<?= BASE_URL ?>public/assets/icons/instagram.svg" alt="Instagram" class="maintenance__social-icon">
                </a>
                <a href="https://wa.me/393494637023" target="_blank" class="maintenance__social-link" title="WhatsApp">
                    <svg viewBox="0 0 448 512" class="maintenance__social-icon maintenance__social-icon--wa">
                        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.1 0-65.6-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.5-11.3 2.5-2.5 5.6-6.5 8.3-9.7 2.8-3.3 3.7-5.6 5.6-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                    </svg>
                </a>
                <a href="https://maps.google.com/?cid=7403801825769057566&g_mp=CiVnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLkdldFBsYWNl" target="_blank" class="maintenance__social-link" title="Visualizza la Sede Legale su Google Maps">
                    <img src="<?= BASE_URL ?>public/assets/icons/map-icon.svg" alt="Mappa" class="maintenance__social-icon">
                </a>
            </div>
            <div class="emergency-contacts">
                <h2 class="emergency-contacts__title">Contatti Pastorali</h2>
                
                <div class="emergency-contacts__grid">
                    
                    <div class="contact-card">
                        <div class="contact-card__info">
                            <img src="<?= BASE_URL ?>public/assets/img/location-icon.svg" class="contact-card__icon" alt="Pin">
                            <div class="contact-card__details">
                                <h3 class="contact-card__city">Trento</h3>
                                <p class="contact-card__role">PASTORE</p>
                                <p class="contact-card__name">Robin Rodríguez</p>
                            </div>
                        </div>
                        <div class="contact-card__action">
                            <a href="tel:+393881721404" class="contact-card__phone-btn" title="Chiama">
                                <svg viewBox="0 0 24 24" class="contact-card__phone-icon">
                                    <path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.05 15.05 0 01-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1.01A11.36 11.36 0 018.59 3.99c0-.55-.45-1-1-1H4.39c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.61c0-.55-.45-1-1-1z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__info">
                            <img src="<?= BASE_URL ?>public/assets/img/location-icon.svg" class="contact-card__icon" alt="Pin">
                            <div class="contact-card__details">
                                <h3 class="contact-card__city">Val Rendena</h3>
                                <p class="contact-card__role">PASTORE</p>
                                <p class="contact-card__name">Viucci Brosolo</p>
                            </div>
                        </div>
                        <div class="contact-card__action">
                            <a href="tel:+393407100713" class="contact-card__phone-btn">
                                <svg viewBox="0 0 24 24" class="contact-card__phone-icon"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.05 15.05 0 01-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1.01A11.36 11.36 0 018.59 3.99c0-.55-.45-1-1-1H4.39c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.61c0-.55-.45-1-1-1z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__info">
                            <img src="<?= BASE_URL ?>public/assets/img/location-icon.svg" class="contact-card__icon" alt="Pin">
                            <div class="contact-card__details">
                                <h3 class="contact-card__city">Milano</h3>
                                <p class="contact-card__role">MISSIONARIO</p>
                                <p class="contact-card__name">Jair Pedrozo</p>
                            </div>
                        </div>
                        <div class="contact-card__action">
                            <a href="tel:+393494637023" class="contact-card__phone-btn">
                                <svg viewBox="0 0 24 24" class="contact-card__phone-icon"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.05 15.05 0 01-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1.01A11.36 11.36 0 018.59 3.99c0-.55-.45-1-1-1H4.39c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.61c0-.55-.45-1-1-1z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__info">
                            <img src="<?= BASE_URL ?>public/assets/img/location-icon.svg" class="contact-card__icon" alt="Pin">
                            <div class="contact-card__details">
                                <h3 class="contact-card__city">Torino</h3>
                                <p class="contact-card__role">PASTORE</p>
                                <p class="contact-card__name">Leonardo Vielma</p>
                            </div>
                        </div>
                        <div class="contact-card__action">
                            <a href="tel:+393519115064" class="contact-card__phone-btn">
                                <svg viewBox="0 0 24 24" class="contact-card__phone-icon"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.05 15.05 0 01-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1.01A11.36 11.36 0 018.59 3.99c0-.55-.45-1-1-1H4.39c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.61c0-.55-.45-1-1-1z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__info">
                            <img src="<?= BASE_URL ?>public/assets/img/location-icon.svg" class="contact-card__icon" alt="Pin">
                            <div class="contact-card__details">
                                <h3 class="contact-card__city">Pordenone</h3>
                                <p class="contact-card__role">PASTORE</p>
                                <p class="contact-card__name">Victor Bustamante</p>
                            </div>
                        </div>
                        <div class="contact-card__action">
                            <a href="tel:+393888946569" class="contact-card__phone-btn">
                                <svg viewBox="0 0 24 24" class="contact-card__phone-icon"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.05 15.05 0 01-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1.01A11.36 11.36 0 018.59 3.99c0-.55-.45-1-1-1H4.39c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.61c0-.55-.45-1-1-1z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__info">
                            <img src="<?= BASE_URL ?>public/assets/img/location-icon.svg" class="contact-card__icon" alt="Pin">
                            <div class="contact-card__details">
                                <h3 class="contact-card__city">Firenze</h3>
                                <p class="contact-card__role">PASTORE</p>
                                <p class="contact-card__name">Santiago Giraldo</p>
                            </div>
                        </div>
                        <div class="contact-card__action">
                            <a href="tel:+393382298345" class="contact-card__phone-btn">
                                <svg viewBox="0 0 24 24" class="contact-card__phone-icon"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.05 15.05 0 01-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1.01A11.36 11.36 0 018.59 3.99c0-.55-.45-1-1-1H4.39c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.61c0-.55-.45-1-1-1z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__info">
                            <img src="<?= BASE_URL ?>public/assets/img/location-icon.svg" class="contact-card__icon" alt="Pin">
                            <div class="contact-card__details">
                                <h3 class="contact-card__city">Reggio Emilia</h3>
                                <p class="contact-card__role">PASTORE</p>
                                <p class="contact-card__name">Hikler Garcia</p>
                            </div>
                        </div>
                        <div class="contact-card__action">
                            <a href="tel:+393883426513" class="contact-card__phone-btn">
                                <svg viewBox="0 0 24 24" class="contact-card__phone-icon"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.05 15.05 0 01-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1.01A11.36 11.36 0 018.59 3.99c0-.55-.45-1-1-1H4.39c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.61c0-.55-.45-1-1-1z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__info">
                            <img src="<?= BASE_URL ?>public/assets/img/location-icon.svg" class="contact-card__icon" alt="Pin">
                            <div class="contact-card__details">
                                <h3 class="contact-card__city">Porto Sant'Elpidio</h3>
                                <p class="contact-card__role">PASTORE</p>
                                <p class="contact-card__name">Wilfredo Daza</p>
                            </div>
                        </div>
                        <div class="contact-card__action">
                            <a href="tel:+393517352681" class="contact-card__phone-btn">
                                <svg viewBox="0 0 24 24" class="contact-card__phone-icon"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.05 15.05 0 01-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1.01A11.36 11.36 0 018.59 3.99c0-.55-.45-1-1-1H4.39c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.61c0-.55-.45-1-1-1z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__info">
                            <img src="<?= BASE_URL ?>public/assets/img/location-icon.svg" class="contact-card__icon" alt="Pin">
                            <div class="contact-card__details">
                                <h3 class="contact-card__city">Roma</h3>
                                <p class="contact-card__role">PASTORE</p>
                                <p class="contact-card__name">Manuel Lopez</p>
                            </div>
                        </div>
                        <div class="contact-card__action">
                            <a href="tel:+393932724244" class="contact-card__phone-btn">
                                <svg viewBox="0 0 24 24" class="contact-card__phone-icon"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.05 15.05 0 01-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1.01A11.36 11.36 0 018.59 3.99c0-.55-.45-1-1-1H4.39c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.61c0-.55-.45-1-1-1z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__info">
                            <img src="<?= BASE_URL ?>public/assets/img/location-icon.svg" class="contact-card__icon" alt="Pin">
                            <div class="contact-card__details">
                                <h3 class="contact-card__city">Ostia</h3>
                                <p class="contact-card__role">PASTORE</p>
                                <p class="contact-card__name">Omar Correo</p>
                            </div>
                        </div>
                        <div class="contact-card__action">
                            <a href="tel:+393345850369" class="contact-card__phone-btn">
                                <svg viewBox="0 0 24 24" class="contact-card__phone-icon"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.05 15.05 0 01-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1.01A11.36 11.36 0 018.59 3.99c0-.55-.45-1-1-1H4.39c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.61c0-.55-.45-1-1-1z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__info">
                            <img src="<?= BASE_URL ?>public/assets/img/location-icon.svg" class="contact-card__icon" alt="Pin">
                            <div class="contact-card__details">
                                <h3 class="contact-card__city">Catania</h3>
                                <p class="contact-card__role">PASTORE</p>
                                <p class="contact-card__name">Nuccio Arcidiacono</p>
                            </div>
                        </div>
                        <div class="contact-card__action">
                            <a href="tel:+393407284369" class="contact-card__phone-btn">
                                <svg viewBox="0 0 24 24" class="contact-card__phone-icon"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.05 15.05 0 01-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1.01A11.36 11.36 0 018.59 3.99c0-.55-.45-1-1-1H4.39c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.61c0-.55-.45-1-1-1z"/></svg>
                            </a>
                        </div>
                    </div>

                    <div class="contact-card">
                        <div class="contact-card__info">
                            <img src="<?= BASE_URL ?>public/assets/img/location-icon.svg" class="contact-card__icon" alt="Pin">
                            <div class="contact-card__details">
                                <h3 class="contact-card__city">Palermo</h3>
                                <p class="contact-card__role">PASTORE</p>
                                <p class="contact-card__name">Andres Zúñiga</p>
                            </div>
                        </div>
                        <div class="contact-card__action">
                            <a href="tel:+393208343428" class="contact-card__phone-btn">
                                <svg viewBox="0 0 24 24" class="contact-card__phone-icon"><path d="M20.01 15.38c-1.23 0-2.42-.2-3.53-.56a.977.977 0 00-1.01.24l-2.2 2.2a15.05 15.05 0 01-6.59-6.59l2.2-2.21c.28-.26.36-.65.25-1.01A11.36 11.36 0 018.59 3.99c0-.55-.45-1-1-1H4.39c-.55 0-1 .45-1 1 0 9.39 7.61 17 17 17 .55 0 1-.45 1-1v-3.61c0-.55-.45-1-1-1z"/></svg>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>

    </main>

    <footer class="maintenance-footer">
        <div class="maintenance-footer__content">
            <p class="maintenance-footer__copyright">© 2024 Associazione Chiesa Pentecostale Unita in Europa. Tutti i diritti riservati.</p>
            <p class="maintenance-footer__credits">
                Sviluppato da: <strong><a href="https://github.com/rotgergabriel/cpue-website" target="_blank" rel="noopener noreferrer">Gabriel Augusto Rotger</a></strong> & <strong><a href="https://github.com/jonhtorresgarcia/cpue-website" target="_blank" rel="noopener noreferrer">Jonh Torres Garcia</a></strong><br>
                Basato sul design originale di: <strong>Andrea Perez Sanchez</strong> (Graphic Designer)
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>public/js/script.js"></script>
</body>

</html>