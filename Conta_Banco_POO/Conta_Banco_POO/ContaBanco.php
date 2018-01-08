<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContaBanco
 *
 * @author EdsonRicardoCzarneski
 */
class ContaBanco {
    //Aributos
    public $numConta;
    protected $tipo;
    private $dono,$saldo,$status;
    //Metodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == "CC") {
            $this->setSaldo(50);            
        }elseif ($t == "CP"){
            $this->setSaldo(150);
        }       
    }
    public function fecharConta(){
        if ($this->getSaldo() > 0){
            echo 'ERRO ... Retire o dinheiro da conta.';
        }elseif ($this->getSaldo() < 0){
            echo 'ERRO ... Conta está em débito ...';            
        }else{
            $this->setStatus(false);
            echo "Conta encerrada com sucesso.";
        }  
    }
    public function depositar($valor){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo()+ $valor );        
        }else{
            echo 'ERRO ... Conta inativa, impossível depositar.';
        }      
    }
    public function sacar($valor){
        if ($this->getStatus()) {
            if ($this->getSaldo() > $valor) {
                $this->setSaldo($this->getSaldo() - $valor); 
            }else{
                echo 'ERRO .. Seu saldo é insuficiente.';
            }           
        }else{
            echo 'ERRO ... Conta não existe ...';
        }       
    }
    public function pagarMensal($valor){
        if ($this->getTipo() == "CC") {
            $valor = 12;            
        }else if($this->getTipo() == "CP"){
            $valor = 20;
        } 
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() - $valor); 
            
        }else{
            echo 'ERRO ... Conta não existe ...';
        }
    }
    //Métodos Especiais
        //Construtor
        function __construct() {
            $this->setSaldo(0);
            $this->setStatus(false); 
            echo '<p>Conta criada com sucesso.</p>';
        }
        //Getter e Setter
        function getNumConta() {
            return $this->numConta;
        }

        function getTipo() {
            return $this->tipo;
        }

        function getDono() {
            return $this->dono;
        }

        function getSaldo() {
            return $this->saldo;
        }

        function getStatus() {
            return $this->status;
        }

        function setNumConta($numConta) {
            $this->numConta = $numConta;
        }

        function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        function setDono($dono) {
            $this->dono = $dono;
        }

        function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        function setStatus($status) {
            $this->status = $status;
        }



  
    
    
    
    
}
