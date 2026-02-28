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
                        Ho letto e accetto la <a href="<?php echo BASE_URL ?>privacy" target="_blank" class="contact__privacy-link">Privacy Policy</a>
                    </label>
                </div>

                <button type="submit" class="contact__button">
                    <span class="contact__button-text">INVIA IL TUO MESSAGGIO</span>
                </button>
            </form>

        </div>

        <div class="contact__col contact__col--map">

            <a href="https://www.google.com/maps/search/?api=1&query=CHIESA+PENTECOSTALE+UNITÀ+IN+EUROPA+(Milano)+Cusano+Milanino" target="_blank" class="contact__map-box">
                <iframe
                    src="https://maps.google.com/maps?q=CHIESA+PENTECOSTALE+UNITÀ+IN+EUROPA+(Milano),+Via+delle+Camelie,+19,+Cusano+Milanino&t=&z=15&ie=UTF8&iwloc=&output=embed"
                    class="contact__map-frame"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </a>

            <div class="contact__info contact__info--address">
                <img src="<?php echo BASE_URL ?>public/assets/img/position.svg" alt="Indirizzo" class="contact__icon">
                <a href="https://maps.google.com/?cid=7403801825769057566&g_mp=Cidnb29nbGUubWFwcy5wbGFjZXMudjEuUGxhY2VzLlNlYXJjaFRleHQ" target="_blank" style="text-decoration: none; color: inherit;">
                    Via delle Camelie, 19, 20095 Cusano Milanino MI
                </a>
            </div>

            <div class="contact__info">
                <img src="<?php echo BASE_URL ?>public/assets/img/phone.svg" alt="Telefono" class="contact__icon">
                <a href="tel:+393494637023" class="contact__text" style="text-decoration: none; color: inherit;">+39 349 463 7023</a>
            </div>

        </div>

    </div>
</section>