<?php

    include_once __DIR__ . '/classi/tipologia.php';
    include_once __DIR__ . '/classi/cibo.php';
    include_once __DIR__ . '/classi/oggetti.php';
    include_once __DIR__ . '/classi/giochi.php';

    $tipologie =
    [
        'Cane' => new Tipologia('<i class="fa-solid fa-dog"></i>', 'Cane'),
        'Gatto' => new Tipologia('<i class="fa-solid fa-cat"></i>', 'Gatto'),
        'Uccelli' => new Tipologia('<i class="fa-solid fa-dove"></i>', 'Uccelli'),
        'Pesci' => new Tipologia('<i class="fa-solid fa-fish"></i>', 'Pesci'),
    ];

    // var_dump($tipologie);

    $prodotti =
    [
        new Cibo('./assets/img/royal_canin_maxiAdult.jpg', 'Royal Canin', $tipologie['Cane'], 11.49, 2000, 'prosciutto, riso'),
        new Cibo('./assets/img/royal_canin_carlin.jpg', 'Royal Canin', $tipologie['Cane'], 10.99, 1500, 'pollo, riso'),
        new Oggetto('./assets/img/lettiera.png', 'Lettiera aperta per gatti con bordo igienico', $tipologie['Gatto'], 5.90, 'plastica', '50/35')
    ];

    // var_dump($prodotti);
    // echo $prodotti[2] -> nome

    echo '<h3>' . $prodotti[2] -> nome . '</h3>';
    echo '<p>' . $prodotti[2] -> prezzo . '</p>';
    echo '<p>' . $prodotti[2] -> materiale . '</p>';
    echo '<p>' . $prodotti[2] -> dimensioni . '</p>';
    
?>