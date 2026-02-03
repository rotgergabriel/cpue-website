<footer class="footer">

<!-- Colonna 1 -->
<section class="footer__section footer__section--legal">
  <h3 class="footer__title">CHI SIAMO</h3>
  
  <div class="footer__info-group">
    <p class="footer__item">
      <a href="/index.php" class="footer__link">
        <strong>Chiesa Pentecostale Unita in Europa</strong>
      </a>
    </p>
    
    <p class="footer__item">
      <a href="https://www.google.com/maps/search/?api=1&query=Via+Nomentana+859F+00137+Roma" 
         target="_blank" rel="noopener noreferrer" class="footer__link">
        Via Nomentana 859/F, 00137 Roma (RM)
      </a>
    </p>
    
    <p class="footer__item">Codice Fiscale: <br> 94180790480</p>
    
    <p class="footer__item">
    Contatti WhatsApp:<br>
    <a href="https://wa.me/393494637023" class="footer__link" target="_blank">+39 349 463 7023</a><br>
    <a href="https://wa.me/393881721404" class="footer__link" target="_blank">+39 388 172 1404</a><br>
    <a href="https://wa.me/393278568853" class="footer__link" target="_blank">+39 327 856 8853</a>
    </p>
    
    <p class="footer__item">
      Email: <a href="mailto:info@cpue.it" class="footer__link">info@cpue.it</a>
    </p>
  </div>
</section>


<!-- Colonna 2 -->
<section class="footer__section footer__section--social">
  <h3 class="footer__title">Social Network</h3>

  <div class="footer__social-icons">
    
    <a href="https://www.facebook.com/cpueitalia" target="_blank" rel="noopener noreferrer" class="footer__social-link">
      <img src="<?php echo $path; ?>assets/facebook.svg" alt="Facebook CPUE" class="footer__icon" loading="lazy">
    </a>

    <a href="https://www.instagram.com/cpue_italia" target="_blank" rel="noopener noreferrer" class="footer__social-link">
      <img src="<?php echo $path; ?>assets/instagram.svg" alt="Instagram CPUE" class="footer__icon">
    </a>

    <a href="https://www.youtube.com/@CpueItalia" target="_blank" rel="noopener noreferrer" class="footer__social-link">
      <img src="<?php echo $path; ?>assets/youtube.svg" alt="YouTube CPUE" class="footer__icon">
    </a>

    <a href="https://wa.me/393494637023" class="footer__social-link">
    <img src="<?php echo $path; ?>assets/whatsapp.svg" alt="WhatsApp CPUE" class="footer__icon">
    </a>

    
    <a href="<?php echo $path; ?>index.php" class="footer__logo-link" title="Torna alla Home">
        <img  
          src="<?php echo $path; ?>assets/logo-main.webp" 
          class="footer__img"
          alt="Logo Chiesa Pentecostale Unita in Europa"
        >        
    </a>


  </div>
</section>




<!-- Colonna 3 -->
<section class="footer__section footer__section--menu">
  <h3 class="footer__title">MAIN MENU</h3>
  
  <nav class="footer__info-group" aria-label="Menu Footer">
    <ul class="footer__list" style="list-style: none; padding: 0; margin: 0;">
      
      <li class="footer__item">
        <a href="/index.php" class="footer__link">Home Page</a>
      </li>
            
      <li class="footer__item">
        <a href="/index.php" class="footer__link">Le nostre Chiese</a>
      </li>

      <li class="footer__item">
        <a href="/index.php" class="footer__link">Comitati</a>
      </li>
      
      <li class="footer__item">
        <a href="/index.php" class="footer__link">Eventi e News</a>
      </li>

      <li class="footer__item">
        <a href="/index.php" class="footer__link">Storia CPUE</a>
      </li>

      <li class="footer__item">
        <a href="/index.php" class="footer__link">Risorse Gratuite</a>
      </li>      

      <li class="footer__item">
        <a href="/index.php" class="footer__link">Galleria Fotografica</a>
      </li>

    </ul>
  </nav>
</section>





<!--bottom Footer-->
<section class="footer__bottom">
  <div class="footer__legal-links" style="margin-top: 20px;">
    <p class="footer__item">
      <a href="/index.php" class="footer__link">Privacy Policy</a> | 
      <a href="/index.php" class="footer__link">Cookie Policy</a>
    </p>
  </div>
  <p class="footer__bottom-text">© 2024 Associazione Chiesa Pentecostale Unita in Europa. Tutti i diritti riservati.</p>
  <p class="footer__credits">
    Sviluppato da: <strong>Gabriel Rotger</strong> & <strong>Jonh Torres Garcia</strong>
  </p>
</section>  


</footer>

<?php include 'end.php'; ?>