<?php 
require_once 'Lutador.php';
    class Luta{
        //ATRIBUTOS
        private $desafiado;
        private $desafiante;
        private $rounds;
        private $aprovado;        

        //MÉTODOS ESPECIAIS (construct, get, set)
        
        
        //GET (fazer a correlação do GET com seus atributos)
        public function getDesafiado(){
            return $this ->desafiado;
        }
        public function getDesafiante(){
            return $this ->desafiante;
        }
        public function getRounds(){
            return $this ->rounds;
        }
        public function getAprovado(){
            return $this ->aprovado;
        }
        
        //SET (interligar o atributo com o seu parâmetro)
        public function setDesafiado($dd){
            $this ->desafiado = $dd;
        }
        public function setDesafiante($dt){
            $this ->desafiante = $dt;
        }
        public function setRounds($ro){
            $this ->rounds = $ro;
        }
        public function setAprovado($ap){
            $this ->aprovado = $ap;
        }

        
  
        //MÉTODOS:

        public function marcarLuta($l1,$l2) {
            if ($l1->getCategoria() == $l2->getCategoria() && $l1 !== $l2) {
                $this->setAprovado(true);
                $this->setDesafiado($l1);
                $this->setDesafiante($l2);
            } else {
                $this->setAprovado(false);
                $this->setDesafiado(null);
                $this->setDesafiante(null);
            }
            
        }
        public function lutar() {
            if ($this->aprovado) {
                $this->desafiado ->apresentar();
                $this->desafiante ->apresentar();
                
                $vencedor = rand (0,2);
                switch($vencedor){
                    //colocar os casos 0(empate),1(vitória do desafiado), 2 (vitória do desafiante)
                }
            } else {
                echo "<p>A luta não pode acontecer</p>";
            }
            
        }
        
                
    }
?>