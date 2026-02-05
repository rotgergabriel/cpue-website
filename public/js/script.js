document.addEventListener('DOMContentLoaded', function() {
    
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