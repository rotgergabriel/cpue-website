<?php
// 1. Inclusione script di manutenzione
// Cerca il file nella cartella 'public' (accanto all'index.php che esegue questo script)
if (file_exists('./manutenzioni.php')) {
    include './manutenzioni.php';
}

// 2. Logica unificata delle variabili
$finalTitle = $title ?? $pageTitle ?? 'Chiesa Pentecostale Unita in Europa';
$finalDesc = $meta_description ?? $pageDescription ?? 'Associazione Chiesa Pentecostale Unita in Europa - Promuoviamo la fede cristiana.';
$extra_css = $extra_css ?? null;
$bodyClass = $bodyClass ?? '';
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="<?= htmlspecialchars($finalDesc) ?>">
    <title><?= htmlspecialchars($finalTitle) ?></title>

    <?php if (!empty($canonicalUrl)): ?>
        <link rel="canonical" href="<?= htmlspecialchars(trim($canonicalUrl)) ?>">
    <?php endif; ?>

    <link rel="shortcut icon" href="<?= BASE_URL ?>public/assets/img/favicon.ico" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/reset.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>public/css/style.css">

    <?php if (!empty($extra_css)): ?>
        <link rel="stylesheet" href="<?= BASE_URL ?>public/css/<?= $extra_css ?>">
    <?php endif; ?>
</head>

<body class="<?= htmlspecialchars($bodyClass) ?>">