<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Caneta
 *
 * @author EdsonRicardoCzarneski
 */
class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if ($this->tampada == false) {
          echo '<p>Estou rabiscando ...</p>';  
        }else{
          echo '<p>ERRO! A caneta está tampada ...</p>';         
        }
    }
    private function tampar (){
        $this->tampada = true;        
    }
    private function destampar(){
        $this->tamada = false;        
    }
   
}
