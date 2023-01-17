<?php
require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Category.php";

class Food extends Product {
    private $calories;
    private $ingredients = [];

    function __construct($_name, $_price, $_image, Category $_category, $_calories) {
        // Invoco il costruttore della classe padre
        parent::__construct($_name, $_price, $_image, $_category);

        $this->setCalories($_calories);
    }

    public function getCalories() {
        return $this->calories;
    }

    public function setCalories($calories) {
        $this->calories = $calories;
    }

    public function getIngredients() {
        return $this->ingredients;
    }

    public function setIngredients($ingredients) {
        $this->ingredients = $ingredients;
    }
}
