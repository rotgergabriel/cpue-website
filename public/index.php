<?php
// 1. Carga de configuración global
require_once '../app/config/config.php';

// 2. Metadatos de la página
$title = "Chiesa Pentecostale Unita in Europa – Un solo Signore, una sola Fede, un solo Battesimo.";
$meta_description = "Chiesa Pentecostale Unita in Europa – Un solo Signore, una sola Fede, un solo Battesimo. Efesini 4:5";
?>
<?php
// 1. Carga de configuración global
require_once '../app/config/config.php';

// 2. Metadatos de la página
$title = "Chiesa Pentecostale Unita in Europa – Un solo Signore, una sola Fede, un solo Battesimo.";
$meta_description = "Chiesa Pentecostale Unita in Europa – Un solo Signore, una sola Fede, un solo Battesimo. Efesini 4:5";
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <?php include ROOT_PATH . 'app/views/includes/head.php'; ?>
</head>

<body>
    <?php include ROOT_PATH . 'app/views/includes/header.php'; ?>
    <div class="layout">
        <main></main>
    </div>
    <?php include ROOT_PATH . 'app/views/includes/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASE_URL ?>public/js/script.js"></script>
</body>

</html>