<?php
    include_once __DIR__ . '/prodotto.php';

    class Gioco extends Prodotto
    {
        public $caratteristiche;
        public $dimensioni;

        public function __construct(
            String $percorsoImmagine,
            String $nome,
            Tipologia $tipologia,
            Float $prezzo,

            String $caratteristiche,
            String $dimensioni
        )
        {
            $this -> caratteristiche = $caratteristiche;
            $this -> dimensioni = $dimensioni;
            parent::__construct($percorsoImmagine, $nome, $tipologia, $prezzo);
        }
    }

?>