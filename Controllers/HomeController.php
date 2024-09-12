<?php
require_once 'models/Artwork.php';

class HomeController {
    public function showHome() {
        // Aquí puedes agregar lógica adicional si es necesario
        require 'views/home.php';
    }
    
    public function showCatalog() {
        // Conectar a la base de datos
        require_once 'config.php';
        
        // Obtener las obras de arte
        $model = new Artwork($pdo);
        $artworks = $model->getAllArtworks();
        
        require 'views/catalog.php';
    }
    public function home() {
        require_once 'views/home.php'; // La vista del home
    }
    
    public function catalog() {
        $artworks = $this->artworkModel->getAllArtworks(); // Obteniendo las obras de arte
        require_once 'views/catalog.php'; // La vista del catálogo
    }
    
}
?>
