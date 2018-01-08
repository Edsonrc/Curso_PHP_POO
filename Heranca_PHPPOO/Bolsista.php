<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bolsista
 *
 * @author EdsonRicardoCzarneski
 */
require_once 'Aluno.php';
class Bolsista extends Aluno {
    private $bolsa;
    
    public function renovarBolsa(){
        echo '<p><u>'.$this->getNome().'</u> renovou a bolsa de estudos.</p>';   
}  
    public function pagarMensalidade() {
        echo "<p><strong>$this->nome </strong>é bolsista. Então paga com desconto.</p>";
    }
public function getBolsa() {
    return $this->bolsa;
}

public function setBolsa($bolsa) {
    $this->bolsa = $bolsa;
}


}
