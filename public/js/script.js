document.addEventListener('DOMContentLoaded', function() {

// =========================================
// CODICE DELL'ARCANGELO (INTATTO E SEPARATO)
// =========================================  

    // Seleziona tutti i titoli
    const accordions = document.querySelectorAll('.footer__accordion-header');

    accordions.forEach(function(accordion) {
        accordion.addEventListener('click', function() {
            
            // Controllo Mobile: esegue solo se lo schermo è piccolo
            if (window.innerWidth > 768) return;

            // Mette/Toglie la classe 'active' al TITOLO (per ruotare l'icona)
            this.classList.toggle('active');

            // Trova il contenuto subito sotto
            const content = this.nextElementSibling;

            // Mette/Toglie la classe 'active' al CONTENUTO (per aprire la tendina)
            if (content) {
                content.classList.toggle('active');
            }
        });
    });
});

// =========================================
// NUOVO CODICE: GESTIONE POPUP REPERTORIO
// =========================================
document.addEventListener('DOMContentLoaded', function() {

    // 1. FUNZIONE GLOBALE CUSTOM ALERT
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
        btnCloseAlert.addEventListener('click', function() {
            alertModal.classList.remove('active');
        });
        alertModal.addEventListener('click', function(e) {
            if (e.target === alertModal) {
                alertModal.classList.remove('active');
            }
        });
    }

    // ELEMENTI DOM GLOBALI
    const btnNuovoBrano = document.querySelector('[data-tooltip="Nuovo brano"]');
    const modalNuovoBrano = document.getElementById('modal-nuovo-brano');
    const btnCloseModal = document.getElementById('btn-close-modal');

    const btnResetTitolo = document.getElementById('btn-reset-titolo'); 
    const btnOpenConfirm = document.getElementById('btn-open-confirm');
    
    const modalConfirm = document.getElementById('modal-confirm-evento');
    const btnFinalAccept = document.getElementById('btn-final-accept');

    const modalWarning = document.getElementById('modal-warning-close');
    const btnContinueEdit = document.getElementById('btn-continue-edit');
    const btnConfirmClose = document.getElementById('btn-confirm-close');
    
    const modalConfirmReset = document.getElementById('modal-confirm-reset');
    const btnConfirmReset = document.getElementById('btn-confirm-reset');
    const btnCancelReset = document.getElementById('btn-cancel-reset');

    // Elementi Progressive Disclosure
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

    // 2. APRIRE E CHIUDERE POPUP PRINCIPALE
    if (btnNuovoBrano && modalNuovoBrano) {
        btnNuovoBrano.addEventListener('click', function() {
            modalNuovoBrano.classList.add('active');
        });
    }

    if (btnCloseModal && modalWarning && modalNuovoBrano) {
        btnCloseModal.addEventListener('click', function() {
            modalWarning.classList.add('active');
        });
        
        modalNuovoBrano.addEventListener('click', function(e) {
            if (e.target === modalNuovoBrano) {
                modalWarning.classList.add('active');
            }
        });
    }

    // 3. CHIUDI SENZA SALVARE (RESET TOTALE INVISIBILE)
    if (btnContinueEdit && btnConfirmClose && modalWarning && modalNuovoBrano) {
        btnContinueEdit.addEventListener('click', function() {
            modalWarning.classList.remove('active');
        });

        btnConfirmClose.addEventListener('click', function() {
            modalWarning.classList.remove('active');
            modalNuovoBrano.classList.remove('active');
            
            if (btnResetTitolo) btnResetTitolo.style.display = 'none';

            if (inputTitolo) {
                inputTitolo.value = '';
                inputTitolo.style.fontWeight = '400';
                inputTitolo.readOnly = false;
            }
            if (btnOkTitolo) {
                btnOkTitolo.style.opacity = '1';
                btnOkTitolo.style.pointerEvents = 'auto'; 
            }
            
            if(stepTonality) {
                stepTonality.classList.remove('active');
                stepTonality.style.opacity = '0.4';
                stepTonality.style.pointerEvents = 'none';
                document.querySelectorAll('.select-note, .select-acc, .select-mode').forEach(i => i.classList.remove('selected'));
                if(document.getElementById('tonality-preview')) document.getElementById('tonality-preview').textContent = '';
                if(btnOkTonality) btnOkTonality.style.opacity = '1';
                currentNote = ""; currentAcc = ""; currentMode = "";
            }

            if(stepRhythm) {
                stepRhythm.classList.remove('active');
                stepRhythm.style.opacity = '0.4';
                stepRhythm.style.pointerEvents = 'none';
                document.querySelectorAll('.select-rhythm').forEach(i => i.classList.remove('selected'));
                if(btnOkRhythm) btnOkRhythm.style.opacity = '1';
                currentRhythm = "";
            }

            if(stepLang) {
                stepLang.classList.remove('active');
                stepLang.style.opacity = '0.4';
                stepLang.style.pointerEvents = 'none';
                document.querySelectorAll('.select-lang').forEach(i => i.classList.remove('selected'));
                if(btnOkLang) btnOkLang.style.opacity = '1';
                currentLang = "";
            }

            if(stepLyrics) {
                stepLyrics.classList.remove('active');
                stepLyrics.style.opacity = '0.4';
                stepLyrics.style.pointerEvents = 'none';
                if(inputLyrics) inputLyrics.value = '';
            }
        });
    }

    // 4. RESET GLOBALE SALVAVITA
    if (btnResetTitolo && modalConfirmReset && btnConfirmReset && btnCancelReset) {
        btnResetTitolo.addEventListener('click', function() {
            modalConfirmReset.classList.add('active');
        });

        btnCancelReset.addEventListener('click', function() {
            modalConfirmReset.classList.remove('active');
        });

        modalConfirmReset.addEventListener('click', function(e) {
            if (e.target === modalConfirmReset) {
                modalConfirmReset.classList.remove('active');
            }
        });

        btnConfirmReset.addEventListener('click', function() {
            modalConfirmReset.classList.remove('active'); 

            inputTitolo.readOnly = false;
            inputTitolo.style.fontWeight = '400';
            btnOkTitolo.style.opacity = '1';
            btnOkTitolo.style.pointerEvents = 'auto';
            btnResetTitolo.style.display = 'none';

            if(stepTonality) stepTonality.classList.remove('active');
            if(stepRhythm) stepRhythm.classList.remove('active');
            if(stepLang) stepLang.classList.remove('active');
            if(stepLyrics) stepLyrics.classList.remove('active');
        });
    }

    // 5. APRIRE E SALVARE (POPUP PICCOLO)
    if (btnOpenConfirm && modalConfirm && btnFinalAccept) {
        btnOpenConfirm.addEventListener('click', function() {
            modalConfirm.classList.add('active');
        });

        btnFinalAccept.addEventListener('click', function() {
            modalConfirm.classList.remove('active');
            if (modalNuovoBrano) modalNuovoBrano.classList.remove('active');
            console.log("Pronto per il Database!"); 
        });

        modalConfirm.addEventListener('click', function(e) {
            if (e.target === modalConfirm) {
                modalConfirm.classList.remove('active');
            }
        });
    }

    // 6. LOGICA TITOLO
    if (btnOkTitolo && inputTitolo && stepTonality) {
        btnOkTitolo.addEventListener('click', function() {
            const titolo = inputTitolo.value.trim();
            if (titolo !== "") {
                btnOkTitolo.style.opacity = '0.5'; 
                btnOkTitolo.style.pointerEvents = 'none'; 
                inputTitolo.style.fontWeight = '600'; 
                inputTitolo.readOnly = true; 
                
                if (btnResetTitolo) btnResetTitolo.style.display = 'inline-flex';
                stepTonality.classList.add('active'); 
            } else {
                showCustomAlert("Per favore, inserisci un titolo prima di continuare.");
            }
        });

        inputTitolo.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); 
                btnOkTitolo.click();    
            }
        });
    }

    // 7. LOGICA TONALITÀ
    const previewBox = document.getElementById('tonality-preview');
    let currentNote = "";
    let currentAcc = "";
    let currentMode = "";

    function updatePreview() {
        if(previewBox) {
            previewBox.textContent = currentNote + currentAcc + currentMode;
        }
    }

    function handleSelection(selector) {
        const items = document.querySelectorAll(selector);
        items.forEach(item => {
            item.addEventListener('click', function() {
                const isSelected = this.classList.contains('selected');
                const val = this.getAttribute('data-val');

                items.forEach(i => i.classList.remove('selected'));
                if (!isSelected) this.classList.add('selected');

                if (selector === '.select-note') currentNote = isSelected ? "" : val;
                if (selector === '.select-acc') currentAcc = isSelected ? "" : val;
                if (selector === '.select-mode') currentMode = isSelected ? "" : val;

                updatePreview();
            });
        });
    }

    handleSelection('.select-note');
    handleSelection('.select-acc');
    handleSelection('.select-mode');

    if (btnOkTonality && stepTonality && stepRhythm) {
        btnOkTonality.addEventListener('click', function() {
            if (currentNote !== "") {
                btnOkTonality.style.opacity = '0.5';
                stepTonality.style.opacity = '0.5'; 
                stepTonality.style.pointerEvents = 'none'; 
                stepRhythm.classList.add('active'); 
            } else {
                showCustomAlert("Seleziona almeno la nota principale della tonalità.");
            }
        });
    }

    // 8. LOGICA RITMO
    let currentRhythm = "";
    const rhythmItems = document.querySelectorAll('.select-rhythm');
    rhythmItems.forEach(item => {
        item.addEventListener('click', function() {
            const isSelected = this.classList.contains('selected');
            const val = this.getAttribute('data-val');
            rhythmItems.forEach(i => i.classList.remove('selected'));
            
            if (!isSelected) {
                this.classList.add('selected');
                currentRhythm = val;
            } else {
                currentRhythm = "";
            }
        });
    });

    if (btnOkRhythm && stepRhythm && stepLang) {
        btnOkRhythm.addEventListener('click', function() {
            if (currentRhythm !== "") {
                btnOkRhythm.style.opacity = '0.5';
                stepRhythm.style.opacity = '0.5'; 
                stepRhythm.style.pointerEvents = 'none'; 
                stepLang.classList.add('active'); 
            } else {
                showCustomAlert("Seleziona la ritmica giusta per continuare.");
            }
        });
    }

    // 9. LOGICA LINGUA
    let currentLang = "";
    const langItems = document.querySelectorAll('.select-lang');
    langItems.forEach(item => {
        item.addEventListener('click', function() {
            const isSelected = this.classList.contains('selected');
            const val = this.getAttribute('data-val');
            langItems.forEach(i => i.classList.remove('selected'));
            
            if (!isSelected) {
                this.classList.add('selected');
                currentLang = val;
            } else {
                currentLang = "";
            }
        });
    });

    if (btnOkLang && stepLang && stepLyrics) {
        btnOkLang.addEventListener('click', function() {
            if (currentLang !== "") {
                btnOkLang.style.opacity = '0.5';
                stepLang.style.opacity = '0.5'; 
                stepLang.style.pointerEvents = 'none'; 
                stepLyrics.classList.add('active'); 
            } else {
                showCustomAlert("Seleziona la lingua per continuare.");
            }
        });
    }

