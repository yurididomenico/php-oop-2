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
        <header>
            <h1>YDD - Shop</h1>
        </header>

        <div class="container d-flex flex-wrap">
        <!-- DINAMICO -->
        <?php
        
            foreach ($prodotti as $elem)
            {
                echo '<div class="prodotto border border-3">';
                    echo '<img src="' . $elem -> percorsoImmagine . '">';
                    echo '<hr>';
                    echo '<h4>' . $elem -> nome . '</h4>';
                    echo '<p>Prezzo: ' . $elem -> prezzo . ' &euro;</p>';
                    echo '<p>Tipologia: <span class="pe-3">' . $elem -> tipologia -> icona .'</span><span>' . $elem -> tipologia -> nome . '</span></p>';
        
                    if(get_class($elem) == 'Cibo')
                    {
                        echo '<p>Peso Netto: ' . $elem -> pesoNetto . 'g</p>';
                        echo '<p>Ingredienti: ' . $elem -> ingredienti . '</p>';
                    }
                    else if(get_class($elem) == 'Oggetto')
                    {
                        echo '<p>Materiale: ' . $elem -> materiale . '</p>';
                        echo '<p>Dimensioni: ' . $elem -> dimensioni . '</p>';
                    }
                    else if(get_class($elem) == 'Gioco')
                    {
                        echo '<p>Caratteristiche: ' . $elem -> caratteristiche . '</p>';
                        echo '<p>Dimensioni: ' . $elem -> dimensioni . '</p>';
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
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    
    *
    {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        color: inherit;
        text-decoration: none;
        list-style-type: none;
        font-family: 'Montserrat', sans-serif;
        transition-duration: 300ms;
    }

    body
    {
        background-color: #b5d8ff;
    }

    img
    {
        width: 100%;
        aspect-ratio: 1/1;
    }

    header
    {
        background-color: #99bade;
        padding: 10px 50px;
        margin-top: 30px;
        box-shadow: 0 0 10px black;
    }

    .prodotto
    {
        background-color: #ffffff;
        width: calc(100% / 3 - 50px);
        margin: 25px;
        padding: 20px;
        box-shadow: 0 0 10px black;
    }

    .prodotto:hover
    {
        scale: 1.1;
        transition-duration: 200ms;
        cursor: pointer;
        box-shadow: 0 0 100px blue;
    }


</style>