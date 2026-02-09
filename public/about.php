<?php
require_once '../app/config/config.php';

$title = "Chi siamo - Chiesa Pentecostale Unita in Europa";
$meta_description = "Chiesa Pentecostale Unita in Europa – Un solo Signore, una sola Fede, un solo Battesimo. Efesini 4:5";
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <?php include ROOT_PATH . 'app/views/includes/head.php'; ?>
</head>

<body>
    <header>
        <!-- Navbar section start -->
        <?php include ROOT_PATH . 'app/views/includes/navbar.php'; ?>
        <!-- Navbar section end -->

        <!-- Hero section start -->
        <?php include ROOT_PATH . 'app/views/includes/hero-about.php'; ?>
        <!-- Hero section end -->
    </header>

    <div class="layout">
        <main>

            <!-- About-intro section start -->
            <?php include ROOT_PATH . 'app/views/includes/about-intro.php'; ?>
            <!-- About-intro section end -->

        </main>
    </div>

    <footer class="footer">
        <?php include ROOT_PATH . 'app/views/includes/footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>public/js/script.js"></script>
</body>

</html>