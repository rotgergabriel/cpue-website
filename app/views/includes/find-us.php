<?php
require_once '../app/config/config.php';
?>

<?php if (!empty($cities)) { ?>
    <section class="find-us">
        <?php foreach ($cities as $card) { ?>
            <div class="location-card">
                <div class="location-card__main-content">
                    <div class="location-card__icon-container">
                        <a href="" class="location-card__icon-link">
                            <img src="<?php echo BASE_URL ?>public/assets/img/location-icon.svg" alt="Location Map Pin" class="location-card__map-icon">
                        </a>
                    </div>
                    <div class="location-card__text-group">
                        <h3 class="location-card__city"><?php echo $card['hero']['title'] ?></h3>
                        <p class="location-card__role"><?php echo $card['card_info']['role'] ?></p>
                        <p class="location-card__name"><?php echo $card['card_info']['name'] ?></p>
                        <p class="location-card__name"><?php echo $card['card_info']['phone'] ?></p>
                    </div>
                </div>
                <div class="location-card__action">
                    <?php $phone_number_clean = preg_replace('/[^0-9+]/', '', $card['card_info']['phone']); ?>
                    <a href="tel:<?php echo $phone_number_clean ?>" class="location-card__call-button">
                        <img src="<?php echo BASE_URL ?>public/assets/img/call-icon.svg" alt="Call Phone Icon" class="location-card__phone-icon">
                    </a>
                </div>
            </div>
        <?php } ?>

        <div class="location-card location-card--last">
            <div class="location-card__main-content">
                <div class="location-card__icon-container">
                    <a href="<?php echo BASE_URL ?>proiezione" class="location-card__icon-link">
                        <img src="<?php echo BASE_URL ?>public/assets/img/location-icon-yellow.svg" alt="Location Map Pin" class="location-card__map-icon">
                    </a>
                </div>
                <div class="location-card__text-group">
                    <a href="<?php echo BASE_URL ?>proiezione">
                        <h3 class="location-card__city">Opere in proiezione</h3>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php } ?>