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
                switch ($vencedor) {
                    case 0:
                        // Código para empate
                        echo "<p>A luta foi sangrenta e bastante disputada, sendo declarada EMPATE!</p>";
                        $this->desafiado->empatarLuta();
                        $this->desafiante->empatarLuta();
                        break;
                    case 1:
                        // Código para vitória do desafiado
                        echo "<p>" . $this->desafiado->getNome() . " venceu </p>";
                        $this->desafiado->ganharLuta();
                        $this->desafiante->perderLuta();
                        break;
                        
                    case 2:
                        // Código para vitória do desafiante
                        echo "<p>".$this->desafiante->getNome()." venceu </p>";
                        $this->desafiado->perderLuta();
                        $this->desafiante->ganharLuta();
                        break;
                    
                }
                
            } else {
                echo "<p>A luta não pode acontecer</p>";
            }
            
        }
        
                
    }
?>