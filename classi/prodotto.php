<?php

    class Prodotto
    {
        public $percorsoImmagine;
        public $nome;
        public $tipologia;
        public $prezzo;

        public function __construct(
            String $percorsoImmagine,
            String $nome,
            String $tipologia,
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