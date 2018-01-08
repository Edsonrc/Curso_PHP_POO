<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Video
 *
 * @author User
 */
require_once 'AcoesVideo.php';
class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    //Construtor
    function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
        
    }    
    //Métodos Especiais
    function getTitulo() {
        return $this->titulo;
    }

    function getAvaliacao() {
        return $this->avaliacao;
    }

    function getViews() {
        return $this->views;
    }

    function getCurtidas() {
        return $this->curtidas;
    }

    function getReproduzindo() {
        return $this->reproduzindo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }

    function setViews($views) {
        $this->views = $views;
    }

    function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }
    //Implementando métodos abstratos

    public function like() {
        $this->curtidas++;        
    }

    public function pause() {
        $this->reproduzindo = false;        
    }

    public function play() {
        $this->reproduzindo = true;        
    }

}
