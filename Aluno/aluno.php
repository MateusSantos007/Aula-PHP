<?php

    class Aluno{
        public $nome;
        public $nascimento;
        public $altura;
        public $peso;

        public function __construct($nome,$nascimento,$altura,$peso){
            $this->nome = $nome;
            $this->nascimento = $nascimento;            
            $this->altura = $altura;
            $this->peso = $peso;
        }
        public function idade($nascimento){
            $dataAtual = new DateTime();
            $nascimento = new DateTime($nascimento);
            $idade = $dataAtual->diff($nascimento);
            return $idade->y;

        }
    }

?>