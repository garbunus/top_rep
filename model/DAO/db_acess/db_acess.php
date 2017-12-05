<?php

/**
 * Description of db_acess
 * @author Eduardo Garbin - garbunus@gmail.com / 2017
 */

header('Content-Type: text/html; charset=utf8mb4');

class db_acess{

  //extraindo variáveis para acesso no banco de dados
  $url = getenv('JAWSDB_URL');
  $dbparts = parse_url($url);

  $hostname = $dbparts['host'];
  $username = $dbparts['user'];
  $password = $dbparts['pass'];
  $database = ltrim($dbparts['path'],'/');



    private $DSN = "mysql:host=".$hostname."; dbname=".$databse."; charset=utf8mb4"; // charset=utf8
    private $usuario = $username;
    private $senhaMagica = $password;


    //método "mágico" de configuração das variáveis da classe
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }

    //método "mágico" de retorno do valor das variáveis da classe
    public function __get($atributo) {
        return $this->$atributo;
    }


    //função que retorna uma conexão com o banco de dados da aplicação EFAC
    public function conectar() {
        //criação da conexão
        try{
                $conexao = new PDO($this->DSN, $this->usuario, $this->senhaMagica);
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $conexao;

        //captura algum erro
        } catch (PDOException $err){
                echo 'OPS! Ocorreu o erro: ' . $err->getMessage();
        }

    }


}
