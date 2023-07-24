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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Animal Shop</title>
    <style>
        body {
            padding-top: 20px;
            background-color: #ddd;
        }

        h2 {
            font-size: 26px;
            color: grey;
        }

        ul {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 50px;
        }

        ul li {
            list-style: none;
            cursor: pointer;
            font-weight: 700;
            font-size: 24px;
        }

        footer {
            background-color: white;
            width: 100%;
            min-height: 100px;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            width: 100%;
            height: auto;
            border-radius: 5px 5px 0 0;
        }

        li:hover {
            color: darkred;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center fw-bold my-4">Animal Shop</h1>

        <h2>Categorie:</h2>
        <ul>
            <li><?php echo $dogCategory->getName(); ?></li>
            <li><?php echo $catCategory->getName(); ?></li>
            <li><?php echo $birdCategory->getName(); ?></li>
            <li><?php echo $fishCategory->getName(); ?></li>
        </ul>

        <h2>Prodotti:</h2>
        <div class="row">
            <?php
            foreach ($products as $product) {
                echo '<div class="col-md-4">';
                echo '<div class="card mb-4">';
                echo '<img src="' . $product->getImage() . '" class="card-img-top" alt="' . $product->getName() . '">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $product->getName() . '</h5>';
                echo '<p class="card-text">Prezzo: ' . $product->getPrice() . '€</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
    <footer>
        <div class="container">
            <p class="pt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque nesciunt dignissimos nulla. Illum, mollitia expedita impedit cum voluptatem, fuga dicta iure, sed ad doloremque et alias dolor facere doloribus consequuntur.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>