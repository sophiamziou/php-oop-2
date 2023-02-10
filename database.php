<?php
include __DIR__ . '/Models/Product.php';
include __DIR__ . '/Models/Other.php';
include __DIR__ . '/Models/Food.php';
include __DIR__ . '/Models/Game.php';

$array_products = 
[
    $food_1 = new Food('Royal Canin Mini Adult','Cane','43,99','./img/royal.png','545g','prosciutto, riso'),
    $food_2 = new Food('Almo Nature Holistic Maintenance Medium Large Tonno e Riso','Cane','44,99','./img/food_dog.png','600g','manzo, cereali'),
    $food_3 = new Food('Almo Nature Cat Daily Lattina','Gatto','34,99','./img/food_almo.png','400g','tonno, pollo, prosciutto'),
    $food_4 = new Food('Mangime per Pesci Guppy in Fiocchi','Pesce','2,95','./img/food_fish.png','30g','Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe'),
    
    $others_1 = new Other('Voliera Wilma in Legno','Ucello','184,99','./img/cage.png','Legno','M: L 83 x P 67 x H 153 cm'),
    $others_2 = new Other('Cartucce Filtranti per Filtro EasyCrystal','Pesce','2,29','./img/filter.png','Materiale espanso','ND'),
    
    $games_1 = new Game('Kong Classic','Cane','13,49','./img/game_red.png','Galleggia e rimbalza','8,5cm x 10cm'),
    $games_2 = new Game('Topini di peluche Trixie','Gatto','4,99','./img/rat.png','Morbido con codina in corda','8,5cm x 10cm'),
]
?>