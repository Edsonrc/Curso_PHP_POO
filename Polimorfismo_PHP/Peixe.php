<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Peixe
 *
 * @author User
 */
require_once 'Animal.php';
class Peixe extends Animal {
    private $corEscama;
    
    public function soltarBolha(){
        echo '<p>Soltando uma bolha ...</p>';
    }
    
    public function alimentar() {
        echo '<p>Comendo substâncias ...</p>';        
    }

    public function emitirSom() {
        echo '<p>Peixe não emite som ... <p>';        
    }

    public function locomover() {
        echo '<p>Nadando ...</p>';        
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }



}
