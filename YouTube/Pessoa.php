<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author EdsonRicardoCzarneski
 */
abstract class Pessoa {
    protected $nome;
    protected $idade;
    protected $sexo;
    protected $experiencia;
    //Método Construtor    
    function __construct($nome, $idade, $sexo) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->experiencia = 0;
    }
    //Método da classe    
    protected function ganharExp ($n){
        $this->experiencia += $n;
    }
    //Métodos Especiais
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getExperiencia() {
        return $this->experiencia;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setExperiencia($experiencia) {
        $this->experiencia = $experiencia;
    }


}



