<?php
    
    class Tipologia
    {
        public $icona;
        public $nome;

        public function __construct(
            String $icona,
            String $nome
        )
        {
            $this -> icona = $icona;
            $this -> nome = $nome;
        }
    }

?>