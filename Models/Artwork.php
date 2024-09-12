<?php

class Artwork {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllArtworks() {
        $stmt = $this->pdo->query("SELECT name, artist, year, technique, dimensions, image FROM artworks");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>