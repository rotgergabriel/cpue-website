document.addEventListener('DOMContentLoaded', function() {
    
    // 1. Seleziona tutti gli elementi che hanno la classe del titolo
    const accordions = document.querySelectorAll('.footer__accordion-header');

    // 2. Per ogni titolo trovato, aggiungiamo un "ascoltatore" del click
    accordions.forEach(function(accordion) {
        accordion.addEventListener('click', function() {
            
            // (Opzionale) Controllo: se lo schermo è grande (> 768px), non fare nulla
            if (window.innerWidth > 768) return;

            // 3. Toggle della classe 'active' sul titolo cliccato
            // (Serve per far ruotare l'icona + tramite CSS)
            this.classList.toggle('active');

            // 4. Seleziona l'elemento successivo (il contenuto nascosto)
            const content = this.nextElementSibling;

            // 5. Toggle della classe 'active' sul contenuto
            // (Serve per mostrare il testo tramite CSS max-height)
            if (content) {
                content.classList.toggle('active');
            }
        });
    });
});