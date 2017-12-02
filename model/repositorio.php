<?php

require_once("/DAO/DAO_repositorio.php");

class repositorios{

  //########################### Grava dados no banco ###########################
    public function grava_repositorios($id, $nome, $linguagem, $descricao, $html_url, $url, $criado_em, $forks){
      $dao = new DAO_repositorios;
      $dao->DAO_grava_repositorios($id, $nome, $linguagem, $descricao, $html_url, $url, $criado_em, $forks);
    }

  //########################### Busca dados no banco ###########################
    public function busca_repositorios(){
      $dao = new DAO_repositorios;
      $dao->DAO_busca_repositorios();
    }

  //########################### Busca dados no banco ###########################
    public function busca_detalhes_repositorios($id){
      $dao = new DAO_repositorios;
      return $dao->DAO_busca_detalhes_repositorios($id);
    }

  //########################### Apaga dados no banco ###########################
    public function apaga_repositorios($id){
      $dao = new DAO_repositorios;
      return $dao->DAO_apaga_repositorios($id);
    }


}
