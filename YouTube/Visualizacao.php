<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Visualizacao
 *
 * @author EdsonRicardoCzarneski
 */
require_once 'Video.php';
require_once 'Gafanhoto.php';
class Visualizacao {
    private $expectator;
    private $filme;
    
    public function avaliar(){
        $this->filme->setAvaliacao(5);        
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);        
    }
    public function avaliarPorc($porc){
        $this->filme->setAvaliacao($porc);        
    }
    //Método Construtor 
    public function __construct($expectator, $filme) {
        $this->expectator = $expectator;
        $this->filme = $filme;
        $this->filme->setViews($this->filme->getViews()+1);
        $this->expectator->setTotAssistido($this->expectator->getTotAssistido()+1);
    }
    //Métodos Especiais
    public function getExpectator() {
        return $this->expectator;
    }

    public function getFilme() {
        return $this->filme;
    }

    public function setExpectator($expectator) {
        $this->expectator = $expectator;
    }

    public function setFilme($filme) {
        $this->filme = $filme;
    }



}
