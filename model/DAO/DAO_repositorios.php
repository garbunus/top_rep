<?php

requeri_once("../db_acess/db_acess.php");

class DAO_repositorios{

//########################### Grava dados no banco ###########################
  public function DAO_grava_repositorios(){
    //instancia da classe db_acess
    $banco = new db_acess();
    //abre conexao com o banco
    $conexao = $banco->conectar();

    //SQL para gravar dados no banco
    $sql_1 = $conexao->prepare('');
    $sql_1->bindParam(':user', $user);

    //execução da transação
    try{
        $conexao->beginTransaction();
        $sql_1->execute();
        $conexao->commit();

    }catch(PDOexception $err){
        $conexao->rollBack();
        return $err->getMessage();
    }

  }

//########################### Busca dados no banco ###########################
  public function DAO_busca_repositorios(){

  }

//########################### Busca dados no banco ###########################
  public function DAO_busca_detalhes_repositorios(){

  }

//########################### Apaga dados no banco ###########################
  public function DAO_apaga_repositorios(){

  }

}
