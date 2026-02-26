<?php
require_once __DIR__ . '/../app/config/config.php';

$view = $_GET['view'] ?? 'index';
$id = $_GET['id'] ?? null;

if ($view === 'index' && empty($_GET['view'])) {
    $uri = str_replace('/cpue-website/', '', $_SERVER['REQUEST_URI']);
    $parts = explode('/', trim($parts[0], '/'));
    if (count($parts) > 1) {
        $view = $parts[0];
        $id = $parts[1];
    }
}

$viewPath = ROOT_PATH . 'app/views/' . $view . '.php';

if (file_exists($viewPath)) {
    require_once $viewPath;
} else {
    http_response_code(404);
    include ROOT_PATH . 'app/views/404.php';
}

?>