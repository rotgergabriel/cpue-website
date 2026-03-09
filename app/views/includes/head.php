<?php
// ==========================================
// ✅ 1. NIENTE SESSIONI QUI
// ==========================================
// Rimosso session_start() da qui per evitare il fatidico errore che spaccava il server. 
// Ora ci pensa l'index.php universale.

// ==========================================
// ✅ 2. GESTIONE INATTIVITÀ E LOGOUT
// ==========================================
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) { ?>
    <script>
        // CORRETTO: Ora punta al vigile urbano (la rotta), non alla cartella nascosta
        const JS_LOGOUT_URL = "<?php echo BASE_URL; ?>logout";
    </script>
    <script src="<?php echo BASE_URL; ?>public/js/inactivity.js" defer></script>
<?php } ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php
// ==========================================
// 🚀 3. SCUDO SEO (DINAMICO E BLINDATO!)
// ==========================================
// Nascondiamo la pagina a Google SE:
// A) Sei sul Mac OS locale ($is_dev_env)
// B) Qualcuno è loggato nell'area privata (Dashboard/Repertorio)
if ((isset($is_dev_env) && $is_dev_env === true) || (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true)) {
    echo '<meta name="robots" content="noindex, nofollow">';
} else {
    // Se siamo online e nell'area pubblica, diamo il via libera a Google
    echo '<meta name="robots" content="index, follow">';
}
?>

<meta name="description" content="<?php echo $meta_description ?? ''; ?>">
<title><?php echo $head_title ?? 'CPUE Italia'; ?></title>

<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/reset.css">
<link rel="stylesheet" href="<?php echo BASE_URL; ?>public/css/style.css">

<link rel="icon" type="image/webp" href="<?php echo BASE_URL; ?>public/assets/icons/favicon.webp">
<link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>public/assets/icons/icona-touch.png">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Roboto:wght@400;700&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap"
    rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">