<?php

requeri_once("../db_acess/db_acess.php");

class DAO_repositorios{

//########################### Grava dados no banco ###########################
  public function DAO_grava_repositorios($nome, $descricao, $forks, $id, $linguagem, $url, $criado_em){
    //instancia da classe db_acess
    $banco = new db_acess();
    //abre conexao com o banco
    $conexao = $banco->conectar();

    //SQL para gravar dados no banco
    $sql_1 = $conexao->prepare('INSERT INTO repositorios (id, nome, descricao, forks, linguagem, url, criado_em) VALUES (:id, :nome, :descricao, :forks, :linguagem, :url, :criado_em),');
    $sql_1->bindParam(':nome', $nome);
    $sql_1->bindParam(':descricao', $desricao);
    $sql_1->bindParam(':forks', $forks);
    $sql_1->bindParam(':id', $id);
    $sql_1->bindParam(':linguagem', $linguagem);
    $sql_1->bindParam(':url', $url);
    $sql_1->bindParam(':criado_em', $criado_em);

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
    //instancia da classe db_acess
    $banco = new db_acess();
    //abre conexao com o banco
    $conexao = $banco->conectar();

    //SQL para gravar dados no banco
    $sql_1 = $conexao->prepare('SELECT id, nome, descricao, linguagem FROM repositorios ORDER BY linguagem;');

    //execução da transação
    try{
        $conexao->beginTransaction();
        $sql_1->execute();

        while ($dados = $sql_1->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT)){
          $retorno[] = $dados;
        }

        $conexao->commit();

    }catch(PDOexception $err){
        $conexao->rollBack();
        return $err->getMessage();
    }
    return $retorno;
  }

//########################### Busca dados no banco ###########################
  public function DAO_busca_detalhes_repositorios($id){
      //instancia da classe db_acess
      $banco = new db_acess();
      //abre conexao com o banco
      $conexao = $banco->conectar();

      //variável para armazenar os resultados
      $retorno;

      //SQL para gravar dados no banco
      $sql_1 = $conexao->prepare('SELECT * FROM repositorios WHERE id = :id;');
      $sql_1->bindParam(':id', $id);

      //execução da transação
      try{
          $conexao->beginTransaction();
          $sql_1->execute();

          $retorno = $sql_1->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT);

          $conexao->commit();

      }catch(PDOexception $err){
          $conexao->rollBack();
          return $err->getMessage();
      }
      return $retorno;
    }


//########################### Apaga dados no banco ###########################
  public function DAO_apaga_repositorios(){
      //instancia da classe db_acess
      $banco = new db_acess();
      //abre conexao com o banco
      $conexao = $banco->conectar();

      //SQL para gravar dados no banco
      $sql_1 = $conexao->prepare('DELETE FROM repositorios WHERE id = :id;');
      $sql_1->bindParam(':id', $id);

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

}
