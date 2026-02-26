<?php
require_once '../app/config/config.php';

$head_title = $site_config['head']['home']['title'];
$meta_description = $site_config['head']['home']['meta-description'];
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
        <?php include ROOT_PATH . 'app/views/includes/hero.php'; ?>
        <!-- Hero section end -->
    </header>

    <div class="layout">
        <main>
            <!-- Board section start -->
            <?php include ROOT_PATH . 'app/views/includes/board.php'; ?>
            <!-- Board section end -->

            <!-- Info-card section start -->
            <?php include ROOT_PATH . 'app/views/includes/info-card.php'; ?>
            <!-- Info-card section end -->

            <!-- Contact section start -->
            <?php include ROOT_PATH . 'app/views/includes/contact.php'; ?>
            <!-- Contact section end -->

            <!-- Cult-locations section start -->
            <?php include ROOT_PATH . 'app/views/includes/cult-locations.php'; ?>
            <!-- Cult-locations section end -->
            
            <!-- Find us section start -->
            <?php include ROOT_PATH . 'app/views/includes/find-us.php'; ?>
            <!-- Find us section end -->
        </main>
    </div>

    <footer class="footer">
        <?php include ROOT_PATH . 'app/views/includes/footer.php'; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo BASE_URL ?>public/js/script.js"></script>
</body>

</html>