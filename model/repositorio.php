<?php

requeri_once("/DAO/DAO_repositorio.php");

class repositorios{

  //########################### Grava dados no banco ###########################
    public function grava_repositorios(){
      $dao = new DAO_repositorios;
      $dao->DAO_grava_repositorios();
    }

  //########################### Busca dados no banco ###########################
    public function busca_repositorios(){
      $dao = new DAO_repositorios;
      $dao->DAO_busca_repositorios();
    }

  //########################### Busca dados no banco ###########################
    public function busca_detalhes_repositorios(){
      $dao = new DAO_repositorios;
      $dao->DAO_busca_detalhes_repositorios();
    }

  //########################### Apaga dados no banco ###########################
    public function apaga_repositorios(){
      $dao = new DAO_repositorios;
      $dao->DAO_apaga_repositorios();
    }


}
