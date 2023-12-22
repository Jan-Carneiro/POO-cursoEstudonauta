<?php 
require_once "Lobo.php";
    class Cachorro extends Lobo{
        //ATRIBUTOS
            

        //MÉTODOS ESPECIAIS (construct, get, set)
        //CONSTRUCT
        
        
        //GET (fazer a correlação do GET com seus atributos)
        
        //SET (interligar o atributo com o seu parâmetro)
        
         
        //MÉTODOS:

        public function emitirSom() {
            
            echo "<p>Au!Au!Au!Au!</p>";
            
        }
        //nesta classe criarei um Polimorfismo de Sobrecarga, apesar do php não suportar essa sobrecarga.

        public function reagirFrase($frase) {
            //se a pessoa falar "toma comida" ou "Olá", o cachorro irá abanar o rabo e latir. Senão (qualquer outra frase), o cachorro irá rosnar
            if ($frase == "Toma Comida" || $frase == "Olá") {
                echo "<p>Abanar e Latir</p>";
            } else {
                echo "<p>Rosnar</p>";
            }
        }
        public function reagirHora($hora,$minuto) {
            //se o horário for antes das 12:00, o cachorro abanará o rabo. Se o horário for a partir das 18:00, o cachorro irá ignorar. Senão (qualquer outro horário), o cachorro irá abanar o rabo e latir.
            if ($hora < 12) {
                echo "<p>Abanar o rabo</p>";
            } elseif ($hora >= 18) {
                echo "<p>Ignorar</p>";
            } else{
                echo "<p>Abanar o rabo e Latir</p>";
            }                       
        }
        public function reagirDono($dono) {
            //se for o dono, o cachorro irá abanar o rabo. Senão, rosnar e latir
            if ($dono == true) {
                echo "<p>Abanar o rabo</p>";
            } else {
                echo "<p>Rosnar e Latir</p>";
            }                        
        }
        public function reagirIdadePeso($idade,$peso) {
            //SE A IDADE DO CACHORRO FOR MENOR DO QUE 5 --> se peso menor do que 10, o cachorro abanará o rabo. Senão (peso maior do que 10), o cachorro irá latir. SENÃO (IDADE DO CACHORRO MAIOR IGUAL A 5) -->   se peso menor do que 10, o cachorro irá rosnar. Senão (peso maior do que 10), o cachorro irá ignorar.
            if ($idade < 5) {
                if ($peso < 10) {
                    echo "<p>Abanar o rabo</p>";
                } else {
                    echo "<p>Latir</p>";
                }   
            } else  {
                if ($peso < 10) {
                    echo "<p>Rosnar</p>";
                } else {
                    echo "<p>Ignorar</p>";
                } 
            }                           
        }        
    }
?>