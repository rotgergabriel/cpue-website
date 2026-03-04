<?php
require_once '../app/config/config.php';
require_once '../app/middlewares/auth.php';

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
            <a href="<?php echo BASE_URL; ?>app/controllers/logout.php" class="repertorio__link--logout">
                Logout
            </a>
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

                        <p class="repertorio-panels__add-hint">Aggiungi all'Evento</p>

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
                        <p class="repertorio-panels__preview-text">Questo spazio viene utilizzato per proiettare soltanto qui la canzone che ho cliccato nel container dell'elenco delle canzoni oppure al cliccare sull elenco delle canzoni del contenitore Evento (ci serve vedere il contenuto de la canzone che clicco, sia dal Repertorio che del Evento che sto). In questo modo la persona vede subito il contenuto della canzone che vuole inserire nell'evento.</p>
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

                                    <div class="repertorio-panels__item-actions">
                                        <button class="repertorio-panels__edit-btn" data-tooltip="Editare il brano">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/file-edit.svg" alt="Modifica" class="repertorio-panels__edit-icon">
                                        </button>
                                        <button class="repertorio-panels__remove-btn" data-tooltip="Eliminare brano">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-cancella.svg" alt="Elimina" class="repertorio-panels__remove-icon">
                                        </button>
                                    </div>

                                </li>

                                <li class="repertorio-panels__list-item">
                                    <span class="repertorio-panels__list-title">Davanti alla tua presenza</span>
                                    <div class="repertorio-panels__item-actions">
                                        <button class="repertorio-panels__edit-btn" data-tooltip="Editare il brano">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/file-edit.svg" alt="Modifica" class="repertorio-panels__edit-icon">
                                        </button>
                                        <button class="repertorio-panels__remove-btn" data-tooltip="Eliminare brano">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-cancella.svg" alt="Elimina" class="repertorio-panels__remove-icon">
                                        </button>
                                    </div>
                                </li>

                                <li class="repertorio-panels__list-item">
                                    <span class="repertorio-panels__list-title">Io vedrò la tua gloria</span>
                                    <div class="repertorio-panels__item-actions">
                                        <button class="repertorio-panels__edit-btn" data-tooltip="Editare il brano">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/file-edit.svg" alt="Modifica" class="repertorio-panels__edit-icon">
                                        </button>
                                        <button class="repertorio-panels__remove-btn" data-tooltip="Eliminare brano">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-cancella.svg" alt="Elimina" class="repertorio-panels__remove-icon">
                                        </button>
                                    </div>
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


    <div class="modal-overlay" id="modal-nuovo-brano">
        <div class="modal-container">

            <div class="modal-top-actions">
                <button class="modal-action-btn" id="btn-open-confirm" data-tooltip="Salva e prepara">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/accept.svg" alt="Accetta" class="modal-accept-icon">
                </button>
                <button class="modal-close" id="btn-close-modal">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/close.svg" alt="Chiudi" class="modal-close-icon">
                </button>
            </div>

            <div class="modal-step-title">
                <input type="text" class="modal-step-title__input" id="input-titolo-brano" placeholder="Inizia scrivendo qui...">
                <button class="modal-step-title__btn" id="btn-ok-titolo" data-tooltip="Conferma Titolo">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/ok.svg" alt="OK" class="modal-step-title__icon">
                </button>
            </div>

            <div class="modal-step-tonality" id="step-tonality">
                <img src="<?php echo BASE_URL; ?>public/assets/img/categoria-music.svg" alt="Musica" class="modal-step-tonality__main-icon">
                <div class="modal-step-tonality__col">
                    <div class="modal-step-tonality__row">
                        <span class="modal-step-tonality__item select-note" data-tooltip="do" data-val="C">C</span>
                        <span class="modal-step-tonality__item select-note" data-tooltip="re" data-val="D">D</span>
                        <span class="modal-step-tonality__item select-note" data-tooltip="mi" data-val="E">E</span>
                        <span class="modal-step-tonality__item select-note" data-tooltip="fa" data-val="F">F</span>
                    </div>
                    <div class="modal-step-tonality__row">
                        <span class="modal-step-tonality__item select-note" data-tooltip="sol" data-val="G">G</span>
                        <span class="modal-step-tonality__item select-note" data-tooltip="la" data-val="A">A</span>
                        <span class="modal-step-tonality__item select-note" data-tooltip="si" data-val="B">B</span>
                    </div>
                </div>
                <div class="modal-step-tonality__col">
                    <span class="modal-step-tonality__item select-mode" data-tooltip="tonalità maggiore" data-val="">Maggiore</span>
                    <span class="modal-step-tonality__item select-mode" data-tooltip="tonalità minore" data-val="m">Minore</span>
                </div>
                <div class="modal-step-tonality__col">
                    <span class="modal-step-tonality__item select-acc" data-tooltip="Bemolle" data-val="b">♭</span>
                    <span class="modal-step-tonality__item select-acc" data-tooltip="Sostenuto" data-val="#">#</span>
                </div>
                <div class="modal-step-tonality__preview" id="tonality-preview"></div>
                <button class="modal-step-tonality__btn" id="btn-ok-tonality">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/ok.svg" alt="OK" class="modal-step-tonality__icon">
                </button>
            </div>

            <div class="modal-step-rhythm" id="step-rhythm">
                <img src="<?php echo BASE_URL; ?>public/assets/img/categoria-ritmo.svg" alt="Ritmo" class="modal-step-rhythm__main-icon">
                <div class="modal-step-rhythm__options">
                    <span class="modal-step-rhythm__item select-rhythm" data-val="Lento">Lento</span>
                    <span class="modal-step-rhythm__item select-rhythm" data-val="Intermedio">Intermedio</span>
                    <span class="modal-step-rhythm__item select-rhythm" data-val="Veloce">Veloce</span>
                    <span class="modal-step-rhythm__item select-rhythm" data-val="3/4">3/4</span>
                    <button class="modal-step-rhythm__btn" id="btn-ok-rhythm">
                        <img src="<?php echo BASE_URL; ?>public/assets/img/ok.svg" alt="OK" class="modal-step-rhythm__icon">
                    </button>
                </div>
            </div>
            <div class="modal-step-lang" id="step-lang">
                <div class="modal-step-lang__options">
                    <span class="modal-step-lang__item select-lang" data-val="Italiano">Italiano</span>
                    <span class="modal-step-lang__item select-lang" data-val="Spagnolo">Spagnolo</span>
                    <button class="modal-step-lang__btn" id="btn-ok-lang">
                        <img src="<?php echo BASE_URL; ?>public/assets/img/ok.svg" alt="OK" class="modal-step-lang__icon">
                    </button>
                </div>
            </div>

            <div class="modal-step-lyrics" id="step-lyrics">
                <div class="modal-step-lyrics__wrapper">
                    <div class="modal-step-lyrics__toolbar">
                        <span class="modal-step-lyrics__tool-btn modal-step-lyrics__tool-btn--light" id="btn-weight-light">B</span>
                        <span class="modal-step-lyrics__tool-btn modal-step-lyrics__tool-btn--bold" id="btn-weight-bold">B</span>
                    </div>

                    <textarea class="modal-step-lyrics__input" id="input-lyrics" placeholder="Incolla o scrivi qui il testo della canzone..."></textarea>
                </div>
            </div>

        </div>


    </div>



    <div class="modal-overlay" id="modal-confirm-evento">
        <div class="modal-confirm-container">
            <p class="modal-confirm-text">Aggiungere all'evento</p>
            <div class="modal-confirm-actions">
                <button class="modal-action-btn">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg" class="repertorio-panels__add-icon">
                </button>
                <button class="modal-action-btn" id="btn-final-accept">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/accept.svg" alt="Conferma finale" class="modal-accept-icon">
                </button>
            </div>
        </div>
    </div>


    <div class="modal-overlay" id="modal-warning-close">
        <div class="modal-warning-container">
            <button class="modal-warning-btn modal-warning-btn--continue" id="btn-continue-edit">
                Continua editando
            </button>
            <button class="modal-warning-btn modal-warning-btn--close" id="btn-confirm-close">
                Chiudi senza salvare
            </button>
        </div>
    </div>


    <div class="modal-overlay" id="modal-alert-msg">
        <div class="modal-alert-container">
            <p class="modal-alert-text" id="modal-alert-content"></p>
            <button class="modal-alert-close-btn" id="btn-close-alert">Chiudi</button>
        </div>
    </div>

</body>

</html>