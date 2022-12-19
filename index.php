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
        new Oggetto('./assets/img/lettiera.png', 'Lettiera aperta per gatti con bordo igienico', $tipologie['Gatto'], 5.90, 'plastica', '50/35cm'),
        new Gioco('./assets/img/bastoncinoGatti.jpg', 'Bastoncino per gatti con piume colorate', $tipologie['Gatto'], 3.99, 'plastica e piume', '40cm'),
    ];

    // var_dump($prodotti);
    // echo $prodotti[2] -> nome

    //--------------------------------------------------------------------------//
    //NO DINAMICO 
    // echo '<img src="' . $prodotti[0] -> percorsoImmagine . '">';
    // echo '<h3>' . $prodotti[0] -> nome . '</h3>';
    // echo '<p>' . $prodotti[0] -> prezzo . ' euro</p>';
    // echo '<p>' . $prodotti[0] -> pesoNetto . 'g</p>';
    // echo '<p>' . $prodotti[0] -> ingredienti . '.</p>';
    //--------------------------------------------------------------------------//

    
    

    
?>
<!DOCTYPE html>
<html lang='en' dir='ltr'>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>YDD - Boolshop</title>
        <!-- [______Collegamento Bootstrap__________________________________________] -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
        <!-- [______Collegamento Font__________________________________________] -->
        <script src='https://kit.fontawesome.com/f4affba74f.js' crossorigin='anonymous'></script>
        <!-- [______Collegamento CSS_____________________________________________] -->
        <link rel='stylesheet' href='./assets/css/stile.css'>
        <!-- [______Favicon______________________________________________________] -->
        <link rel='icon' type='image/x-icon' href='./assets/img/favYconStatic.ico'>
    </head>

    <body>
    <div id='app'>

        <div class="container d-flex flex-wrap">
        <!-- DINAMICO -->
        <?php
        
            foreach ($prodotti as $elem)
            {
                echo '<div class="prodotto border">';
                    echo '<img src="' . $elem -> percorsoImmagine . '">';
                    echo '<p>' . $elem -> prezzo . ' &euro;</p>';
                    echo '<p>' . $elem -> nome . '</p>';
                    echo '<p><span class="pe-3">' . $elem -> tipologia -> icona .'</span><span>' . $elem -> tipologia -> nome . '</span></p>';
        
                    if($elem instanceof Cibo)
                    {
                        echo '<p>' . $elem -> pesoNetto . 'g</p>';
                        echo '<p>' . $elem -> ingredienti . '</p>';
                    }
                    else if($elem instanceof Oggetto)
                    {
                        echo '<p>' . $elem -> materiale . '</p>';
                        echo '<p>' . $elem -> dimensioni . '</p>';
                    }
                    else if($elem instanceof Gioco)
                    {
                        echo '<p>' . $elem -> caratteristiche . '</p>';
                        echo '<p>' . $elem -> dimensioni . '</p>';
                    }
                echo '</div>';
            }
        
        ?>
        </div>
    

    </div>
        <!-- Axios 1.1.3 -->
        <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js' integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==' crossorigin='anonymous' referrerpolicy='no-referrer'></script>
        <!-- Vue.js 2.0 -->
        <script src='https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js'></script>
        <!-- Personal Javascript -->
        <script src='./assets/javascript/main.js'></script>
        <!-- Bootstrap -->
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'></script>
    </body>
</html>

<style>
    .prodotto
    {
        width: calc(100% / 3 - 50px);
        margin: 25px;
        padding: 20px;
    }

    img
    {
        width: 100%;
        aspect-ratio: 1/1;
    }
</style>