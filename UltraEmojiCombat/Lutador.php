<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lutador
 *
 * @author EdsonRicardoCzarneski
 */
class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    //Métodos Internos    
    public function apresentar(){
        echo "<p>---------- APRESENTAÇÃO ----------</p>";
        echo "Chegou a Hora! O lutador " . $this->getNome();
        echo "que veio diretamente da " . $this->getNacionalidade();
        echo " tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " quilos";
        echo "<br>Ele tem " . $this->getVitorias() . " vitórias, " . $this->getDerrotas() . " derrotas e " . $this->getEmpates(). " empates.";
        
    }
    public function status(){
        echo "<p>---------- STATUS ----------";
        echo "<p>NOME " . $this->getNome();
        echo "<p>É UM PESO " . $this->getCategoria();
        echo "<p>JÁ GANHOU " . $this->getVitorias(). "vezes.";
        echo "<p>JÁ PERDEU " . $this->getDerrotas(). "vezes.";
        echo "<p> JÁ EMPATOU " . $this->getEmpates(). "vezes.";
                 
    }
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);        
    }
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);        
    }
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);        
    }
    //Métodos Especiais
    
    //Contrutor
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if ($this->peso < 52.2) {
            $this->categoria = "Inválido";            
        }elseif ($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif ($this->peso <= 83.9){
            $this->categoria = "Médio";
        }elseif ($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }


}
