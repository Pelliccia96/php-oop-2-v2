<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Game extends Product {
    private $genre;
    private $materials = [];

    function __construct($_name, $_price, $_image, Category $_category, $_materials) {
        // Invoco il costruttore della classe padre
        parent::__construct($_name, $_price, $_image, $_category);

        $this->setMaterials($_materials);
    }

    public function getGenre() {
        return $this->genre;
    }

    public function setGenre($genre) {
        $this->genre = $genre;
    }

    public function getMaterials() {
        return $this->materials;
    }

    public function setMaterials($materials) {
        $this->materials = $materials;
    }
}
