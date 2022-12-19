<?php
    include_once __DIR__ . '/prodotto.php';

    class Oggetti extends Prodotto
    {
        public $materiale;
        public $dimensioni;

        public function __construct(
            String $percorsoImmagine,
            String $nome,
            Tipologia $tipologia,
            Float $prezzo,

            Float $materiale,
            String $dimensioni
        )
        {
            $this -> materiale = $materiale;
            $this -> dimensioni = $dimensioni;
            parent::__construct($percorsoImmagine, $nome, $tipologia, $prezzo);
        }
    }

?>