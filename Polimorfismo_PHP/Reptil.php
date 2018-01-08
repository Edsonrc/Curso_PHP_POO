<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reptil
 *
 * @author EdsonRicardoCzarneski
 */
require_once 'Animal.php';
class Reptil extends Animal {
    private $corEscama;
    public function alimentar() {
        echo '<p>Comendo vegetais ...</p>';       
    }

    public function emitirSom() {
        echo '<p>Som de réptil ...</p>';        
    }

    public function locomover() {
        echo '<p>Rastejando ...</p>';        
    }
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }



}
