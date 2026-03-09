document.addEventListener('DOMContentLoaded', function () {

    // =========================================
    // ✅ 1. LOGICA NAVIGAZIONE FOOTER (MOBILE)
    // =========================================  
    // Gestisce l'apertura a fisarmonica delle sezioni del footer 
    // esclusivamente sui dispositivi mobili (sotto i 768px).
    const accordions = document.querySelectorAll('.footer__accordion-header');

    accordions.forEach(function (accordion) {
        accordion.addEventListener('click', function () {
            if (window.innerWidth > 768) return;

            this.classList.toggle('active');
            const content = this.nextElementSibling;
            if (content) {
                content.classList.toggle('active');
            }
        });
    });
});

// =========================================
// ✅ 2. GESTIONE LIBRERIA E REPERTORIO
// =========================================
document.addEventListener('DOMContentLoaded', function () {

    // --- A. SISTEMA DI AVVISI PERSONALIZZATI (Custom Alert) ---
    function showCustomAlert(message) {
        const alertModal = document.getElementById('modal-alert-msg');
        const alertText = document.getElementById('modal-alert-content');
        if (alertModal && alertText) {
            alertText.textContent = message;
            alertModal.classList.add('active');
        }
    }

    const alertModal = document.getElementById('modal-alert-msg');
    const btnCloseAlert = document.getElementById('btn-close-alert');

    if (alertModal && btnCloseAlert) {
        btnCloseAlert.addEventListener('click', function () {
            alertModal.classList.remove('active');
        });
        alertModal.addEventListener('click', function (e) {
            if (e.target === alertModal) {
                alertModal.classList.remove('active');
            }
        });
    }

    // --- B. ELEMENTI DOM GLOBALI ---
    const btnNuovoBrano = document.querySelector('[data-tooltip="Nuovo brano"]');
    const modalNuovoBrano = document.getElementById('modal-nuovo-brano');
    const btnCloseModal = document.getElementById('btn-close-modal');
    const btnOpenConfirm = document.getElementById('btn-open-confirm');
    const modalConfirm = document.getElementById('modal-confirm-evento');
    const btnFinalAccept = document.getElementById('btn-final-accept');
    const modalWarning = document.getElementById('modal-warning-close');
    const btnContinueEdit = document.getElementById('btn-continue-edit');
    const btnConfirmClose = document.getElementById('btn-confirm-close');

    // Elementi Progressive Disclosure (Step-by-Step)
    const btnOkTitolo = document.getElementById('btn-ok-titolo');
    const inputTitolo = document.getElementById('input-titolo-brano');
    const stepTonality = document.getElementById('step-tonality');
    const btnOkTonality = document.getElementById('btn-ok-tonality');
    const stepRhythm = document.getElementById('step-rhythm');
    const btnOkRhythm = document.getElementById('btn-ok-rhythm');
    const stepLang = document.getElementById('step-lang');
    const btnOkLang = document.getElementById('btn-ok-lang');
    const stepLyrics = document.getElementById('step-lyrics');
    const inputLyrics = document.getElementById('input-lyrics');

    // --- C. GESTIONE STATO MODIFICHE (Spia di sicurezza) ---
    let hasModifications = false;
    function markAsModified() { hasModifications = true; }

    if (modalNuovoBrano) {
        const interactiveElements = modalNuovoBrano.querySelectorAll(
            '#input-titolo-brano, #input-lyrics, .select-note, .select-acc, .select-mode, .select-rhythm, .select-lang, .modal-step-lyrics__tag, .history-btn'
        );
        interactiveElements.forEach(el => {
            el.addEventListener('input', markAsModified);
            el.addEventListener('click', markAsModified);
        });
    }

    // --- D. APERTURA MODALI (NUOVO / MODIFICA) ---
    const modalMainTitle = document.querySelector('.modal-main-title');
    const btnsEdit = document.querySelectorAll('.btn-edit-brano, .repertorio-panels__edit-btn');

    if (btnNuovoBrano && modalNuovoBrano) {
        btnNuovoBrano.addEventListener('click', function () {
            hasModifications = false;
            if (modalMainTitle) modalMainTitle.textContent = "Nuovo Brano";
            modalNuovoBrano.classList.add('active');
            if (inputTitolo) setTimeout(() => inputTitolo.focus(), 100);
        });
    }

    if (btnsEdit.length > 0 && modalNuovoBrano) {
        btnsEdit.forEach(btn => {
            btn.addEventListener('click', function () {
                hasModifications = false;
                if (modalMainTitle) modalMainTitle.textContent = "Modifica Brano";
                modalNuovoBrano.classList.add('active');

                // Attivazione visiva di tutti gli step per la modifica
                [stepTonality, stepRhythm, stepLang, stepLyrics].forEach(step => {
                    if (step) {
                        step.classList.add('active');
                        step.style.opacity = '1';
                        step.style.pointerEvents = 'auto';
                    }
                });
                if (inputLyrics) setTimeout(() => inputLyrics.focus(), 100);
            });
        });
    }

    // --- E. LOGICA DI CHIUSURA E RESET ---
    if (btnCloseModal && modalWarning && modalNuovoBrano) {
        function attemptClose() {
            if (hasModifications) {
                modalWarning.classList.add('active');
            } else {
                if (btnConfirmClose) btnConfirmClose.click();
            }
        }
        btnCloseModal.addEventListener('click', attemptClose);
        modalNuovoBrano.addEventListener('click', (e) => {
            if (e.target === modalNuovoBrano) attemptClose();
        });
    }

    if (btnConfirmClose && modalWarning) {
        btnConfirmClose.addEventListener('click', function () {
            modalWarning.classList.remove('active');
            modalNuovoBrano.classList.remove('active');
            // Reset totale dei campi (pulizia per la prossima apertura)
            if (inputTitolo) { inputTitolo.value = ''; inputTitolo.style.fontWeight = '400'; }
            if (inputLyrics) inputLyrics.value = '';
            // Reset stati visuali dei filtri e step...
        });
    }

    // --- F. LOGICA TEXTAREA (LIMITE 30 CARATTERI PER RIGA) ---
    if (inputLyrics) {
        inputLyrics.addEventListener('input', function () {
            let originalText = this.value;
            let lines = originalText.split('\n');
            let formattedLines = lines.map(line => {
                let res = "";
                while (line.length > 30) {
                    res += line.substring(0, 30) + "\n";
                    line = line.substring(30);
                }
                return res + line;
            });
            let newText = formattedLines.join('\n');
            if (originalText !== newText) this.value = newText;
        });
    }

    // --- G. LOGICA POPUP ANTEPRIMA BRANO ---
    const btnsViewBrano = document.querySelectorAll('.btn-view-brano');
    const modalAnteprima = document.getElementById('modal-anteprima-brano');
    const btnCloseAnteprima = document.getElementById('btn-close-anteprima');

    if (btnsViewBrano.length > 0 && modalAnteprima) {
        btnsViewBrano.forEach(btn => {
            btn.addEventListener('click', () => modalAnteprima.classList.add('active'));
        });
    }

    if (btnCloseAnteprima && modalAnteprima) {
        btnCloseAnteprima.addEventListener('click', () => modalAnteprima.classList.remove('active'));
        modalAnteprima.addEventListener('click', (e) => {
            if (e.target === modalAnteprima) modalAnteprima.classList.remove('active');
        });
    }

    // --- H. LOGICA FILTRI LIBRERIA ---
    // (Mantenuta per funzionalità futura con AJAX/PHP)
    const btnFilterTonality = document.getElementById('btn-filter-tonality');
    if (btnFilterTonality) {
        btnFilterTonality.addEventListener('click', () => console.log("Ricerca tonalità avviata..."));
    }

    // --- I. SISTEMA UNDO/REDO PER TESTI ---
    const btnUndo = document.getElementById('btn-undo');
    const btnRedo = document.getElementById('btn-redo');
    let textHistory = [];
    let historyStep = -1;

    function saveTextState() {
        if (!inputLyrics) return;
        if (historyStep < textHistory.length - 1) textHistory = textHistory.slice(0, historyStep + 1);
        textHistory.push({ value: inputLyrics.value });
        historyStep++;
    }

    if (inputLyrics) {
        saveTextState();
        let typingTimer;
        inputLyrics.addEventListener('input', () => {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(saveTextState, 500);
        });
    }

        window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar-custom');
    if (window.scrollY > 50) {
            navbar.classList.add('navbar-scrolled');
        } else {
            navbar.classList.remove('navbar-scrolled');
        }
    });

    // --- J. CHIUSURA AUTOMATICA MENU SU SCROLL (MOBILE) ---
        window.addEventListener('scroll', function() {
        // Cerca il contenitore del menù tramite il suo ID
        const navbarCollapse = document.getElementById('navCPUE');
        
        // Se il menù esiste ed è attualmente aperto (Bootstrap gli dà la classe 'show')
        if (navbarCollapse && navbarCollapse.classList.contains('show')) {
            
            // Richiama il "motore" interno di Bootstrap 5 per questo elemento
            const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse);
            
            // Diamo l'ordine di chiusura morbida (animata)
            if (bsCollapse) {
                bsCollapse.hide();
            }
        }
    });

 // --- K. AUTO-CHIUSURA DROPDOWN E "RITORNO FANTASMA" BLINDATO ---
    const dropdowns = document.querySelectorAll('.nav-item.dropdown');
    
    dropdowns.forEach(function(dropdown) {
        // Salviamo i cronometri e la memoria DIRETTAMENTE sull'elemento HTML
        dropdown._chiusuraTimer = null;
        dropdown._fantasmaTimer = null;
        dropdown._fantasmaAttivo = false;

        const toggleBtn = dropdown.querySelector('.dropdown-toggle');

        // 1. Quando il mouse RIENTRA nell'area (o entra per la prima volta)
        dropdown.addEventListener('mouseenter', function() {
            if (window.innerWidth < 768 || !toggleBtn) return;

            // L'Isolamento: Spegne i timer di tutti gli ALTRI menù
            dropdowns.forEach(function(altroDropdown) {
                if (altroDropdown !== dropdown) {
                    clearTimeout(altroDropdown._chiusuraTimer);
                    clearTimeout(altroDropdown._fantasmaTimer);
                    altroDropdown._fantasmaAttivo = false;
                    
                    // Se un altro menù era rimasto aperto, chiudilo di scatto
                    const altroBtn = altroDropdown.querySelector('.dropdown-toggle');
                    if (altroBtn && altroBtn.classList.contains('show')) {
                        const bsInst = bootstrap.Dropdown.getInstance(altroBtn);
                        if (bsInst) bsInst.hide();
                    }
                }
            });

            // Logica per QUESTO menù: Blocca la sua chiusura se stavi uscendo
            clearTimeout(dropdown._chiusuraTimer);

            // Se il SUO fantasma era attivo, riaprilo
            if (dropdown._fantasmaAttivo) {
                const bsDropdown = bootstrap.Dropdown.getOrCreateInstance(toggleBtn);
                if (bsDropdown) bsDropdown.show();
                
                dropdown._fantasmaAttivo = false; // Fantasma consumato
                clearTimeout(dropdown._fantasmaTimer);
            }
        });

        // 2. Quando il mouse ESCE dall'area
        dropdown.addEventListener('mouseleave', function() {
            if (window.innerWidth < 768 || !toggleBtn) return;

            if (toggleBtn.classList.contains('show')) {
                // Abbassato a 400ms per renderlo più snello quando scivoli via
                dropdown._chiusuraTimer = setTimeout(function() {
                    
                    const bsDropdown = bootstrap.Dropdown.getOrCreateInstance(toggleBtn);
                    if (bsDropdown) bsDropdown.hide();

                    // 👻 Attiva il fantasma per 1.5 secondi
                    dropdown._fantasmaAttivo = true;
                    
                    dropdown._fantasmaTimer = setTimeout(function() {
                        dropdown._fantasmaAttivo = false;
                    }, 1500); 

                }, 400); 
            }
        });
    });
});