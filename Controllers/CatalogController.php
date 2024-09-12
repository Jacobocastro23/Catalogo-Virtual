<?php
require_once 'config.php';
require_once 'models/Artwork.php';

class CatalogController {
    private $model;

    public function __construct($pdo) {
        $this->model = new Artwork($pdo);
    }

    public function showCatalog() {
        $artworks = $this->model->getAllArtworks();
        include 'views/catalog.php';
    }
}
?>
