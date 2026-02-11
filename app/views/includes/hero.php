<?php
$imageName = isset($heroImage) ? $heroImage : 'hero-img.png';
$titleName = isset($heroTitle) ? $heroTitle : 'Chiesa Pentecostale Unita in Europa';
?>
<section class="hero <?php echo $heroModifier ?>">
    <div class="hero__container">
        <div class="hero__spacer"></div>
        <div class="hero__body">
            <img src="<?= BASE_URL ?>public/assets/img/<?php echo $imageName; ?>"
                alt="Costruendo sulla roccia"
                class="hero__img">
        </div>
        <div class="hero__title">
            <h1><?php echo $titleName; ?></h1>
        </div>
    </div>
</section>