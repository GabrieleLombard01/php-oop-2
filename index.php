<?php
require_once 'Models/AnimalCategory.php';
require_once 'Models/Dog.php';
require_once 'Models/Cat.php';
require_once 'Models/Bird.php';
require_once 'Models/Fish.php';
require_once 'Models/Product.php';
require_once 'Models/FoodProduct.php';
require_once 'Models/ToyProduct.php';
require_once 'Models/AccessoryProduct.php';

// CREO le categorie
$dogCategory = new Dog();
$catCategory = new Cat();
$birdCategory = new Bird();
$fishCategory = new Fish();

// CREO prodotti per ogni categoria
$products = array(
    new FoodProduct("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", 12.99, "https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg"),
    new FoodProduct("Almo Nature Cat Daily Lattina", 1.49, "https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg"),
    new FoodProduct("Mangime per Pesci Guppy in Fiocchi", 5.99, "https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg"),
    new AccessoryProduct("Voliera Wilma in Legno", 89.99, "https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg"),
    new AccessoryProduct("Cartucce Filtranti per Filtro EasyCrystal", 8.99, "https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg"),
    new ToyProduct("Kong Classic", 9.99, "https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg"),
    new ToyProduct("Topini di peluche Trixie", 3.99, "https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg")
);
?>


<!DOCTYPE html>
<html>

<head>
    <title>Animal Shop</title>
</head>

<body>

</body>

</html>