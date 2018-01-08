<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Canguru
 *
 * @author EdsonRicardoCzarneski
 */
require_once 'Mamifero.php';
class Canguru extends Mamifero {
    public function usarBolsa(){
        echo '<p>Usando Bolsa ...</p>';
    }
    public function locomover(){
        echo 'Saltando ...';
    }
}
