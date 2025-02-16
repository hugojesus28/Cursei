<?php

Class Instituicao{

    public $idInstituicao, $nomeInstituicao, $cnpjInstituicao, $telefoneInstituicao,
     $emailInstituicao, $senhaInstituicao, $imgInstituicao,
      $tokenInstituicao, $idEnderecoInstituicao;

      public function getIdInstituicao() {
        return $this->idInstituicao;
    }

    public function setIdInstituicao($idInstituicao) {
        $this->idInstituicao = $idInstituicao;
    }

    public function getNomeInstituicao() {
        return $this->nomeInstituicao;
    }

    public function setNomeInstituicao($nomeInstituicao) {
        $this->nomeInstituicao = $nomeInstituicao;
    }

    public function getCnpjInstituicao() {
        return $this->cnpjInstituicao;
    }

    public function setCnpjInstituicao($cnpjInstituicao) {
        $this->cnpjInstituicao = $cnpjInstituicao;
    }

    public function getTelefoneInstituicao() {
        return $this->telefoneInstituicao;
    }

    public function setTelefoneInstituicao($telefoneInstituicao) {
        $this->telefoneInstituicao = $telefoneInstituicao;
    }

    public function getEmailInstituicao() {
        return $this->emailInstituicao;
    }

    public function setEmailInstituicao($emailInstituicao) {
        $this->emailInstituicao = $emailInstituicao;
    }

    public function getSenhaInstituicao() {
        return $this->senhaInstituicao;
    }

    public function setSenhaInstituicao($senhaInstituicao) {
        $this->senhaInstituicao = $senhaInstituicao;
    }

    public function getImgInstituicao() {
        return $this->imgInstituicao;
    }

    public function setImgInstituicao($imgInstituicao) {
        $this->imgInstituicao = $imgInstituicao;
    }

    public function getTokenInstituicao() {
        return $this->tokenInstituicao;
    }

    public function setTokenInstituicao($tokenInstituicao) {
        $this->tokenInstituicao = $tokenInstituicao;
    }

    public function getIdEnderecoInstituicao() {
        return $this->idEnderecoInstituicao;
    }

    public function setIdEnderecoInstituicao($idEnderecoInstituicao) {
        $this->idEnderecoInstituicao = $idEnderecoInstituicao;
    }

}

?>