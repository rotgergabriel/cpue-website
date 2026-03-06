<?php
$imageName = !empty($heroImage) ? $heroImage : 'hero-img.png';
$titleName = !empty($heroTitle) ? $heroTitle : 'Chiesa Pentecostale Unita in Europa';
?>
<section class="hero <?php echo $heroModifier ?? ''; ?>">
    <div class="hero__container">
        <div class="hero__spacer"></div>
        <div class="hero__body">
            <img src="<?php echo BASE_URL ?>public/assets/img/<?php echo $imageName; ?>"
                alt="Costruendo sulla roccia"
                class="hero__img">
        </div>

        <div class="hero__title">
            <h1>
                <?php echo $titleName; ?>
            </h1>

            <?php if (!empty($heroSubtitle)) { ?>
                <h2 class="projection-hero__title projection-hero__title--bold">
                    <?php echo $heroSubtitle; ?>
                </h2>
            <?php } ?>

            <?php if (!empty($heroQuote)) { ?>
                <p class="projection-hero__quote">
                    <?php echo $heroQuote; ?>
                </p>
            <?php } ?>

            <?php if (!empty($heroVerse)) { ?>
                <p class="projection-hero__verse">
                    <?php echo $heroVerse; ?>
                </p>
            <?php } ?>

            <?php if (!empty($heroBtnText)) { ?>
                <a href="<?php echo $heroBtnLink ?? '#'; ?>" class="projection-hero__button">
                    <?php echo $heroBtnText; ?>
                </a>
            <?php } ?>

            <?php if (!empty($statusPopup)) { ?>
                <article class="event-card">
                    <a type="button" class="event-card__close">&times;</a>
                    <header class="event-card__header">
                        <span class="event-card__org"><?php echo $titlePopup ?></span>
                        <h1 class="event-card__title"><?php echo $subtitlePopup ?></h1>
                    </header>

                    <div class="event-card__date-container">
                        <div class="event-card__days"><?php echo $daysPopup ?></div>
                        <div class="event-card__month-city">
                            <span class="event-card__month"><?php echo $monthPopup ?></span>
                            <span class="event-card__city"><?php echo $cityPopup ?></span>
                        </div>
                    </div>

                    <div class="event-card__schedule-box">
                        <?php foreach ($schedulePopup as $index => $schedule) {
                            $parts = explode('-', $schedule);
                            $day = trim($parts[0]);
                            $time = isset($parts[1]) ? trim($parts[1]) : '';
                        ?>
                            <div class="event-card__schedule-item">
                                <div class="event-card__schedule-day"><?php echo strtoupper($day) ?></div>
                                <div class="event-card__schedule-time"><?php echo $time ?></div>
                                <?php if ($index < count($schedulePopup) - 1) { ?>
                                    <hr class="event-card__divider">
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>

                    <footer class="event-card__footer">
                        <img class="event-card__location-icon" src="<?php echo BASE_URL ?>public/assets/img/<?php echo $locationPopup['icon'] ?>" alt="Map Icon">
                        <address class="event-card__address">
                            <strong><?php echo $locationPopup['venue'] ?></strong> | <?php echo $locationPopup['address'] ?>
                        </address>
                    </footer>
                </article>
            <?php } ?>
        </div>
    </div>
</section>