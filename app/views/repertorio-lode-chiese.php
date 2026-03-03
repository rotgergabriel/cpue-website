<?php
require_once '../app/config/config.php';

$head_title = $site_config['head']['repertorio']['title'] ?? 'Repertorio Lode - Chiese';
$meta_description = $site_config['head']['repertorio']['meta-description'] ?? 'Repertorio ufficiale dei canti di lode per le Chiese.';
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <?php include ROOT_PATH . 'app/views/includes/head.php'; ?>
</head>

<body>

        <main class="repertorio-page">
            
            <h1 class="repertorio__title">Repertorio - Chiesa Locale</h1>

            <nav class="repertorio__nav">
                <ul class="repertorio__menu">
                    <li class="repertorio__link"><a href="<?php echo BASE_URL ?>" class="repertorio__link">Home CPUE</a></li>
                    <li><a href="#" class="repertorio__link">Eventi</a></li>
                    <li><a href="#" class="repertorio__link">Categorie</a></li>
                </ul>
            </nav>

            <div class="repertorio__content">
                <section class="repertorio-panels">
                    
                    <div class="repertorio-panels__col">
                        <div class="repertorio-panels__inner">
                            <h2 class="repertorio-panels__title">Canzoni</h2>
                            
                            <div class="repertorio-panels__actions">
                                <button class="repertorio-panels__action" data-tooltip="Nuovo brano">
                                    <img src="<?php echo BASE_URL; ?>public/assets/img/file-new.svg" alt="Nuovo" class="repertorio-panels__icon">
                                </button>
                                <button class="repertorio-panels__action" data-tooltip="Editare il brano selezionato">
                                    <img src="<?php echo BASE_URL; ?>public/assets/img/file-edit.svg" alt="Modifica" class="repertorio-panels__icon">
                                </button>
                                <button class="repertorio-panels__action" data-tooltip="Eliminare il brano selezionato">
                                    <img src="<?php echo BASE_URL; ?>public/assets/img/file-delete.svg" alt="Elimina" class="repertorio-panels__icon">
                                </button>
                            </div>

                            <div class="repertorio-panels__search-box">
                                <input type="text" class="repertorio-panels__search-input" placeholder="barra di ricerca">
                            </div>


                            <p class="repertorio-panels__category-label">Selezionare per categoria:</p>

                            <div class="repertorio-panels__categories">
                                <button class="repertorio-panels__action" data-tooltip="Ordine Alfabetico">
                                    <img src="<?php echo BASE_URL; ?>public/assets/img/categoria-alfabeto.svg" alt="Alfabeto" class="repertorio-panels__icon">
                                </button>
                                <button class="repertorio-panels__action" data-tooltip="Ordine Tonalità">
                                    <img src="<?php echo BASE_URL; ?>public/assets/img/categoria-music.svg" alt="Tonalità" class="repertorio-panels__icon">
                                </button>
                                <button class="repertorio-panels__action" data-tooltip="Tempo - Ritmo">
                                    <img src="<?php echo BASE_URL; ?>public/assets/img/categoria-ritmo.svg" alt="Ritmo" class="repertorio-panels__icon">
                                </button>
                                <button class="repertorio-panels__action" data-tooltip="Italiano - Spagnolo">
                                    <img src="<?php echo BASE_URL; ?>public/assets/img/categoria-lingue.svg" alt="Lingue" class="repertorio-panels__icon">
                                </button>
                            </div>

                            <div class="repertorio-panels__list-container">
                                <ul class="repertorio-panels__list">
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Ai piedi della croce io starò</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Davanti alla tua presenza</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Io vedrò la tua gloria</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">El Señor está en este lugar</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">La única razón de mi adoración</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Grande e forte è il nostro Dio</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Meraviglioso sei</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Gesù tu sei la presenza</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Quiero levantar mis manos</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Elias oraba en el monte carmelo</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Maestoso vittorioso</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">C'è librertà nella casa di Dio</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Adoremos al rey</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">La tua grazia</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Profumo ai tuoi piedi</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">La sunamita</span>
                                        <button class="repertorio-panels__add-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                                        </button>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>

                    <div class="repertorio-panels__col">
                        <div class="repertorio-panels__inner">
                            <h2 class="repertorio-panels__title">Anteprima</h2>
                            <p class="repertorio-panels__preview-text">Questo spazio viene utilizzato per proiettare soltanto qui la canzone che ho cliccato nel container dell'elenco delle canzoni. In questo modo la persona vede subito il contenuto della canzone che vuole inserire nell'evento.</p>
                        </div>
                    </div>

                    <div class="repertorio-panels__col">
                        <div class="repertorio-panels__inner">

                            <button class="repertorio-panels__save-btn" data-tooltip="Salva Evento">
                                <img src="<?php echo BASE_URL; ?>public/assets/img/evento-salva.svg" alt="Salva" class="repertorio-panels__save-icon">
                            </button>

                            <h2 class="repertorio-panels__title" id="evento">Evento</h2>

                            <div class="repertorio-floating-nav">
                                <a href="#" class="repertorio-floating-nav__btn" aria-label="Torna su">
                                    <img src="<?php echo BASE_URL; ?>public/assets/img/freccia-su.svg" alt="Su" class="repertorio-floating-nav__icon">
                                </a>
                                <a href="#evento" class="repertorio-floating-nav__btn" aria-label="Vai a Evento">
                                    <img src="<?php echo BASE_URL; ?>public/assets/img/freccia-giu.svg" alt="Giù" class="repertorio-floating-nav__icon">
                                </a>
                            </div>

                            <p class="repertorio-panels__stage-btn-description">Le fasi dell'Evento</p>

                            <div class="repertorio-panels__event-stages">
                                <button class="repertorio-panels__stage-btn" data-tooltip="Canzoni dall'inizio">Inizio</button>
                                <button class="repertorio-panels__stage-btn" data-tooltip="Canzoni intermedie">Intermedio</button>
                                <button class="repertorio-panels__stage-btn" data-tooltip="Canzoni dalla fine">Fine</button>
                            </div>

                            <div class="repertorio-panels__list-container">
                                <ul class="repertorio-panels__list">
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Ai piedi della croce io starò</span>
                                        <button class="repertorio-panels__remove-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-cancella.svg" class="repertorio-panels__remove-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Davanti alla tua presenza</span>
                                        <button class="repertorio-panels__remove-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-cancella.svg" class="repertorio-panels__remove-icon">
                                        </button>
                                    </li>
                                    <li class="repertorio-panels__list-item">
                                        <span class="repertorio-panels__list-title">Io vedrò la tua gloria</span>
                                        <button class="repertorio-panels__remove-btn">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-cancella.svg" class="repertorio-panels__remove-icon">
                                        </button>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </section>
            </div>

        </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL ?>public/js/script.js"></script>
</body>

</html>