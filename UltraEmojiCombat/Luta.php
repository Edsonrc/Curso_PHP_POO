<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Luta
 *
 * @author EdsonRicardoCzarneski
 */
require_once "Lutador.php";
class Luta {
    //Atributos
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    //Métodos públicos
    public function marcarLuta($l1,$l2){
        if ($l1->getCategoria() === $l2->getCategoria() && ($l1 != $l2)) {
            $this->aprovada = true;
            $this->desafiado =  $l1;
            $this->desafiante = $l2;
        }else{
            $this->aprovada = false;
            $this->desafiado = null;
            $this->desafiante = null;
            echo "Erro na convocação. Verifique.";
        }
        
    }
    public function lutar(){
        if($this->aprovada){
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = rand(0,2);
            switch ($vencedor){
                case 0://empate
                    echo "<br>Luta EMPATOU";
                    $this->desafiado->empatarLuta();
                    $this->desafiante->empatarLuta();
                    break;
                case 1:
                    echo "<br>O lutador " . $this->desafiante->getNome()." GANHOU";
                    $this->desafiado->perderLuta();
                    $this->desafiante->ganharLuta();
                    break;
                case 2:                    
                echo "<br>O lutador " . $this->desafiado->getNome()." GANHOU";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
            }
            
        }else{
            echo "<p>Luta não pode acontecer.</p>";
        }
        
    }
    //Métodos Especiais
    function getDesafiado() {
        return $this->desafiado;
    }

    function getDesafiante() {
        return $this->desafiante;
    }

    function getRounds() {
        return $this->rounds;
    }

    function getAprovado() {
        return $this->aprovado;
    }

    function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    function setAprovado($aprovado) {
        $this->aprovado = $aprovado;
    }


    
}
