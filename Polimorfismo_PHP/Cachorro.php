<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cachorro
 *
 * @author EdsonRicardoCzarneski
 */
require_once 'Mamifero.php';
class Cachorro extends Mamifero {
    public function enterrarOsso (){
        echo '<p>Enterrando osso ...</p>';
}
    public function emitirSom(){
        echo '<p>Au au au ...</p>';
    }
}
