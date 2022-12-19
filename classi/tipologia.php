<?php

    class Tipologia
    {   
        public $icona;
        public $nome;
        

        public function __construct($icona, $nome)
        {
            $this -> icona = $icona;
            $this -> nome = $nome;
        }
    }

?>