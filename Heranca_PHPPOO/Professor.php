<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Professor
 *
 * @author EdsonRicardoCzarneski
 */
require_once 'Pessoa.php';
class Professor extends Pessoa {
    private $especialidade;
    private $salario;
    
    public function receberAumento($aum){
        $this->salario += $aum;
    }
    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }


}
