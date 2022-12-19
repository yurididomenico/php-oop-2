<?php
    include_once __DIR__ . '/tipologia.php';

    class Prodotto
    {
        public $percorsoImmagine;
        public $nome;
        public $tipologia;
        public $prezzo;

        public function __construct(
            String $percorsoImmagine,
            String $nome,
            Tipologia $tipologia,
            Float $prezzo
        )
        {
            $this -> percorsoImmagine = $percorsoImmagine;
            $this -> nome = $nome;
            $this -> tipologia = $tipologia;
            $this -> prezzo = $prezzo;
        }
    }
    
?>