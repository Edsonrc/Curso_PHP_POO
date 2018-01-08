<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tecnico
 *
 * @author EdsonRicardoCzarneski
 */
require_once 'Aluno.php';
class Tecnico extends Aluno {
    private $registroProfissional;

    public function praticar(){
        echo '<p><u>'.$this->getNome().'</u> está praticando seu curso '.$this->getCurso().'</p>';
    }
    public function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    public function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
    }


}
