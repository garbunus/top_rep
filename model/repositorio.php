<?php

require_once("DAO/DAO_repositorio.php");

class repositorio{

  //########################### Grava dados no banco ###########################
    public function gravar_repositorio($id, $nome, $linguagem, $descricao, $html_url, $url, $criado_em, $forks){
      $dao = new DAO_repositorio;
      $retorno = $dao->DAO_gravar_repositorio($id, $nome, $linguagem, $descricao, $html_url, $url, $criado_em, $forks);
      return $retorno;
    }

  //########################### Busca dados no banco ###########################
    public function buscar_repositorios(){
      $dao = new DAO_repositorio;
      $retorno = $dao->DAO_buscar_repositorios();
      return $retorno;
    }

  //######### Busca detalhes de repositório selecionado dados no banco #########
    public function buscar_detalhes_repositorio($id){
      $dao = new DAO_repositorio;
      $retorno = $dao->DAO_buscar_detalhes_repositorio($id);
      return $retorno;
    }

  //################## Apaga repositório selecionado do banco ##################
    public function apagar_repositorio($id){
      $dao = new DAO_repositorio;
      $retorno = $dao->DAO_apagar_repositorio($id);
      return $retorno;
    }


}
