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
    private $cor;
    private $ponta;
    
    //Criando método Construtor
    public function __construct($m,$c,$p) {
        $this->setModelo($m);
        $this->setPonta($p);
        $this->setCor($c);
        $this->tampar();
        
    }
    public function tampar(){
        $this->tampada = true;
    }
    
    //Criando métodos
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    function getCor() {
        return $this->cor;
    }

    function setCor($c) {
        $this->cor = $cor;
    }

        
    public function getPonta(){
        return $this->ponta;
    }
    public function setPonta($p){
        $this->ponta = $p;
    }
}
