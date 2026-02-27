<?php
require_once '../app/config/config.php';

$cityId = $_GET['id'] ?? '';

if (isset($cities[$cityId])) {
    $city = $cities[$cityId];
} else {
    header("Location: " . BASE_URL);
    exit;
}

$head_title = $city['hero']['title'] . " - CPUE Italia";
$meta_description = "Sede di " . $city['hero']['title'];
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <?php include ROOT_PATH . 'app/views/includes/head.php'; ?>
</head>

<body>
    <header>
        <?php include ROOT_PATH . 'app/views/includes/navbar.php'; ?>
    </header>

    <div class="layout">
        <main>
            <section class="milano">

                <?php if (!empty($city['hero'])) { ?>
                    <div class="milano__banner" style="background-image: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?php echo BASE_URL ?>public/assets/img/<?php echo $city['hero']['image'] ?>');">
                        <a href="https://www.google.com/maps/search/?api=1&query=Via+delle+Camelie,+19,+20095+Cusano+Milanino+MI" target="_blank" class="milano__button">
                            <span class="milano__text"><?php echo $city['hero']['title'] ?></span>
                        </a>
                    </div>
                <?php } ?>

                <?php if (!empty($city['social_media'])) { ?>
                    <div class="milano__social-bar">

                        <?php if (!empty($city['social_media']['youtube'])) { ?>
                            <a href="<?php echo $city['social_media']['youtube'] ?>" target="_blank" class="milano__social-link" title="YouTube">
                                <img src="<?php echo BASE_URL ?>public/assets/icons/youtube.svg" alt="YouTube" class="milano__social-icon">
                            </a>
                        <?php } ?>

                        <?php if (!empty($city['social_media']['facebook'])) { ?>
                            <a href="<?php echo $city['social_media']['facebook'] ?>" target="_blank" class="milano__social-link" title="Facebook">
                                <img src="<?php echo BASE_URL ?>public/assets/icons/facebook.svg" alt="Facebook" class="milano__social-icon">
                            </a>
                        <?php } ?>

                        <?php if (!empty($city['social_media']['instagram'])) { ?>
                            <a href="<?php echo $city['social_media']['instagram'] ?>" target="_blank" class="milano__social-link" title="Instagram">
                                <img src="<?php echo BASE_URL ?>public/assets/icons/instagram.svg" alt="Instagram" class="milano__social-icon">
                            </a>
                        <?php } ?>

                        <?php if (!empty($city['social_media']['whatsapp'])) { ?>
                            <a href="<?php echo $city['social_media']['whatsapp'] ?>" target="_blank" class="milano__social-link" title="WhatsApp">
                                <svg viewBox="0 0 448 512" class="milano__social-icon milano__social-icon--wa">
                                    <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.1 0-65.6-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.5-11.3 2.5-2.5 5.6-6.5 8.3-9.7 2.8-3.3 3.7-5.6 5.6-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                                </svg>
                            </a>
                        <?php } ?>

                        <?php if (!empty($city['social_media']['phone'])) { ?>
                            <a href="tel:<?php echo $city['social_media']['phone'] ?>" class="milano__social-link" title="Chiamaci">
                                <img src="<?php echo BASE_URL ?>public/assets/icons/phone.svg" alt="Telefono" class="milano__social-icon">
                            </a>
                        <?php } ?>

                        <?php if (!empty($city['social_media']['maps'])) { ?>
                            <a href="<?php echo $city['social_media']['maps'] ?>" target="_blank" class="milano__social-link" title="Visualizza su Google Maps">
                                <img src="<?php echo BASE_URL ?>public/assets/icons/map-icon.svg" alt="Mappa" class="milano__social-icon">
                            </a>
                        <?php } ?>
                    </div>
                <?php } ?>

                <?php if (!empty($city['info_box'])) { ?>
                    <div class="milano__info">
                        <?php foreach ($city['info_box'] as $info) { ?>
                            <p class="milano__info-row">
                                <span class="milano__info-label"><?php echo $info['label'] ?></span>
                                <span class="milano__info-value"><?php echo $info['content'] ?></span>
                            </p>
                        <?php } ?>
                    </div>
                <?php } ?>

                <?php if (!empty($city['welcome_quote']['text'])) { ?>
                    <div class="milano__quote-container">
                        <div class="milano__quote-icon-wrapper">
                            <img src="<?php echo BASE_URL ?>public/assets/img/virgolette.svg" alt="Virgolette" class="milano__quote-icon">
                        </div>
                        <p class="milano__quote-text">
                            <?php echo $city['welcome_quote']['text'] ?>
                        </p>
                    </div>
                <?php } ?>

                <?php if (!empty($city['support_section'])) { ?>
                    <section class="milano__message">
                        <div class="milano__message-container">
                            <h2 class="milano__message-title"><?php echo $city['support_section']['title'] ?></h2>
                            <div class="milano__message-content">
                                <?php foreach ($city['support_section']['content'] as $support_message) { ?>
                                    <p class="milano__message-text">
                                        <?php echo $support_message ?>
                                    </p>
                                <?php } ?>
                            </div>
                        </div>
                    </section>
                <?php } ?>

                <?php if (!empty($city['services']['list'])) { ?>
                    <div class="milano__services">
                        <div class="milano__services-header">
                            <h2 class="milano__services-title"><?php echo $city['services']['service_title'] ?></h2>
                            <p class="milano__services-subtitle">
                                <?php echo $city['services']['service_subtitle'] ?>
                            </p>
                        </div>
                        <div class="milano__services-grid">
                            <?php foreach ($city['services']['list'] as $service) { ?>
                                <div class="milano__service-card">
                                    <h3 class="milano__service-title"><?php echo $service['title'] ?></h3>
                                    <p class="milano__service-text">
                                        <?php echo $service['description'] ?>
                                    </p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>

                <?php if (!empty($city['board'])) { ?>
                    <div class="milano__pastor">
                        <div class="milano__pastor-container">
                            <div class="milano__pastor-img-box">
                                <img src="<?php echo BASE_URL ?>public/assets/img/<?php echo $city['board']['pastor_image'] ?>" alt="Famiglia Pastorale" class="milano__pastor-img">
                            </div>
                            <div class="milano__pastor-content">
                                <?php if (!empty($city['board']['welcome_text']) && is_array($city['board']['welcome_text'])) {
                                    foreach ($city['board']['welcome_text'] as $paragraph) { ?>
                                        <p class="milano__pastor-desc">
                                            <?php echo $paragraph; ?>
                                        </p>
                                <?php }
                                } ?>
                                <h3 class="milano__pastor-name"><?php echo $city['board']['pastor_name'] ?></h3>
                                <p class="milano__pastor-role"><?php echo $city['board']['pastor_role'] ?></p>
                                <a href="tel:<?php echo $city['board']['phone'] ?>" class="milano__phone-link" title="Chiama ora">
                                    <img src="<?php echo BASE_URL ?>public/assets/icons/phone.svg" alt="Telefono" class="milano__phone-icon">
                                    <span class="milano__phone-number"><?php echo $city['board']['phone'] ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if (!empty($city['city_description'])) { ?>
                    <div class="milano__city">
                        <div class="milano__city-container">
                            <div class="milano__city-img-box">
                                <img src="<?php echo BASE_URL ?>public/assets/img/<?php echo $city['city_description']['map_image'] ?>" alt="Mappa" class="milano__city-img">
                            </div>
                            <div class="milano__city-content">
                                <h3 class="milano__city-title"><?php echo $city['city_description']['title'] ?></h3>
                                <?php if (!empty($city['city_description']['content']) && is_array($city['city_description']['content'])) {
                                    foreach ($city['city_description']['content'] as $paragraph) { ?>
                                        <p class="milano__city-desc">
                                            <?php echo $paragraph ?>
                                        </p>
                                <?php }
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if (!empty($city['info_block'])) { ?>
                    <section class="milano__message info_block">
                        <div class="milano__message-container">
                            <h2 class="milano__message-title"><?php echo $city['info_block']['title'] ?></h2>
                            <div class="milano__message-content">
                                <?php foreach ($city['info_block']['content'] as $support_message) { ?>
                                    <p class="milano__message-text">
                                        <?php echo $support_message ?>
                                    </p>
                                <?php } ?>
                            </div>
                        </div>
                    </section>
                <?php } ?>

                <?php if (!empty($city['gallery'])) { 
                    $gallery = $city['gallery'];
                    $total = count($gallery); 
                ?>
                    <section class="gallery-container">
                        <div id="cityCarousel" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-indicators">
                                <?php foreach ($gallery as $i => $img) { ?>
                                    <button type="button" data-bs-target="#cityCarousel" data-bs-slide-to="<?php echo $i ?>"
                                        class="<?php echo $i === 0 ? 'active' : '' ?>" aria-current="<?php echo $i === 0 ? 'true' : 'false' ?>"
                                        aria-label="Slide <?php echo $i + 1 ?>"></button>
                                <?php } ?>
                            </div>

                            <div class="carousel-inner">
                                <?php foreach ($gallery as $index => $name): ?>
                                    <div class="carousel-item <?php echo $index === 0 ? 'active' : '' ?>">
                                        <div class="row g-2">
                                            <?php 
                                            for ($step = 0; $step < 3; $step++): 
                                                $img_idx = ($index + $step) % $total;
                                                $current_img = $gallery[$img_idx];
                                            ?>
                                                <div class="col-4">
                                                    <img src="<?php echo BASE_URL; ?>public/assets/img/<?php echo $current_img; ?>"
                                                        class="d-block w-100 gallery-img" 
                                                        alt="Galleria <?php echo $city['hero']['title']; ?>">
                                                </div>
                                            <?php endfor; ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            
                            <button class="carousel-control-prev" type="button" data-bs-target="#cityCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Precedente</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#cityCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Successivo</span>
                            </button>

                        </div>
                    </section>
                <?php } ?>

            </section>
        </main>
    </div>
    <footer class="footer">
        <?php include ROOT_PATH . 'app/views/includes/footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL ?>public/js/script.js"></script>
</body>

</html>