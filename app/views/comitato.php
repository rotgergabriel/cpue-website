<?php
require_once '../app/config/config.php';

$comitatiId = $_GET['id'] ?? '';

if (isset($comitati[$comitatiId])) {
    $comitato_data = $comitati[$comitatiId];
} else {
    header("Location: " . BASE_URL);
    exit;
}

$head_title = $comitato_data['info']['title'];
$meta_description = $comitato_data['info']['meta-description'];
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
        <main class="comitato-page">

            <?php if (!empty($comitato_data['info'])) { ?>
                <div class="comitato__header">
                    <span class="comitato__label">Comitato</span>
                    <?php if (!empty($comitato_data['info']['title'])) { ?>
                        <h1 class="comitato__title"><?php echo $comitato_data['info']['title'] ?></h1>
                    <?php } ?>

                    <div class="comitato__intro">
                        <?php if (!empty($comitato_data['info']['image'])) { ?>
                            <img src="<?php echo BASE_URL ?>public/assets/img/<?php echo $comitato_data['info']['image'] ?>"
                                alt="<?php echo $comitato_data['info']['title'] ?? 'Immagine comitato' ?>"
                                class="comitato__intro-img">
                        <?php } ?>

                        <?php if (!empty($comitato_data['info']['description'])) { ?>
                            <p class="comitato__desc">
                                <?php echo $comitato_data['info']['description'] ?>
                            </p>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>

            <?php if (!empty($comitato_data['events_section'])) { ?>
                <div class="comitato__events">
                    <?php if (!empty($comitato_data['events_section']['title'])) { ?>
                        <h3 class="comitato__events-title"><?php echo $comitato_data['events_section']['title'] ?></h3>
                    <?php } ?>

                    <?php if (!empty($comitato_data['events_section']['list'])) { ?>
                        <div class="comitato__events-grid">
                            <?php foreach ($comitato_data['events_section']['list'] as $event) { ?>
                                <div class="comitato__event-card">
                                    <?php if (!empty($event['title'])) { ?>
                                        <h4><?php echo $event['title'] ?></h4>
                                    <?php } ?>

                                    <?php if (!empty($event['desc'])) { ?>
                                        <ul>
                                            <li><?php echo $event['desc'] ?></li>
                                        </ul>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>

            <?php if (!empty($comitato_data['director'])) { ?>
                <div class="comitato__director-box">
                    <?php if (!empty($comitato_data['director']['description'])) { ?>
                        <p class="comitato__greeting">
                            "<?php echo $comitato_data['director']['description'] ?>"
                        </p>
                    <?php } ?>

                    <?php if (!empty($comitato_data['director']['name'])) { ?>
                        <p class="comitato__director-name">
                            <strong><?php echo $comitato_data['director']['name'] ?></strong>
                        </p>
                    <?php } ?>

                    <?php if (!empty($comitato_data['director']['role'])) { ?>
                        <p class="comitato__director-a">
                            <?php echo $comitato_data['director']['role'] ?>
                        </p>
                    <?php } ?>
                </div>

                <?php if (!empty($comitato_data['director']['whatsapp'])) { ?>
                    <div class="comitato__contact">
                        <a href="https://wa.me/<?php echo $comitato_data['director']['whatsapp'] ?>" target="_blank" class="comitato__contact-btn">
                            <svg viewBox="0 0 448 512" class="comitato__wa-icon">
                                <path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.1 0-65.6-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-5.5-2.8-23.2-8.5-44.2-27.1-16.4-14.6-27.4-32.7-30.6-38.2-3.2-5.6-.3-8.6 2.5-11.3 2.5-2.5 5.6-6.5 8.3-9.7 2.8-3.3 3.7-5.6 5.6-9.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 13.2 5.8 23.5 9.2 31.5 11.8 13.3 4.2 25.4 3.6 35 2.2 10.7-1.5 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg>
                            <span>Chiamaci</span>
                        </a>
                    </div>
                <?php } ?>
            <?php } ?>

        </main>
    </div>

    <footer class="footer">
        <?php include ROOT_PATH . 'app/views/includes/footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL ?>public/js/script.js"></script>
</body>
</html>