<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gafanhoto
 *
 * @author EdsonRicardoCzarneski
 */
require_once 'Pessoa.php';
class Gafanhoto extends Pessoa {
    private $login;
    private $totAssistido;   
    
    public function viuMaisUm (){
        $this->totAssistido++;        
    }
    //Método Construtor
    function __construct($nome, $idade, $sexo,$login) {
        //Chamada do construtor da superclasse
        parent::__construct($nome, $idade, $sexo);        
        $this->login = $login;
        $this->totAssistido = 0;
    }
    //Métodos Especiais
    function getLogin() {
        return $this->login;
    }

    function getTotAssistido() {
        return $this->totAssistido;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }



}
