<?php
require_once 'controllers/HomeController.php';

// Obtener la acción solicitada, por defecto mostrar la página de inicio
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

$controller = new HomeController();

switch ($action) {
    case 'catalog':
        $controller->showCatalog();
        break;
    case 'home':
    default:
        $controller->showHome();
        break;
}
?>
