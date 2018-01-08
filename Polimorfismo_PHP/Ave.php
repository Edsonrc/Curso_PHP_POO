<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ave
 *
 * @author EdsonRicardoCzarneski
 */
require_once 'Animal.php';
class Ave extends Animal {
   private $corPena;
   
   public function fazerNinho(){
       echo '<p>Fazendo um ninho ...</p>';
   }
   
   public function alimentar() {
       echo '<p>Comendo frutas ...</p>';       
    }

    public function emitirSom() {
        echo '<p>Som de ave ...</p>' ;       
    }

    public function locomover() {
        echo '<p>Voando ...</p>';        
    }
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }



}
