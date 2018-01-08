<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControleRemoto
 *
 * @author EdsonRicardoCzarneski
 */
require_once "Controlador.php";//implementando interface
class ControleRemoto implements Controlador {
    //Atributos
    private $volume;
    private $ligado;
    private $tocando;
    
    //Método Contrutor
    function __construct() {
      $this->setVolume(50);
      $this->getLigado(false);
      $this->getTocando(false);
    }
    //Métodos Especiais
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }
    
    public function ligar() {
        $this->setLigado(true);        
    }
    public function desligar() {
       $this->setLigado(false);       
    }
    public function abrirMenu() {
        echo "------ MENU ------";
        echo "<br>Está Ligado? ".($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está Tocando? ".($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: ".$this->getVolume();
        for ($i=0;$i <=$this->getVolume();$i+=10){
            echo " | ";
        }
        echo "</br>";                
    }
    public function fecharMenu() {
        echo "<br>Fechando Menu ...";
    } 
    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);           
        }        
    }
    public function menosVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);            
        }        
    } 
    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() >= 0 ) {
            $this->setVolume(0);            
        }        
    }  
    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume(50);
        }       
    }
     public function play() {
         if ($this->getLigado() && !$this->getTocando()) {
             $this->getTocando(true);            
         }        
    }
    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->getTocando(false);           
        }        
    }

   

}
