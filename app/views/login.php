<?php
require_once '../app/config/config.php';
session_start();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($password === $user['password']) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['user_id'] = $user['id'];

            header("Location: " . BASE_URL . "dashboard");
            exit();
        } else {
            $errors['password'] = "Password errata.";
        }
    } else {
        $errors['username'] = "Utente non trovato.";
    }
}


$head_title = 'Admin access';
$meta_description = 'Admin access';
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <?php include ROOT_PATH . 'app/views/includes/head.php'; ?>
</head>

<body>
    <div class="layout">
        <main class="d-flex align-items-center justify-content-center bg-light px-3"
            style="height: 100dvh; width: 100vw; position: fixed; top: 0; left: 0; overflow: hidden;">

            <section class="login w-100" style="max-width: 380px;">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 bg-white rounded">
                        <h3 class="text-center mb-4 text-secondary fw-light">Area Riservata</h3>

                        <form action="" method="POST">
                            <div class="mb-3">
                                <label for="username" class="form-label text-dark small">Nome utente</label>
                                <input type="text"
                                    id="username"
                                    name="username"
                                    class="form-control <?php echo isset($errors['username']) ? 'is-invalid' : ''; ?>"
                                    value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"
                                    placeholder="Inserisci il tuo nome utente"
                                    required autofocus>
                                <?php if (isset($errors['username'])): ?>
                                    <div class="invalid-feedback"><?php echo $errors['username']; ?></div>
                                <?php endif; ?>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label text-dark small">Password</label>
                                <input type="password"
                                    id="password"
                                    name="password"
                                    class="form-control <?php echo isset($errors['password']) ? 'is-invalid' : ''; ?>"
                                    placeholder="Inserisci la tua password"
                                    required>
                                <?php if (isset($errors['password'])): ?>
                                    <div class="invalid-feedback"><?php echo $errors['password']; ?></div>
                                <?php endif; ?>
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
    </div>
</body>

</html>