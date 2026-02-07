<section class="contact">
    <div class="contact__container">

        <div class="contact__col contact__col--form">

            <h2 class="contact__title">Mettiamoci in Contatto</h2>
            <p class="contact__subtitle">Per qualsiasi domanda, scrivici!</p>

            <form action="#" method="POST" class="contact__form">
                <input type="text" class="contact__input" name="nome" placeholder="Nome" required>

                <input type="email" class="contact__input" name="email" placeholder="email@example.it" required>

                <textarea class="contact__input contact__input--textarea" name="messaggio" placeholder="Scrivi un messaggio..."></textarea>

                <div class="contact__privacy">
                    <input type="checkbox" id="privacy-policy" name="privacy_consent" class="contact__privacy-input" required>
                    <label for="privacy-policy" class="contact__privacy-label">
                        Ho letto e accetto la <a href="/privacy-policy" target="_blank" class="contact__privacy-link">Privacy Policy</a>
                    </label>
                </div>

                <button type="submit" class="contact__button">
                    <span class="contact__button-text">INVIA IL TUO MESSAGGIO</span>
                </button>
            </form>

        </div>

        <div class="contact__col contact__col--map">

            <a href="https://www.google.com/maps/search/?api=1&query=Via+delle+Camelie,+19,+20095+Cusano+Milanino+MI" target="_blank" class="contact__map-box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.123456789!2d9.180000!3d45.550000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786be9a0a0a0a0a%3A0x0!2sVia+delle+Camelie%2C+19%2C+20095+Cusano+Milanino+MI!5e0!3m2!1sit!2sit!4v1600000000000!5m2!1sit!2sit"
                    class="contact__map-frame"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </a>

            <div class="contact__info contact__info--address">
                <img src="<?= BASE_URL ?>public/assets/img/position.svg" alt="Indirizzo" class="contact__icon">
                <span class="contact__text">Via delle Camelie, 19, 20095 Cusano Milanino MI</span>
            </div>

            <div class="contact__info">
                <img src="<?= BASE_URL ?>public/assets/img/phone.svg" alt="Telefono" class="contact__icon">
                <span class="contact__text">+39 349 463 7023</span>
            </div>

        </div>

    </div>
</section>