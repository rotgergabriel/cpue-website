<?php
$imageName = !empty($heroImage) ? $heroImage : 'hero-img.png';
$titleName = !empty($heroTitle) ? $heroTitle : 'Chiesa Pentecostale Unita in Europa';
?>
<section class="hero <?php echo $heroModifier ?? ''; ?>">
    <div class="hero__container">
        <div class="hero__spacer"></div>
        <div class="hero__body">
            <img src="<?= BASE_URL ?>public/assets/img/<?php echo $imageName; ?>"
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
        </div>
    </div>
</section>