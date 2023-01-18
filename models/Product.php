<?php
require_once __DIR__ . "/Category.php";
require_once __DIR__ . "/../traits/HasId.php";

class Product {
    use HasId;

    protected $name;
    protected $price;
    protected $image;
    protected $isAvailable = true;
    protected $quantity = 0;
    protected $category;

    /**
     * Undocumented function
     *
     * @param string $_name
     * @param float $_price
     * @param Category $_category
     * @param bool $_isAvailable
     * @param int $_quantity
     * @param string $_image
     */

    function __construct($_name, $_price, $_image, Category $_category, $_isAvailable = null, $_quantity = null) {
        // Assegno i valori delle propietà della classe prendendoli dagli attributi del costruttore
        // In questo modo, ogni setter al suo interno farà i dovuti controlli / validazioni
        $this->setName($_name);
        $this->setPrice($_price);
        $this->setCategory($_category);
        $this->setIsAvailable($_isAvailable);
        $this->setQuantity($_quantity);
        $this->setImage($_image);

        $this->setId("codice: ");
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        if (empty($name)) {
            throw new Exception("Il nome inserito non è valido");
        }

        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getImage() {
        return $this->image;
    }

    public function setImage($image) {
        if (is_null($image)) {
            return;
        }

        $this->image = $image;
    }

    public function getIsAvailable() {
        return $this->isAvailable;
    }

    public function setIsAvailable($isAvailable) {
        if (is_null($isAvailable)) {
            return;
        }

        $this->isAvailable = $isAvailable;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        if (is_null($quantity)) {
            return;
        }

        $this->quantity = $quantity;
    }

    public function getCategory() {
        $categoryArray = ["name" => $this->category->getName(), "icon" => '<i class="fa-solid '. $this->category->getIcon().'"></i>'];
        return $categoryArray;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function printCardHTML($product) {
    ?>
        <div class="card">
            <img src="<?php echo $product->getImage() ?>" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product->getName() ?></h5>
                <p><?php echo $product->getId() ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div>
                        <h6>Prezzo</h6>
                        <p><?php echo $product->getPrice() ?> &#8364;</p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div>
                        <h6>Cibo</h6>
                        <?php if (method_exists($product, "getCalories")) { ?>
                            <p>Calorie: <?php echo $product->getCalories() ?></p>
                        <?php } ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div>
                        <h6>Gioco</h6>
                        <?php if (method_exists($product, "getMaterials")) { ?>
                            <p>Materiali: <?php echo implode(", ", $product->getMaterials()) ?></p>
                        <?php } ?>
                    </div>
                </li>
                <li class="list-group-item">
                    <div>
                        <h6>Categoria: <?php echo $product->getCategory()["name"] ?></h6>
                        <p><?php echo $product->getCategory()["icon"] ?></p>
                    </div>
                </li>
            </ul>
        </div>
    <?
    }
}
