<?php
require_once "./models/Product.php";
require_once "./models/Category.php";
require_once "./models/Food.php";
require_once "./models/Toy.php";


$catCategory = new Category("Gatti", "fa-cat");
$dogCategory = new Category("Cani", "fa-dog");
$officeCategory = new Category("Cancelleria", "fa-briefcase");

$penna = new Product("Penna a sfera", 1.3, "https://picsum.photos/350/400", $officeCategory);
$rismaCarta = new Product("Risma carta A4", 4.15, "https://picsum.photos/350/400", $officeCategory);
$ciboScatola = new Food("Cibo in scatola", .50, "https://picsum.photos/350/400", $dogCategory, 300);
$croccantini = new Food("Croccantini al pollo", 3.20, "https://picsum.photos/350/400", $catCategory, 380);
$palla = new Game("Palla da tennis", .99, "https://picsum.photos/350/400", $dogCategory, ["feltro", "plastica"]);
$tiragraffi = new Game("Tiragraffi", 21.80, "https://picsum.photos/350/400", $catCategory, ["legno", "pvc"]);

$productsList = [
    $penna,
    $rismaCarta,
    $ciboScatola,
    $croccantini,
    $palla,
    $tiragraffi,
];

/* var_dump($productsList); */

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">
    <title>php-oop-2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body class="bg-dark">
    <div class="container text-white my-5">
        <div class="text-center pb-5">
            <h1 class="mb-5">PHP-OOP-2-V2</h1>
        </div>
        <div class="row text-black">
            <?php foreach ($productsList as $product) : ?>
                <div class="col-2 g-4">
                    <?php $product->printCardHTML($product) ?>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html>
