<?php
require_once '../app/config/config.php';

$head_title = 'Admin access';
$meta_description = 'Admin access';
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <?php include ROOT_PATH . 'app/views/includes/head.php'; ?>
</head>

<body>
    <div class="layout container-fluid">
        <main class="row min-vh-100 align-items-center justify-content-center">
            <section class="login col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm">
                    <div class="card-body p-4 bg-light rounded">
                        <h3 class="text-center mb-4 text-secondary">Area Riservata</h3>

                        <form action="<?php echo BASE_URL; ?>auth/login" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label text-dark">Nome utente</label>
                                <input type="text"
                                    id="username"
                                    name="username"
                                    class="form-control"
                                    placeholder="Inserisci il tuo nome utente"
                                    required
                                    autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label text-dark">Password</label>
                                <input type="password"
                                    id="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Inserisci la tua password"
                                    required>
                            </div>

                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Accedi</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a href="<?php echo BASE_URL; ?>" class="text-decoration-none small text-muted">← Torna alla Home</a>
                </div>
            </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </div>
</body>

</html>