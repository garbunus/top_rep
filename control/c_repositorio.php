<?php

require_once('../model/repositorio.php');
//recebe opção e argumentos via POST
$opt = $_POST['opcao'];

//opção de execução
switch ($opt) {
  case '1':
    $repo = new repositorios;
    $resultado = $repo->grava_repositorio($_POST['nome'], $_POST['descricao'], $_POST['forks'], $_POST['id'], $_POST['linguagem'], $_POST['url'], $_POST['criado_em']);
    echo json_encode($resultado);

  case '2':
      $repo = new repositorios;
      $resultado = $repo->buscar_repositorios();
      echo json_encode($resultado);
      break;

  case '3':
      $repo = new repositorios;
      $resultado = $repo->busca_detalhes_repositorio($_POST['id']);
      echo json_encode($resultado);
      break;

  case '4':
      $repo = new repositorios;
      $resultado = $repo->apaga_repositorio($_POST['id']);
      echo json_encode($resultado);
      break;

default:
      echo "Opção inválida.";
      break;
}
