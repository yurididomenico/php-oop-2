<?php
    include_once __DIR__ . '/prodotto.php';

    class Cibo extends Prodotto
    {
        public $pesoNetto;
        public $ingredienti;

        public function __construct(
            String $percorsoImmagine,
            String $nome,
            Tipologia $tipologia,
            Float $prezzo,

            Float $pesoNetto,
            String $ingredienti
        )
        {
            $this -> pesoNetto = $pesoNetto;
            $this -> ingredienti = $ingredienti;
            parent::__construct($percorsoImmagine, $nome, $tipologia, $prezzo);
        }
    }

?>