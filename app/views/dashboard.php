<?php

/*
====================================================================
VISUALIZZAZIONE TESTO CANZONE
====================================================================
Quando andremo a creare la pagina o il modale per visualizzare 
il brano finito, usare questo snippet per trasformare le "quick tags" 
in parole in grassetto e blu al volo, mantenendo il database pulito:

$testo_canzone = $brano['testo']; 
$parole_chiave = ['Verso', 'Ritornello', 'Bridge', 'Riff'];
$parole_grassetto = [
    '<strong style="font-weight: 600; color: #0b0e92;">Verso</strong>', 
    '<strong style="font-weight: 600; color: #0b0e92;">Ritornello</strong>', 
    '<strong style="font-weight: 600; color: #0b0e92;">Bridge</strong>', 
    '<strong style="font-weight: 600; color: #0b0e92;">Riff</strong>'
];
$testo_finale = str_replace($parole_chiave, $parole_grassetto, $testo_canzone);

Stampa finale preservando gli a capo
echo nl2br($testo_finale);
====================================================================
*/

// ==========================================
// ⚙️ 1. GESTIONE AUTENTICAZIONE
// ==========================================
// config.php è già caricato dinamicamente dal vigile urbano (index.php).
// Qui includiamo solo il middleware auth.php che si assicura che 
// NESSUNO possa accedere a questa pagina senza essere loggato.
require_once ROOT_PATH . 'app/middlewares/auth.php';

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

        <h1 class="repertorio__title">Libreria - CPUE Torino</h1>

        <nav class="repertorio__nav">
            <ul class="repertorio__menu">
                <li class="repertorio__link"><a href="<?php echo BASE_URL ?>" class="repertorio__link">Home CPUE</a>
                </li>
                <li><a href="#" class="repertorio__link">Eventi</a></li>
            </ul>
            <a href="<?php echo BASE_URL; ?>logout" class="repertorio__link--logout">
                Logout
            </a>
        </nav>

        <div class="repertorio__content">
            <section class="repertorio-panels">

                <div class="repertorio-panels__col">

                    <div class="repertorio-panels__inner">

                        <button class="repertorio-panels__new-btn" data-tooltip="Nuovo brano">
                            <img src="<?php echo BASE_URL; ?>public/assets/img/file-new.svg" alt="Nuovo"
                                class="repertorio-panels__new-icon">
                        </button>

                        <h2 class="repertorio-panels__title">Libreria</h2>

                        <p class="repertorio-panels__filter-label">Selezionare per categoria:</p>

                        <div class="repertorio-filter" id="filter-tonality-box">

                            <div class="repertorio-filter__options">
                                <div class="repertorio-filter__col">
                                    <div class="repertorio-filter__row">
                                        <span class="repertorio-filter__item filter-note" data-val="C"
                                            tabindex="0">C</span>
                                        <span class="repertorio-filter__item filter-note" data-val="D"
                                            tabindex="0">D</span>
                                        <span class="repertorio-filter__item filter-note" data-val="E"
                                            tabindex="0">E</span>
                                        <span class="repertorio-filter__item filter-note" data-val="F"
                                            tabindex="0">F</span>
                                    </div>
                                    <div class="repertorio-filter__row">
                                        <span class="repertorio-filter__item filter-note" data-val="G"
                                            tabindex="0">G</span>
                                        <span class="repertorio-filter__item filter-note" data-val="A"
                                            tabindex="0">A</span>
                                        <span class="repertorio-filter__item filter-note" data-val="B"
                                            tabindex="0">B</span>
                                    </div>
                                </div>
                                <div class="repertorio-filter__col">
                                    <span class="repertorio-filter__item filter-mode" data-val=""
                                        tabindex="0">Maggiore</span>
                                    <span class="repertorio-filter__item filter-mode" data-val="m"
                                        tabindex="0">Minore</span>
                                </div>
                                <div class="repertorio-filter__col">
                                    <span class="repertorio-filter__item filter-acc" data-val="#" tabindex="0">#</span>
                                    <span class="repertorio-filter__item filter-acc" data-val="b" tabindex="0">♭</span>
                                </div>
                                <div class="repertorio-filter__preview" id="filter-tonality-preview"></div>
                            </div>
                            <button class="repertorio-filter__btn" id="btn-filter-tonality">
                                <img src="<?php echo BASE_URL; ?>public/assets/img/ok.svg" alt="OK"
                                    class="repertorio-filter__icon">
                            </button>
                        </div>

                        <div class="repertorio-filter" id="filter-rhythm-box">
                            <div class="repertorio-filter__options">
                                <span class="repertorio-filter__item filter-rhythm" data-val="Lento">Lento</span>
                                <span class="repertorio-filter__item filter-rhythm"
                                    data-val="Intermedio">Intermedio</span>
                                <span class="repertorio-filter__item filter-rhythm" data-val="Veloce">Veloce</span>
                                <span class="repertorio-filter__item filter-rhythm" data-val="3/4">3/4</span>
                            </div>
                            <button class="repertorio-filter__btn" id="btn-filter-rhythm">
                                <img src="<?php echo BASE_URL; ?>public/assets/img/ok.svg" alt="OK"
                                    class="repertorio-filter__icon">
                            </button>
                        </div>

                        <div class="repertorio-filter" id="filter-lang-box">
                            <div class="repertorio-filter__options">
                                <span class="repertorio-filter__item filter-lang" data-val="Italiano">Italiano</span>
                                <span class="repertorio-filter__item filter-lang" data-val="Spagnolo">Spagnolo</span>
                                <span class="repertorio-filter__item filter-lang" data-val="Tutte">Tutte le
                                    lingue</span>
                            </div>
                            <button class="repertorio-filter__btn" id="btn-filter-lang">
                                <img src="<?php echo BASE_URL; ?>public/assets/img/ok.svg" alt="OK"
                                    class="repertorio-filter__icon">
                            </button>
                        </div>

                        <div class="repertorio-panels__search-box">
                            <input type="text" class="repertorio-panels__search-input" placeholder="barra di ricerca">
                        </div>

                        <div class="repertorio-panels__list-container">
                            <ul class="repertorio-panels__list">
                                <li class="repertorio-panels__list-item">
                                    <span class="repertorio-panels__list-title">Ai piedi della croce io starò</span>
                                    <div class="repertorio-panels__item-actions">

                                        <button type="button" class="repertorio-panels__action btn-view-brano"
                                            data-tooltip="Visualizza brano" aria-label="Visualizza brano">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/view.svg"
                                                alt="Visualizza" class="repertorio-panels__icon">
                                        </button>

                                        <button type="button" class="repertorio-panels__action btn-edit-brano"
                                            data-tooltip="Modifica brano" aria-label="Modifica brano">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/file-edit.svg"
                                                alt="Modifica" class="repertorio-panels__icon">
                                        </button>

                                        <button type="button" class="repertorio-panels__action"
                                            data-tooltip="Elimina brano" aria-label="Elimina brano">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/file-delete.svg"
                                                alt="Elimina" class="repertorio-panels__icon">
                                        </button>

                                        <button type="button" class="repertorio-panels__add-btn"
                                            data-tooltip="Carica nell'evento" aria-label="Carica nell'evento">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg"
                                                alt="Carica nell'evento" class="repertorio-panels__add-icon">
                                        </button>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="repertorio-panels__col">
                            <div class="repertorio-panels__inner">

                                <button class="repertorio-panels__save-btn" data-tooltip="Salva Evento">
                                    <img src="<?php echo BASE_URL; ?>public/assets/img/evento-salva.svg" alt="Salva"
                                        class="repertorio-panels__save-icon">
                                </button>

                                <h2 class="repertorio-panels__title" id="evento">Evento</h2>

                                <div class="repertorio-floating-nav">
                                    <a href="#" class="repertorio-floating-nav__btn" aria-label="Torna su">
                                        <img src="<?php echo BASE_URL; ?>public/assets/img/freccia-su.svg" alt="Su"
                                            class="repertorio-floating-nav__icon">
                                    </a>
                                    <a href="#evento" class="repertorio-floating-nav__btn" aria-label="Vai a Evento">
                                        <img src="<?php echo BASE_URL; ?>public/assets/img/freccia-giu.svg" alt="Giù"
                                            class="repertorio-floating-nav__icon">
                                    </a>
                                </div>

                                <p class="repertorio-panels__stage-btn-description">Le fasi dell'Evento</p>

                                <div class="repertorio-panels__event-stages">
                                    <button class="repertorio-panels__stage-btn"
                                        data-tooltip="Canzoni dall'inizio">Inizio</button>
                                    <button class="repertorio-panels__stage-btn"
                                        data-tooltip="Canzoni intermedie">Intermedio</button>
                                    <button class="repertorio-panels__stage-btn"
                                        data-tooltip="Canzoni dalla fine">Fine</button>
                                </div>

                                <div class="repertorio-panels__list-container">
                                    <ul class="repertorio-panels__list">
                                    </ul>
                                </div>
                                <li class="repertorio-panels__list-item">
                                    <span class="repertorio-panels__list-title">Ai piedi della croce io starò</span>

                                    <div class="repertorio-panels__item-actions">
                                        <button type="button" class="repertorio-panels__action btn-view-brano"
                                            data-tooltip="Visualizza brano" aria-label="Visualizza brano">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/view.svg"
                                                alt="Visualizza" class="repertorio-panels__icon">
                                        </button>

                                        <button type="button" class="repertorio-panels__edit-btn"
                                            data-tooltip="Modifica brano" aria-label="Modifica brano">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/file-edit.svg"
                                                alt="Modifica" class="repertorio-panels__edit-icon">
                                        </button>

                                        <button type="button" class="repertorio-panels__remove-btn"
                                            data-tooltip="Elimina brano" aria-label="Elimina brano">
                                            <img src="<?php echo BASE_URL; ?>public/assets/img/evento-cancella.svg"
                                                alt="Elimina" class="repertorio-panels__remove-icon">
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
                    <img src="<?php echo BASE_URL; ?>public/assets/img/accept.svg" alt="Accetta"
                        class="modal-accept-icon">
                </button>
                <button class="modal-close" id="btn-close-modal">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/close.svg" alt="Chiudi" class="modal-close-icon">
                </button>
            </div>

            <h2 class="modal-main-title">Nuovo Brano</h2>

            <div class="modal-step-title">
                <input type="text" class="modal-step-title__input" id="input-titolo-brano"
                    placeholder="Inizia con il titolo del brano...">
                <button class="modal-step-title__btn" id="btn-ok-titolo" data-tooltip="Conferma Titolo">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/ok.svg" alt="OK" class="modal-step-title__icon">
                </button>
            </div>

            <div class="modal-step-tonality" id="step-tonality">
                <img src="<?php echo BASE_URL; ?>public/assets/img/categoria-music.svg" alt="Musica"
                    class="modal-step-tonality__main-icon">

                <div class="modal-step-tonality__options">
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
                        <span class="modal-step-tonality__item select-mode" data-tooltip="tonalità maggiore"
                            data-val="">Maggiore</span>
                        <span class="modal-step-tonality__item select-mode" data-tooltip="tonalità minore"
                            data-val="m">Minore</span>
                    </div>
                    <div class="modal-step-tonality__col">
                        <span class="modal-step-tonality__item select-acc" data-tooltip="Bemolle" data-val="b">♭</span>
                        <span class="modal-step-tonality__item select-acc" data-tooltip="Sostenuto"
                            data-val="#">#</span>
                    </div>
                    <div class="modal-step-tonality__preview" id="tonality-preview"></div>
                </div>
                <button class="modal-step-tonality__btn" id="btn-ok-tonality">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/ok.svg" alt="OK"
                        class="modal-step-tonality__icon">
                </button>
            </div>

            <div class="modal-step-rhythm" id="step-rhythm">
                <img src="<?php echo BASE_URL; ?>public/assets/img/categoria-ritmo.svg" alt="Ritmo"
                    class="modal-step-rhythm__main-icon">
                <div class="modal-step-rhythm__options">
                    <span class="modal-step-rhythm__item select-rhythm" data-val="Lento">Lento</span>
                    <span class="modal-step-rhythm__item select-rhythm" data-val="Intermedio">Intermedio</span>
                    <span class="modal-step-rhythm__item select-rhythm" data-val="Veloce">Veloce</span>
                    <span class="modal-step-rhythm__item select-rhythm" data-val="3/4">3/4</span>
                </div>

                <button class="modal-step-rhythm__btn" id="btn-ok-rhythm">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/ok.svg" alt="OK" class="modal-step-rhythm__icon">
                </button>
            </div>

            <div class="modal-step-lang" id="step-lang">
                <div class="modal-step-lang__options">
                    <span class="modal-step-lang__item select-lang" data-val="Italiano">Italiano</span>
                    <span class="modal-step-lang__item select-lang" data-val="Spagnolo">Spagnolo</span>
                </div>

                <button class="modal-step-lang__btn" id="btn-ok-lang">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/ok.svg" alt="OK" class="modal-step-lang__icon">
                </button>
            </div>

            <div class="modal-step-lyrics" id="step-lyrics">
                <div class="modal-step-lyrics__wrapper">

                    <div class="modal-step-lyrics__header">

                        <div class="modal-step-lyrics__history">
                            <button class="history-btn" id="btn-undo" data-tooltip="Annulla">
                                <img src="<?php echo BASE_URL; ?>public/assets/img/anulla.svg" alt="Annulla">
                            </button>
                            <button class="history-btn" id="btn-redo" data-tooltip="Ripristina">
                                <img src="<?php echo BASE_URL; ?>public/assets/img/ripristina.svg" alt="Ripristina">
                            </button>
                        </div>

                        <div class="modal-step-lyrics__quick-tags">
                            <span class="modal-step-lyrics__tag" data-tooltip="Strofa della canzone">Verso</span>
                            <span class="modal-step-lyrics__tag" data-tooltip="(coro, chorus)">Ritornello</span>
                            <span class="modal-step-lyrics__tag" data-tooltip="contrasto o transizione">Bridge</span>
                            <span class="modal-step-lyrics__tag"
                                data-tooltip="Breve frase musicale introduttiva">Riff</span>
                        </div>
                    </div>

                    <textarea class="modal-step-lyrics__input" id="input-lyrics" placeholder=""></textarea>
                </div>
            </div>

        </div>
    </div>

    <div class="modal-overlay" id="modal-confirm-evento">
        <div class="modal-confirm-container">
            <p class="modal-confirm-text">Aggiungere all'evento</p>
            <div class="modal-confirm-actions">
                <button class="modal-action-btn">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/evento-caricare.svg"
                        class="repertorio-panels__add-icon">
                </button>
                <button class="modal-action-btn" id="btn-final-accept">
                    <img src="<?php echo BASE_URL; ?>public/assets/img/accept.svg" alt="Conferma finale"
                        class="modal-accept-icon">
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

    <div class="modal-overlay" id="modal-anteprima-brano">
        <div class="modal-container-anteprima">

            <button class="modal-close modal-close--absolute" id="btn-close-anteprima">
                <img src="<?php echo BASE_URL; ?>public/assets/img/close.svg" alt="Chiudi" class="modal-close-icon">
            </button>

            <h2 class="repertorio-panels__title">Anteprima</h2>

            <div class="modal-anteprima-content">
                <p class="repertorio-panels__preview-text">
                    L'anteprima del testo del brano apparirà qui...
                </p>

            </div>

        </div>
    </div>

</body>

</html>