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

    // 2. APRIRE E CHIUDERE POPUP (NUOVO E MODIFICA)
    const modalMainTitle = document.querySelector('.modal-main-title');
    const btnsEdit = document.querySelectorAll('.btn-edit-brano, .repertorio-panels__edit-btn');
    
    // Variabile "spia" per sapere se l'utente ha fatto modifiche
    let hasModifications = false;

    // Funzione per registrare un tocco
    function markAsModified() {
        hasModifications = true;
    }

    // Mette la "spia" in ascolto su tutti gli elementi interattivi
    if (modalNuovoBrano) {
        const interactiveElements = modalNuovoBrano.querySelectorAll(
            '#input-titolo-brano, #input-lyrics, .select-note, .select-acc, .select-mode, .select-rhythm, .select-lang, .modal-step-lyrics__tag, .history-btn'
        );
        interactiveElements.forEach(el => {
            el.addEventListener('input', markAsModified);
            el.addEventListener('click', markAsModified);
        });
    }

    // --- A. APRI COME "NUOVO BRANO" ---
    if (btnNuovoBrano && modalNuovoBrano) {
        btnNuovoBrano.addEventListener('click', function() {
            hasModifications = false; // Azzera la spia
            if (modalMainTitle) modalMainTitle.textContent = "Nuovo Brano";
            
            modalNuovoBrano.classList.add('active');
            
            if (inputTitolo) {
                setTimeout(function() { inputTitolo.focus(); }, 100);
            }
        });
    }

    // --- B. APRI COME "MODIFICA BRANO" ---
    if (btnsEdit.length > 0 && modalNuovoBrano) {
        btnsEdit.forEach(btn => {
            btn.addEventListener('click', function() {
                hasModifications = false; // Azzera la spia
                if (modalMainTitle) modalMainTitle.textContent = "Modifica Brano";
                
                modalNuovoBrano.classList.add('active');

                // Sblocca tutto!
                if (inputTitolo) inputTitolo.style.fontWeight = '600';
                
                if (stepTonality) {
                    stepTonality.classList.add('active');
                    stepTonality.style.opacity = '1';
                    stepTonality.style.pointerEvents = 'auto';
                }
                if (stepRhythm) {
                    stepRhythm.classList.add('active');
                    stepRhythm.style.opacity = '1';
                    stepRhythm.style.pointerEvents = 'auto';
                }
                if (stepLang) {
                    stepLang.classList.add('active');
                    stepLang.style.opacity = '1';
                    stepLang.style.pointerEvents = 'auto';
                    if (btnOkLang) btnOkLang.style.opacity = '1';
                }
                if (stepLyrics) {
                    stepLyrics.classList.add('active');
                    stepLyrics.style.opacity = '1';
                    stepLyrics.style.pointerEvents = 'auto';
                }

                // Cursore diretto nel testo
                if (inputLyrics) {
                    setTimeout(function() { inputLyrics.focus(); }, 100);
                }
            });
        });
    }

    // --- C. CHIUSURA INTELLIGENTE (X in alto o Sfondo scuro) ---
    if (btnCloseModal && modalWarning && modalNuovoBrano) {
        
        function attemptClose() {
            if (hasModifications) {
                // Modifiche rilevate: mostra l'avviso
                modalWarning.classList.add('active');
            } else {
                // Nessuna modifica: usa il bottone di reset nascosto per chiudere e pulire istantaneamente!
                if (btnConfirmClose) btnConfirmClose.click();
            }
        }

        btnCloseModal.addEventListener('click', attemptClose);
        
        modalNuovoBrano.addEventListener('click', function(e) {
            if (e.target === modalNuovoBrano) {
                attemptClose();
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
                // 1. Lo facciamo diventare grassetto per far capire che è stato registrato
                inputTitolo.style.fontWeight = '600'; 
                
                // 2. "Spegniamo" il cursore lampeggiante 
                inputTitolo.blur();
                
                // 3. Continuiamo con la logica Step-by-Step sbloccando la Tonalità
                stepTonality.classList.add('active'); 
                
                // 4. NUOVO (Opzionale ma bellissimo): Fa scorrere dolcemente la finestra 
                // verso il basso per mostrare bene il blocco Tonalità appena sbloccato.
                setTimeout(function() {
                    stepTonality.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 150);

            } else {
                showCustomAlert("Per favore, inserisci un titolo prima di continuare.");
            }
        });

        inputTitolo.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); 
                event.stopPropagation(); // Ferma l'effetto domino!
                btnOkTitolo.click();    
            }
        });
    }

    // 7. LOGICA TONALITÀ (Mouse + Tastiera)
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
            
            // Creiamo una funzione unica per selezionare/deselezionare
            const toggleItem = function(element) {
                const isSelected = element.classList.contains('selected');
                const val = element.getAttribute('data-val');

                items.forEach(i => i.classList.remove('selected'));
                if (!isSelected) element.classList.add('selected');

                if (selector === '.select-note') currentNote = isSelected ? "" : val;
                if (selector === '.select-acc') currentAcc = isSelected ? "" : val;
                if (selector === '.select-mode') currentMode = isSelected ? "" : val;

                updatePreview();
            };

            // Ascolta il click del mouse
            item.addEventListener('click', function() {
                toggleItem(this);
            });

            // Ascolta la tastiera (Tasto SPAZIO)
            item.addEventListener('keydown', function(event) {
                if (event.key === ' ' || event.code === 'Space') {
                    event.preventDefault(); // Evita che la pagina scorra in basso
                    toggleItem(this);
                }
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

    // 8. LOGICA RITMO (Mouse + Tastiera)
    let currentRhythm = "";
    const rhythmItems = document.querySelectorAll('.select-rhythm');
    
    rhythmItems.forEach(item => {
        const toggleRhythm = function(element) {
            const isSelected = element.classList.contains('selected');
            const val = element.getAttribute('data-val');
            rhythmItems.forEach(i => i.classList.remove('selected'));
            
            if (!isSelected) {
                element.classList.add('selected');
                currentRhythm = val;
            } else {
                currentRhythm = "";
            }
        };

        item.addEventListener('click', function() { toggleRhythm(this); });
        
        item.addEventListener('keydown', function(event) {
            if (event.key === ' ' || event.code === 'Space') {
                event.preventDefault();
                toggleRhythm(this);
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

    // 9. LOGICA LINGUA (E SBLOCCO TOTALE)
    let currentLang = "";
    const langItems = document.querySelectorAll('.select-lang');
    
    langItems.forEach(item => {
        const toggleLang = function(element) {
            const isSelected = element.classList.contains('selected');
            const val = element.getAttribute('data-val');
            langItems.forEach(i => i.classList.remove('selected'));
            
            if (!isSelected) {
                element.classList.add('selected');
                currentLang = val;
            } else {
                currentLang = "";
            }
        };

        item.addEventListener('click', function() { toggleLang(this); });
        
        item.addEventListener('keydown', function(event) {
            if (event.key === ' ' || event.code === 'Space') {
                event.preventDefault();
                toggleLang(this);
            }
        });
    });

    if (btnOkLang && stepLang && stepLyrics) {
        btnOkLang.addEventListener('click', function() {
            if (currentLang !== "") {
                stepLyrics.classList.add('active'); 
                
                if (stepTonality) {
                    stepTonality.style.opacity = '1';
                    stepTonality.style.pointerEvents = 'auto';
                    if (btnOkTonality) btnOkTonality.style.opacity = '1';
                }
                
                if (stepRhythm) {
                    stepRhythm.style.opacity = '1';
                    stepRhythm.style.pointerEvents = 'auto';
                    if (btnOkRhythm) btnOkRhythm.style.opacity = '1';
                }
                
                stepLang.style.opacity = '1';
                stepLang.style.pointerEvents = 'auto';
                btnOkLang.style.opacity = '1';

                if (typeof inputLyrics !== 'undefined' && inputLyrics) {
                    setTimeout(function() {
                        inputLyrics.focus();
                    }, 100);
                }
            } else {
                showCustomAlert("Seleziona la lingua per continuare.");
            }
        });
    }

    // 10. LOGICA TEXTAREA: 30 Caratteri

    // Forza limite di 30 caratteri (spazi inclusi) con a-capo automatico
    if (inputLyrics) {
        inputLyrics.addEventListener('input', function () {
            let cursorPosition = this.selectionStart;
            let originalText = this.value;
            let lines = originalText.split('\n');
            let formattedLines = [];

            lines.forEach(line => {
                // Se la riga supera i 30 caratteri, la spezza e la manda a capo da sola
                while (line.length > 30) {
                    formattedLines.push(line.substring(0, 30));
                    line = line.substring(30); // <--- CORRETTO QUI (era rimasto 27)
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

    // 11. LOGICA POPUP ANTEPRIMA BRANO
    // Usa querySelectorAll per prendere TUTTI i bottoni "Visualizza" della lista
    const btnsViewBrano = document.querySelectorAll('.btn-view-brano'); 
    const modalAnteprima = document.getElementById('modal-anteprima-brano');
    const btnCloseAnteprima = document.getElementById('btn-close-anteprima');

    // Apri popup cliccando su QUALSIASI bottone "Visualizza"
    if (btnsViewBrano.length > 0 && modalAnteprima) {
        btnsViewBrano.forEach(function(btn) {
            btn.addEventListener('click', function() {
                modalAnteprima.classList.add('active');
            });
        });
    }

    // Chiudi popup (cliccando la X o lo sfondo scuro)
    if (btnCloseAnteprima && modalAnteprima) {
        btnCloseAnteprima.addEventListener('click', function() {
            modalAnteprima.classList.remove('active');
        });

        modalAnteprima.addEventListener('click', function(e) {
            if (e.target === modalAnteprima) {
                modalAnteprima.classList.remove('active');
            }
        });
    }

    // 12. LOGICA FILTRI PAGINA PRINCIPALE (LIBERI E INDIPENDENTI)
    
    // --- FILTRO TONALITÀ ---
    const filterPreviewBox = document.getElementById('filter-tonality-preview');
    let filterNote = ""; let filterAcc = ""; let filterMode = "";

    function updateFilterPreview() {
        if(filterPreviewBox) {
            filterPreviewBox.textContent = filterNote + filterAcc + filterMode;
        }
    }

    function handleFilterSelection(selector) {
        const items = document.querySelectorAll(selector);
        items.forEach(item => {
            item.addEventListener('click', function() {
                const isSelected = this.classList.contains('selected');
                const val = this.getAttribute('data-val');

                items.forEach(i => i.classList.remove('selected'));
                if (!isSelected) this.classList.add('selected');

                if (selector === '.filter-note') filterNote = isSelected ? "" : val;
                if (selector === '.filter-acc') filterAcc = isSelected ? "" : val;
                if (selector === '.filter-mode') filterMode = isSelected ? "" : val;

                updateFilterPreview();
            });
        });
    }

    handleFilterSelection('.filter-note');
    handleFilterSelection('.filter-acc');
    handleFilterSelection('.filter-mode');

    // Bottone OK Filtro Tonalità
    const btnFilterTonality = document.getElementById('btn-filter-tonality');
    if (btnFilterTonality) {
        btnFilterTonality.addEventListener('click', function() {
            const tonality = filterNote + filterAcc + filterMode;
            console.log("Eseguo ricerca Tonalità per: " + tonality);
            // QUI ANDRÀ IL CODICE PHP/AJAX PER FILTRARE LA LISTA
        });
    }


    // --- FILTRO RITMO ---
    let filterRhythm = "";
    const filterRhythmItems = document.querySelectorAll('.filter-rhythm');
    
    filterRhythmItems.forEach(item => {
        item.addEventListener('click', function() {
            const isSelected = this.classList.contains('selected');
            const val = this.getAttribute('data-val');
            
            filterRhythmItems.forEach(i => i.classList.remove('selected'));
            
            if (!isSelected) {
                this.classList.add('selected');
                filterRhythm = val;
            } else {
                filterRhythm = ""; // Se lo riclicchi, lo deseleziona
            }
        });
    });

    // Bottone OK Filtro Ritmo
    const btnFilterRhythm = document.getElementById('btn-filter-rhythm');
    if (btnFilterRhythm) {
        btnFilterRhythm.addEventListener('click', function() {
            console.log("Eseguo ricerca Ritmo per: " + filterRhythm);
            // QUI ANDRÀ IL CODICE PHP/AJAX PER FILTRARE LA LISTA
        });
    }


    // --- FILTRO LINGUA ---
    let filterLang = "";
    const filterLangItems = document.querySelectorAll('.filter-lang');
    
    filterLangItems.forEach(item => {
        item.addEventListener('click', function() {
            const isSelected = this.classList.contains('selected');
            const val = this.getAttribute('data-val');
            
            filterLangItems.forEach(i => i.classList.remove('selected'));
            
            if (!isSelected) {
                this.classList.add('selected');
                filterLang = val;
            } else {
                filterLang = ""; // Se lo riclicchi, lo deseleziona
            }
        });
    });

    // Bottone OK Filtro Lingua
    const btnFilterLang = document.getElementById('btn-filter-lang');
    if (btnFilterLang) {
        btnFilterLang.addEventListener('click', function() {
            console.log("Eseguo ricerca Lingua per: " + filterLang);
            // QUI ANDRÀ IL CODICE PHP/AJAX PER FILTRARE LA LISTA
        });
    }
    
    // 14. INVIO DA TASTIERA (ENTER) UNIVERSALE
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Enter') {
            
            // Ignora l'Invio se stiamo scrivendo nel titolo o nelle lyrics
            if (document.activeElement === inputTitolo || document.activeElement === inputLyrics) {
                return; 
            }

            // --- CASO 1: POPUP NUOVO BRANO APERTO ---
            if (modalNuovoBrano && modalNuovoBrano.classList.contains('active')) {
                
                if (stepTonality && stepTonality.classList.contains('active') && stepTonality.style.pointerEvents !== 'none') {
                    event.preventDefault();
                    if (btnOkTonality) btnOkTonality.click();
                    return;
                }

                if (stepRhythm && stepRhythm.classList.contains('active') && stepRhythm.style.pointerEvents !== 'none') {
                    event.preventDefault();
                    if (btnOkRhythm) btnOkRhythm.click();
                    return;
                }

                if (stepLang && stepLang.classList.contains('active') && stepLang.style.pointerEvents !== 'none') {
                    event.preventDefault();
                    if (btnOkLang) btnOkLang.click();
                    return;
                }
                return; // Se il popup è aperto, ferma l'esecuzione qui
            }

            // --- CASO 2: FILTRI PAGINA PRINCIPALE ---
            const activeEl = document.activeElement;

            if (activeEl) {
                if (activeEl.classList.contains('filter-note') || activeEl.classList.contains('filter-acc') || activeEl.classList.contains('filter-mode')) {
                    event.preventDefault();
                    if (btnFilterTonality) btnFilterTonality.click();
                } 
                else if (activeEl.classList.contains('filter-rhythm')) {
                    event.preventDefault();
                    if (btnFilterRhythm) btnFilterRhythm.click();
                } 
                else if (activeEl.classList.contains('filter-lang')) {
                    event.preventDefault();
                    if (btnFilterLang) btnFilterLang.click();
                }
            }
        }
    });

    // 15. MEMORIA TESTO (UNDO/REDO) & QUICK TAGS
    const quickTags = document.querySelectorAll('.modal-step-lyrics__tag');
    const btnUndo = document.getElementById('btn-undo');
    const btnRedo = document.getElementById('btn-redo');
    
    // Variabili per la memoria (History Stack)
    let textHistory = [];
    let historyStep = -1;

    // Funzione che "scatta una foto" al testo e la salva in memoria
    function saveTextState() {
        if (!inputLyrics) return;
        
        // Se stiamo scrivendo qualcosa di nuovo dopo aver fatto "Annulla", cancelliamo il futuro
        if (historyStep < textHistory.length - 1) {
            textHistory = textHistory.slice(0, historyStep + 1);
        }
        
        textHistory.push({
            value: inputLyrics.value,
            start: inputLyrics.selectionStart,
            end: inputLyrics.selectionEnd
        });
        historyStep++;
    }

    if (inputLyrics) {
        // 1. Salva lo stato iniziale vuoto (appena si apre il file)
        saveTextState();

        // 2. Salva lo stato mentre l'utente digita (con un piccolo ritardo per non salvare ogni singola lettera)
        let typingTimer;
        inputLyrics.addEventListener('input', function() {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(saveTextState, 500); // Salva dopo mezzo secondo di pausa dalla scrittura
        });

        // 3. Logica Inserimento Parole Rapide (Verso, Ritornello, ecc.)
        if (quickTags.length > 0) {
            quickTags.forEach(tag => {
                tag.addEventListener('click', function() {
                    const wordToInsert = this.textContent + "\n\n";
                    const startPos = inputLyrics.selectionStart;
                    const endPos = inputLyrics.selectionEnd;
                    const textBefore = inputLyrics.value.substring(0, startPos);
                    const textAfter = inputLyrics.value.substring(endPos, inputLyrics.value.length);
                    
                    inputLyrics.value = textBefore + wordToInsert + textAfter;
                    inputLyrics.selectionStart = inputLyrics.selectionEnd = startPos + wordToInsert.length;
                    inputLyrics.focus();
                    
                    // FONDAMENTALE: Salva lo stato sùbito dopo aver inserito la parola automatica!
                    saveTextState();
                });
            });
        }

        // 4. Bottone ANNULLA (Torna indietro)
        if (btnUndo) {
            btnUndo.addEventListener('click', function(e) {
                e.preventDefault(); // Evita strani salti della pagina
                if (historyStep > 0) {
                    historyStep--;
                    const state = textHistory[historyStep];
                    inputLyrics.value = state.value;
                    inputLyrics.selectionStart = state.start;
                    inputLyrics.selectionEnd = state.end;
                    inputLyrics.focus();
                }
            });
        }

        // 5. Bottone RIPRISTINA (Vai avanti)
        if (btnRedo) {
            btnRedo.addEventListener('click', function(e) {
                e.preventDefault();
                if (historyStep < textHistory.length - 1) {
                    historyStep++;
                    const state = textHistory[historyStep];
                    inputLyrics.value = state.value;
                    inputLyrics.selectionStart = state.start;
                    inputLyrics.selectionEnd = state.end;
                    inputLyrics.focus();
                }
            });
        }
    }
});