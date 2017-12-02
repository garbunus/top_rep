<?php

require_once("db_acess/db_acess.php");

class DAO_repositorio{

//########################### Grava dados no banco ###########################
  public function DAO_gravar_repositorio($id, $nome, $linguagem, $descricao, $html_url, $url, $criado_em, $forks){
    //instancia da classe db_acess
    $banco = new db_acess();
    //abre conexao com o banco
    $conexao = $banco->conectar();

    //SQL para gravar dados no banco
    $sql_1 = $conexao->prepare('INSERT INTO repositorios (id, nome, descricao, forks, linguagem, html_url, url, criado_em) VALUES (:id, :nome, :descricao, :forks, :linguagem, :html, :url, :criado_em),');
    $sql_1->bindParam(':nome', $nome);
    $sql_1->bindParam(':descricao', $desricao);
    $sql_1->bindParam(':forks', $forks);
    $sql_1->bindParam(':id', $id);
    $sql_1->bindParam(':linguagem', $linguagem);
    $sql_1->bindParam(':url', $url);
    $sql_1->bindParam(':html', $html_url);
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
  public function DAO_buscar_repositorios(){
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
  public function DAO_buscar_detalhes_repositorio($id){
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
  public function DAO_apagar_repositorio(){
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
