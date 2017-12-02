<?php

require_once("DAO/DAO_repositorio.php");

class repositorio{

  //########################### Grava dados no banco ###########################
    public function grava_repositorio($id, $nome, $linguagem, $descricao, $html_url, $url, $criado_em, $forks){
      $dao = new DAO_repositorio;
      $retorno = $dao->DAO_grava_repositorio($id, $nome, $linguagem, $descricao, $html_url, $url, $criado_em, $forks);
      return $retorno;
    }

  //########################### Busca dados no banco ###########################
    public function busca_repositorios(){
      $dao = new DAO_repositorio;
      $retorno = $dao->DAO_busca_repositorios();
      return $retorno;
    }

  //######### Busca detalhes de repositório selecionado dados no banco #########
    public function busca_detalhes_repositorio($id){
      $dao = new DAO_repositorio;
      $retorno = $dao->DAO_busca_detalhes_repositorio($id);
      return $retorno;
    }

  //################## Apaga repositório selecionado do banco ##################
    public function apaga_repositorio($id){
      $dao = new DAO_repositorio;
      $retorno = $dao->DAO_apaga_repositorio($id);
      return $retorno;
    }


}