// =========================================
    // 10. LOGICA TEXTAREA: 27 Caratteri e Grassetto
    // =========================================
    const btnWeightLight = document.getElementById('btn-weight-light');
    const btnWeightBold = document.getElementById('btn-weight-bold');

    // Cambia spessore del font
    if (btnWeightLight && btnWeightBold && inputLyrics) {
        btnWeightLight.addEventListener('click', function() {
            inputLyrics.style.fontWeight = '250';
        });
        
        btnWeightBold.addEventListener('click', function() {
            inputLyrics.style.fontWeight = '600';
        });
    }

    // Forza limite di 27 caratteri (spazi inclusi) con a-capo automatico
    if (inputLyrics) {
        inputLyrics.addEventListener('input', function() {
            let cursorPosition = this.selectionStart;
            let originalText = this.value;
            let lines = originalText.split('\n');
            let formattedLines = [];

            lines.forEach(line => {
                // Se la riga supera i 27 caratteri, la spezza e la manda a capo da sola
                while (line.length > 27) {
                    formattedLines.push(line.substring(0, 27));
                    line = line.substring(27);
                }
                formattedLines.push(line);
            });

            let newText = formattedLines.join('\n');

            // Se il testo è stato modificato dallo script (è andato a capo da solo)
            if (originalText !== newText) {
                this.value = newText;
                
                // Sposta il cursore in avanti per farlo scendere fluidamente nella nuova riga
                this.setSelectionRange(cursorPosition + 1, cursorPosition + 1);
            }
        });
    }


});